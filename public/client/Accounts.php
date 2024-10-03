<?php
        require_once("../../config/config.php");
        require_once("../../config/function.php");
        $title = 'DANH SÁCH TÀI KHOẢN | '.$CMSNAV->site('tenweb');
        require_once("../../public/client/Header.php");
        require_once("../../public/client/Nav.php");
        function phantrang2($url, $start, $total, $kmess)
{
    $out[] = ' <nav class="relative z-0 inline-flex v-pagination mx-auto v-text-1 v-light-theme">';
    $neighbors = 2;
    if ($start >= $total) $start = max(0, $total - (($total % $kmess) == 0 ? $kmess : ($total % $kmess)));
    else $start = max(0, (int)$start - ((int)$start % (int)$kmess));
    $base_link = '<li><a class="mx-1 border border-gray-400 bg-white relative v-page-no w-8 md:w-10 h-8 md:h-10 text-md md:text-lg rounded font-bold inline-flex items-center justify-center px-2 py-2 leading-5 font-medium focus:outline-none transition ease-in-out duration-150 text-gray-800 v-pagination-text disabled" href="' . strtr($url, array('%' => '%%')) . 'page=%d' . '">%s</a></li>';
    $out[] = $start == 0 ? '' : sprintf($base_link, $start / $kmess, '<svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
    <path fill-rule="evenodd"
        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
        clip-rule="evenodd"></path>
</svg>');
    if ($start > $kmess * $neighbors) $out[] = sprintf($base_link, 1, '1');
    if ($start > $kmess * ($neighbors + 1)) $out[] = '<li class="page-item"><a class="page-link">...</a></li>';
    for ($nCont = $neighbors;$nCont >= 1;$nCont--) if ($start >= $kmess * $nCont) {
        $tmpStart = $start - $kmess * $nCont;
        $out[] = sprintf($base_link, $tmpStart / $kmess + 1, $tmpStart / $kmess + 1);
    }
    $out[] = '<li class="border mx-1 w-8 md:w-10 h-8 md:h-10 text-md md:text-lg select-none rounded inline-flex justify-center items-center px-4 py-2 focus:outline-none text-white border-red-600 text-white bg-red-600"><a class="page-link">' . ($start / $kmess + 1) . '</a></li>';
    $tmpMaxPages = (int)(($total - 1) / $kmess) * $kmess;
    for ($nCont = 1;$nCont <= $neighbors;$nCont++) if ($start + $kmess * $nCont <= $tmpMaxPages) {
        $tmpStart = $start + $kmess * $nCont;
        $out[] = sprintf($base_link, $tmpStart / $kmess + 1, $tmpStart / $kmess + 1);
    }
    if ($start + $kmess * ($neighbors + 1) < $tmpMaxPages) $out[] = '<li class="page-item"><a class="page-link">...</a></li>';
    if ($start + $kmess * $neighbors < $tmpMaxPages) $out[] = sprintf($base_link, $tmpMaxPages / $kmess + 1, $tmpMaxPages / $kmess + 1);
    if ($start + $kmess < $total)
    {
        $display_page = ($start + $kmess) > $total ? $total : ($start / $kmess + 2);
        $out[] = sprintf($base_link, $display_page, '<svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
        <path fill-rule="evenodd"
            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
            clip-rule="evenodd"></path>
    </svg>
        ');
    }
    $out[] = '</ul></nav>';
    return implode('', $out);
}
?>
<?php
if(isset($_GET['id']))
{
    $row = $CMSNAV->get_row(" SELECT * FROM `groups` WHERE `id` = '".check_string($_GET['id'])."'  ");
    if(!$row)
    {
        admin_msg_error("Liên kết không tồn tại", BASE_URL(''), 500);
    }
}
else
{
    admin_msg_error("Liên kết không tồn tại", BASE_URL(''), 0);
}
$sotin1trang = 16;
if(isset($_GET['page']))
{
    $page = intval($_GET['page']);
}
else
{
    $page = 1;
}
$from = ($page - 1) * $sotin1trang;
if(isset($_GET['amount']))
{
    $amount = check_string($_GET['amount']);
    if($amount == 1)
    {
        $amount = ' AND `money` <= 50000 ';
    }
    else if($amount == 2)
    {
        $amount = ' AND `money` >= 50000 AND `money` <= 100000 ';
    }
    else if($amount == 3)
    {
        $amount = ' AND `money` >= 100000 AND `money` <= 200000 ';
    }
    else if($amount == 4)
    {
        $amount = ' AND `money` >= 200000 AND `money` <= 500000 ';
    }
    else if($amount == 5)
    {
        $amount = ' AND `money` >= 500000 ';
    }
    $type_amount = check_string($_GET['amount']);
}
else
{
    $amount = '';
    $type_amount = '';
}
if(isset($_GET['id_acc']))
{
    $id_acc = check_string($_GET['id_acc']);
}
else
{
    $id_acc = NULL;
}
$listAccount = $CMSNAV->get_list("SELECT * FROM `accounts` WHERE `groups` = '".$row['id']."' AND `id` LIKE  '%$id_acc%' AND `username` IS NULL $amount ORDER BY id DESC LIMIT $from,$sotin1trang ");
?>
<?php if($CMSNAV->site('theme_web') == 'theme1') { ?>
<div class="tw-rounded tw-bg-gray-100">
    <div class="tw-max-w-6xl tw-mx-auto tw-bg-white tw-px-2" style="min-height: 100vh;">
        <span class="tw-text-sm tw-relative" style="top: 1px;">DANH MỤC: </span>
        <h2 class="tw-mb-2 tw-text-red-500 tw-text-lg tw-font-bold tw-uppercase">
            <?=$row['title'];?>        </h2>
        <div class="tw-mb-2">
            <div class="text-overflow">
                <div class="text-overflow-content" style="--nlines: 5; --lineHeight: 24px;">
                    <div class="relative tw-bg-white tw-py-2 tw-px-3 tw-rounded">
                        <?php if(isset($row['chitiet'])){ ?>
                                
                            <div class="alert-info chino-card-ovf chino-card" role="alert">
                                <?=base64_decode($row['chitiet']);?>
                            </div>
                            <?php }?>
                    </div>
            </div>
        </div>
        <div class="tw-grid tw-grid-cols-12 tw-gap-3 tw-py-2">
            <div class="tw-col-span-12 tw-mb-4">
                <div>
                    <div class="tw-mb-1">
                        <b class="tw-text-xs"> BỘ LỌC TÌM KIẾM </b>
                        
                    </div>
                            <form action="<?=BASE_URL('public/client/Accounts.php');?>" method="GET">
                             <input value="<?=check_string($_GET['id']);?>" name="id" type="hidden">
                            <div class="md:tw-grid tw-grid-cols-12 tw-gap-3">

                            <div class="tw-col-span-12 md:tw-col-span-3">
                                <div class="tw-w-full tw-relative">
                                <label class="tw-inline-block tw-text-gray-500 tw-absolute tw-text-xs tw-font-medium" style="left: 10px; top: 6px">
                                    Mã số tài khoản
                                </label> 
                                     <div class="el-input">
                                        <input type="text" name="id_acc" autocomplete="off" placeholder="ID - ví dụ: 123421" class="el-input__inner" >
                                    </div>
                                </div>
                            </div>
                                    
                                                        <div class="tw-col-span-12 md:tw-col-span-3">
                                <div class="tw-w-full tw-relative">
                                    <div class="el-select tw-block tw-w-full el-select--large">
                                        <div class="el-input el-input--large el-input--suffix">
                                     <select class="el-input__inner" id="amount">
                                                <option value="">-- Giá tiền --</option>
                                                <option value="1">0 - 50.000</option>
                                                <option value="2">50.000 - 100.000</option>
                                                <option value="3">100.000 - 200.000</option>
                                                <option value="4">200.000 - 500.000</option>
                                                <option value="5">> 500.000</option>
                                            </select>
                                            <span class="el-input__suffix">
                                                <span class="el-input__suffix-inner">
                                                    <i class="el-select__caret el-input__icon el-icon-arrow-up"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tw-col-span-12 md:tw-col-span-3">
                                <div class="tw-w-full tw-relative">
                                    <button type="submit" class="focus:tw-outline-none tw-px-2 tw-h-10 tw-rounded tw-border-2 tw-border-red-500 tw-bg-red-500 tw-text-white tw-w-full tw-text-sm tw-font-semibold hover:tw-bg-red-600 hover:tw-border-red-600 tw-transition tw-duration-200">
                                        <i class="tw-relative tw-text-xl bx bxs-filter-alt tw-mr-1" style="top: 2px;"></i> Tìm kiếm
                                    </button>
                                    <a href="<?=BASE_URL('public/client/Accounts.php?id='.check_string($_GET['id']));?>"></a>
                                </div>
                            </div>
<div class="tw-col-span-12 md:tw-col-span-3">
                                <div class="tw-w-full tw-relative">
                                    <button type="submit" class="focus:tw-outline-none tw-px-2 tw-h-10 tw-rounded tw-border-2 tw-border-gray-700 tw-bg-gray-700 tw-text-white tw-w-full tw-text-sm tw-font-semibold hover:tw-bg-gray-800 hover:tw-border-gray-800 tw-transition tw-duration-200">
                                       Tất cả
                                     </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</div>
<div id="list_account" class="tw-grid tw-grid-cols-12 tw-gap-3 tw-py-2" style="">
    <?php foreach($listAccount as $acc) {?>
    <div class="tw-col-span-12 md:tw-col-span-3 tw-bg-white tw-relative tw-border tw-border-transparent hover:tw-border-red-500 tw-transition tw-duration-200 tw-rounded">
    <a href="<?=BASE_URL('Orders/'.$acc['id']);?>" class="">
        <div class="tw-relative tw-mb-20">
            <span class="tw-new-id tw-absolute tw-inline-flex tw-items-center tw-px-2 tw-h-6 tw-bg-red-600 tw-text-white tw-font-semibold tw-rounded tw-text-sm" style="top: 8px; left: 8px;">
                MS <?=$acc['id'];?>            </span>
                            <img class="tw-h-56 md:tw-h-40 tw-w-full tw-object-fill tw-object-center tw-rounded-t-sm lazyLoad isLoaded" src="<?=$acc['img'];?>">
                        <div class="tw-my-2 tw-py-1 tw-px-2 tw-relative">
                <div class="tw-grid tw-grid-cols-12 tw-gap-y-1 tw-leading-6 tw-text-gray-700 tw-text-xs" style="font-size: 15px; font-weight: 500;">

                    <?php if(!empty($acc['chitiet'])) { ?>
                    <?php $a = explode(PHP_EOL, $acc['chitiet']); $i=0; foreach($a as $b) {  $c = explode(":", $b); $i++; if($i >= 5){break;} ;?>
                    <div class="tw-col-span-12 tw-text-base md:tw-text-sm">
                        <p>
                            <i class="tw-relative bx bx-caret-right" style="top: 1px;"></i> <?=$c[0];?>
                            <b class="tw-text-gray-800"> <?=$c[1];?> </b>
                        </p>
                    </div>
                    <?php }?>
                    <?php }?>


                    
                </div>
            </div>
        </div>
        

        <div class="tw-absolute tw-right-0 tw-bottom-0 tw-left-0">
            <div class="tw-border-t tw-rounded-b-sm tw-border-gray-100 tw-px-2 tw-py-1">
                <ul class="tw-rounded-sm tw-w-full tw-font-medium">
                    <span class="tw-w-full tw-text-center tw-inline-block tw-px-2">
                                                                <span class="tw-text-red-500 tw-text-lg tw-font-extrabold"> <?=format_cash($acc['money']);?><small>đ</small></span></span>
                                    </ul>
            </div>
            
                        
            <div class="tw-w-full tw-text-center tw-cursor-pointer tw-border tw-rounded-b-sm tw-border-red-500 hover:tw-border-red-600 tw-bg-red-500 tw-transition tw-duration-200 hover:tw-bg-red-600 tw-text-white tw-uppercase tw-font-semibold tw-py-1 tw-px-3">
                Xem chi tiết
            </div>
            
                        
        </div>
    </a>
</div>
<?php }?>                        
                                               
                                                        </div>
                                                   
                   

   
                                    <?php
            $tong = $CMSNAV->num_rows(" SELECT * FROM `accounts` WHERE `groups` = '".$row['id']."' AND `id` LIKE  '%$id_acc%' AND `username` IS NULL $amount ORDER BY id DESC ");
            if ($tong > $sotin1trang)
            {
                echo '' . phantrang($base_url.'public/client/Accounts.php?id='.check_string($_GET['id']).'&amount='.$type_amount.'&id_acc='.$id_acc.'&', $from, $tong, $sotin1trang) . '';
            }?>
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
                                <?=$row['title'];?>
                            </div>
                            <div class="mb-6"><span class="mx-auto block w-40 border-2 border-red-500 "></span>
                            </div>
                            <?php if(isset($row['chitiet'])){ ?>
                                
                            <div class="alert-info" role="alert">
                                <?=base64_decode($row['chitiet']);?>
                            </div>
                            <?php }?>

                            <div class="v-text-1 mb-4 ">
                                <form class="grid grid-cols-8 gap-2 md:gap-6"
                                    action="<?=BASE_URL('public/client/Accounts.php');?>" method="GET">
                                    <input value="<?=check_string($_GET['id']);?>" name="id" type="hidden">
                                    <div class="col-span-8 sm:col-span-2 flex">
                                        <div class="flex -mr-px"><span
                                                class="bg-gray-100 border border-gray-300 w-24 justify-center text-gray-800 font-medium flex items-center leading-normal rounded-none border px-3">Mã
                                                số</span></div>
                                        <div class="flex items-center relative w-full">
                                            <input name="id_acc" placeholder="Ví dụ: 123421"
                                                class="border-2 border-gray-300 rounded-none bg-white text-gray-800 appearance-none w-full py-2 px-3 leading-tight focus:outline-none" />
                                        </div>
                                    </div>
                                    <div class="col-span-8 sm:col-span-2 flex">
                                        <div class="flex -mr-px"><span
                                                class="bg-gray-100 border border-gray-300 w-24 justify-center text-gray-800 font-medium flex items-center leading-normal rounded-none border px-3">Giá
                                                từ</span></div>
                                        <div class="flex items-center relative w-full">
                                            <select name="amount"
                                                class="border-2 border-gray-300 rounded-none bg-white text-gray-800 appearance-none w-full py-2 px-3 leading-tight focus:outline-none">
                                                <option value="">Tìm theo giá</option>
                                                <option value="1">0 - 50.000</option>
                                                <option value="2">50.000 - 100.000</option>
                                                <option value="3">100.000 - 200.000</option>
                                                <option value="4">200.000 - 500.000</option>
                                                <option value="5">> 500.000</option>
                                            </select>
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    class="fill-current h-4 w-4">
                                                    <path
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-8 sm:col-span-2 flex items-center">
                                        <button type="submit"
                                            class="mr-1 bg-red-600 text-white w-full rounded-none font-bold py-2 px-4 rounded focus:outline-none">
                                            Tìm kiếm
                                        </button>
                                        <a href="<?=BASE_URL('public/client/Accounts.php?id='.check_string($_GET['id']));?>"
                                            class="ml-1 bg-gray-700 w-full text-white rounded-none font-bold py-2 px-4 rounded focus:outline-none">
                                            <button type="button"
                                                class="bg-gray-700 w-full text-white rounded-none font-bold rounded focus:outline-none">
                                                Tất cả
                                            </button>
                                        </a>
                                    </div>
                                </form>
                            </div>
                            <div class="my-2"></div>
                            <div class="mb-4 py-4 md:p-4">
                                <div class="grid grid-cols-8 gap-2 md:gap-4 ">
                                    <?php foreach($listAccount as $acc) {?>
                                    <div class="fade-in col-span-8 sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 border border-gray-300 relative"
                                        style="padding: 1px;">
                                        <div>
                                            <div class="relative">
                                                <a href="<?=BASE_URL('Orders/'.$acc['id']);?>">
                                                    <div class="relative">
                                                        <img class="h-56 md:h-40 w-full object-fill object-center lazyLoad"
                                                            data-src="<?=$acc['img'];?>" />
                                                        <span
                                                            class="absolute v-text-1 bg-red-700 text-white font-bold text-sm inline-block px-2 rounded-sm"
                                                            style="right: 5px; top: 5px;">#<?=$acc['id'];?></span>
                                                    </div>
                                                </a>
                                                <div class="py-2 bg-gray-200 px-2"></div>
                                                <div class="my-2 py-2 px-2 relative">
                                                    <?php if(!empty($acc['chitiet'])) { ?>
                                                    <div class="grid grid-cols-12 gap-3 text-white font-medium text-sm">
                                                        <?php $a = explode(PHP_EOL, $acc['chitiet']); $i=0;
                                    foreach($a as $b) {  $c = explode(":", $b); $i++; if($i >= 5){break;} ;?>
                                                        <div class="col-span-6 text-center">
                                                            <p>
                                                                <?=$c[0];?>:
                                                                <b class="text-white-800"><?=$c[1];?> </b>
                                                            </p>
                                                        </div>
                                                        <?php }?>
                                                        <div class="col-span-6 text-center">
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                </div>
                                                <div class="mt-4 rounded-b-sm grid grid-cols-12 gap-5 p-2">
                                                    <div class="col-span-6">
                                                        <ul class="v-text-1 rounded-sm w-full font-medium"
                                                            style="font-weight: 500;">
                                                            <p
                                                                class="w-full border border-red-600 text-center rounded text-white block px-3 py-1">
                                                                <?=format_cash($acc['money']);?> đ
                                                            </p>
                                                        </ul>
                                                    </div>
                                                    <div class="col-span-6">
                                                        <div class="w-full">
                                                            <a href="<?=BASE_URL('Orders/'.$acc['id']);?>"
                                                                class="cursor-pointer border rounded w-full text-center cursor-pointer border-red-500 hover:border-yellow-500 bg-red-500 transition duration-200 hover:bg-yellow-500 text-white uppercase inline-block font-semibold py-1 px-3">
                                                                Chi tiết
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                                <div class="mt-3 md:mt-6 w-full flex justify-center items-center">
                                    <?php
            $tong = $CMSNAV->num_rows(" SELECT * FROM `accounts` WHERE `groups` = '".$row['id']."' AND `id` LIKE  '%$id_acc%' AND `username` IS NULL $amount ORDER BY id DESC ");
            if ($tong > $sotin1trang)
            {
                echo '<center>' . phantrang2($base_url.'public/client/Accounts.php?id='.check_string($_GET['id']).'&amount='.$type_amount.'&id_acc='.$id_acc.'&', $from, $tong, $sotin1trang) . '</center>';
            }?>
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
<?php 
    require_once("../../public/client/Footer.php");
?>