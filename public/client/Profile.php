<?php
    require_once("../../config/config.php");
    require_once("../../config/function.php");
    $title = 'THÔNG TIN | '.$CMSNAV->site('tenweb');
    require_once("../../public/client/Header.php");
    require_once("../../public/client/Nav.php");
    CheckLogin();
?>

<?php if($CMSNAV->site('theme_web') == 'theme1') { ?>
        <?php require_once('Sidebar.php');?>
        <div class="tw-col-span-12 md:tw-col-span-8">
                <div class="tw-grid tw-grid-cols-12 tw-gap-4">
                    <div class="tw-block tw-col-span-12 md:tw-hidden md:tw-col-span-4">
                        <div class="tw-grid tw-grid-cols-12 tw-gap-2 tw-p-2 tw-bg-white tw-rounded">
                            <div class="tw-col-span-3 tw-flex tw-items-center tw-justify-content"><img class="tw-w-full tw-rounded-full tw-border" src="/assets/images/unknown-avatar.jpg" /></div>
                            <div class="tw-col-span-9 tw-flex tw-items-center">
                                <div class="tw-ml-2">
                                    <p><b>ID:</b> <?=$getUser['id'];?></p>
                                    <p><b>User:</b> <?=$getUser['username'];?></p>
                                    <p class="tw-text-base"><b>Số dư:</b> <span class="tw-text-red-600 tw-font-bold"><?=format_cash($getUser['money']);?>đ</span></p>
                                    <p class="tw-text-base"><b>Số dư Robux:</b> <span class="tw-text-red-600 tw-font-bold"><?=format_cash($getUser['robux']);?>😈</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tw-col-span-12">
                        <!---->
                        <div class="tw-grid tw-grid-cols-12 tw-gap-2 tw-bg-white tw-rounded tw-p-2 tw-px-3 tw-mb-1 tw-font-semibold">
                            <div class="tw-col-span-5">Tên tài khoản</div>
                            <div class="tw-col-span-7">
                            <?=$getUser['username'];?>                            </div>
                        </div>
                        <div class="tw-grid tw-grid-cols-12 tw-gap-2 tw-bg-white tw-rounded tw-p-2 tw-px-3 tw-mb-1 tw-font-semibold">
                            <div class="tw-col-span-5">Số dư</div>
                            <div class="tw-col-span-7">
                                <?=format_cash($getUser['money']);?> đ
                            </div>
                        </div>
                        <div class="tw-grid tw-grid-cols-12 tw-gap-2 tw-bg-white tw-rounded tw-p-2 tw-px-3 tw-mb-1 tw-font-semibold">
                            <div class="tw-col-span-5">Số dư Robux</div>
                            <div class="tw-col-span-7">
                                <?=format_cash($getUser['robux']);?>  💳
                            </div>
                        </div>
                        <div class="tw-grid tw-grid-cols-12 tw-gap-2 tw-bg-white tw-rounded tw-p-2 tw-px-3 tw-mb-1 tw-font-semibold">
                            <div class="tw-col-span-5">Nhóm tài khoản</div>
                            <div class="tw-col-span-7">
                                Thành viên                            </div>
                        </div>
                        <div class="tw-grid tw-grid-cols-12 tw-gap-2 tw-bg-white tw-rounded tw-p-2 tw-px-3 tw-mb-1 tw-font-semibold">
                            <div class="tw-col-span-5">Ngày tham gia</div>
                            <div class="tw-col-span-7">
                                 <?=$getUser['createdate'];?>                            </div>
                        </div>
                        <div class="tw-grid tw-grid-cols-12 tw-gap-2 tw-bg-white tw-rounded tw-p-2 tw-px-3 tw-mb-1 tw-font-semibold">
                            <div class="tw-col-span-5 tw-flex tw-items-center">Thoát</div>
                            <div class="tw-col-span-7">
                                <a href="<?=BASE_URL('Auth/Logout');?>">
                                <button class="tw-text-xs focus:tw-outline-none tw-px-2 tw-py-1 tw-bg-red-500 tw-rounded tw-text-white tw-font-bold">
                                    Đăng xuất
                                </button>
                                </a>
                            </div>
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
<div class="w-full max-w-6xl mx-auto pt-6 md:pt-8 pb-8">
    <div class="grid grid-cols-8 gap-4 md:p-4 bg-box-dark">
        <?php require_once('Sidebar.php');?>
        <div class="col-span-8 sm:col-span-5 md:col-span-6 lg:col-span-6 xl:col-span-6 px-2 md:px-0">
            <div class="v-bg w-full mb-5">
                <h2 class="v-title border-l-4 border-red-800 px-3 select-none text-white text-xl md:text-2xl font-bold">
                    THÔNG TIN TÀI KHOẢN</h2>
                <div class="v-table-content-2">
                    <div class="py-3 px-4">
                        <table class="table-auto w-full">
                            <tbody class="text-sm select-text">
                                <tr class="v-border-hr-2 rounded-none border-b border-gray-200 py-10">
                                    <td class="v-account-text py-2 font-bold text-white">ID TÀI KHOẢN</td>
                                    <td class="v-table-title font-bold px-2 py-2 text-white uppercase"><span
                                            class="py-1 px-3 bg-red-600 text-white rounded"><?=$getUser['id'];?></span>
                                    </td>
                                </tr>
                                <tr class="v-border-hr-2 rounded-none border-b border-gray-200 py-10">
                                    <td class="v-account-text py-2 font-bold text-white">TÊN TÀI KHOẢN</td>
                                    <td class="v-table-title px-2 py-2 text-white"><?=$getUser['username'];?></td>
                                </tr>
                                <tr class="v-border-hr-2 rounded-none border-b border-gray-200 py-10">
                                    <td class="v-account-text py-2 font-bold text-white">SỐ DƯ</td>
                                    <td class="px-2 py-2 text-white"><b
                                            class="text-red-500"><?=format_cash($getUser['money']);?> VNĐ</b></td>
                                </tr>
                                <tr class="v-border-hr-2 rounded-none border-b border-gray-200 py-10">
                                    <td class="v-account-text py-2 font-bold text-white">SỐ ROBUX</td>
                                    <td class="px-2 py-2 text-white"><b
                                            class="text-red-500"><?=format_cash($getUser['robux']);?> VNĐ</b></td>
                                </tr>
                                <tr class="v-border-hr-2 rounded-none border-b border-gray-200 py-10">
                                    <td class="v-account-text py-2 font-bold text-white">NHÓM TÀI KHOẢN</td>
                                    <td class="v-table-title px-2 py-2 text-white">THÀNH VIÊN</td>
                                </tr>
                                <tr class="v-border-hr-2 rounded-none border-b border-gray-200 py-10">
                                    <td class="v-account-text py-2 font-bold text-white">NGÀY THAM GIA</td>
                                    <td class="v-table-title px-2 py-2 text-white">
                                        <?=$getUser['createdate'];?> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php }?>

<?php 
    require_once("../../public/client/Footer.php");
?>