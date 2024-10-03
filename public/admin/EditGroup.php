<?php
    require_once("../../config/config.php");
    require_once("../../config/function.php");
    $title = 'CHỈNH SỬA NHÓM | '.$CMSNAV->site('tenweb');
    require_once(__DIR__."/../../includes/login-admin.php");
    require_once(__DIR__."/Header.php");
    require_once(__DIR__."/Sidebar.php");
    require_once(__DIR__."/../../includes/checkLicense.php");
?>

<?php
if(isset($_GET['id']) && $getUser['level'] == 'admin')
{
    $row = $CMSNAV->get_row(" SELECT * FROM `groups` WHERE `id` = '".check_string($_GET['id'])."'  ");
    if(!$row)
    {
        admin_msg_error("Liên kết không tồn tại", BASE_URL(''), 500);
    }
}
else
{
    admin_msg_error("Liên kết không tồn tại", BASE_URL(''), 0);
}


if(isset($_POST['LuuChuyenMuc']) && $getUser['level'] == 'admin' )
{
    if($CMSNAV->site('status_demo') == 'ON')
    {
        admin_msg_warning("Chức năng này không khả dụng trên trang web DEMO!", "", 2000);
    }
    if(check_img('img') == true)
    {
        $CMSNAV->update("groups", array(
            'img'       => check_string($_POST['img']),
        ), " `id` = '".$row['id']."' ");
    }
    $CMSNAV->update("groups", array(
        'img'       => check_string($_POST['img']),
        'title'     => check_string($_POST['title']),
        'chitiet'   => base64_encode($_POST['chitiet']),
        'display'   => check_string($_POST['display'])
    ), " `id` = '".$row['id']."' ");
    admin_msg_success("Lưu thành công", '', 500);
}

?>

<main class="app-main"> <div class="wrapper"> <div class="page"> <div class="page-inner"> <div class="page-section">
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chỉnh sửa nhóm <?=$row['title'];?></h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">THÊM NHÓM MỚI</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tên nhóm</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="title" value="<?=$row['title'];?>" class="form-control"
                                            required>
                                    </div>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Ảnh mô tả</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="img" class="form-control" required>
                                    </div>
                                    <i>Up ảnh lấy link tại: upanh.1doi1.com</i>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Chi tiết nhóm</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <textarea name="chitiet" class="textarea"><?=base64_decode($row['chitiet']);?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Hiển thị</label>
                                <div class="col-sm-9">
                                    <select class="form-control show-tick" name="display" required>
                                        <option value="<?=$row['display'];?>"><?=$row['display'];?></option>
                                        <option value="SHOW">SHOW</option>
                                        <option value="HIDE">HIDE</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" name="LuuChuyenMuc" class="btn btn-primary btn-block">
                                <span>LƯU NGAY</span></button>
                            <a type="button" href="<?=BASE_URL('Admin/Groups/'.$row['category']);?>"
                                class="btn btn-danger btn-block waves-effect">
                                <span>TRỞ LẠI</span>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">CHI TIẾT DANH MỤC</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <img width="100%" src="<?=BASE_URL($row['img']);?>" />
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>







<?php 
    require_once(__DIR__."/Footer.php");
?>