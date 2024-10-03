<?php
    require_once("../../config/config.php");
    require_once("../../config/function.php");
    $title = 'DASHBROAD | '.$CMSNAV->site('tenweb');
    require_once(__DIR__."/../../includes/login-admin.php");
    require_once(__DIR__."/Header.php");
    require_once(__DIR__."/Sidebar.php");
    require_once(__DIR__."/../../includes/checkLicense.php");
?>

<main class="app-main"> 
<div class="wrapper"> 
<div class="page"> 
<div class="page-inner"> 
<header class="page-title-bar"> 
<div class="d-flex flex-column flex-md-row"> 
<div class="col-lg-12"> 
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    
                
    </section>



<div class="page-section"> <div class="section-block"> <div class="block-header"> <h4>THỐNG KÊ TOÀN BỘ</h4> </div> <div class="metric-row"> 

<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">THÀNH VIÊN</h2> <p class="metric-value h3"> <sub><i class="fa-solid fa-users"></i></sub> <span class="value"><?=$CMSNAV->num_rows("SELECT * FROM `users` ");?></span> </p> </a> </div> 
<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">SỐ DƯ THÀNH VIÊN</h2> <p class="metric-value h3"> <sub><i class="fa-solid fa-code-fork"></i></sub> <span class="value"><?=format_cash($CMSNAV->get_row("SELECT SUM(`money`) FROM `users` ")['SUM(`money`)']);?></span> </p> </a> </div> 
<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">THÀNH VIÊN ĐĂNG KÍ HÔM NAY</h2> <p class="metric-value h3"> <sub><i class="fas fa-users"></i></sub> <span class="value"><?=format_cash($CMSNAV->num_rows("SELECT * FROM `users` WHERE `createdate` >= DATE(NOW()) AND `createdate` < DATE(NOW()) + INTERVAL 1 DAY "));?><small>user</small></span> </p> </a> </div> 
<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">TỔNG SỐ TIỀN TÀI KHOẢN ĐÃ BÁN</h2> <p class="metric-value h3"> <sub><i class="fa fa-tasks"></i></sub> <span class="value"><?=format_cash($CMSNAV->get_row("SELECT SUM(`money`) FROM `accounts` WHERE `username` IS NOT NULL ")['SUM(`money`)']);?>đ</span> </p> </a> </div> 
<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">TÀI KHOẢN ĐANG BÁN</h2> <p class="metric-value h3"> <sub><i class="fa fa-tasks"></i></sub> <span class="value"><?=format_cash($CMSNAV->num_rows("SELECT * FROM `accounts` WHERE `username` IS NULL "));?></span> </p> </a> </div> 
<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">TÀI KHOẢN ĐÃ BÁN</h2> <p class="metric-value h3"> <sub><i class="fa fa-tasks"></i></sub> <span class="value"><?=format_cash($CMSNAV->num_rows("SELECT * FROM `accounts` WHERE `username` IS NOT NULL "));?></span> </p> </a> </div> 
<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">DOANH THU BÁN TÀI KHOẢN HÔM NAY</h2> <p class="metric-value h3"> <sub><i class="fa fa-tasks"></i></sub> <span class="value"><?=format_cash($CMSNAV->get_row("SELECT SUM(`money`) FROM `accounts` WHERE `updatedate` >= DATE(NOW()) AND `updatedate` < DATE(NOW()) + INTERVAL 1 DAY ")['SUM(`money`)']);?>đ</span> </p> </a> </div> 
<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">TÀI KHOẢN ĐÃ BÁN ĐƯỢC HÔM NAY</h2> <p class="metric-value h3"> <sub><i class="fa fa-tasks"></i></sub> <span class="value"><?=format_cash($CMSNAV->num_rows("SELECT * FROM `accounts` WHERE `updatedate` >= DATE(NOW()) AND `updatedate` < DATE(NOW()) + INTERVAL 1 DAY "));?></span> </p> </a> </div> 
<!--CÀY THUÊ-->
<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">TỔNG SỐ ĐƠN CÀY THUÊ ĐANG CHỜ XỬ LÝ</h2> <p class="metric-value h3"> <sub><i class="fas fa-tasks"></i></sub> <span class="value"><?=$CMSNAV->num_rows("SELECT * FROM `orders_caythue` WHERE `status` = 'xuly' ");?><small></small></span> </p> </a> </div> 
<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">TỔNG SỐ ĐƠN CÀY THUÊ ĐANG CÀY</h2> <p class="metric-value h3"> <sub><i class="fas fa-tasks"></i></sub> <span class="value"><?=$CMSNAV->num_rows("SELECT * FROM `orders_caythue` WHERE `status` = 'dangcay' ");?><small></small></span> </p> </a> </div> 
<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">TỔNG SỐ ĐƠN CÀY THUÊ ĐÃ HOÀN TẤT</h2> <p class="metric-value h3"> <sub><i class="fas fa-tasks"></i></sub> <span class="value"><?=$CMSNAV->num_rows("SELECT * FROM `orders_caythue` WHERE `status` = 'hoantat' ");?><small></small></span> </p> </a> </div> 
<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">TỔNG SỐ ĐƠN CÀY THUÊ BỊ HỦY</h2> <p class="metric-value h3"> <sub><i class="fas fa-tasks"></i></sub> <span class="value"><?=$CMSNAV->num_rows("SELECT * FROM `orders_caythue` WHERE `status` = 'huy' ");?><small></small></span> </p> </a> </div> 
<!--CÀY THUÊ-->

<!--ROBUX-->
<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">TỔNG SỐ ĐƠN ROBUX ĐANG CHỜ XỬ LÝ</h2> <p class="metric-value h3"> <sub><i class="fas fa-tasks"></i></sub> <span class="value"><?=$CMSNAV->num_rows("SELECT * FROM `orders_robux` WHERE `status` = 'xuly' ");?><small></small></span> </p> </a> </div> 
<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">TỔNG SỐ ĐƠN ROBUX ĐANG NHẬN</h2> <p class="metric-value h3"> <sub><i class="fas fa-tasks"></i></sub> <span class="value"><?=$CMSNAV->num_rows("SELECT * FROM `orders_robux` WHERE `status` = 'dangcay' ");?><small></small></span> </p> </a> </div> 
<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">TỔNG SỐ ĐƠN ROBUX ĐÃ HOÀN TẤT</h2> <p class="metric-value h3"> <sub><i class="fas fa-tasks"></i></sub> <span class="value"><?=$CMSNAV->num_rows("SELECT * FROM `orders_robux` WHERE `status` = 'hoantat' ");?><small></small></span> </p> </a> </div> 
<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">TỔNG SỐ ĐƠN ROBUX BỊ HỦY</h2> <p class="metric-value h3"> <sub><i class="fas fa-tasks"></i></sub> <span class="value"><?=$CMSNAV->num_rows("SELECT * FROM `orders_robux` WHERE `status` = 'huy' ");?><small></small></span> </p> </a> </div> 
<!--ROBUX-->

<!--GAMEPASS-->
<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">TỔNG SỐ ĐƠN GAMEPASS ĐANG CHỜ XỬ LÝ</h2> <p class="metric-value h3"> <sub><i class="fas fa-tasks"></i></sub> <span class="value"><?=$CMSNAV->num_rows("SELECT * FROM `orders_gamepass` WHERE `status` = 'xuly' ");?><small></small></span> </p> </a> </div> 
<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">TỔNG SỐ ĐƠN GAMEPASS ĐANG CÀY</h2> <p class="metric-value h3"> <sub><i class="fas fa-tasks"></i></sub> <span class="value"><?=$CMSNAV->num_rows("SELECT * FROM `orders_gamepass` WHERE `status` = 'dangcay' ");?><small></small></span> </p> </a> </div> 
<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">TỔNG SỐ ĐƠN GAMEPASS ĐÃ HOÀN TẤT</h2> <p class="metric-value h3"> <sub><i class="fas fa-tasks"></i></sub> <span class="value"><?=$CMSNAV->num_rows("SELECT * FROM `orders_gamepass` WHERE `status` = 'hoantat' ");?><small></small></span> </p> </a> </div> 
<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">TỔNG SỐ ĐƠN GAMEPASS BỊ HỦY</h2> <p class="metric-value h3"> <sub><i class="fas fa-tasks"></i></sub> <span class="value"><?=$CMSNAV->num_rows("SELECT * FROM `orders_gamepass` WHERE `status` = 'huy' ");?><small></small></span> </p> </a> </div> 
<!--GAMEPASS-->
<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">TỔNG SỐ TIỀN NẠP HÔM NAY</h2> <p class="metric-value h3"> <sub><i class="fas fa-money-check-alt"></i></sub> <span class="value"><?=format_cash(
$CMSNAV->get_row("SELECT SUM(`amount`) FROM `bank_auto` WHERE `deletedate` IS NULL AND `time` >= DATE(NOW()) AND `time` < DATE(NOW()) + INTERVAL 1 DAY ")['SUM(`amount`)'] + 
$CMSNAV->get_row("SELECT SUM(`amount`) FROM `momo` WHERE `deletedate` IS NULL AND `time` >= DATE(NOW()) AND `time` < DATE(NOW()) + INTERVAL 1 DAY ")['SUM(`amount`)'] +
$CMSNAV->get_row("SELECT SUM(`thucnhan`) FROM `cards` WHERE `deletedate` IS NULL AND `status` = 'thanhcong' AND `createdate` >= DATE(NOW()) AND `createdate` < DATE(NOW()) + INTERVAL 1 DAY ")['SUM(`thucnhan`)']);?><small></small></span> </p> </a> </div> 
<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">TỔNG TIỀN THẺ CÀO</h2> <p class="metric-value h3"> <sub><i class="fas fa-money-check-alt"></i></sub> <span class="value"><?=format_cash($CMSNAV->get_row("SELECT SUM(`thucnhan`) FROM `cards` WHERE `deletedate` IS NULL AND `status` = 'thanhcong'")['SUM(`thucnhan`)']);?>đ<small></small></span> </p> </a> </div> 
<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">TỔNG THẺ CÀO HỢP LỆ</h2> <p class="metric-value h3"> <sub><i class="fas fa-money-check-alt"></i></sub> <span class="value"><?=format_cash($CMSNAV->num_rows("SELECT * FROM `cards` WHERE `status` = 'thanhcong' "));?><small></small></span> </p> </a> </div> 
<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">TỔNG THẺ CÀO KHÔNG HỢP LỆ</h2> <p class="metric-value h3"> <sub><i class="fas fa-money-check-alt"></i></sub> <span class="value"><?=format_cash($CMSNAV->num_rows("SELECT * FROM `cards` WHERE `status` = 'thatbai' "));?><small></small></span> </p> </a> </div> 

 </div>
 
    
            
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /.content -->
</div>











<script>
$(function() {
    $("#datatable").DataTable({
        "responsive": true,
        "autoWidth": false,
    });
});
</script>

<?php 
    require_once("../../public/admin/Footer.php");
?>