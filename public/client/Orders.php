<?php
        require_once("../../config/config.php");
        require_once("../../config/function.php");
        $title = 'THANH TOÁN | '.$CMSNAV->site('tenweb');
        require_once("../../public/client/Header.php");
        require_once("../../public/client/Nav.php");
?>
<?php
if(isset($_GET['id']))
{
    $row = $CMSNAV->get_row(" SELECT * FROM `accounts` WHERE `id` = '".check_string($_GET['id'])."'  ");
    if(!$row)
    {
        admin_msg_error("Liên kết không tồn tại", BASE_URL(''), 500);
    }
}
else
{
    admin_msg_error("Liên kết không tồn tại", BASE_URL(''), 0);
}

?>

<?php if($CMSNAV->site('theme_web') == 'theme1') { ?>
<link rel="stylesheet" href="https://transvelo.github.io/electro-html/2.0/assets/vendor/slick-carousel/slick/slick.css">
<style>
    .d-flex {
        display: flex;
    }
    
    .slick-current img {
        --tw-border-opacity: 1;
        border-color: rgba(220, 38, 38, var(--tw-border-opacity));
    }
    
    .slick-active {
        display: block;
    }
    
    .u-slick--transform-off.slick-transform-off .slick-track {
        -webkit-transform: none !important;
        transform: none !important;
    }
</style>
<div class="tw-max-w-6xl tw-mx-auto tw-px-2">
    <div class="md:tw-bg-white tw-grid tw-grid-cols-12 tw-gap-4 md:tw-p-3 tw-rounded">
        <div class="tw-col-span-12 md:tw-col-span-6">
            <div>
                <div class="tw-relative">
                    <span class="tw-absolute tw-inline-block tw-px-2 tw-rounded tw-text-sm tw-cursor-pointer tw-font-semibold tw-text-white tw-bg-gray-800" style="bottom: 5px; left: 5px;z-index:2;"> </span>
                    <div id="" class="js-slick-carousel u-slick tw-relative" data-infinite="true" data-arrows-classes="d-none d-lg-inline-block" data-arrow-left-classes="bx bx-chevron-left d-flex tw-arrow-left tw-absolute tw-h-8 tw-w-8 tw-rounded tw-inline-flex tw-text-lg tw-text-gray-800 tw-items-center tw-justify-center tw-cursor-pointer" data-arrow-right-classes="bx bx-chevron-right d-flex tw-arrow-right tw-absolute tw-h-8 tw-w-8 tw-rounded tw-inline-flex tw-text-lg tw-text-gray-800 tw-items-center tw-justify-center tw-cursor-pointer" data-nav-for="#sliderSyncingThumb">
                                                                                    <div class="js-slide">
                                    <?php
                    if(!empty($row['listimg']))
                    {
                        $a = explode(PHP_EOL, $row['listimg']);
                        foreach($a as $b)
                        { 
                            if(!empty($b))
                            { 
                                echo '<img src="'.($b).'"  class="tw-h-full tw-w-full tw-object-fill tw-object-center tw-rounded" />';
                            } 
                        }
                    }
                    ?>                                                                    
                            
                                </div>
                                                    
                    </div>
                </div>
                <div class="tw-relative tw-px-10 tw-mt-4">
                    <div id="sliderSyncingThumb" class="js-slick-carousel u-slick u-slick--slider-syncing u-slick--slider-syncing-size u-slick--gutters-1 u-slick--transform-off" data-infinite="true" data-slides-show="5" data-is-thumbs="true" data-nav-for="#sliderSyncingNav">
                                                                                    <div class="js-slide tw-rounded tw-h-12 tw-text-white tw-flex tw-flex-col tw-items-center tw-justify-center tw-cursor-pointer tw-select-none">
                                </div>
                                                            <div class="js-slide tw-rounded tw-h-12 tw-text-white tw-flex tw-flex-col tw-items-center tw-justify-center tw-cursor-pointer tw-select-none">
                                </div>
                                                                        
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal view -->
        <div class="modal fade tw-fixed tw-top-0 tw-right-0 tw-left-0 tw-bottom-0 tw-flex tw-items-center tw-justify-center tw-p-2" id="viewModal" role="dialog" aria-hidden="true" style="z-index: 5000; background: rgba(93, 93, 93, 0.77);">
            <div class="modal-dialog tw-relative tw-max-w-7xl tw-mx-auto tw-grid tw-grid-cols-12 tw-gap-2 tw-bg-white tw-p-2 tw-rounded">
                <span class="close tw-absolute tw-inline-block tw-px-3 tw-h-8 tw-w-8 tw-flex tw-items-center tw-justify-center tw-border-4 tw-border-white tw-rounded-full tw-text-sm tw-font-bold tw-cursor-pointer tw-py-1 tw-text-white tw-bg-gray-800 " style="top: -15px; right: -5px; z-index: 100;" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"class="close" data-dismiss="modal" aria-label="Close"></i>
                </span>

                <div class="tw-relative tw-col-span-8">
                    <div id="sliderLarge" class="js-slick-carousel2 u-slick tw-relative" data-infinite="true" data-arrows-classes="d-none d-lg-inline-block" data-arrow-left-classes="bx bx-chevron-left d-flex tw-arrow-left tw-absolute tw-h-8 tw-w-8 tw-rounded tw-inline-flex tw-text-lg tw-text-gray-800 tw-items-center tw-justify-center tw-cursor-pointer" data-arrow-right-classes="bx bx-chevron-right d-flex tw-arrow-right tw-absolute tw-h-8 tw-w-8 tw-rounded tw-inline-flex tw-text-lg tw-text-gray-800 tw-items-center tw-justify-center tw-cursor-pointer" data-nav-for="#sliderSmall">
                        
                                                                                    <div class="js-slide">
                                                                                        <?php
                    if(!empty($row['listimg']))
                    {
                        $a = explode(PHP_EOL, $row['listimg']);
                        foreach($a as $b)
                        { 
                            if(!empty($b))
                            { 
                                echo '<img src="'.($b).'" data-sizes="auto" class="tw-h-full tw-w-full tw-object-fill tw-object-center tw-rounded" />';
                            } 
                        }
                    }
                    ?>                
                                </div>
                                                     
                    
                    </div>
                </div>
                <div class="tw-relative tw-col-span-4">
                    <div class=" tw-my-3 md:tw-mb-3 md:tw-mt-0 tw-bg-red-700 tw-text-white tw-py-1 tw-px-2 tw-rounded">
                        <div class="tw-uppercase tw-font-bold tw-text-xl">
                            Mã Số: <?=($row['id']);?> </div>
                        <div class="tw-text-xs tw-text-red-100 tw-relative tw-font-medium tw-uppercase">
                            <?=$CMSNAV->get_row(" SELECT * FROM `groups` WHERE `id` = '".$row['groups']."'  ")['title'];?>                        </div>
                    </div>
                    <style>
                        #sliderSmall .slick-track {
                            width: auto !important;
                        }
                        
                        #sliderSmall.u-slick--slider-syncing-size .slick-slide {
                            width: 5rem !important;
                        }
                    </style>
                    <div id="sliderSmall" class="js-slick-carousel2 u-slick u-slick--slider-syncing u-slick--slider-syncing-size u-slick--gutters-1 u-slick--transform-off" data-infinite="true" data-slides-show="2" data-is-thumbs="true" data-nav-for="#sliderLarge" style="max-height: 46vh; overflow-y: auto;">
                        
                                                                                    <div class="js-slide tw-col-span-3 tw-cursor-pointer">
                                    <img class="tw-w-full tw-h-16 tw-border-2 tw-object-fill tw-object-center tw-rounded hover:tw-border-red-500 tw-border-transparent" src="">
                                </div>
                                                            <div class="js-slide tw-col-span-3 tw-cursor-pointer">
                                    <img class="tw-w-full tw-h-16 tw-border-2 tw-object-fill tw-object-center tw-rounded hover:tw-border-red-500 tw-border-transparent" src="">
                                </div>
                                                     
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="tw-col-span-12 md:tw-col-span-6">
            <div class="tw-my-3 md:tw-mb-3 md:tw-mt-0 tw-bg-red-700 tw-text-white tw-py-1 tw-px-2 tw-rounded">
                <div class="tw-uppercase tw-font-bold tw-text-xl">
                    Mã Số: <?=($row['id']);?> </div>
                <div class="tw-text-xs tw-text-red-100 tw-relative tw-font-medium tw-uppercase">
                    <?=$CMSNAV->get_row(" SELECT * FROM `groups` WHERE `id` = '".$row['groups']."'  ")['title'];?>                </div>
            </div>
            
            <div class="tw-rounded-t tw-bg-red-100 tw-py-2 tw-px-2 tw-flex tw-justify-between tw-items-center tw-relative">
                <div class="tw-text-red-600">
                    <div class="tw-relative tw-text-sm tw-font-semibold" style="top: 2px;">
                        <small><b class="tw-font-bold">THẺ CÀO</b></small>
                    </div>
                    <b class="tw-text-2xl"><?=format_cash($row['money']);?><small>đ</small></b>
                </div>
                <div class="tw-text-xs tw-font-bold tw-text-red-400"><small>hoặc</small></div>
                <div class="tw-text-red-600">
                    <div class="tw-relative tw-text-sm tw-font-semibold" style="top: 2px"><small><b class="tw-font-bold">ATM/MOMO</b></small>
                    </div> <b class="tw-text-2xl"><?=format_cash($row['money']);?><small>đ</small></b>
                </div>
            </div>
            <div>
                <div class="tw-mb-3 tw-border tw-rounded-b">
                                        
                            <?php if(!empty($row['chitiet']))
                    {  
                        $a = explode(PHP_EOL, $row['chitiet']); 
                        foreach($a as $b) 
                        { 
                            if(!empty($b))
                            {  
                                $c = explode(":", $b);  ?>
                        <div class="tw-grid tw-grid-cols-12 tw-gap-2 tw-border-b tw-p-2">
                        <div class="tw-col-span-12">
                            <p>
                                <i class="tw-relative bx bx-caret-right" style="top: 1px;"></i> <?=$c[0];?>
                                <b class="tw-text-gray-800"> <?=$c[1];?> </b>
                            </p>
                        </div>
                    </div>
                            <?php   } 
                        } 
                    }?>
                        

                                        
                    <!---->
                </div>
                <!---->
                <!---->
            </div>
            <!---->
                    
                
            <!---->
            <style>
                .fade {
                    display: none;
                }
                
                .fade.show:not(#champModal,
                #skinModal,
                #infoModal) {
                    display: flex !important;
                }
            </style>
            
            <button class="tw-sticky tw-top-14 tw-my-3 tw-px-3 tw-rounded tw-py-2 tw-text-xl tw-text-white tw-font-bold tw-bg-red-600 hover:tw-bg-red-500 tw-rounded tw-w-full tw-z-50" type="button" data-toggle="modal" data-target="#buyModal">
                <span class="tw-relative tw-pl-8">
                    <i class="tw-absolute tw-text-3xl bx bxs-cart-add tw-mr-1" style="top: -4px; left: -8px"></i> MUA NGAY
                </span>
            </button>
             <!--Buy modal-->
            <div class="modal fade tw-fixed tw-top-0 tw-right-0 tw-left-0 tw-bottom-0 tw-flex tw-items-center tw-justify-center tw-p-2" id="buyModal" role="dialog" aria-hidden="true" style="z-index: 5000; background: rgba(93, 93, 93, 0.77);">
                <div class="modal-dialog tw-max-w-md tw-w-full tw-rounded tw-shadow tw-bg-white">
                    <div class="tw-relative tw-bg-red-600 tw-px-2 tw-py-1 tw-text-xl tw-text-white tw-font-bold tw-text-center tw-border-b tw-rounded-t">
                        <small><span>XÁC NHẬN MUA </span>TÀI KHOẢN</small>
                        <p class="tw-text-2xl">#<?=($row['id']);?></p>
                        <span class="close tw-absolute tw-inline-block tw-px-3 tw-h-8 tw-w-8 tw-flex tw-items-center tw-justify-center tw-border-4 tw-border-white tw-text-sm tw-font-bold tw-rounded-full tw-cursor-pointer tw-py-1 tw-text-white tw-bg-gray-800" style="top: -15px; right: -5px; z-index: 100;" data-dismiss="modal" aria-label="Close">
                            <i class="bx bx-x"class="close" data-dismiss="modal" aria-label="Close"></i>
                        </span>
                    </div>
                    
                    <div class="tw-p-2 md:tw-p-4">
                        <div>
                            <div class="tw-mb-3 tw-border tw-rounded-b">
                                                        
                            <?php if(!empty($row['chitiet']))
                    {  
                        $a = explode(PHP_EOL, $row['chitiet']); 
                        foreach($a as $b) 
                        { 
                            if(!empty($b))
                            {  
                                $c = explode(":", $b);  ?>
                                <div class="tw-grid tw-grid-cols-12 tw-gap-2 tw-border-b tw-p-2">
                                <div class="tw-col-span-12">
                                    <p>
                                        <i class="tw-relative bx bx-caret-right" style="top: 1px;"></i> <?=$c[0];?>
                                        <b class="tw-text-gray-800"> <?=$c[1];?> </b>
                                    </p>
                                </div>
                            </div>
                           
                            <?php   } 
                        } 
                    }?> </div> 
                            <!---->
                            <!---->
                            <div class="tw-mb-3">
                                <label class="tw-block tw-font-semibold tw-text-sm tw-text-blue-900">
                                    Mã giảm giá (Nếu có): 
                                </label>
                                <input id="magiamgia" placeholder="Mã giảm giá" type="text" class="tw-w-full tw-border tw-border-blue-800 tw-rounded tw-h-11 tw-px-3 tw-font-semibold">
                            </div>
                        </div>
                        <div class="tw-mb-4">
                                                <div id="thongbao"></div></br>
                            <div class="tw-grid tw-grid-cols-12 tw-gap-2 tw-mb-2 tw-text-gray-700">
                                <div class="tw-relative tw-col-span-6 tw-font-semibold tw-text-base"><span>Số dư của bạn</span></div>
                                <div class="tw-col-span-6 tw-text-right tw-font-bold">
                                    <?=format_cash($getUser['money']);?>đ
                                    <a href="/user/recharge"><button class="tw-px-1"><i class="tw-text-red-500 tw-relative tw-text-xl bx bxs-plus-square" style="top: 3px;"></i></button></a>
                                </div>
                            </div>
                            <!---->
                            <div class="tw-grid tw-grid-cols-12 tw-gap-2">
                                <div class="tw-col-span-6 tw-font-semibold tw-text-base tw-relative tw-text-red-600"><span class="tw-relative" style="top: 2px;">GIÁ TÀI KHOẢN</span></div>
                                <div class="tw-col-span-6 tw-text-right tw-font-bold tw-text-xl tw-text-red-600" id="amount">
                                <?=format_cash($row['money']);?>đ
                                </div>
                            </div>
                        </div>
                        <div class="tw-grid tw-grid-cols-12 tw-gap-2">
                            <div class="tw-col-span-8">
                                <div>
                                    <button id="btnThanhToan" class="tw-bg-red-500 tw-border tw-border-red-500 tw-px-2 tw-py-2 tw-rounded tw-text-white tw-font-bold tw-w-full">
                                        XÁC NHẬN MUA
                                    </button>
                                </div>
                            </div>
                            <div class="tw-col-span-4">
                                <button class="tw-py-2 tw-px-3 tw-text-center tw-border tw-rounded tw-w-full" data-dismiss="modal">
                                    Đóng
                                </button>
                            </div>
                        </div>
                    </div>
                                    </div>
            </div>
        </div>
    </div>
    
<script type="text/javascript">
$("#btnThanhToan").on("click", function() {

    $('#btnThanhToan').html('<i class="fa fa-spinner fa-spin"></i> ĐANG XỬ LÝ').prop('disabled',
        true);
    $.ajax({
        url: "<?=BASE_URL("assets/ajaxs/Orders.php");?>",
        method: "POST",
        data: {
            id: <?=$row['id'];?>,
            magiamgia: $("#magiamgia").val(),
        },
        success: function(response) {
            $("#thongbao").html(response);
            $('#btnThanhToan').html(
                    'THANH TOÁN')
                .prop('disabled', false);
        }
    });
});
</script>
<?php }?>

<!--THEME 2-->

<?php if($CMSNAV->site('theme_web') == 'theme2') { ?>
<div class="v-theme">
    <div class="pb-10">
        <div class="v-card w-full max-w-6xl mx-auto">
            <div class="md:mx-0">
                <div class="py-6">
                    <div class="mb-16">
                        <div class="mb-4 py-4 md:p-4 bg-box-dark">
                            <div
                                class="fade-in mb-2 py-2 md:mb-4 block uppercase md:py-4 text-center text-yellow-400 md:text-3xl text-2xl font-extrabold text-fill ">
                                DANH MỤC:
                                <?=$CMSNAV->get_row(" SELECT * FROM `groups` WHERE `id` = '".$row['groups']."'  ")['title'];?>
                            </div>
                            <div class="sticky col-span-12 grid grid-cols-10 gap-2 select-none py-2 px-2 color-grant text-xl font-bold rounded"
                                style="background: rgb(37 37 37); top: 60px; z-index: 98;">
                                <div class="col-span-10 md:col-span-5">
                                    <div class="flex items-center flex-wrap text-yellow-500 pt-3">
                                        <div class="relative">
                                            <?=format_cash($row['money']);?> đ
                                            <span class="absolute" style="top: -18px; left: 1px; font-size: 0.8rem;">
                                                GIÁ BÁN
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="v-skull-top col-span-10 md:col-span-5 text-yellow-500 flex justify-end items-center flex-wrap">
                                    <button
                                        class="ml-4 flex bg-red-500 text-white items-center justify-center h-10 text-2xl rounded focus:outline-none px-4 text-center"
                                        id="btnThanhToan">
                                        THANH TOÁN
                                    </button>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="v-account-detail p-2 md:px-0 mt-5">
                                    <div class="v-infomations border-t border-b border-gray-700 py-4 mb-10">
                                        <div class="w-full grid grid-cols-12 gap-4">
                                            <?php if(!empty($row['chitiet']))
                    {  
                        $a = explode(PHP_EOL, $row['chitiet']); 
                        foreach($a as $b) 
                        { 
                            if(!empty($b))
                            {  
                                $c = explode(":", $b);  ?>
                                            <div
                                                class="uppercase col-span-6 md:col-span-3 text-base md:text-xl font-semibold text-center">
                                                <span class="text-white"><?=$c[0];?>:</span> <b class="text-yellow-600">
                                                    <?=$c[1];?></b>
                                            </div>

                                            <?php   } 
                        } 
                    }?>
                                        </div>
                                    </div>
                                </div>
                                <div class="v-account-detail p-2 md:px-0 mt-4">
                                    <div class="v-account-detail-1" id="taikhoan">
                                        <div class="mb-10">
                                            <?php
                    if(!empty($row['listimg']))
                    {
                        $a = explode(PHP_EOL, $row['listimg']);
                        foreach($a as $b)
                        { 
                            if(!empty($b))
                            { 
                                echo '<img src="'.BASE_URL($b).'" data-sizes="auto" class="border border-gray-400 mb-2 w-full lazyLoad lazy" />';
                            } 
                        }
                    }
                    ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$("#btnThanhToan").on("click", function() {
    $('#btnThanhToan').html('<i class="fa fa-spinner fa-spin"></i>').prop('disabled',
        true);

    Swal.fire({
        title: 'Xác Nhận Thanh Toán',
        text: "Bạn có đồng ý mua nick này không ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Mua ngay'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "<?=BASE_URL("assets/ajaxstheme2/Orders.php");?>",
                method: "POST",
                data: {
                    id: <?=$row['id'];?>
                },
                success: function(response) {
                    $("#thongbao").html(response);
                    $('#btnThanhToan').html(
                            'THANH TOÁN')
                        .prop('disabled', false);
                }
            });
        } else {
            $('#btnThanhToan').html(
                    'THANH TOÁN')
                .prop('disabled', false);
        }
    })



});
</script>
<?php }?>
<?php 
    require_once("../../public/client/Footer.php");
?>