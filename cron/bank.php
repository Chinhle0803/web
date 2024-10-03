<?php
    require_once("../config/config.php");
    require_once("../config/function.php");


    if($CMSNAV->site('api_bank') == '')
    {
        die('Thiếu API');
    }
    if(time() - $CMSNAV->site('check_time_cron_bank') < 10)
    {
        die('Không thể cron vào lúc này!');
    }
    $CMSNAV->update("options", [
        'value' => time()
    ], " `name` = 'check_time_cron_bank' ");
    
    $token = $CMSNAV->site('api_bank');
    $stk = $CMSNAV->site('stk_bank');
    $mk = $CMSNAV->site('mk_bank');
    $result = curl_get("https://api.web2m.com/historyapivcb/$mk/$stk/$token");
    $result = json_decode($result, true);
    if($result['status'] != true)
    {
        die('Lấy dữ liệu thất bại');
    }
    foreach($result['data']['ChiTietGiaoDich'] as $data)
    {
        $des = $data['MoTa'];
        $amount = str_replace(',' ,'', $data['SoTienGhiCo']);
        $tid = $data['SoThamChieu'];
        $id = parse_order_id($des);
        
        $file = @fopen('LogBank.txt', 'a');
        if ($file)
        {
            $data = "tid => $tid description => $des ($id) amount => $amount ".PHP_EOL;
            fwrite($file, $data);
        }
        if ($id)
        {
            $row = $CMSNAV->get_row(" SELECT * FROM `users` WHERE `id` = '$id' ");
            if($row['username'])
            {
                if($CMSNAV->num_rows(" SELECT * FROM `bank_auto` WHERE `tid` = '$tid' ") == 0)
                {
                    /* GHI LOG BANK AUTO */
                    $create = $CMSNAV->insert("bank_auto", array(
                        'tid' => $tid,
                        'description' => $des,
                        'amount' => $amount,
                        'time' => gettime(),
                        'username' => $row['username']
                        ));
                    if ($create)
                    {
                        $real_amount = $amount + $amount * $CMSNAV->site('ck_bank') / 100;
                        $isCheckMoney = $CMSNAV->cong("users", "money", $real_amount, " `username` = '".$row['username']."' ");
                        if($isCheckMoney)
                        {
                            $CMSNAV->cong("users", "total_money", $real_amount, " `username` = '".$row['username']."' ");
                            /* GHI LOG DÒNG TIỀN */
                            $CMSNAV->insert("dongtien", array(
                                'sotientruoc' => $row['money'],
                                'sotienthaydoi' => $real_amount,
                                'sotiensau' => $row['money'] + $real_amount,
                                'thoigian' => gettime(),
                                'noidung' => 'Nạp tiền tự động ngân hàng (Vietcombank | '.$tid.')',
                                'username' => $row['username']
                            ));
                        }
                    }
                }
            }
        }    
    }

