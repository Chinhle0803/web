<?php
    require_once("../../config/config.php");
    require_once("../../config/function.php");
    $title = 'DANH MỤC | '.$CMSNAV->site('tenweb');
    require_once("../../public/client/Header.php");
    require_once("../../public/client/Nav.php");
?>
<?php
/* BẢN QUYỀN THUỘC VỀ CMSNT.CO | NTTHANH LEADER NT TEAM */
if(isset($_GET['id']))
{
    $row = $CMSNAV->get_row(" SELECT * FROM `category` WHERE `id` = '".check_string($_GET['id'])."'  ");
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
<div class="tw-max-w-6xl tw-mx-auto">
<div class="tw-bg-white tw-mb-3 tw-rounded">
        <div class="tw-header-sub-interface tw-sticky tw-top-12 md:tw-top-14 tw-bg-white tw-p-2 md:tw-p-3 tw-block tw-text-base md:tw-text-xl tw-border-b w-max tw-rounded-t" style="z-index: 999;">
            <h3 class="tw-uppercase tw-font-bold tw-text-red-600">
                Danh Mục <?=$row['title'];?>             </h3>
        </div>
        <div class="tw-bg-gray-100 tw-p-2 md:tw-py-4">
            <div class="tw-grid tw-grid-cols-12 tw-gap-2 md:tw-gap-4">
                <?php foreach($CMSNAV->get_list("SELECT * FROM `groups` WHERE `display` = 'SHOW' AND `category` = '".check_string($_GET['id'])."'  ") as $group) { ?>
                <div class="tw-col-span-6 sm:tw-col-span-6 md:tw-col-span-3 tw-bg-white tw-shadow-sm tw-rounded-b-sm tw-border md:tw-border-0 md:tw-rounded-b tw-relative">
                    
                    <!---->
                    <a href="<?=BASE_URL('Accounts/'.$group['id']);?>" class="">
                                            <div class="tw-col-span-5"><img class="tw-w-full tw-rounded-t-sm md:tw-rounded-t lazyLoad isLoaded h-28 md:h-48" src="<?=BASE_URL($group['img']);?>"></div>
                        <div class="tw-col-span-12 tw-px-2 tw-py-3 tw-h-28 tw-relative">
                            <h4 class="tw-sub-interface-title tw-uppercase tw-text-xs tw-font-semibold tw-text-gray-800 tw-mb-0">
                                <?=$group['title'];?>                            </h4>
                            <div class="tw-my-1 tw-text-xs tw-text-gray-600 tw-sub-interface-info">
                                <span>
                                                                            Số tài khoản: <b class="tw-text-red-500"><?=format_cash($CMSNAV->num_rows("SELECT * FROM `accounts` WHERE `groups` = '".$group['id']."' AND `username` IS NULL "));?></b>
                                                                    </span>
                                <!---->
                            </div>
                                                    </div>
                    </a>
                </div>
                <?php }?>
                </div>
                                
            </div>
        </div>

<?php 
    require_once("../../public/client/Footer.php");
?>