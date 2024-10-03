<?php
    require_once("../../config/config.php");
    require_once("../../config/function.php");
    $title = 'QUẢN LÝ THÀNH VIÊN | '.$CMSNAV->site('tenweb');
    require_once(__DIR__."/../../includes/login-admin.php");
    require_once(__DIR__."/Header.php");
    require_once(__DIR__."/Sidebar.php");
    require_once(__DIR__."/../../includes/checkLicense.php");
?>

   
    <!-- Theme style -->
    <!--<link rel="stylesheet" href="<?=BASE_URL('template/');?>dist/css/info">-->

    
    

    <main class="app-main"> <div class="wrapper"> <div class="page"> <div class="page-inner"> <div class="page-section">  
<style>.info-box{box-shadow:0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);border-radius:.25rem;background:#fff;display:-ms-flexbox;display:flex;margin-bottom:1rem;min-height:80px;padding:.5rem;position:relative}.info-box .progress{background-color:rgba(0,0,0,.125);height:2px;margin:5px 0}.info-box .progress .progress-bar{background-color:#fff}.info-box .info-box-icon{border-radius:.25rem;-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;font-size:1.875rem;-ms-flex-pack:center;justify-content:center;text-align:center;width:70px}.info-box .info-box-icon>img{max-width:100%}.info-box .info-box-content{-ms-flex:1;flex:1;padding:5px 10px}.info-box .info-box-number{display:block;font-weight:700}.info-box .info-box-text,.info-box .progress-description{display:block;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.info-box .info-box .bg-gradient-primary,.info-box .info-box .bg-primary{color:#fff}.info-box .info-box .bg-gradient-primary .progress-bar,.info-box .info-box .bg-primary .progress-bar{background-color:#fff}.info-box .info-box .bg-gradient-secondary,.info-box .info-box .bg-secondary{color:#fff}.info-box .info-box .bg-gradient-secondary .progress-bar,.info-box .info-box .bg-secondary .progress-bar{background-color:#fff}.info-box .info-box .bg-gradient-success,.info-box .info-box .bg-success{color:#fff}.info-box .info-box .bg-gradient-success .progress-bar,.info-box .info-box .bg-success .progress-bar{background-color:#fff}.info-box .info-box .bg-gradient-info,.info-box .info-box .bg-info{color:#fff}.info-box .info-box .bg-gradient-info .progress-bar,.info-box .info-box .bg-info .progress-bar{background-color:#fff}.info-box .info-box .bg-gradient-warning,.info-box .info-box .bg-warning{color:#1f2d3d}.info-box .info-box .bg-gradient-warning .progress-bar,.info-box .info-box .bg-warning .progress-bar{background-color:#1f2d3d}.info-box .info-box .bg-danger,.info-box .info-box .bg-gradient-danger{color:#fff}.info-box .info-box .bg-danger .progress-bar,.info-box .info-box .bg-gradient-danger .progress-bar{background-color:#fff}.info-box .info-box .bg-gradient-light,.info-box .info-box .bg-light{color:#1f2d3d}.info-box .info-box .bg-gradient-light .progress-bar,.info-box .info-box .bg-light .progress-bar{background-color:#1f2d3d}.info-box .info-box .bg-dark,.info-box .info-box .bg-gradient-dark{color:#fff}.info-box .info-box .bg-dark .progress-bar,.info-box .info-box .bg-gradient-dark .progress-bar{background-color:#fff}.info-box .info-box-more{display:block}.info-box .progress-description{margin:0}@media (min-width:768px){.col-lg-2 .info-box .progress-description,.col-md-2 .info-box .progress-description,.col-xl-2 .info-box .progress-description{display:none}.col-lg-3 .info-box .progress-description,.col-md-3 .info-box .progress-description,.col-xl-3 .info-box .progress-description{display:none}}@media (min-width:992px){.col-lg-2 .info-box .progress-description,.col-md-2 .info-box .progress-description,.col-xl-2 .info-box .progress-description{font-size:.75rem;display:block}.col-lg-3 .info-box .progress-description,.col-md-3 .info-box .progress-description,.col-xl-3 .info-box .progress-description{font-size:.75rem;display:block}}@media (min-width:1200px){.col-lg-2 .info-box .progress-description,.col-md-2 .info-box .progress-description,.col-xl-2 .info-box .progress-description{font-size:1rem;display:block}.col-lg-3 .info-box .progress-description,.col-md-3 .info-box .progress-description,.col-xl-3 .info-box</style>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý thành viên</h1>
                </div>
                <div class="col-sm-6">
                    <button class="float-right btn btn-danger" type="button" onclick="rsTotalMoney()"><i class="fas fa-funnel-dollar mr-1"></i>RESET TOP NẠP</button>
                </div>
            </div>
        </div>
    </section>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Tổng thành viên</span>
                            <span class="info-box-number"><?=format_cash($CMSNAV->num_rows("SELECT * FROM `users` "));?>
                                thành viên</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-money-bill-alt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Số dư thành viên</span>
                            <span
                                class="info-box-number"><?=format_cash($CMSNAV->get_row("SELECT SUM(`money`) FROM `users` ")['SUM(`money`)']);?></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user-cog"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Staff</span>
                            <span class="info-box-number">Admin:
                                <?=format_cash($CMSNAV->num_rows("SELECT * FROM `users` WHERE `level` = 'admin' "));?> / CTV:
                                <?=format_cash($CMSNAV->num_rows("SELECT * FROM `users` WHERE `ctv` = 1 "));?></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-lock"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Tài khoản bị vô hiệu hoá</span>
                            <span
                                class="info-box-number"><?=format_cash($CMSNAV->num_rows("SELECT * FROM `users` WHERE `banned` = 1 "));?>
                                tài khoản</span>
                        </div>
                    </div>
                </div>

    <section class="col-lg-12 connectedSortable">
                    <div class="card card-primary card-outline">
                        <div class="card-header ">
                            <h3 class="card-title">
                                <i class="fas fa-users mr-1"></i>
                        <h3 class="card-title">DANH SÁCH THÀNH VIÊN</h3>
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
                                        <th>ID</th>
                                        <th>USERNAME</th>
                                        <th>MONEY</th>
                                        <th>TOTAL MONEY</th>
                                        <th>CREATEDATE</th>
                                        <th>CTV CÀY THUÊ</th>
                                        <th>CTV BÁN ACC</th>
                                        <th>STATUS</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach($CMSNAV->get_list(" SELECT * FROM `users` WHERE `username` IS NOT NULL ORDER BY id DESC ") as $row){
                                    ?>
                                    <tr>
                                        <td><?=$row['id'];?></td>
                                        <td><?=$row['username'];?></td>
                                        <td><?=format_cash($row['money']);?></td>
                                        <td><?=format_cash($row['total_money']);?></td>
                                        <td><span class="badge badge-dark"><?=$row['createdate'];?></span></td>
                                        <td><?=display_ctv($row['ctv']);?></td>
                                        <td><?=display_ctvacc($row['ctvacc']);?></td>
                                        <td><?=display_banned($row['banned']);?></td>
                                        <td>
                                            <a type="button" href="<?=BASE_URL('Admin/User/Edit/');?><?=$row['id'];?>"
                                                class="btn btn-primary"><i class="fas fa-edit"></i>
                                                <span>EDIT</span></a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>


<script type="text/javascript">
function rsTotalMoney() {
    cuteAlert({
        type: "question",
        title: "XÁC NHẬN THAY ĐỔI",
        message: "Bạn có chắc chắn muốn đặt lại top nap tiền không ?",
        confirmText: "Đồng Ý",
        cancelText: "Hủy"
    }).then((e) => {
        if (e) {
            $.ajax({
                url: "<?=BASE_URL("assets/ajaxs/admin/rsTotalMoney.php");?>",
                method: "POST",
                dataType: "JSON",
                data: {
                    action: true
                },
                success: function(respone) {
                    if (respone.status == 'success') {
                        cuteToast({
                            type: "success",
                            message: respone.msg,
                            timer: 5000
                        });
                        location.reload();
                    } else {
                        cuteAlert({
                            type: "error",
                            title: "Error",
                            message: respone.msg,
                            buttonText: "Okay"
                        });
                    }
                },
                error: function() {
                    alert(html(response));
                    location.reload();
                }
            });
        }
    })
}
</script>
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