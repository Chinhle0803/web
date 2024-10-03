<?php
    require_once("../../config/config.php");
    require_once("../../config/function.php");
    $title = 'THAY ĐỔI MẬT KHẨU | '.$CMSNAV->site('tenweb');
    require_once("../../public/client/Header.php");
    require_once("../../public/client/Nav.php");
    CheckLogin();
?>
<?php if($CMSNAV->site('theme_web') == 'theme1') { ?>
        <?php require_once('Sidebar.php');?>
        <div class="tw-col-span-12 md:tw-col-span-8">
                        <div class="tw-bg-white tw-rounded tw-p-4 md:tw-py-4 md:tw-px-5 tw-w-full">
                            <div class="tw-border-b tw-border-gray-200 tw-pb-2 tw-mb-4 tw-text-gray-800">
                                <h2 class="tw-text-lg tw-font-semibold">Đổi Mật Khẩu</h2>
                                <p class="tw-text-xs">
                                    Để bảo mật tài khoản, vui lòng không chia sẻ cho người khác.
                                </p>
                            </div>

                            <form class="tw-max-w-sm">
                                <div id="thongbao"></div>
                    
                                <div class="tw-mb-2">
                                    <label class="tw-text-gray-700 tw-text-sm">
                                        Mật khẩu mới
                                    </label>
                                    <input id="password" autocomplete="" type="password" class="tw-border tw-border-gray-300 tw-h-10 tw-px-3 tw-w-full tw-rounded focus:tw-outline-none" />
                                </div>
                    
                                <div class="tw-mb-4">
                                    <label class="tw-text-gray-700 tw-text-sm">
                                        Nhập lại mật khẩu mới
                                    </label>
                                    <input id="repassword" type="password" autocomplete="" class="tw-border tw-border-gray-300 tw-h-10 tw-px-3 tw-w-full tw-rounded focus:tw-outline-none" />
                                </div>
                    
                                <button type="button" id="DoiMatKhau" class="tw-px-8 tw-h-10 tw-bg-red-500 hover:tw-bg-red-600 tw-text-white tw-font-semibold tw-rounded">
                                    Xác Nhận
                                </button>
                            </form>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
$("#DoiMatKhau").on("click", function() {
    $('#DoiMatKhau').html('<i class="fa fa-spinner fa-spin"></i> ĐANG XỬ LÝ').prop('disabled',
        true);
    $.ajax({
        url: "<?=BASE_URL("assets/ajaxs/Auth.php");?>",
        method: "POST",
        data: {
            type: 'DoiMatKhau',
            password: $("#password").val(),
            repassword: $("#repassword").val()
        },
        success: function(response) {
            $("#thongbao").html(response);
            $('#DoiMatKhau').html(
                    'ĐỔI MẬT KHẨU')
                .prop('disabled', false);
        }
    });
});
</script>
<?php }?>

<!--THEME 2-->

<?php if($CMSNAV->site('theme_web') == 'theme2') { ?>
<div class="w-full max-w-6xl mx-auto pt-6 md:pt-8 pb-8">
    <div class="grid grid-cols-8 gap-4 md:p-4 bg-box-dark">
        <?php require_once('Sidebar.php');?>
        <div class="col-span-8 sm:col-span-5 md:col-span-6 lg:col-span-6 xl:col-span-6 px-2 md:px-0">
            <div class="v-bg w-full mb-5">
                <h2
                    class="v-title border-l-4 border-red-800 px-3 select-none text-white text-xl md:text-2xl font-bold">
                    ĐỔI MẬT KHẨU</h2>
                <div class="v-table-content">
                    <div class="py-3 pt-5">
                        <form accept-charset="UTF-8" class="form-charge">
                            <input id="password" type="password" placeholder="Mật khẩu mới" required="required"
                                class="mb-2 py-1 rounded-sm px-3 text-gray-800 focus:outline-none font-semibold border border-gray-500 bg-white" />
                            <input id="repassword" type="password" placeholder="Nhập lại mật khẩu mới" required="required"
                                class="mb-2 py-1 rounded-sm px-3 text-gray-800 focus:outline-none font-semibold border border-gray-500 bg-white" />
                            <button type="button" id="DoiMatKhau"
                                class="py-1 text-white border border-red-600 px-3 bg-red-600 hover:bg-red-500 hover:border-red-500 font-semibold focus:outline-none"
                                data-loading-text="<box-icon name='loader'></box-icon>">
                                ĐỔI MẬT KHẨU
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">
$("#DoiMatKhau").on("click", function() {
    $('#DoiMatKhau').html('<i class="fa fa-spinner fa-spin"></i> ĐANG XỬ LÝ').prop('disabled',
        true);
    $.ajax({
        url: "<?=BASE_URL("assets/ajaxstheme2/Auth.php");?>",
        method: "POST",
        data: {
            type: 'DoiMatKhau',
            password: $("#password").val(),
            repassword: $("#repassword").val()
        },
        success: function(response) {
            $("#thongbao").html(response);
            $('#DoiMatKhau').html(
                    'ĐỔI MẬT KHẨU')
                .prop('disabled', false);
        }
    });
});
</script>
<?php }?>
<?php 
    require_once("../../public/client/Footer.php");
?>