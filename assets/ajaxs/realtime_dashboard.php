<?php 
    require_once("../../config/config.php");
    require_once("../../config/function.php");
    require_once("../../includes/login-admin.php");
    //require_once("../../config/UsageServer.php");

    $data = json_encode([
        
        'total_money'   => format_cash($CMSNAV->get_row("SELECT SUM(`money`) FROM `users` WHERE `money` > 0 ")['SUM(`money`)']).'đ',
        'total_users'   => $CMSNAV->num_rows("SELECT * FROM `users` "),
        'the_hop_le'    => format_cash($CMSNAV->num_rows("SELECT * FROM `cards` WHERE `status` = 'hoantat' ")),
        'tong_tien_the' => format_cash($CMSNAV->get_row("SELECT SUM(`menhgia`) FROM `cards` WHERE `status` = 'hoantat' ")['SUM(`menhgia`)']).'đ',
        'doanh_thu_today'=> format_cash($CMSNAV->get_row("SELECT SUM(`menhgia`) FROM `cards` WHERE `status` = 'hoantat' AND `createdate` >= DATE(NOW()) AND `createdate` < DATE(NOW()) + INTERVAL 1 DAY ")['SUM(`menhgia`)']).'đ',
        'san_luong_today'=> format_cash($CMSNAV->num_rows("SELECT * FROM `cards` WHERE `status` = 'hoantat' AND `createdate` >= DATE(NOW()) AND `createdate` < DATE(NOW()) + INTERVAL 1 DAY ")),

    ]);
    die($data);

?>
