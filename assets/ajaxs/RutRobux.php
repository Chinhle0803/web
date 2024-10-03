<?php 
    require_once("../../config/config.php");
    require_once("../../config/function.php");
    require_once('../../class/class.smtp.php');
    require_once('../../class/PHPMailerAutoload.php');
    require_once('../../class/class.phpmailer.php');

    if($_POST['type'] == 'Order')
    {
        if(empty($_SESSION['username']))
        {
            msg_error2("Vui lòng đăng nhập để rút robux !");
        }
        $tk = check_string($_POST['tk']);
        $mk = check_string($_POST['mk']);
        $ghichu = check_string($_POST['ghichu']);
        $robux = check_string($_POST['robux']);
        $sorb = check_string($_POST['sorb']);
        
        if(empty($sorb))
        {
            msg_error2("Vui lòng nhập số robux");
        }
        if($sorb < 10)
        {
            msg_error2("Số robux tối thiếu rút được là 10R$");
        }
        if(empty($tk))
        {
            msg_error2("Vui lòng nhập link gamepass");
        }
        if(empty($mk))
        {
            msg_error2("Vui lòng nhập mật khẩu đăng nhập game");
        }
        if($robux > $getUser['robux'])
        {
            msg_error2("Số robux không đủ vui lòng quay thêm");
        }
        $isrobux = $CMSNAV->tru("users", "robux", $robux, " `username` = '".$getUser['username']."' ");
        if($isrobux)
        {
            $isOrder = $CMSNAV->insert("orders_withdraw", [
                'username' => $getUser['username'],
                'dichvu'   => round(+$sorb).'R$',
                'robux'    => $robux,
                'tk'       => $tk,
                'mk'       => $mk,
                'createdate' => gettime(),
                'updatedate' => gettime(),
                'status'     => 'xuly',
                'ghichu'     => $ghichu
            ]);
            if($isOrder)
            {
                /* GHI LOG DÒNG TIỀN */
                $CMSNAV->insert("dongtien", array(
                    'sotientruoc'   => $getUser['robux'] + $robux,
                    'sotienthaydoi' => $robux,
                    'sotiensau'     => $getUser['robux'],
                    'thoigian'      => gettime(),
                    'noidung'       => 'Đặt hàng gói ('.round(+$sorb / 0.7).') R$',
                    'username'      => $getUser['username']
                ));
                msg_success("Thanh toán thành công!", BASE_URL("user/robux"), 1000);
            }
            else
            {
                $CMSNAV->cong("users", "robux", $robux, " `username` = '".$getUser['username']."' ");
                msg_error2("Không thể xử lý giao dịch, vui lòng thử lại");
            }
        }
        else
        {
            msg_error2("Không thể xử lý giao dịch, vui lòng thử lại");
        }
    }