<?php
    require_once("../../config/config.php");
    require_once("../../config/function.php");
    $title = 'CẤU HÌNH | '.$CMSNAV->site('tenweb');
    require_once(__DIR__."/../../includes/login-admin.php");
    require_once(__DIR__."/Header.php");
    require_once(__DIR__."/Sidebar.php");
    require_once(__DIR__."/../../includes/checkLicense.php");
?>
<?php
if(isset($_POST['btnSaveOption']) && $getUser['level'] == 'admin')
{
    if($CMSNAV->site('status_demo') == 'ON')
    {
        admin_msg_warning("Chức năng này không khả dụng trên trang web DEMO!", "", 2000);
    }
    foreach ($_POST as $key => $value)
    {
        $CMSNAV->update("options", array(
            'value' => $value
        ), " `name` = '$key' ");
    }
    admin_msg_success('Lưu thành công', '', 500);
}
?>


<main class="app-main"> <div class="wrapper"> <div class="page"> <div class="page-inner"> <div class="page-section"> <div class="card card-fluid"> <div class="card-header"> <h4> <b>CẤU HÌNH WEBSITE</b> </h4> </div> <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tên website</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="tenweb" value="<?=$CMSNAV->site('tenweb');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Mô tả website</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="mota" value="<?=$CMSNAV->site('mota');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Từ khóa tìm kiếm</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="tukhoa" value="<?=$CMSNAV->site('tukhoa');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email Admin</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="email" name="email_admin" value="<?=$CMSNAV->site('email_admin');?>"
                                            class="form-control" placeholder="Nhập Email Admin">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ON/OFF Website</label>
                                <div class="col-sm-9">
                                    <select class="form-control show-tick" name="baotri" required>
                                        <option value="<?=$CMSNAV->site('baotri');?>"><?=$CMSNAV->site('baotri');?>
                                        </option>
                                        <option value="ON">ON</option>
                                        <option value="OFF">OFF</option>
                                    </select>
                                    <i>Nếu bạn OFF, website sẽ bật chế độ bảo trì.</i>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Giảm Giá</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="giamgia" value="<?=$CMSNAV->site('giamgia');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Thông báo</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <textarea class="textarea" name="thongbao"
                                            rows="6"><?=$CMSNAV->site('thongbao');?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Thông báo top nạp</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <textarea class="textarea" name="motatopnap"
                                            rows="6"><?=$CMSNAV->site('motatopnap');?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ON/OFF Block F12</label>
                                <div class="col-sm-9">
                                    <select class="form-control show-tick" name="block_f12" required>
                                        <option value="<?=$CMSNAV->site('block_f12');?>"><?=$CMSNAV->site('block_f12');?>
                                        </option>
                                        <option value="ON">ON</option>
                                        <option value="OFF">OFF</option>
                                    </select>
                                    <i>Nếu bạn ON hệ thống sẽ chặn khách F12</i>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">HTML-JS Footer</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <textarea class="form-control" rows="10"
                                            style="background-color: #000;color:#00d230;" name="html_footer"
                                            placeholder="Chèn JS trang trí hay chèn code gì vô cũng được nếu muốn"
                                            rows="6"><?=$CMSNAV->site('html_footer');?></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" name="btnSaveOption" class="btn btn-primary btn-block">
                                <span>LƯU</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
$(function() {
    // Summernote
    $('.textarea').summernote()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });
})
</script>
</div></div></div></div>
<?php 
    require_once("../../public/admin/Footer.php");
?>