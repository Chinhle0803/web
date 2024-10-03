<?php if($CMSNAV->site('theme_web') == 'theme1') { ?>
<script src="<?=BASE_URL('template/theme/');?>assets/frontend/js/footer.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
<?=$CMSNAV->site('html_footer');?>
<script>
new ClipboardJS('.copy');
</script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0&appId=281459696201789&autoLogAppEvents=1"
    nonce="ubP0EsuB"></script>
</div>
</div>
<!--Login-->
<div class="modal fade tw-fixed tw-top-0 tw-right-0 tw-left-0 tw-bottom-0 tw-flex tw-items-center tw-justify-center tw-p-2" id="LoginModal" role="dialog" aria-hidden="true" style="z-index: 5000; background: rgba(93, 93, 93, 0.77);">
    <div class="modal-dialog tw-relative tw-max-w-md tw-mx-auto tw-bg-white tw-w-full tw-rounded tw-px-4 md:tw-px-6 tw-py-4">
        <span
            class="close tw-absolute tw-inline-block tw-px-3 tw-h-8 tw-w-8 tw-flex tw-items-center tw-justify-center tw-border-4 tw-border-white tw-text-sm tw-font-bold tw-rounded-full tw-cursor-pointer tw-py-1 tw-text-white tw-bg-gray-800"
            style="top: -15px; right: -5px; z-index: 100;" 
            data-dismiss="modal" aria-label="Close">
            <i class="bx bx-x"class="close" data-dismiss="modal" aria-label="Close"></i>
        </span>
        <div class="tw-w-full">
            <img class="tw-h-16 tw-mx-auto" src="<?=BASE_URL($CMSNAV->site('logo_dark'));?>" />
            <h3 class="tw-text-center tw-text-lg tw-font-bold tw-text-blue-900 tw-mb-8">
                ĐĂNG NHẬP TÀI KHOẢN
            </h3>
            <div class="tw-mb-4" id="thongbaolog"></div>

            <!---->
            <div class="tw-mt-5">
                <form id="form-Login">
                    <div class="tw-mb-3">
                        <label class="tw-block tw-font-semibold tw-text-sm tw-text-blue-900">
                            Tài khoản *
                        </label>
                        <input type="text" placeholder="Nhập tài khoản" id="usernamelog" class="tw-w-full tw-border tw-border-blue-800 tw-rounded tw-h-11 tw-px-3 tw-font-semibold" />
                    </div>
                    <div class="tw-mb-3">
                        <label class="tw-block tw-font-semibold tw-text-sm tw-text-blue-900">
                            Mật khẩu *
                        </label>
                        <input autocomplete="" type="password" id="passwordlog" placeholder="Nhập mật khẩu" class="tw-w-full tw-border tw-border-blue-800 tw-rounded tw-h-11 tw-px-3 tw-font-semibold" />
                    </div>
                    <div class="tw-text-center tw-text-red-500"></div>
                    <button type="button" id="Login" class="tw-border tw-border-red-600 tw-rounded tw-h-11 tw-px-3 tw-font-semibold tw-w-full tw-bg-red-500 hover:tw-bg-red-600 tw-text-white tw-mb-3"><span class="tw-relative"> ĐĂNG NHẬP </span></button>
                    <button type="button" class="tw-border tw-border-gray-400 tw-rounded tw-h-11 tw-px-3 tw-font-semibold tw-w-full tw-bg-white tw-text-gray-700" data-dismiss="modal" data-toggle="modal" data-target="#registerModal"><span class="tw-relative"> Tạo tài khoản </span></button>
                </form>
            </div>
        </div>
    </div>                    
</div>
<!--Login-->
<!--Register-->
<div class="modal fade tw-fixed tw-top-0 tw-right-0 tw-left-0 tw-bottom-0 tw-flex tw-items-center tw-justify-center tw-p-2" id="registerModal" role="dialog" aria-hidden="true" style="z-index: 5000; background: rgba(93, 93, 93, 0.77);">
    <div class="modal-dialog tw-relative tw-max-w-md tw-mx-auto tw-bg-white tw-w-full tw-rounded tw-px-4 md:tw-px-6 tw-py-4">
        <span class="close tw-absolute tw-inline-block tw-px-3 tw-h-8 tw-w-8 tw-flex tw-items-center tw-justify-center tw-border-4 tw-border-white tw-text-sm tw-font-bold tw-rounded-full tw-cursor-pointer tw-py-1 tw-text-white tw-bg-gray-800" style="top: -15px; right: -5px; z-index: 100;"  data-dismiss="modal" aria-label="Close">
            <i class="bx bx-x"class="close" data-dismiss="modal" aria-label="Close"></i>
        </span>
        <div class="tw-w-full">
            <img class="tw-h-16 tw-mx-auto" src="<?=BASE_URL($CMSNAV->site('logo_dark'));?>" />
            <h3 class="tw-text-center tw-text-lg tw-font-bold tw-text-blue-900 tw-mb-8">
                ĐĂNG KÝ TÀI KHOẢN
            </h3>
            <div class="tw-mb-4" id="thongbaoreg"></div>
            <!---->
            </button>
            
            <div class="tw-mt-5">
                <form id="form-Register">
                    <div class="tw-mt-2 tw-mb-3 tw-grid tw-grid-cols-12 tw-gap-2">
                        <div class="tw-col-span-12">
                            <label class="tw-block tw-font-semibold tw-text-sm tw-text-blue-900">
                                Tên tài khoản *
                            </label>
                            <input type="text" id="usernamereg" autocomplete="" class="tw-w-full tw-border tw-border-blue-800 tw-rounded tw-h-11 tw-px-3 tw-font-semibold" />
                        </div>
                    </div>
                    <div class="tw-mb-3">
                        <label class="tw-block tw-font-semibold tw-text-sm tw-text-blue-900">
                            Mật khẩu *
                        </label>
                        <input type="password" id="passwordreg" autocomplete="" class="tw-w-full tw-border tw-border-blue-800 tw-rounded tw-h-11 tw-px-3 tw-font-semibold" />
                    </div>
    
                    <div class="tw-mb-3">
                        <label class="tw-block tw-font-semibold tw-text-sm tw-text-blue-900">
                            Xác nhận mật khẩu *
                        </label>
                        <input type="password" id="repasswordreg" autocomplete="" class="tw-w-full tw-border tw-border-blue-800 tw-rounded tw-h-11 tw-px-3 tw-font-semibold" />
                    </div>
                    <div class="tw-text-center tw-text-red-500"></div>
                    <button type="button" id="Register" class="tw-border tw-border-red-600 tw-rounded tw-h-11 tw-px-3 tw-font-semibold tw-w-full tw-bg-red-500 hover:tw-bg-red-600 tw-text-white tw-mb-3"><span class="tw-relative"> ĐĂNG KÝ </span></button>
                    <button type="button" class="tw-border tw-border-gray-400 tw-rounded tw-h-11 tw-px-3 tw-font-semibold tw-w-full tw-bg-white tw-text-gray-700" data-dismiss="modal" data-toggle="modal" data-target="#loginModal"><span class="tw-relative"> Đăng nhập </span></button>
                </form>
            </div>
        </div>
    </div>                    
</div>
<!--Register-->
<script type="text/javascript">
$("#Login").on("click", function() {

    $('#Login').html('<i class="fa fa-spinner fa-spin"></i> Đang xử lý...').prop('disabled',
        true);
    $.ajax({
        url: "<?=BASE_URL("assets/ajaxs/Auth.php");?>",
        method: "POST",
        data: {
            type: 'Login',
            username: $("#usernamelog").val(),
            password: $("#passwordlog").val()
        },
        success: function(response) {
            $("#thongbaolog").html(response);
            $('#Login').html(
                    'Đăng Nhập ')
                .prop('disabled', false);
        }
    });
});
</script>
<!--Login-->

<!--Register-->
<script type="text/javascript">
$("#Register").on("click", function() {

    $('#Register').html('<i class="fa fa-spinner fa-spin"></i> Đang xử lý...').prop('disabled',
        true);
    $.ajax({
        url: "<?=BASE_URL("assets/ajaxs/Auth.php");?>",
        method: "POST",
        data: {
            type: 'Register',
            username: $("#usernamereg").val(),
            password: $("#passwordreg").val(),
            repassword: $("#repasswordreg").val()
        },
        success: function(response) {
            $("#thongbaoreg").html(response);
            $('#Register').html(
                    'Đăng Ký')
                .prop('disabled', false);
        }
    });
});
</script>
<!--Register-->
<style>
    .fade {
        display: none;
    }
    .fade.show{
        display: flex !important;
    }
    .open {
        display: block !important;
    }
</style>

<!-- Modal nạp -->
<div class="modal fade tw-fixed tw-top-0 tw-right-0 tw-left-0 tw-bottom-0 tw-flex tw-items-center tw-justify-center tw-p-2" id="chargeModal" role="dialog" aria-hidden="true" style="z-index: 5000; background: rgba(93, 93, 93, 0.77);">
    <div class="modal-dialog tw-max-w-md tw-w-full tw-rounded tw-shadow tw-bg-white">
        <div class="tw-relative tw-bg-red-600 tw-px-2 tw-py-1 tw-text-xl tw-text-white tw-font-bold tw-text-center tw-border-b tw-rounded-t">
            <span
                class="close tw-absolute tw-inline-block tw-px-3 tw-h-8 tw-w-8 tw-flex tw-items-center tw-justify-center tw-border-4 tw-border-white tw-text-sm tw-font-bold tw-rounded-full tw-cursor-pointer tw-py-1 tw-text-white tw-bg-gray-800"
                style="top: -15px; right: -5px; z-index: 100;" 
                data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"class="close" data-dismiss="modal" aria-label="Close"></i>
            </span>
            <div class="tw-col-span-12 tw-py-3 tw-rounded-t tw-font-bold">
                NẠP TIỀN - CHUYỂN KHOẢN QUA
            </div>
        </div>
        
        <div class="tw-p-3 tw-py-4 md:tw-p-4 tw-pb-8 md:tw-pb-8">
            <div class="tw-grid tw-grid-cols-12 tw-gap-4">
                <div class="tw-col-span-12 md:tw-col-span-6">
                    <button class="tw-w-full tw-bg-gray-200 hover:tw-bg-gray-300 tw-rounded tw-flex tw-items-center tw-h-12 tw-px-4" data-toggle="modal" data-target="#momoModal">
                        <img class="tw-w-6 lazyLoad isLoaded" src="/assets/images/momo.png" /> <span class="tw-ml-2 tw-font-semibold tw-text-gray-800">Ứng dụng MOMO</span>
                    </button>
                </div>
            </div>
            <div class="tw-mt-4">
                <div class="tw-text-sm tw-font-semibold tw-text-gray-700">
                    <p>
                        <span><i class="bx bx-caret-right"></i></span> Hệ thống nạp <b class="tw-text-red-600">ATM/MOMO tự động 24/24</b>, Nạp 100k nhận 110k tiền shop
                    </p>
                    <p>
                        <span><i class="bx bx-caret-right"></i></span><b> Lưu ý: </b> Chuyển tiền nhanh 24/7 để tránh bị treo, chậm tiền! Nếu gửi đúng stk và nội dung mà 30p không nhận được tiền hoặc chuyển ghi sai nội dung vui lòng liên hệ page để
                        được hỗ trợ.
                    </p>
                </div>
            </div>
            <div class="tw-mt-4">
                <label class="tw-uppercase tw-text-red-600 tw-font-bold tw-text-sm tw-block tw-mb-2">
                    Quy Đổi Tiền Nạp ATM/MOMO
                </label>
                <div class="tw-flex tw-justify-between tw-items-center">
                    <div class="tw-2/5">
                        <div class="tw-w-full tw-relative">
                            <label class="tw-inline-block tw-text-gray-600 tw-absolute tw-text-xs tw-font-medium" style="left: 10px; top: 6px;">
                                Số tiền bạn chuyển
                            </label>
                            <input
                                type="number"
                                placeholder="ví dụ: 100000" 
                                id="amount_send" 
                                oninput="changeAmount($(this).val())"
                                class="focus:tw-outline-none tw-pt-3 tw-px-2 tw-h-12 tw-rounded tw-border-2 tw-border-gray-300 tw-w-full tw-text-sm tw-font-semibold tw-placeholder-gray-800 focus:tw-placeholder-white focus:tw-border-red-500 tw-transition tw-duration-200"
                            />
                        </div>
        
                        <span class="tw-mt-1 tw-absolute tw-text-xs tw-block tw-font-semibold"><i class="tw-relative tw-font-bold bx bx-subdirectory-right" style="top: 1px;"></i> <span id="amount_Format">0đ</span></span>
                    </div>
                    <div class="tw-1/5"><i class="bx bx-transfer-alt tw-text-gray-600 tw-text-lg"></i></div>
                    <div class="tw-2/5">
                        <div class="tw-w-full tw-relative">
                            <label class="tw-inline-block tw-text-gray-600 tw-absolute tw-text-xs tw-font-medium" style="left: 10px; top: 6px;">
                                Tiền nhận trên shop
                            </label>
                            <input
                                readonly="readonly"
                                placeholder="110000" 
                                id="amount_real"
                                class="focus:tw-outline-none tw-pt-3 tw-px-2 tw-h-12 tw-rounded tw-border-2 tw-border-gray-300 tw-w-full tw-text-sm tw-font-semibold tw-placeholder-gray-800 focus:tw-placeholder-white tw-transition tw-duration-200 tw-text-red-700"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>                    
</div>
<!-- Modal ATM -->
<!-- Modal MOMO -->
<div class="modal fade tw-fixed tw-top-0 tw-right-0 tw-left-0 tw-bottom-0 tw-flex tw-items-center tw-justify-center tw-p-2" id="momoModal" role="dialog" aria-hidden="true" style="z-index: 5000; background: rgba(93, 93, 93, 0.77);">
    <div class="modal-dialog tw-max-w-md tw-w-full tw-rounded tw-shadow tw-bg-white">
        <div class="tw-relative tw-bg-gray-200 tw-px-2 tw-py-1 tw-text-xl tw-text-white tw-font-bold tw-text-center tw-border-b tw-rounded-t">
            <span
                class="close tw-absolute tw-inline-block tw-px-3 tw-h-8 tw-w-8 tw-flex tw-items-center tw-justify-center tw-border-4 tw-border-white tw-text-sm tw-font-bold tw-rounded-full tw-cursor-pointer tw-py-1 tw-text-white tw-bg-gray-800"
                style="top: -15px; right: -5px; z-index: 100;" 
                data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"class="close" data-dismiss="modal" aria-label="Close"></i>
            </span>
            <div class="tw-text-gray-800 tw-font-semibold tw-text-center tw-rounded-t tw-grid tw-grid-cols-12 tw-gap-0">
                <div class="tw-col-span-12 tw-py-3 tw-flex tw-px-4 tw-rounded-t tw-font-bold">
                    <img class="tw-w-6 tw-h-6 tw-mr-2 lazyLoad isLoaded" src="/assets/images/momo.png" /> CHUYỂN KHOẢN QUA MOMO</div>
            </div>
        </div>
        
        <div class="tw-p-2 md:tw-p-4">
            <div>
                <div class="relative tw-text-sm tw-text-pink-700">
                    <?php foreach($CMSNAV->get_list("SELECT * FROM `bank` ") as $momo) { ?>
                    <p><strong>THÔNG TIN VÍ MOMO</strong></p>
                    <p><strong>CHỦ TÀI KHOẢN: <b style="color:#ee4d2d;"><?=$momo['bank_name'];?></b></strong></p>
                    <p><strong>VÍ MOMO: <b style="color:#00e0ff;"><?=$momo['stk'];?></b></strong></p>
                </div>
                <input readonly="readonly" hidden value="<?=$momo['stk'];?>" class="tw-h-10 tw-px-3 tw-border-2 tw-border-pink-700 tw-text-lg tw-border-dashed tw-rounded tw-w-full tw-text-pink-700 tw-font-extrabold focus:tw-outline-none" />
                <button onclick="copy('<?=$momo['stk'];?>')" class="focus:tw-outline-none tw-px-2 tw-h-6 tw-bg-gray-500 hover:tw-bg-gray-600 tw-rounded tw-text-xs tw-font-bold tw-text-white tw-uppercase">
                    Copy số tài khoản ví MOMO
                </button>
            </div>
            <div class="tw-border-b tw-border-gray-200 tw-my-3"></div>
            <div class="tw-my-2">
                <p class="tw-font-semibold tw-text-sm tw-mb-1">Nội dung <b class="tw-text-red-500">ghi chú</b> khi chuyển:</p>
                <div class="tw-relative">
                    <input readonly="readonly" value="<?=$CMSNAV->site('noidung_naptien').$getUser['username'];?>" class="tw-h-10 tw-px-3 tw-border-2 tw-border-pink-700 tw-text-lg tw-border-dashed tw-rounded tw-w-full tw-text-pink-700 tw-font-extrabold focus:tw-outline-none" />
                    <button onclick="copy('<?=$CMSNAV->site('noidung_naptien').$getUser['username'];?> ')" class="tw-bg-pink-700 hover:tw-bg-pink-600 tw-px-4 tw-h-6 tw-text-white tw-flex tw-items-center tw-py-1 tw-absolute tw-text-sm tw-font-semibold tw-rounded" style="top: 8px; right: 8px;">
                        COPY NỘI DUNG
                    </button>
                </div>
                <div class="tw-mt-2 tw-font-semibold tw-text-sm">
                    <i class="tw-ml-3 bx bxs-upvote"></i> Khi chuyển khoản qua ví Momo bạn cần ghi nội dung ghi chú
                    <b class="tw-mx-1 tw-text-pink-700"><?=$CMSNAV->site('noidung_naptien').$getUser['username'];?></b>
                    bên trên.
                </div>
                <?php }?>
                <div class="tw-mt-1 tw-font-semibold tw-text-sm tw-text-red-600">
                    <?=$CMSNAV->site('luuy_napbank');?>
                </div>
            </div>
            <div class="tw-border-b tw-border-gray-200 tw-my-3"></div>
            <div class="tw-mt-1">
                <p class="tw-font-semibold tw-text-sm tw-mb-1">
                    Hướng dẫn nạp tiền qua Ví Momo
                </p>
                <button class="focus:tw-outline-none tw-px-2 tw-h-6 tw-bg-green-500 hover:tw-bg-green-600 tw-rounded tw-text-xs tw-font-bold tw-text-white tw-uppercase">
                    Click xem video hướng dẫn
                </button>
            </div>
        </div>
    </div>                    
</div>

<div class="modal fade tw-fixed tw-top-0 tw-right-0 tw-left-0 tw-bottom-0 tw-flex tw-items-center tw-justify-center tw-p-2" id="theleModal" role="dialog" aria-hidden="true" style="z-index: 5000; background: rgba(93, 93, 93, 0.77);">
    <div class="modal-dialog tw-max-w-md tw-w-full tw-rounded tw-shadow tw-bg-white">
        <div class="tw-relative tw-bg-red-500 tw-px-2 tw-py-1 tw-text-xl tw-text-white tw-font-bold tw-text-center tw-border-b tw-rounded-t">
        <span
        class="close tw-absolute tw-inline-block tw-px-3 tw-h-8 tw-w-8 tw-flex tw-items-center tw-justify-center tw-border-4 tw-border-white tw-text-sm tw-font-bold tw-rounded-full tw-cursor-pointer tw-py-1 tw-text-white tw-bg-gray-800"
        style="top: -15px; right: -5px; z-index: 100;" 
        data-dismiss="modal" aria-label="Close">
        <i class="bx bx-x"class="close" data-dismiss="modal" aria-label="Close"></i>
    </span>
            <div class="tw-text-gray-800 tw-font-semibold tw-text-center tw-rounded-t tw-grid tw-grid-cols-12 tw-gap-0">
                <div class="tw-col-span-12 tw-py-3 tw-flex tw-px-4 tw-rounded-t tw-font-bold tw-text-white">
                <i class="tw-relative bx bxs-bell-ring tw-text-xl" style="top: 3px;"></i> THÔNG BÁO</div>
            </div>
        </div>
        <div class="tw-p-2 md:tw-p-4">
            Quay càng nhiều tỉ lệ càng cao
        </div>
    </div>                    
</div>

<script src="/assets/scripte1213.js?143982"></script>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://transvelo.github.io/electro-html/2.0/assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="https://transvelo.github.io/electro-html/2.0/assets/js/hs.core.js"></script>
    <script src="https://transvelo.github.io/electro-html/2.0/assets/js/components/hs.slick-carousel.js"></script>
    <script>
        var hscheck = false;
      	$(document).ready(()=>{
          	$.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');
        	$("#sliderSyncingNav .js-slide img").on("click", function(){
            	$("#viewModal").modal("show");
              	if(hscheck != 1){
                  	$.HSCore.components.HSSlickCarousel.init('.js-slick-carousel2');
                  	hscheck = true;
                }
              	
            })
        })
    </script>
    <script>
            $("#form-Login input").keyup(function(e){
            if(e.keyCode == 13){
                Login();
            } 
        });
        $("#form-Register input").keyup(function(e){
            if(e.keyCode == 13){
                Register();
            }
        });
    </script>
</div></div></div>
<div class="tw-py-5" style="background: #1b1a1a; font-family: 'Roboto', sans-serif;">
            <div class="tw-mt-2 tw-mb-12 md:tw-mb-0 tw-px-4 md:tw-px-0 tw-relative tw-max-w-6xl tw-w-full tw-mx-auto tw-text-white tw-grid tw-grid-cols-12 tw-gap-4 tw-font-semibold tw-text-gray-300">
                <div class="tw-col-span-12 md:tw-col-span-4 tw-font-bold tw-uppercase tw-mb-2">
                    <span class="tw-mt-4 tw-border-2 tw-border-trueGray-700 tw-py-4 tw-px-4 tw-flex tw-flex-col tw-items-center">
                        <img src="<?=BASE_URL($CMSNAV->site('logo_dark'));?>" class="mb-2" style="max-width: 150px;" />
                        <span class="tw-text-center"><?=$CMSNAV->site('tukhoa');?></span>
                    </span>
                    <p><a href="<?=$CMSNAV->site('facebook');?>">Privacy Policy</a> | <a href="<?=$CMSNAV->site('facebook');?>">Terms of Service</a> | <a href="<?=$CMSNAV->site('facebook');?>">Delete user data</a></p>
                </div>
                <div class="tw-col-span-12 md:tw-col-span-5 tw-py-2">
                    <h2 class="tw-text-2xl tw-mb-2">VỀ CHÚNG TÔI</h2>
                    <p class="tw-text-base tw-font-medium tw-mb-2">
                        Chúng tôi luôn lấy uy tín đặt trên hàng đầu đối với khách hàng, hy vọng chúng tôi sẽ được phục vụ các bạn. Cảm ơn!
                    </p>
                    <p>
                        Thời gian hỗ trợ: <br />
                        <span class="tw-font-medium">
                            Sáng: 8h00 -> 11h30 | Chiều: 13h00 -> 19h00
                        </span>
                    </p>
                </div>
                <div class="tw-col-span-12 md:tw-col-span-3 tw-py-2">
                    <h3 class="tw-text-2xl tw-uppercase tw-mb-2">
                        <?=$CMSNAV->site('tenweb');?>                   
                    </h3>
                    HỆ THỐNG BÁN ACC TỰ ĐỘNG<br />
                    ĐẢM BẢO UY TÍN VÀ CHẤT LƯỢNG.<br />
                    <a href="<?=$CMSNAV->site('facebook');?>" target="_blank"><img src="https://cdns.diongame.com/static/messenger-01.svg" style="max-width: 220px;" /></a>
                </div>
            </div>
        </div>
        <div class="tw-py-2 tw-text-white tw-font-medium" style="background: #151212;">
            <div class="tw-max-w-6xl tw-mx-auto tw-text-center">
                <!--Copyright 2023 - <?=$CMSNAV->site('tenweb');?>  -->
                 Vận hành bởi <a href="/" style="color:#ee4d2d"><b><?=$CMSNAV->site('tenweb');?></b></a>, Designed By <a href="https://taphoacode.com/" style="color:#FFE600"><b>Taphoacode.com</b></b></a>, All Rights Reserved.
            </div>
        </div>

</html>
<?php }?>

<?php if($CMSNAV->site('theme_web') == 'theme2') { ?>
<div id="thongbao"></div>
<?=$CMSNAV->site('html_footer');?>
<script src="<?=BASE_URL('template2/theme/');?>assets/frontend/js/footer.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
<script>
new ClipboardJS('.copy');
</script>
<div id="fb-root"></div>

</div>

<style>
    .footer-icon {
            text-align: center;
            margin-bottom: 20px;
        }
        .footer-icon li {
            display: inline-block;
            margin-right: 10px;
            margin-bottom: 13px;
        }
        
        .footer-icon li a {
          display: inline-block;
          width: 50px;
          height: 50px;
          line-height: 50px;
          text-align: center;
          border-radius: 5px;
          font-size:25px;
          color: #FFF;
          
        }
</style>

<footer>
    <div class="py-3" style="background: #333;
                            overflow: hidden;
                            box-shadow: 0 0 20px #000000;
                            ">
      
                <ul class="footer-icon" style="margin: 25px;">
    				
    				<li><a href="<?=$CMSNAV->site('facebook');?>" target="_blank"style="
    box-shadow:0 0 10px #0049ff;
    background: #1196e5;
"><i class='bx bxl-facebook bx-spin' ></i></a></li>
    				<li><a href="<?=$CMSNAV->site('discord');?>" target="_blank"style="
    box-shadow: 0 0 10px blue;
    background: darkblue;
"><i class='bx bxl-discord bx-spin' ></i></a></li>
    				<li><a href="<?=$CMSNAV->site('youtube');?>" target="_blank" style="
    box-shadow: 0 0 10px red;
    background: #e51111;
"><i class="bx bxl-youtube bx-spin"></i></a></a></li>
    				
    			</ul>
        </div>
    


    <div class="py-2 text-white font-medium" style="background: #555;
                            overflow: hidden;
                            box-shadow: 0 0 20px #000000;
                            ">
      <div class="max-w-6xl mx-auto neles-font2 text-center" bis_skin_checked="1">
            Bản Quyền Thuộc Về <button class="neles-font2 CMSNAVS TrunggStoreCopyright"><?=$CMSNAV->site('tenweb');?></button> - Thiết kế bởi <button class=" neles-font2 CMSNAV NelesInfo" target="_blank"
                ><a href="https://taphoacode.com/"> Taphoacode.com</a></button>
        </div>
    </div>
</footer>
<style>
  
    .CMSNAV{
       transition:all 1s;
      
    }
    .CMSNAV:hover{
        color:pink;
        transition:all 1s;
    }
    
</style>
 <script>
 

 $(".CMSNAVS").on("click", function() {
    iziToast.warning({
    title: '<?=$CMSNAV->site('tenweb');?> Copyright! ',
    message: 'Mọi hình ảnh và video đều là của chúng tôi vui lòng không đánh cắp khi chưa có sự cho phép của chúng tôi. / <?=$CMSNAV->site('tenweb');?>',
});});
 </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</html>
<?php }?>