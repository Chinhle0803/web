<?php 
    require_once("../../config/config.php");
    require_once("../../config/function.php");

    if(isset($_POST['id']))
    {
        $id = check_string($_POST['id']);
        $magiamgia = check_string($_POST['magiamgia']);
        if(empty($_SESSION['username']))
        {
            msg_error2("Vui lòng đăng nhập để thanh toán !");
        }
        $row = $CMSNAV->get_row(" SELECT * FROM `accounts` WHERE `id` = '$id'  ");
        if(!$row)
        {
            msg_error2("Tài khoản không tồn tại trong hệ thống.");
        }
        if($row['username'] != NULL)
        {
            msg_error2("Tài khoản này đã bán, vui lòng tìm tài khoản khác.");
        }
        $sotien = $row['money'];
        if($magiamgia){
             $checkmagiamgia = $CMSNAV->get_row("SELECT * FROM `magiamgia` WHERE `code` = '$magiamgia' AND `solan` > '0'");
            if($checkmagiamgia){
                if($checkmagiamgia['dichvu'] == 'muaacc'){
                    $sotien = $row['money'] - ($row['money'] * $checkmagiamgia['giam'] / 100);
                }else{
                     msg_error2("Không có% giảm giá");
                }
            }else{
                msg_error2("Mã giảm giá của bạn không tồn tại hoặc hết lượt dùng");
                 $sotien = $row['money'] - ($row['money'] * $checkmagiamgia['giam'] / 100);
            }
        }
        if($sotien > $getUser['money'])
        {
            msg_error2("Số dư không đủ vui lòng nạp thêm.");
        }
        $isMoney = $CMSNAV->tru("users", "money", $sotien, " `username` = '".$getUser['username']."' ");
        if($isMoney)
        {
            /* GHI LOG DÒNG TIỀN */
            $CMSNAV->insert("dongtien", array(
                'sotientruoc'   => $getUser['money'] ,
                'sotienthaydoi' => $sotien,
                'sotiensau'     => $getUser['money'] - $sotien,
                'thoigian'      => gettime(),
                'noidung'       => 'Mua tài khoản (#'.$row['id'].')',
                'username'      => $getUser['username']
            ));

            $CMSNAV->update("accounts", [
                'username'      => $getUser['username'],
                'updatedate'    => gettime(),
                'time'          => time()
            ], " `id` = '".$row['id']."' ");

            /* CỘNG TIỀN NGƯỜI BÁN */
            $isCongTien= $CMSNAV->cong("users", "money", $sotien, " `username` = '".$row['receiver']."' ");
            if($isCongTien)
            {
                /* GHI LOG DÒNG TIỀN */
                $CMSNAV->insert("dongtien", array(
                    'sotientruoc'   => getUser($row['receiver'], 'money') ,
                    'sotienthaydoi' => $sotien,
                    'sotiensau'     => getUser($row['receiver'], 'money'),
                    'thoigian'      => gettime(),
                    'noidung'       => 'Bán tài khoản (#'.$row['id'].')',
                    'username'      => $row['receiver']
                ));
            }
            msg_success("Thanh toán thành công!", BASE_URL("user/history/acc"), 1000);
        }
    }