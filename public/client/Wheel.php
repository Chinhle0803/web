<?php
require_once("../../config/config.php");
require_once("../../config/function.php");
$title = 'VÒNG QUAY | ' . $CMSNAV->site('tenweb');
require_once("../../public/client/Header.php");
require_once("../../public/client/Nav.php");
?>
<?php
if (isset($_GET['id'])) {
    $row = $CMSNAV->get_row(" SELECT * FROM `mini_game` WHERE `id` = '" . check_string($_GET['id']) . "'  ");
    if (!$row) {
        admin_msg_error("Liên kết không tồn tại", BASE_URL(''), 500);
    }
} else {
    admin_msg_error("Liên kết không tồn tại", BASE_URL(''), 0);
}
$id = intval($_GET['id']);
?>
<script src="/template/js/rotate.js"></script>
<?php if($CMSNAV->site('theme_web') == 'theme1') { ?>
<div class="tw-max-w-6xl tw-mx-auto md:tw-px-2 tw-my-8">
    <div class="tw-grid tw-grid-cols-12 tw-gap-4 tw-w-full tw-mb-8 tw-rounded tw-p-0 md:tw-p-2">
        <div class="tw-col-span-12 md:tw-col-span-8">
            <div class="tw-py-6 tw-bg-white tw-rounded">
                <h2 class="tw-game__title tw-uppercase tw-font-bold tw-text-2xl md:tw-text-3xl tw-px-2 md:tw-px-5 tw-text-center md:tw-text-left tw-mb-2">
                    <?=mini_game($id, 'name');?>
                </h2>

                <div class="v-luckywheel w-full tw-relative tw-overflow-x-hidden">
				   <div class="tw-flex tw-justify-center">
					  <div class="wheel-wrapper">
						 <a class="
							wheel-pointer quayngay
							tw-cursor-pointer tw-opacity-75
							hover:tw-opacity-100
							" id="start"></a>
						 <div class="wheel-bg">
							<img alt="Play" src="<?= mini_game($id, 'image'); ?>" id="rotate" />
						 </div>
					  </div>
				   </div>
				   <div class="tw-mt-10 tw-mb-6">
					  <div class="tw-flex tw-justify-center">
						 <select class="tw-game__price-play tw-w-56 tw-block tw-border-2 tw-bg-white tw-border-yellow-500 tw-h-10
						 tw-px-3 tw-rounded focus:tw-outline-none" 
						 id="x" name="x">
							<option value="1">Mua X1 - <?= number_format(mini_game($id, 'price')); ?> Tiền shop / 1 Lần Quay</option>
						 </select>
					  </div>
				   </div>
				   <div class="tw-my-2 tw-flex tw-justify-center tw-items-center">
					  <button id="start" type="button" class="tw-transition tw-duration-200 hover:tw-bg-red-700 hover:tw-border-red-700 tw-bg-red-600 tw-py-1 tw-text-white tw-border-2 tw-border-red-600 tw-block tw-font-bold focus:tw-outline-none tw-w-36 tw-rounded quayngay" style="background-color: #dc2626;" id="rotate">
					  <span class="relative" style="top: 1px;"><i class="tw-relative bx bxs-right-arrow" style="top: 2px;"></i> Quay Ngay </span>
					  </button>
				   </div>
				   <div>
					  <style>
						 .wheel-pointer {
							background-image: url('<?=$CMSNAV->site('nutvongquay');?>') !important;
						 }
					  </style>
				   </div>
				</div>
            </div>
            <div class="tw-border-2 tw-border-amber-300 tw-bg-white tw-rounded tw-text-sm tw-leading-7 tw-px-3 tw-py-1 tw-my-2">
				<div class="relative">

				</div>
			</div>
			<!-- begin LƯỢT CHƠI GẦN ĐÂY -->
			<div class="tw-mt-4 tw-bg-white tw-rounded tw-w-full">
			   <div class="tw-border-b tw-border-gray-200 tw-pb-2 tw-text-gray-800 tw-p-3 md:tw-py-3 md:tw-px-5">
				  <h2 class="tw-text-lg tw-font-semibold">LƯỢT CHƠI GẦN ĐÂY</h2>
			   </div>
			   <div id="list" class="tw-p-2 md:tw-p-4 overflow-x-auto">
				  <table class="tw-w-full tw-rounded-t ">
					 <thead>
						<tr class="tw-text-md tw-font-semibold tw-tracking-wide tw-text-left tw-text-gray-900 tw-border tw-border-b-0 tw-bg-gray-200">
							<td class="tw-px-2 tw-py-2">STT</td>
							<td class="tw-px-2 tw-py-2">Phần thưởng</td>
							<td class="tw-px-2 tw-py-2">Thời gian</td>
						</tr>
					 </thead>
					 <tbody class="bg-white tw-border tw-border-t-0 tw-rounded">
					     <?php $i = 0;foreach($CMSNAV->get_list(" SELECT * FROM `lichsuvongquay` ORDER BY id DESC LIMIT 20 ") as $value){ ?>
						    <tr>
						        <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$i++;?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b">
                                        <?=format_cash($value['soluong']);?> R$</td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b">
                                        <?=timeAgo($value['time']);?></td>
							  </td>
							</tr>
							<?php }?>
											 </tbody>
				  </table>
			   </div>
			</div>
			<!-- begin LƯỢT CHƠI GẦN ĐÂY -->
			
			
        </div>
        <div class="tw-col-span-12 md:tw-col-span-4 tw-px-2">
            <!---->
            <div class="tw-mb-5">
                <div class="tw-bg-red-500 tw-text-white tw-font-semibold tw-py-2 tw-h-12 tw-rounded tw-uppercase tw-w-full tw-relative tw-text-center tw-flex tw-px-3 tw-justify-between tw-items-center">
                    <span class="tw-ml-1"> Nạp tiền </span>
                    <div>
                        <button class="tw-font-semibold tw-px-2 tw-py-1 tw-rounded tw-bg-white tw-text-gray-600 tw-text-sm tw-inline-flex tw-items-center">
                            <i class="tw-relative tw-text-base bx bxs-dollar-circle tw-mr-1" style="top: 0px; left: -1px;"></i>
                        <a href="/user/recharge"> Thẻ cào </a>
                        </button>
                        <button data-toggle="modal" data-target="#chargeModal" class="tw-font-semibold tw-px-2 tw-py-1 tw-rounded tw-bg-white tw-text-gray-600 tw-text-sm tw-inline-flex tw-items-center">
                            <i class="tw-relative tw-text-base bx bxs-bank tw-mr-1" style="top: 0px; left: -1px;"></i>
                            Bank/Momo
                        </button>
                    </div>
                </div>
            </div>
            <div class="tw-mb-2">
                <h2 class="tw-text-xl tw-font-bold">CÓ THỂ BẠN QUAN TÂM</h2>
                
				<div class="tw-rounded">
                    <div class="tw-bg-gray-100 tw-py-2 md:tw-pb-4">
                        <div class="tw-grid tw-grid-cols-12 tw-gap-y-4">
                            
                            <div class="tw-col-span-12 tw-bg-white tw-shadow-sm tw-rounded-b-sm tw-border md:tw-border-0 md:tw-rounded-b">
                                <?php foreach ($CMSNAV->get_list("SELECT * FROM `mini_game` WHERE `status` = 'true' ") as $minigame) { ?>
                                <a href="<?= BASE_URL('VongQuay/' . $minigame['id']); ?>">
                                    <div class="tw-col-span-5"><img class="tw-w-full tw-rounded-t-sm md:tw-rounded-t lazyLoad isLoaded" 
									src="<?= mini_game($minigame['id'], 'thumb'); ?>" /></div>
                                    <div class="tw-col-span-12 tw-px-2 tw-py-3 tw-h-28 tw-relative">
                                        <h4 class="tw-sub-interface-title tw-uppercase tw-text-sm tw-font-semibold tw-text-gray-800 tw-mb-0">
                                            <?= $minigame['name']; ?>
                                        </h4>
                                        <div class="tw-my-1 tw-text-xs tw-text-gray-600 tw-sub-interface-info">
                                            
                                            <p>
                                                <span>
                                                    Đã chơi:
                                                    <b class="tw-text-red-500"><?= $minigame['sudung']; ?></b>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="tw-absolute tw-bottom-2 tw-right-2 tw-left-2 tw-mt-2">
                                            <button class="dBVMxc tw-new-1 tw-text-xs tw-border tw-px-1.5 md:tw-px-2" data-v-614870ea="">
											<span data-v-614870ea=""> <?= $minigame['price']; ?> </span></button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>
<!--THEME 2-->
<?php if($CMSNAV->site('theme_web') == 'theme2') { ?>
<link rel="stylesheet" href="/template/theme/assets/frontend/css/wheel.css">
<div class="mt-12 relative w-full max-w-6xl mx-auto text-gray-800 pb-8 px-2 md:px-0 ">
        <div class="mb-4 py-4 md:p-4 nguyenall-mac-app">
            <div class="nguyenall-header">
                <div class="nguyenall-circle"></div>
            </div>
            <h2 class="text-2xl font-bold text-center">
                <p class="text-white"><?=mini_game($id, 'name');?></p>
            </h2>
            <br>
            <!-- <div class="mb-6 nguyenall_title">
                <div class="nguyenall_separate"></div>
            </div> -->
            <div class="col-span-12 grid grid-cols-10 gap-2 select-none py-2 px-2 color-grant text-xl font-bold nguyenall-mac-app">
                <div class="col-span-12 md:col-span-12 text-center">
                    1 LƯỢT QUAY: <b><?= number_format(mini_game($id, 'price')); ?></b>đ
                </div>
            </div>
            <div class="v-account-detail p-2 md:px-0 mt-5">
                <div class="v-infomations ">
                    <div class="py-3 px-5">
                        <div class="w-full lg:flex justify-center items-center">
                            <div class="w-full">
                                <div class="w-full">
                                    <div class="flex items-center relative">
                                        <div class="w-full">
                                            <div class="v-luckywheel flex justify-center relative">
                                                <div class="wheel-wrapper">
                                                    <a class="wheel-pointer cursor-pointer opacity-75 hover:opacity-100" id="start"></a>
                                                    <img alt="Play" src="<?= mini_game($id, 'image'); ?>" id="rotate" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 w-full rounded">
                                <h3 id="modal-headline" class="text-2xl font-bold">
                                    <p class="text-white">LƯỢT CHƠI GẦN ĐÂY</p>
                                </h3> <br>
                                <div class="py-1 overflow-y-auto scrolling-touch max-h-400">
                                    <div class="scrolling-touch min-h-650">
                                        <table class="table-auto w-full">
                                            <thead>
                                                <tr class="v-border-hr select-none border-b-2 border-gray-300">

                                                    <th class="v-table-title py-2 text-sm font-bold text-white text-left px-1">
                                                        TÀI KHOẢN
                                                    </th>
                                                     <th class="v-table-title py-2 text-sm font-bold text-white text-left px-1">
                                                        GIẢI THƯỞNG TRÚNG
                                                    </th>
                                                    <th class="v-table-title py-2 text-sm font-bold text-white text-left px-1">
                                                        THỜI GIAN
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-sm font-semibold">

                                           <?php $i = 0;foreach($CMSNAV->get_list(" SELECT * FROM `lichsuvongquay` ORDER BY id DESC LIMIT 20 ") as $value){ ?>
                                                <tr>     
                                                    <td class="text-sm text-gray-100 text-left px-1 py-1 border-b">******</td>
                                                    <td class="text-sm text-gray-100 text-left px-1 py-1 border-b"><?=format_cash($value['soluong']);?> </td>
                                                    <td class="text-sm text-gray-100 text-left px-1 py-1 border-b"><?=timeAgo($value['time']);?><td>                         
                                                </tr>
                                            <?php } ?>
                                    
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>
    <script type="text/javascript">
        $(document).ready(function() {
            var bRotate = false;

            function rotateFn(angles, txt, type) {
                bRotate = !bRotate;
                $('#rotate').stopRotate();
                $('#rotate').rotate({
                    angle: 0,
                    animateTo: angles + 1800,
                    duration: 4000,
                    callback: function() {
                        var awar = txt;
                        Swal.fire('Thành công !', awar, 'success')
                        document.getElementById('modalMinigame').classList.add(isVisible);
                        bRotate = !bRotate;
                    }
                })
            }
            $('#start').click(function() {
                console.log('Click button');

                if (bRotate);

                $.ajax({
                    type: 'post',
                    dataType: "JSON",
                    url: '/assets/ajaxs/Quay.php',
                    data: {
                        id_vongquay: <?= $id; ?>
                    },
                    success: function(json) {
                        if (json.status == 3) {
                            Swal.fire('Oops !', 'Vui lòng đăng nhập !', 'error')
                        } else if (json.status == 4) {
                            Swal.fire('Oops !', 'Bạn không đủ tiền để quay !', 'error')
                        } else if (json.status == 1) {
                            if (json.item > 0 && json.item < 9) {
                                rotateFn(json.location, json.msg, "success");
                            } else {
                                Swal.fire('Oops !', 'Đã có lỗi xảy ra !', 'error')
                            }
                        } else {
                            Swal.fire('Oops !', 'Hệ thống đang bảo trì !', 'error')
                        }
                    }
                });

            });

        });
    </script>

    <?php
    require_once("../../public/client/Footer.php");
    ?>