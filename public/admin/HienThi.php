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


<main class="app-main"> <div class="wrapper"> <div class="page"> <div class="page-inner"> <div class="page-section"> <div class="card card-fluid"> <div class="card-header"> <h4> <b>CÀI ĐẶT HIỂN THỊ WEBSITE</b> </h4> </div> <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ON/OFF Danh Mục MiniGame</label>
                                <div class="col-sm-9">
                                    <select class="form-control show-tick" name="minigame" required>
                                        <option value="<?=$CMSNAV->site('minigame');?>"><?=$CMSNAV->site('minigame');?>
                                        </option>
                                        <option value="ON">ON</option>
                                        <option value="OFF">OFF</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ON/OFF Danh Mục Accounts</label>
                                <div class="col-sm-9">
                                    <select class="form-control show-tick" name="accounts" required>
                                        <option value="<?=$CMSNAV->site('accounts');?>"><?=$CMSNAV->site('accounts');?>
                                        </option>
                                        <option value="ON">ON</option>
                                        <option value="OFF">OFF</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ON/OFF Danh Mục Cày Thuê</label>
                                <div class="col-sm-9">
                                    <select class="form-control show-tick" name="caythue" required>
                                        <option value="<?=$CMSNAV->site('caythue');?>"><?=$CMSNAV->site('caythue');?>
                                        </option>
                                        <option value="ON">ON</option>
                                        <option value="OFF">OFF</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ON/OFF Danh Mục Robux</label>
                                <div class="col-sm-9">
                                    <select class="form-control show-tick" name="robux" required>
                                        <option value="<?=$CMSNAV->site('robux');?>"><?=$CMSNAV->site('robux');?>
                                        </option>
                                        <option value="ON">ON</option>
                                        <option value="OFF">OFF</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ON/OFF Danh Mục GamePass</label>
                                <div class="col-sm-9">
                                    <select class="form-control show-tick" name="gamepass" required>
                                        <option value="<?=$CMSNAV->site('gamepass');?>"><?=$CMSNAV->site('gamepass');?>
                                        </option>
                                        <option value="ON">ON</option>
                                        <option value="OFF">OFF</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Chữ Chạy Ở Trang Chủ</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="text_run"
                                            value="<?=$CMSNAV->site('text_run');?>" class="form-control"
                                            placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ROBUX CHÍNH HÃNG</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="robuxchinhhang" value="<?=$CMSNAV->site('robuxchinhhang');?>"
                                            class="form-control" placeholder="Ví dụ: 40k=80R$">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ROBUX 120H</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="robux120h" value="<?=$CMSNAV->site('robux120h');?>"
                                            class="form-control" placeholder="Ví dụ: 10k=80R$">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Hotline</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="hotline" value="<?=$CMSNAV->site('hotline');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Facebook</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="facebook" value="<?=$CMSNAV->site('facebook');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Fanpage</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="fanpage" value="<?=$CMSNAV->site('fanpage');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ID Video Youtube</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="id_video_youtube"
                                            value="<?=$CMSNAV->site('id_video_youtube');?>" class="form-control"
                                            placeholder="Ví dụ: Zzn9-ATB9aU">
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