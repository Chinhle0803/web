<?php
    require_once("../../config/config.php");
    require_once("../../config/function.php");
    $title = 'QUẢN LÝ NHÓM | '.$CMSNAV->site('tenweb');
    require_once(__DIR__."/../../includes/login-admin.php");
    require_once(__DIR__."/Header.php");
    require_once(__DIR__."/Sidebar.php");
    require_once(__DIR__."/../../includes/checkLicense.php");
?>
<main class="app-main"> <div class="wrapper"> <div class="page"> <div class="page-inner"> <div class="page-section">  
<style>
.zoom {
  transition: transform .2s; /* Animation */
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>
<!-- Select2 -->
<link rel="stylesheet" href="' . BASE_URL('template/addons-css/') . 'select2.min.css">
<link rel="stylesheet" href="' . BASE_URL('template/addons-css') . 'select2-bootstrap4.min.css">
<!-- Select2 -->
<script src="' . BASE_URL('template/addons-css') . 'select2.full.min.js"></script>
<script>
$(function () {
    $(".select2").select2()
    $(".select2bs4").select2({
        theme: "bootstrap4"
    });
});
</script>
<!-- bs-custom-file-input -->
<script src="' . BASE_URL('template/addons-css') . 'bs-custom-file-input.min.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
<style>
    .truncate {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
</style>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Cửa hàng Addons</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= BASE_URL('admin/'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Cửa hàng Addons</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <span>Quý khách liên hệ ngay cho CMSNT thông qua Zalo <a target="_blank" href="https://zalo.me/0855569336">0855569336</a> để được hỗ trợ chi tiết hơn về Addons.</span>
            </div>
            <div class="row">
                <?php foreach ($CMSNAV->get_list("SELECT * FROM `addons` ORDER BY createdate DESC ") as $addon) : ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="zoom">
                                <?php if (checkAddon($addon['id']) == true) : ?>
                                    <div class="ribbon-wrapper ribbon-lg">
                                        <div class="ribbon bg-success text-lg">
                                            Đã mua
                                        </div>
                                    </div>
                                <?php endif ?>
                                <img class="card-img-top" width="300px" height="250px" src="<?= $addon['image']; ?>" alt="<?= $addon['name']; ?>">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title"><b><?= $addon['name']; ?></b></h3><br>
                                <p class="card-text"><?= $addon['description']; ?></p>
                                <button type="button" class="btn btn-outline-danger float-right btn-block">GIÁ:
                                    <?= format_cash($addon['price']); ?>đ</button>
                                <?php if (checkAddon($addon['id']) == false) : ?>
                                    <button type="button" onclick="modalAddon(`<?= $addon['id']; ?>`,`<?= $addon['name']; ?>`, `<?= format_cash($addon['price']); ?>` )" class="btn btn-primary float-left btn-block">MUA NGAY</button>
                                <?php else : ?>
                                    <button type="button" disabled class="btn btn-info float-left btn-block">ĐANG SỬ
                                        DỤNG</button>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalAddon" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">KÍCH HOẠT ADDON</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-window-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-3">
                    <label>Tên addon:</label>
                    <input type="text" class="form-control" id="name" readonly />
                </div>
                <div class="form-group mb-3">
                    <label>Giá:</label>
                    <input type="text" class="form-control" id="price" readonly />
                </div>
                <div class="form-group mb-3">
                    <label>Purchase key:</label>
                    <input type="text" class="form-control form-control-solid" placeholder="Nhập mã kích hoạt addon" id="purchase_key" />
                    <input type="hidden" value="" readonly class="form-control" id="modal-id">
                    <input type="hidden" value="" readonly class="form-control" id="price">
                    <input class="form-control" type="hidden" id="token" value="<?=$getUser['token'];?>">
                    <i>Vui lòng liên hệ <a href="https://zalo.me/0855569336" target="_blank">Zalo</a> để mua addon
                        này.</i>
                </div>
                <div class="text-center mb-3">
                    <button type="button" id="btnBuy" onclick="buyAddon()" class="btn btn-primary btn-block">KÍCH HOẠT</span></button>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function modalAddon(id, name, price) {
        $("#modal-id").val(id);
        $("#price").val(price);
        $("#name").val(name);
        $("#modalAddon").modal();
    }
</script>

<?php 
    require_once(__DIR__."/Footer.php");
?>