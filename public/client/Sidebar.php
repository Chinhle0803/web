<?php if($CMSNAV->site('theme_web') == 'theme1') { ?>
<div id="menuProfile" class="tw-fixed tw-top-0 tw-bottom-0 tw-w-72 tw-bg-gray-100 tw-bg-white tw-border-r-2 tw-pl-4 tw-pt-4" style="z-index: 1001; left: -2px; display:none;">
    <div style="max-height: 95vh; overflow: hidden auto;">
        <div class="tw-w-full md:tw-bg-transparent tw-p-2 md:tw-p-0 tw-sticky tw-top-20" style="z-index: 999;">
            <div class="tw-grid tw-grid-cols-12 tw-gap-2 tw-pr-2 tw-pb-2">
                <div class="tw-col-span-3 tw-flex tw-items-center tw-justify-content"><img class="tw-w-full tw-rounded-full tw-border" src="/assets/images/unknown-avatar.jpg" /></div>
                <div class="tw-col-span-9">
                    <p class="tw-flex tw-items-center">
                        <b class="tw-mr-1">ID:</b>
                        <?=$getUser['id'];?>                            <span class="tw-w-4 tw-h-4 tw-flex tw-items-center tw-justify-center tw-ml-2 tw-text-gray-600 tw-cursor-pointer" onclick="copy('1476')"><i class="bx bxs-copy"></i></span>
                    </p>
                    <p class="tw-text-sm"><b>Số dư:</b> <span class="tw-text-red-600 tw-font-bold"><?=format_cash($getUser['money']);?>đ</span>
                    </p>
                    <p class="tw-text-base"><b>Số dư Robux:</b> <span class="tw-text-red-600 tw-font-bold"><?=format_cash($getUser['robux']);?>😈</span>                </p>
                </div>
            </div>
            <div class="tw-mb-4 tw-w-3/4 tw-border-b tw-border-gray-200"></div>

            <div class="tw-mb-3">
                    <div class="tw-relative tw-font-semibold tw-text-gray-800">
                        <span class="tw-h-7 tw-w-7 tw-rounded-full tw-inline-flex tw-justify-center tw-items-center tw-absolute tw-bg-red-500 tw-text-white" style="top: -2px;"><i class="tw-text-lg bx bxs-user"></i></span>
                        <span class="tw-ml-10 tw-block tw-text-red-600">Tài khoản </span>
                    </div>
                    <div class="tw-ml-11 tw-mt-1 tw-text-sm tw-font-semibold tw-text-gray-700">
                        <ul>
                            <a href="/user/profile" aria-current="page" class="tw-block tw-py-1 nuxt-link-exact-active nuxt-link-active tw-text-red-600">Thông tin chung </a>
                            <a href="/user/changepassword" class="tw-block tw-py-1">Đổi mật khẩu</a>
                        </ul>
                    </div>
                </div>
                <div class="tw-mb-3">
                    <div class="tw-relative tw-font-semibold tw-text-gray-800">
                        <span class="tw-h-7 tw-w-7 tw-rounded-full tw-inline-flex tw-justify-center tw-items-center tw-absolute tw-bg-gray-200" style="top: -2px;"><i class="tw-text-lg bx bxs-game"></i></span>
                        <span class="tw-ml-10 tw-block">Trò chơi </span>
                    </div>
                    <div class="tw-ml-11 tw-mt-1 tw-text-sm tw-font-semibold tw-text-gray-700">
                        <ul>
                            <a href="/user/robux" class="tw-block tw-py-1">Rút vật phẩm</a>
                        </ul>
                    </div>
                </div>
                <div class="tw-mb-3">
                    <div class="tw-relative tw-font-semibold tw-text-gray-800">
                        <span class="tw-h-7 tw-w-7 tw-rounded-full tw-inline-flex tw-justify-center tw-items-center tw-absolute tw-bg-gray-200" style="top: -2px;"><i class="tw-text-lg bx bxs-wallet-alt"></i></span>
                        <span class="tw-ml-10 tw-block">Giao dịch </span>
                    </div>
                    <div class="tw-ml-11 tw-mt-1 tw-text-sm tw-font-semibold tw-text-gray-700">
                        <ul>
                            <a href="/user/recharge" class="tw-block tw-py-1">Nạp thẻ cào tự động</a>
                            <a href="#" class="tw-block tw-py-1" data-toggle="modal" data-target="#chargeModal">Nạp qua ATM/MOMO</a>
                        </ul>
                        
                    </div>
                </div>
                <div class="tw-mb-3">
                    <div class="tw-relative tw-font-semibold tw-text-gray-800">
                        <span class="tw-h-7 tw-w-7 tw-rounded-full tw-inline-flex tw-justify-center tw-items-center tw-absolute tw-bg-gray-200" style="top: -2px;"><i class="tw-text-lg bx bxs-notepad"></i></span>
                        <span class="tw-ml-10 tw-block">Lịch sử</span>
                    </div>
                    <div class="tw-ml-11 tw-mt-1 tw-text-sm tw-font-semibold tw-text-gray-700">
                        <ul>
                            <?php if($CMSNAV->site('accounts') == 'ON') { ?>
                            <a href="/user/history/acc" class="tw-block tw-py-1">Lịch sử mua nick</a>
                            <?php }?>
                            <?php if($CMSNAV->site('caythue') == 'ON') { ?>
                            <a href="/user/history/caythue" class="tw-block tw-py-1">Lịch sử cày thuê</a>
                            <?php }?>
                            <?php if($CMSNAV->site('robux') == 'ON') { ?>
                            <a href="/user/history/robux" class="tw-block tw-py-1">Lịch sử mua robux</a>
                            <?php }?>
                            <?php if($CMSNAV->site('gamepass') == 'ON') { ?>
                            <a href="/user/history/gamepass" class="tw-block tw-py-1">Lịch sử mua gamepass và devilfruits vĩnh viễn</a>
                            <?php }?>
                            <a href="/user/recharge" class="tw-block tw-py-1">Lịch sử nạp thẻ</a>
                            <?php if($CMSNAV->site('minigame') == 'ON') { ?>
                            <a href="/user/rutvatpham" class="tw-block tw-py-1">Lịch sử rút vật phẩm</a>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <button id="menuHide" class="
            md:tw-hidden
            tw-absolute
            tw-text-white
            tw-h-10
            tw-px-3
            tw-w-10
            tw-rounded-full
            tw-bg-red-600
            " style="z-index: 1; top: 45%; right: -20px;">
            <i class="bx bxs-chevron-left"></i>
        </button>
    </div>
</div>

<button id="menuToggle" class="md:tw-hidden tw-fixed tw-text-white tw-h-11 tw-px-3 tw-rounded-r-full tw-font-bold" style="z-index: 1001; top: 45%; left: -2px; background: rgba(255, 0, 0, 0.48);">
    <i class="tw-relative bx bx-menu tw-text-xl" style="top: -3px;"></i>
    <div class="tw-absolute tw-text-xs tw-inline-block" style="left: 8px; top: 23px;"><small>Menu</small>
    </div>
</button>
</section>
<div class="tw-bg-gray-100" style="min-height: 50vh; !important">
        <div class="tw-py-6 tw-max-w-6xl tw-mx-auto tw-grid tw-grid-cols-10 tw-gap-2 tw-px-2 tw-relative">
            <div class="tw-col-span-2 tw-hidden md:tw-block">
        <div class="tw-w-full md:tw-bg-transparent tw-p-2 md:tw-p-0 tw-sticky tw-top-20" style="z-index: 999;">
            <div class="tw-grid tw-grid-cols-12 tw-gap-2 tw-pr-2 tw-pb-2">
                <div class="tw-col-span-3 tw-flex tw-items-center tw-justify-content"><img class="tw-w-full tw-rounded-full tw-border" src="/assets/images/unknown-avatar.jpg" />
                </div>
                <div class="tw-col-span-9">
                    <p class="tw-flex tw-items-center">
                        <b class="tw-mr-1">ID:</b>
                        <?=$getUser['id'];?>                            <span class="tw-w-4 tw-h-4 tw-flex tw-items-center tw-justify-center tw-ml-2 tw-text-gray-600 tw-cursor-pointer" onclick="copy('<?=$getUser['id'];?>')"><i class="bx bxs-copy"></i></span></p>
                    <p class="tw-text-sm"><b>Số dư:</b> <span class="tw-text-red-600 tw-font-bold"><?=format_cash($getUser['money']);?>đ</span></p>
                    <p class="tw-text-sm"><b>Số dư Robux:</b> <span class="tw-text-red-600 tw-font-bold"><?=format_cash($getUser['robux']);?>$</span></p>
                </div>
            </div>
            <div class="tw-mb-4 tw-w-3/4 tw-border-b tw-border-gray-200"></div>
            <div>
                <div class="tw-mb-3">
                    <div class="tw-relative tw-font-semibold tw-text-gray-800">
                        <span class="tw-h-7 tw-w-7 tw-rounded-full tw-inline-flex tw-justify-center tw-items-center tw-absolute tw-bg-red-500 tw-text-white" style="top: -2px;"><i class="tw-text-lg bx bxs-user"></i></span>
                        <span class="tw-ml-10 tw-block tw-text-red-600">Tài khoản </span>
                    </div>
                    <div class="tw-ml-11 tw-mt-1 tw-text-sm tw-font-semibold tw-text-gray-700">
                        <ul>
                            <a href="/user/profile" aria-current="page" class="tw-block tw-py-1 nuxt-link-exact-active nuxt-link-active tw-text-red-600">Thông tin chung </a>
                            <a href="/user/changepassword" class="tw-block tw-py-1">Đổi mật khẩu</a>
                        </ul>
                    </div>
                </div>
                <div class="tw-mb-3">
                    <div class="tw-relative tw-font-semibold tw-text-gray-800">
                        <span class="tw-h-7 tw-w-7 tw-rounded-full tw-inline-flex tw-justify-center tw-items-center tw-absolute tw-bg-gray-200" style="top: -2px;"><i class="tw-text-lg bx bxs-game"></i></span>
                        <span class="tw-ml-10 tw-block">Trò chơi </span>
                    </div>
                    <div class="tw-ml-11 tw-mt-1 tw-text-sm tw-font-semibold tw-text-gray-700">
                        <ul>
                            <a href="/user/robux" class="tw-block tw-py-1">Rút vật phẩm</a>
                        </ul>
                    </div>
                </div>
                <div class="tw-mb-3">
                    <div class="tw-relative tw-font-semibold tw-text-gray-800">
                        <span class="tw-h-7 tw-w-7 tw-rounded-full tw-inline-flex tw-justify-center tw-items-center tw-absolute tw-bg-gray-200" style="top: -2px;"><i class="tw-text-lg bx bxs-wallet-alt"></i></span>
                        <span class="tw-ml-10 tw-block">Nạp tiền </span>
                    </div>
                    <div class="tw-ml-11 tw-mt-1 tw-text-sm tw-font-semibold tw-text-gray-700">
                        <ul>
                            <a href="/user/recharge" class="tw-block tw-py-1">Nạp thẻ cào (tự động)</a>
                            <a class="tw-block tw-py-1" data-toggle="modal" data-target="#chargeModal">Nạp qua ATM/MOMO</a>
                        </ul>
                    </div>
                </div>
                <div class="tw-mb-3">
                    <div class="tw-relative tw-font-semibold tw-text-gray-800">
                        <span class="tw-h-7 tw-w-7 tw-rounded-full tw-inline-flex tw-justify-center tw-items-center tw-absolute tw-bg-gray-200" style="top: -2px;"><i class="tw-text-lg bx bxs-notepad"></i></span>
                        <span class="tw-ml-10 tw-block">Lịch sử</span>
                    </div>
                    <div class="tw-ml-11 tw-mt-1 tw-text-sm tw-font-semibold tw-text-gray-700">
                        <ul>
                            <?php if($CMSNAV->site('accounts') == 'ON') { ?>
                            <a href="/user/history/acc" class="tw-block tw-py-1">Lịch sử mua nick</a>
                            <?php }?>
                            <?php if($CMSNAV->site('caythue') == 'ON') { ?>
                            <a href="/user/history/caythue" class="tw-block tw-py-1">Lịch sử cày thuê</a>
                            <?php }?>
                            <?php if($CMSNAV->site('robux') == 'ON') { ?>
                            <a href="/user/history/robux" class="tw-block tw-py-1">Lịch sử mua robux</a>
                            <?php }?>
                            <?php if($CMSNAV->site('gamepass') == 'ON') { ?>
                            <a href="/user/history/gamepass" class="tw-block tw-py-1">Lịch sử mua gamepass và devilfruits vĩnh viễn</a>
                            <?php }?>
                            <a href="/user/recharge" class="tw-block tw-py-1">Lịch sử nạp thẻ</a>
                            <?php if($CMSNAV->site('minigame') == 'ON') { ?>
                            <a href="/user/rutvatpham" class="tw-block tw-py-1">Lịch sử rút vật phẩm</a>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<!--THEME 2-->
<?php if($CMSNAV->site('theme_web') == 'theme2') { ?>
<div class="col-span-8 sm:col-span-3 md:col-span-2 lg:col-span-2 xl:col-span-2 lg:px-0 px-2">
    <div class="mb-4 v-menu-account">
        <h2 class="mb-2 border-l-4 border-red-800 px-3 select-none text-white text-xl md:text-2xl font-bold">
            Tài khoản</h2>
        <ul class="pl-2 text-white">
            <li class="py-1"><a href="<?=BASE_URL('user/profile');?>" class=""><span
                        class="relative mr-2 text-lg" style="top: 1.5px;"><i class="bx bxs-user-circle"></i></span>Thông
                    tin tài khoản</a></li>
            <li class="py-1"><a href="<?=BASE_URL('bien-dong-so-du/');?>" class=""><span class="relative mr-2 text-lg"
                        style="top: 1.5px;"><i class="bx bxs-dollar-circle" aria-hidden="true"></i></span>Biến động số
                    dư</a></li>
            <li class="py-1"><a href="<?=BASE_URL('user/changepassword');?>" class=""><span
                        class="relative mr-2 text-lg" style="top: 1.5px;"><i class="bx bxs-lock"></i></span>Đổi mật
                    khẩu</a></li>
        </ul>
    </div>
    <div class="my-4 v-menu-account">
        <h2 class="mb-2 border-l-4 border-red-800 px-3 select-none text-white text-xl md:text-2xl font-bold">
            GIAO DỊCH
        </h2>
        <ul class="pl-2 text-white font-medium">
            <li class="py-1">
                <a href="<?=BASE_URL('user/recharge');?>" class="">
                    <span class="relative mr-2 text-lg" style="top: 1.5px;"><i class="bx bxs-star"></i></span>Nạp thẻ
                    cào tự động
                </a>
            </li>
            <li class="py-1"><a href="<?=BASE_URL('nap-tien-qua-ngan-hang/');?>" aria-current="page"><span class="relative mr-2 text-lg"
                        style="top:1.5px;"><i class="bx bxs-credit-card"></i></span>Nạp qua ATM/MOMO</a></li>
            <li class="py-1">
                <a href="<?=BASE_URL('user/history/acc');?>" class="">
                    <span class="relative mr-2 text-lg" style="top: 1.5px;"><i class="bx bxs-receipt"></i></span>Lịch sử
                    mua nick
                </a>
            </li>
            <li class="py-1">
                <a href="<?=BASE_URL('user/history/caythue');?>" class="">
                    <span class="relative mr-2 text-lg" style="top: 1.5px;"><i class="bx bxs-receipt"></i></span>Lịch sử
                    cày thuê
                </a>
            </li>
            <li class="py-1">
                <a href="<?=BASE_URL('user/history/robux');?>" class="">
                    <span class="relative mr-2 text-lg" style="top: 1.5px;"><i class="bx bxs-receipt"></i></span>Lịch sử mua robux
                </a>
            </li>
            <li class="py-1">
                <a href="<?=BASE_URL('user/history/gamepass');?>" class="">
                    <span class="relative mr-2 text-lg" style="top: 1.5px;"><i class="bx bxs-receipt"></i></span>Lịch sử mua gamepass và devilfruits
                </a>
            </li>
        </ul>
    </div>
</div>
<?php }?>