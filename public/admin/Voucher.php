<?php
    require_once("../../config/config.php");
    require_once("../../config/function.php");
    $title = 'QUẢN LÝ CHUYÊN MỤC GAMEPASS | '.$CMSNAV->site('tenweb');
    require_once(__DIR__."/../../includes/login-admin.php");
    require_once(__DIR__."/Header.php");
    require_once(__DIR__."/Sidebar.php");
    require_once(__DIR__."/../../includes/checkLicense.php");
?>

<?php
if(isset($_POST['ThemVoucher']) && $getUser['level'] == 'admin' )
{
    if($CMSNAV->site('status_demo') == 'ON')
    {
        admin_msg_warning("Chức năng này không khả dụng trên trang web DEMO!", "", 2000);
    }
    $CMSNAV->insert("magiamgia", array(
        'code' => check_string($_POST['code']),
        'solan' => check_string($_POST['solan']),
        'giam' => check_string($_POST['giam']),
        'dichvu' => check_string($_POST['dichvu'])
    ));
    admin_msg_success("Thêm thành công", '', 500);
}

?>

<main class="app-main"> <div class="wrapper"> <div class="page"> <div class="page-inner"> <div class="page-section">
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Mã giảm giá</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">THÊM MÃ GIẢM GIÁ</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Mã giảm giá</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="code" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Số lượt sử dụng</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="solan" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">% Giảm giá </label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="giam" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Dịch vụ</label>
                                <div class="col-sm-9">
                                    <select class="form-control show-tick" name="dichvu" id="dichvu" required>
                                        <option value="caythue">Cày Thuê</option>
                                        <option value="robux">Robux</option>
                                        <option value="gamepass">GamePass</option>
                                        <option value="muaacc">Mua Acc</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" name="ThemVoucher" class="btn btn-primary btn-block">
                                <span>THÊM NGAY</span></button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">DANH SÁCH MÃ GIẢM GIÁ</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable1" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Mã giảm giá</th>
                                        <th>Số lần sử dụng</th>
                                        <th>% Giảm giá</th>
                                        <th>Dịch vụ</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach($CMSNAV->get_list(" SELECT * FROM `magiamgia` ORDER BY id DESC ") as $row){
                                    ?>
                                    <tr>
                                        <td><?=$i++;?></td>
                                        <td><?=$row['code'];?></td>
                                        <td><?=$row['solan'];?></td>
                                        <td><?=$row['giam'];?>%</td>
                                        <td><?=displayvoucher($row['dichvu']);?></td>
                                        <td>
                                            <a class="btn btn-primary" href="<?=BASE_URL('public/admin/EditVoucher.php?id=');?><?=$row['id'];?>"><i
                                                    class="fas fa-edit"></i>
                                                <span>EDIT</span></a>
                                            <button class="btn btn-danger delete" data-id="<?=$row['id'];?>"
                                                data-name="<?=$row['code'];?>"><i class="fas fa-trash"></i>
                                                <span>DELETE</span></button>
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



 
<script>
$(function() {
    $("#datatable").DataTable({
        "responsive": true,
        "autoWidth": false,
    });
    $("#datatable1").DataTable({
        "responsive": false,
        "autoWidth": false,
    });
    $("#datatable2").DataTable({
        "responsive": true,
        "autoWidth": false,
    });
});
</script>
<script type="text/javascript">
$(".delete").on("click", function() {
    cuteAlert({
        type: "question",
        title: "Xác Nhận Xóa Chuyên Mục",
        message: "Bạn có chắc chắn xóa chuyên mục (" + $(this).data('name') + ") không ?",
        confirmText: "Đồng Ý",
        cancelText: "Hủy"
    }).then((e) => {
        if (e) {
            $.ajax({
                url: "<?=BASE_URL("assets/ajaxs/admin/delete-voucher.php");?>",
                method: "POST",
                dataType: "JSON",
                data: {
                    id: $(this).data('id')
                },
                success: function(respone) {
                    if (respone.status == 'success') {
                        cuteToast({
                            type: "success",
                            message: respone.msg,
                            timer: 3000
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
});
</script>


<?php 
    require_once(__DIR__."/Footer.php");
?>