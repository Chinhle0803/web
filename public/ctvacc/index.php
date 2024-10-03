<?php
    require_once("../../config/config.php");
    require_once("../../config/function.php");
    require_once(__DIR__."/../../includes/login-ctvacc.php");
    $title = 'DASHBROAD | '.$CMSNAV->site('tenweb');
    require_once("../../public/ctvacc/Header.php");
    require_once("../../public/ctvacc/Sidebar.php");
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
<div class="alert alert-secondary has-icon alert-dismissible fade show"> 
<button type="button" class="close" data-dismiss="alert">×</button> 
<div class="alert-icon"> 
<i class="fa-solid fa-flag"></i></div> 

 </div> </div> </div> </header> <div class="page-section"> <div class="section-block"> <div class="block-header"> <h4>THỐNG KÊ DANH MỤC TÀI KHOẢN CỦA BẠN</h4> </div> <div class="metric-row"> 
 
<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">TỔNG SỐ TIỀN TÀI KHOẢN ĐÃ BÁN</h2> <p class="metric-value h3"> <sub><i class="fa fa-tasks"></i></sub> <span class="value"><?=format_cash($CMSNAV->get_row("SELECT SUM(`money`) FROM `accounts` WHERE `username` IS NOT NULL AND `receiver` = '".$getUser['username']."' ")['SUM(`money`)']);?>đ</span> </p> </a> </div> 
<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">TÀI KHOẢN BẠN ĐĂNG ĐANG BÁN</h2> <p class="metric-value h3"> <sub><i class="fa fa-tasks"></i></sub> <span class="value"><?=format_cash($CMSNAV->num_rows("SELECT * FROM `accounts` WHERE `username` IS NULL AND `receiver` = '".$getUser['username']."' "));?>nick</span> </p> </a> </div> 
<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">TÀI KHOẢN BẠN ĐĂNG ĐÃ BÁN</h2> <p class="metric-value h3"> <sub><i class="fa fa-tasks"></i></sub> <span class="value"><?=format_cash($CMSNAV->num_rows("SELECT * FROM `accounts` WHERE `username` IS NOT NULL AND `receiver` = '".$getUser['username']."' "));?>nick</span> </p> </a> </div> 
<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">DOANH THU BÁN TÀI KHOẢN CỦA BẠN HÔM NAY</h2> <p class="metric-value h3"> <sub><i class="fa fa-tasks"></i></sub> <span class="value"><?=format_cash($CMSNAV->get_row("SELECT SUM(`money`) FROM `accounts` WHERE `updatedate` >= DATE(NOW()) AND `updatedate` < DATE(NOW()) + INTERVAL 1 DAY AND `receiver` = '".$getUser['username']."' ")['SUM(`money`)']);?>đ</span> </p> </a> </div> 
<div class="col-lg-3"><a class="metric card-metric metric-bordered align-items-center"> <h2 class="metric-label">TÀI KHOẢN BẠN ĐĂNG ĐÃ BÁN ĐƯỢC HÔM NAY</h2> <p class="metric-value h3"> <sub><i class="fa fa-tasks"></i></sub> <span class="value"><?=format_cash($CMSNAV->num_rows("SELECT * FROM `accounts` WHERE `updatedate` >= DATE(NOW()) AND `updatedate` < DATE(NOW()) + INTERVAL 1 DAY AND `receiver` = '".$getUser['username']."' "));?>nick</span> </p> </a> </div> 

 </div>
 

            <div class="col-md-13">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">THỐNG KÊ DÒNG TIỀN</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>USERNAME</th>
                                        <th>SỐ TIỀN TRƯỚC</th>
                                        <th>SỐ TIỀN THAY ĐỔI</th>
                                        <th>SỐ TIỀN HIỆN TẠI</th>
                                        <th>THỜI GIAN</th>
                                        <th>NỘI DUNG</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach($CMSNAV->get_list(" SELECT * FROM `dongtien` ORDER BY id DESC ") as $row){
                                    ?>
                                    <tr>
                                        <td><?=$i++;?></td>
                                        <td><a href="<?=BASE_URL('Admin/User/Edit/'.$CMSNAV->getUser($row['username'])['id']);?>"><?=$row['username'];?></a></td>
                                        <td><?=format_cash($row['sotientruoc']);?></td>
                                        <td><?=format_cash($row['sotienthaydoi']);?></td>
                                        <td><?=format_cash($row['sotiensau']);?></td>
                                        <td><span class="badge badge-dark"><?=$row['thoigian'];?></span></td>
                                        <td><?=$row['noidung'];?></td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>USERNAME</th>
                                        <th>SỐ TIỀN TRƯỚC</th>
                                        <th>SỐ TIỀN THAY ĐỔI</th>
                                        <th>SỐ TIỀN HIỆN TẠI</th>
                                        <th>THỜI GIAN</th>
                                        <th>NỘI DUNG</th>
                                    </tr>
                                </tfoot>
                            </table>
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
    require_once("../../public/ctvacc/Footer.php");
?>