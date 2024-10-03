<?php
    require_once(__DIR__."/config/config.php");
    require_once(__DIR__."/config/function.php");
    require_once(__DIR__."/class/Mobile_Detect.php");
    $title = 'HOME | '.$CMSNAV->site('tenweb');
    require_once(__DIR__."/public/client/Header.php");
    require_once(__DIR__."/public/client/Nav.php");
    require_once(__DIR__."/class/Date/HumanDiff.php");
?>
<body style="background: url('<?=BASE_URL($CMSNAV->site('background'));?>') fixed bottom no-repeat; background-size: cover;"><div id="element">
<div class="tw-max-w-6xl tw-mx-auto">
    <div class="tw-grid tw-grid-cols-12 tw-gap-2 md:tw-gap-4 tw-mt-4 tw-mb-2 tw-px-2 md:tw-px-0">
        <div class="tw-col-span-12 md:tw-col-span-8">
            <div class="tw-relative">
                <div class="tw-relative slick-slider slick-initialized">
                    <div class="slick-list">
                       <iframe src="https://youtube.com/embed/<?=$CMSNAV->site('id_video_youtube');?>" frameborder="0"
                            width="100%" height="350" allowfullscreen=""></iframe>
                    </div>
                </div>
                <span class="pagination tw-absolute tw-inline-block tw-px-1 tw-rounded tw-text-white tw-font-bold tw-text-xs" style="bottom: 10px; right: 5px;">1/1</span>
            </div>
        </div>
        <script>
            function Tab(id){
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(id).style.display = "block";
                event.currentTarget.className += " active";
            }
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <div class="tw-col-span-12 md:tw-col-span-4">
        <div class="bg-white w-full" style="min-height: 360px;">
            <div class="tw-flex tw-font-bold">
                <div class="tw-transition tw-duration-200 tw-cursor-pointer tw-w-full tw-rounded-tl tw-text-gray-800 tw-bg-gray-200 hover:tw-bg-gray-300 tablinks active" onclick="Tab('top')">
                    <div class="tw-py-2 tw-text-center tw-px-2 tw-font-bold tw-text-lg tw-relative">
                        <span class="tw-absolute tw-text-base" style="top: 0px; left: 20%;">TOP NẠP THÁNG</span>
                        <div class="tw-text-xs tw-flex tw-justify-center tw-relative" style="top: 16px;">
                            <button class="tw-mr-1 tw-font-bold tw-px-2 tw-h-4 tw-bg-amber-500 tw-rounded tw-flex tw-items-center tw-text-white tw-relative tw-active">
                                <small>THẺ CÀO</small>
                            </button>
                            <!-- <button class="tw-font-bold tw-px-2 tw-h-4 tw-bg-amber-500 tw-rounded tw-flex tw-items-center tw-text-white tw-relative"><small>ATM / MOMO</small></button> -->
                        </div>
                    </div>
                </div>
                <div class="tw-transition tw-duration-200 tw-cursor-pointer tw-rounded-tr tw-text-gray-800 tw-bg-gray-200 hover:tw-bg-gray-300 tablinks" onclick="Tab('gift')">
                    <h2 class="tw-py-2 tw-px-3 tw-w-48 tw-text-center tw-font-bold tw-text-lg">
                        PHẦN THƯỞNG
                    </h2>
                </div>
            </div>
            <style>
                .active{
                    --tw-bg-opacity: 1;
                    background-color: rgba(255,255,255,var(--tw-bg-opacity));
                    --tw-text-opacity: 1;
                    color: rgba(220,38,38,var(--tw-text-opacity));
                }
            </style>
            <div class="tw-bg-white tw-py-2 tw-rounded-b" style="min-height: 275px;">
                <div class="tw-px-3 tabcontent" id="top">
                    <div class="v-list-top-card py-1">
                        <div class="tw-overflow-y-auto" style="max-height: 10.9rem;">

                            <?php $i=0; foreach($CMSNAV->get_list("SELECT * FROM `users` ORDER BY `total_money` DESC LIMIT 6 ") as $top) { ?>
                            <div class="tw-flex tw-items-center tw-justify-between tw-px-2 tw-py-0" style="height: 2.2rem;">
                                <div class="tw-flex tw-items-center">
                                    <div class="v-star tw-relative">
                                    <i class="bx tw-text-3xl tw-text-red-600 bxs-shield"></i>
                                    <span class="tw-absolute tw-text-sm tw-font-bold tw-text-white" style="top: 5px; left: 10.5px;"><?=$i++;?></span>
                                    </div>
                                    <span class="tw-relative tw-ml-1 tw-text-gray-800 tw-w-full tw-font-bold tw-truncate tw-text-sm" style="max-width: 8rem; top: -2px;">
                                        <?=substr($top['username'], 0, -3) . '***';?>                                      
                                    </span>
                                </div>
                                <div class="tw-font-bold tw-text-lg">
                                        <span class="tw-bg-red-600 tw-w-32 tw-py-1 tw-text-white tw-rounded tw-text-center tw-inline-block tw-text-sm">
                                            <?=format_cash($top['total_money']);?><span class="tw-text-xs"><small>đ</small>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <?php }?>

                            
                        </div>
                        <!---->
                        <div>
                            <div class="tw-mx-auto tw-w-2/3 tw-border-t tw-border-l-none tw-border-r-none tw-border-b-none tw-border-gray-300 tw-my-1 tw-mb-2"></div>
                            <div>
                                <span class="tw-inline-block tw-text-base tw-font-medium tw-border-yellow-500 tw-rounded tw-bg-yellow-100 tw-px-2 tw-py-1" style="margin-bottom: 0.4rem;">
                                    Sắp tới sẽ có <b class="tw-text-red-600">sự kiện hot</b>, hãy chờ nhé!!!
                                </span>
                            </div>
                            <!---->
                            <div class="tw-flex tw-justify-center tw-text-lg">
                                <a href="/user/recharge" class="cta tw-rounded tw-h-10 tw-cursor-pointer tw-flex tw-items-center tw-justify-center"><span class="tw-inline-block">NẠP THẺ NGAY</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tw-pl-3 tabcontent" id="gift" style="display: none;">
                    <div class="tw-overflow-auto tw-px-1" style="max-height: 260px;">
                        <div class="relative">
                            <p>
                                <span style="background-color: transparent;"><strong>ĐUA TOP NẠP THẺ HÀNG THÁNG</strong></span>
                            </p>
                            <?=$CMSNAV->site('motatopnap');?>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<style>
.text-success {
    color: black;
    margin: 0 0.5em 0 0;
    padding: 0.4em 0.833em;
    min-width: 3em;
    text-align: center;
    background-color: #FBC02D!important;
    border-color: #FBC02D!important;
    border-radius: 0.2857rem;
    white-space: nowrap;
}
</style>
<div class="tw-mb-4 tw-text-red-500 tw-font-bold tw-px-2 tw-bg-white tw-rounded tw-py-2 tw-relative">
    <span class=" tw-absolute tw-flex tw-items-center tw-justify-center tw-text-xl tw-h-10 tw-w-10 tw-bg-white tw-rounded " style="top: 0px; left: 0px; z-index: 5"><i class="bx bxs-bell-ring"></i></span> 
        <div class="tw-flex tw-w-full tw-items-center tw-notification-home">
            <div class="tw-marquee tw-w-full">
                <div class="mar">
                    <marquee>
                        <!---------------------------------->
                        
                        <!--GAMEPASS-->
                        <a style="margin-left:20px" target="_blank"><strong><?=$CMSNAV->site('text_run');?></strong></span></a>
                        <!--GAMEPASS-->
                    </marquee>
                </div>
            </div>
        </div>
    </div>

    <?php if($CMSNAV->site('minigame') == 'ON') { ?>
    <!-- MINI GAME -->
	<div class="tw-bg-white tw-mb-3 tw-rounded">
		<div class="tw-header-sub-interface  tw-top-12 md:tw-top-14 tw-bg-white tw-p-2 md:tw-p-3 tw-block tw-text-base md:tw-text-xl tw-border-b w-max tw-rounded-t" style="z-index: 9;">
			<h3 class="tw-uppercase tw-font-bold tw-text-red-600"> Danh Mục Trò Chơi </h3>
		</div>
		
		
	  <div class="tw-bg-gray-100 tw-p-2 md:tw-py-4">
		<div class="tw-grid tw-grid-cols-12 tw-gap-2 md:tw-gap-4">
		        <?php foreach ($CMSNAV->get_list("SELECT * FROM `mini_game` WHERE `status` = 'true' ") as $minigame) { ?>
						<div class="tw-col-span-6 sm:tw-col-span-3 tw-bg-white tw-shadow-sm tw-relative" data-v-614870ea="">
				<a href="<?=BASE_URL('VongQuay/' . $minigame['id']); ?>" data-v-614870ea="">
				  <div class="tw-col-span-5" data-v-614870ea="">
					<img src="<?=mini_game($minigame['id'], 'thumb'); ?>" 
					data-src="<?=mini_game($minigame['id'], 'thumb'); ?>" class="tw-w-full lazyload isLoaded" 
					data-v-614870ea="" />
				  </div>
				  <div class="tw-col-span-12 tw-px-2 md:tw-px-3 tw-py-3 tw-h-28 tw-relative" data-v-614870ea="">
					<h4 class="tw-sub-interface-title tw-uppercase tw-text-xs md:tw-text-sm tw-font-semibold tw-text-gray-800 tw-mb-0 tw-truncate" 
					data-v-614870ea="">  <?=$minigame['name']; ?> </h4>
					<div class="tw-my-2 tw-grid tw-grid-cols-12 tw-gap-0" data-v-614870ea="">
					  <div class="tw-col-span-8 tw-text-xs tw-flex tw-items-center tw-text-gray-600 tw-sub-interface-info" data-v-614870ea="">
						<span data-v-614870ea=""> 
							Đã chơi: <b class="tw-text-red-1500" data-v-614870ea=""><?=$minigame['sudung']; ?></b>
						</span>
						<!---->
					  </div>
					  <div class="tw-col-span-4" data-v-614870ea="">
						<div class="tw-font-semibold tw-text-gray-600 tw-text-sm tw-flex tw-items-center tw-justify-end" data-v-614870ea="">
						  <i class="tw-relative tw-text-lg bx bx-show-alt" style="top: 0px;" data-v-614870ea=""></i>
						  <span class="tw-ml-1" data-v-614870ea="">
							<small data-v-614870ea="">59799</small>
						  </span>
						</div>
					  </div>
					</div>
					<div class="tw-w-full" data-v-614870ea="">
						<div class="tw-absolute tw-bottom-2 tw-right-2 tw-left-2 tw-mt-2" data-v-614870ea="">
							<button class="eKJDZl tw-old tw-text-xss tw-px-1.5"><span> 120,000đ  </span></button>
							<button class="dBVMxc tw-new-1 tw-text-xs tw-border tw-px-1.5 md:tw-px-2" data-v-614870ea="">
								<span data-v-614870ea=""> <?=$minigame['price']; ?>đ </span>
							</button>
						</div>
					</div>
				  </div>
				</a>
			</div>
			<?php } ?>
		</div>
	  </div>
	</div>
	<!-- END MINIGAME -->
	<?php }?>
	
	<?php if($CMSNAV->site('accounts') == 'ON') { ?>
    <!-- Accounts -->
    <div class="tw-bg-white tw-mb-3 tw-rounded">
		<div class="tw-header-sub-interface  tw-top-12 md:tw-top-14 tw-bg-white tw-p-2 md:tw-p-3 tw-block tw-text-base md:tw-text-xl tw-border-b w-max tw-rounded-t" style="z-index: 9;">
			<h3 class="tw-uppercase tw-font-bold tw-text-red-600"> DANH MỤC Account </h3>
		</div>
		
		
	  <div class="tw-bg-gray-100 tw-p-2 md:tw-py-4">
		<div class="tw-grid tw-grid-cols-12 tw-gap-2 md:tw-gap-4">
		        <?php foreach($CMSNAV->get_list("SELECT * FROM `groups` WHERE `display` = 'SHOW' ") as $group) { ?>
						<div class="tw-col-span-6 sm:tw-col-span-3 tw-bg-white tw-shadow-sm tw-relative" data-v-614870ea="">
				<a href="<?=BASE_URL('Accounts/'.$group['id']);?>" data-v-614870ea="">
				  <div class="tw-col-span-5" data-v-614870ea="">
					<img src="<?=$group['img'];?>" 
					data-src=" <?=$group['img'];?>" class="tw-w-full lazyload isLoaded" 
					data-v-614870ea="" />
				  </div>
				  <div class="tw-col-span-12 tw-px-2 md:tw-px-3 tw-py-3 tw-h-28 tw-relative" data-v-614870ea="">
					<h4 class="tw-sub-interface-title tw-uppercase tw-text-xs md:tw-text-sm tw-font-semibold tw-text-gray-800 tw-mb-0 tw-truncate" 
					data-v-614870ea="">  <?=$group['title'];?> </h4>
					<div class="tw-my-2 tw-grid tw-grid-cols-12 tw-gap-0" data-v-614870ea="">
					  <div class="tw-col-span-8 tw-text-xs tw-flex tw-items-center tw-text-gray-600 tw-sub-interface-info" data-v-614870ea="">
						<span data-v-614870ea=""> 
							Số tài khoản hiện có: <b class="tw-text-red-1500" data-v-614870ea=""><?=format_cash($CMSNAV->num_rows("SELECT * FROM `accounts` WHERE `groups` = '".$group['id']."' AND `username` IS NULL "));?></b>
						</span>
						<!---->
					  </div>
					  <div class="tw-col-span-4" data-v-614870ea="">
						<div class="tw-font-semibold tw-text-gray-600 tw-text-sm tw-flex tw-items-center tw-justify-end" data-v-614870ea="">
						</div>
					  </div>
					</div>
					<div class="tw-w-full" data-v-614870ea="">
						<div class="tw-absolute tw-bottom-2 tw-right-2 tw-left-2 tw-mt-2" data-v-614870ea="">
							<button class="dBVMxc tw-new-1 tw-text-xs tw-border tw-px-1.5 md:tw-px-2" data-v-614870ea="">
								<span data-v-614870ea=""> <?=$CMSNAV->site('giamgia');?> </span>
							</button>
						</div>
					</div>
				  </div>
				</a>
			</div>
			<?php } ?>
		</div>
	  </div>
	</div>
	<?php }?>
    <?php if($CMSNAV->site('caythue') == 'ON') { ?>
    <!-- Cày Thuê Services -->
    <div class="tw-bg-white tw-mb-3 tw-rounded">
		<div class="tw-header-sub-interface  tw-top-12 md:tw-top-14 tw-bg-white tw-p-2 md:tw-p-3 tw-block tw-text-base md:tw-text-xl tw-border-b w-max tw-rounded-t" style="z-index: 9;">
			<h3 class="tw-uppercase tw-font-bold tw-text-red-600"> DANH MỤC CÀY THUÊ </h3>
		</div>
		
		
	  <div class="tw-bg-gray-100 tw-p-2 md:tw-py-4">
		<div class="tw-grid tw-grid-cols-12 tw-gap-2 md:tw-gap-4">
		        <?php foreach($CMSNAV->get_list("SELECT * FROM `category_caythue` WHERE `display` = 'SHOW' ") as $category) { ?>
						<div class="tw-col-span-6 sm:tw-col-span-3 tw-bg-white tw-shadow-sm tw-relative" data-v-614870ea="">
				<a href="<?=BASE_URL('dich-vu/'.$category['id']);?>" data-v-614870ea="">
				  <div class="tw-col-span-5" data-v-614870ea="">
					<img src="<?=$category['img'];?>" 
					data-src="<?=$category['img'];?>" class="tw-w-full lazyload isLoaded" 
					data-v-614870ea="" />
				  </div>
				  <div class="tw-col-span-12 tw-px-2 md:tw-px-3 tw-py-3 tw-h-28 tw-relative" data-v-614870ea="">
					<h4 class="tw-sub-interface-title tw-uppercase tw-text-xs md:tw-text-sm tw-font-semibold tw-text-gray-800 tw-mb-0 tw-truncate" 
					data-v-614870ea=""> <?=$category['title'];?> </h4>
					<div class="tw-my-2 tw-grid tw-grid-cols-12 tw-gap-0" data-v-614870ea="">
						  <div class="tw-col-span-8 tw-text-xs tw-flex tw-items-center tw-text-gray-600 tw-sub-interface-info" data-v-614870ea="">
							<span data-v-614870ea=""> 
								Đã bán: <b class="tw-text-red-1500" data-v-614870ea="">10,000</b>
							</span>
							<!---->
						  </div>
						  <div class="tw-col-span-4" data-v-614870ea="">
							<div class="tw-font-semibold tw-text-gray-600 tw-text-sm tw-flex tw-items-center tw-justify-end" data-v-614870ea="">
							  <i class="tw-relative tw-text-lg bx bx-show-alt" style="top: 0px;" data-v-614870ea=""></i>
							  <span class="tw-ml-1" data-v-614870ea="">
								<small data-v-614870ea="">10,000</small>
							  </span>
							</div>
						  </div>
						</div>
						<div class="tw-absolute tw-bottom-2 tw-right-2 tw-left-2 tw-mt-2">
						   <button class="eKJDZl tw-new tw-text-xs tw-border tw-px-1.5"><span> <?=$CMSNAV->site('giamgia');?> </span></button>
						</div>
					  </div>
					</a>
				</div>
				<?php }?>
		</div>
	  </div>
	</div>
    <!-- Cày Thuê Services -->
    <?php }?>
    
    <?php if($CMSNAV->site('robux') == 'ON') { ?>
    <!-- Robux Services -->
    <div class="tw-bg-white tw-mb-3 tw-rounded">
        <div class="tw-header-sub-interface tw-sticky tw-top-12 md:tw-top-14 tw-bg-white tw-p-2 md:tw-p-3 tw-block tw-text-base md:tw-text-xl tw-border-b w-max tw-rounded-t" style="z-index: 999;">
            <h3 class="tw-uppercase tw-font-bold tw-text-red-600">
                DANH MỤC ROBUX          </h3>
        </div>
        <div class="tw-bg-gray-100 tw-p-2 md:tw-py-4">
            <div class="tw-grid tw-grid-cols-12 tw-gap-2 md:tw-gap-4">
                <!---->
                <?php foreach($CMSNAV->get_list("SELECT * FROM `category_robux` WHERE `display` = 'SHOW' ") as $category) { ?>
                <div class="tw-col-span-6 sm:tw-col-span-3 tw-bg-white tw-shadow-sm tw-relative" data-v-614870ea="">
					<a href="<?=BASE_URL('Robux/'.$category['id']);?>" data-v-614870ea="">
					  <div class="tw-col-span-5" data-v-614870ea="">
						<img src="<?=$category['img'];?>" 
							data-src="<?=$category['img'];?>" class="tw-w-full lazyload isLoaded" data-v-614870ea="" />
					  </div>
					  <div class="tw-col-span-12 tw-px-2 md:tw-px-3 tw-py-3 tw-h-28 tw-relative" data-v-614870ea="">
						<h4 class="tw-sub-interface-title tw-uppercase tw-text-xs md:tw-text-sm tw-font-semibold tw-text-gray-800 tw-mb-0 tw-truncate" data-v-614870ea=""> 
							<?=$category['title'];?>
						</h4>
						<div class="tw-my-2 tw-grid tw-grid-cols-12 tw-gap-0" data-v-614870ea="">
						  <div class="tw-col-span-8 tw-text-xs tw-flex tw-items-center tw-text-gray-600 tw-sub-interface-info" data-v-614870ea="">
							<span data-v-614870ea=""> 
								Đã bán: <b class="tw-text-red-1500" data-v-614870ea="">10,000</b>
							</span>
							<!---->
						  </div>
						  <div class="tw-col-span-4" data-v-614870ea="">
							<div class="tw-font-semibold tw-text-gray-600 tw-text-sm tw-flex tw-items-center tw-justify-end" data-v-614870ea="">
							  <i class="tw-relative tw-text-lg bx bx-show-alt" style="top: 0px;" data-v-614870ea=""></i>
							  <span class="tw-ml-1" data-v-614870ea="">
								<small data-v-614870ea="">10,000</small>
							  </span>
							</div>
						  </div>
						</div>
						<div class="tw-absolute tw-bottom-2 tw-right-2 tw-left-2 tw-mt-2">
						   <button class="eKJDZl tw-new tw-text-xs tw-border tw-px-1.5"><span> <?=$CMSNAV->site('giamgia');?> </span></button>
						</div>
					  </div>
					</a>
				</div>
				<?php }?>
                </div>
                                
            </div>
        </div>
    <!-- Robux Services -->
    <?php }?>
    
    <?php if($CMSNAV->site('gamepass') == 'ON') { ?>
    <!-- Gamepass Services -->
    <div class="tw-bg-white tw-mb-3 tw-rounded">
        <div class="tw-header-sub-interface tw-sticky tw-top-12 md:tw-top-14 tw-bg-white tw-p-2 md:tw-p-3 tw-block tw-text-base md:tw-text-xl tw-border-b w-max tw-rounded-t" style="z-index: 999;">
            <h3 class="tw-uppercase tw-font-bold tw-text-red-600">
                DANH MỤC GAMEPASS          </h3>
        </div>
        <div class="tw-bg-gray-100 tw-p-2 md:tw-py-4">
            <div class="tw-grid tw-grid-cols-12 tw-gap-2 md:tw-gap-4">
                <?php foreach($CMSNAV->get_list("SELECT * FROM `category_gamepass` WHERE `display` = 'SHOW' ") as $category) { ?>
                <div class="tw-col-span-6 sm:tw-col-span-3 tw-bg-white tw-shadow-sm tw-relative" data-v-614870ea="">
					<a href="<?=BASE_URL('gpasssv/'.$category['id']);?>" data-v-614870ea="">
					  <div class="tw-col-span-5" data-v-614870ea="">
						<img src="<?=$category['img'];?>" 
							data-src="<?=$category['img'];?>" class="tw-w-full lazyload isLoaded" data-v-614870ea="" />
					  </div>
					  <div class="tw-col-span-12 tw-px-2 md:tw-px-3 tw-py-3 tw-h-28 tw-relative" data-v-614870ea="">
						<h4 class="tw-sub-interface-title tw-uppercase tw-text-xs md:tw-text-sm tw-font-semibold tw-text-gray-800 tw-mb-0 tw-truncate" data-v-614870ea=""> 
							<?=$category['title'];?>
						</h4>
						<div class="tw-my-2 tw-grid tw-grid-cols-12 tw-gap-0" data-v-614870ea="">
						  <div class="tw-col-span-8 tw-text-xs tw-flex tw-items-center tw-text-gray-600 tw-sub-interface-info" data-v-614870ea="">
							<span data-v-614870ea=""> 
								Đã bán: <b class="tw-text-red-1500" data-v-614870ea="">10,000</b>
							</span>
							<!---->
						  </div>
						  <div class="tw-col-span-4" data-v-614870ea="">
							<div class="tw-font-semibold tw-text-gray-600 tw-text-sm tw-flex tw-items-center tw-justify-end" data-v-614870ea="">
							  <i class="tw-relative tw-text-lg bx bx-show-alt" style="top: 0px;" data-v-614870ea=""></i>
							  <span class="tw-ml-1" data-v-614870ea="">
								<small data-v-614870ea="">10,000</small>
							  </span>
							</div>
						  </div>
						</div>
						<div class="tw-absolute tw-bottom-2 tw-right-2 tw-left-2 tw-mt-2">
						   <button class="eKJDZl tw-new tw-text-xs tw-border tw-px-1.5"><span> <?=$CMSNAV->site('giamgia');?> </span></button>
						</div>
					  </div>
					</a>
				</div>
				<?php }?>
                </div>
                                
            </div>
        </div>
    <!-- Gamepass Services -->
    <?php }?>
    <div class="tw-preview tw-fixed tw-top-0 tw-right-0 tw-left-0 tw-bottom-0 tw-flex tw-items-center tw-justify-center tw-p-2" style="z-index: 1002; background: rgba(93, 93, 93, 0.77); display: none;" id="modalThongBao">
    <div class="tw-relative tw-max-w-lg tw-w-full tw-mx-auto tw-bg-white tw-rounded">
        <span class="tw-absolute tw-inline-block tw-px-3 tw-h-8 tw-w-8 tw-flex tw-items-center tw-justify-center tw-border-4 tw-border-white tw-rounded-full tw-text-sm tw-font-bold tw-cursor-pointer tw-py-1 tw-text-white tw-bg-gray-800" onclick="closeModalindex()" style="top: -15px; right: -5px; z-index: 100;"><i class="bx bx-x"></i></span> 
        <div class="tw-p-2 tw-bg-red-600 tw-text-white tw-font-bold tw-text-center tw-rounded-t"><i class="tw-relative bx bxs-bell-ring tw-text-xl" style="top: 3px;"></i>
            THÔNG BÁO
        </div>
        <div class="tw-p-2 tw-py-4" style="max-height: auto; overflow-y: auto;">
            <div class="relative tw-leading-7">
                                <?=$CMSNAV->site('thongbao');?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function FuncHideModal() {
        var x = document.getElementById("indexModal");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    </script>

    <script type="text/javascript">
    $("#NapThe").on("click", function() {
        $('#NapThe').html('<i class="fa fa-spinner fa-spin"></i> ĐANG XỬ LÝ').prop('disabled',
            true);
        $.ajax({
            url: "<?=BASE_URL("assets/ajaxs/NapThe.php");?>",
            method: "POST",
            data: {
                loaithe: $("#loaithe").val(),
                menhgia: $("#menhgia").val(),
                seri: $("#seri").val(),
                pin: $("#pin").val()
            },
            success: function(response) {
                $("#thongbao").html(response);
                $('#NapThe').html(
                        'NẠP NGAY')
                    .prop('disabled', false);
            }
        });
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
    $("#modalThongBao").show();
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        setTimeout(e => {
            GetCard24()
        }, 0)
    });

    function GetCard24() {
        $.ajax({
            url: "<?=BASE_URL('api/loaithe.php');?>",
            method: "GET",
            success: function(response) {
                $("#loaithe").html(response);
            }
        });
        $.ajax({
            url: "<?=BASE_URL('api/menhgia.php');?>",
            method: "GET",
            success: function(response) {
                $("#menhgia").html(response);
            }
        });

    }
    </script>
<?php 
    require_once(__DIR__."/public/client/Footer.php");
?>