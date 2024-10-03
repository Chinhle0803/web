<?php
    require_once(__DIR__."/../../config/config.php");
    require_once(__DIR__."/../../config/function.php");
    $title = 'LỊCH SỬ MUA NICK | '.$CMSNAV->site('tenweb');
    require_once(__DIR__."/../../public/client/Header.php");
    require_once(__DIR__."/../../public/client/Nav.php");
    require_once(__DIR__."/../../includes/login.php");
?>
<?php if($CMSNAV->site('theme_web') == 'theme1') { ?>  
        <?php require_once('Sidebar.php');?>
        <div class="tw-col-span-12 md:tw-col-span-8">
            <div class="tw-mt-4 tw-bg-white tw-rounded tw-w-full">
                
                </div>
                <div class="tw-bg-white tw-rounded tw-p-2 md:tw-py-4 md:tw-px-5 tw-w-full">
                            <div class="tw-border-b tw-border-gray-200 tw-pb-2 tw-mb-2 tw-flex tw-items-center tw-justify-between md:tw-mb-4 tw-text-gray-800">
                                <div class="tw-inline-block">
                                    <h2 class="tw-text-lg tw-font-semibold">
                                        Lịch Sử Mua Nick
                                    </h2>
                                    <p class="tw-text-sm"></p>
                                </div>
                                <a href="?reload=true">
                                <button type="button" class="tw-relative tw-ml-2 block tw-px-1 py-1 tw-text-white tw-bg-red-500 text-sm tw-font-semibold tw-rounded focus:tw-outline-none" style="top: -1px;">
                                    <i class="relative bx bx-revision mr-1" style="top: 1px;"></i>
                                    Làm mới
                                </button>
                                </a>
                            </div>
                            <!---->
                            <div>
                                <table id="datatable" class="tw-w-full tw-rounded-t ">
					 <thead>
						<tr class="tw-text-md tw-font-semibold tw-tracking-wide tw-text-left tw-text-gray-900 tw-border tw-border-b-0 tw-bg-gray-200">
							<td class="tw-px-2 tw-py-2">STT</td>
							<td class="tw-px-2 tw-py-2">Id Acc</td>
							<td class="tw-px-2 tw-py-2">Danh Mục</td>
							<td class="tw-px-2 tw-py-2">Tài Khoản|Mật Khẩu</td>
							<td class="tw-px-2 tw-py-2">Thông Tin</td>
							<td class="tw-px-2 tw-py-2">Giá Tiền</td>
							<td class="tw-px-2 tw-py-2">Thời gian</td>
						</tr>
					 </thead>
					 <tbody class="bg-white tw-border tw-border-t-0 tw-rounded">
							<?php $i = 0; foreach($CMSNAV->get_list(" SELECT * FROM `accounts` WHERE `username` = '".$getUser['username']."' ORDER BY id DESC ") as $accounts){ ?>
                                <?php $groups = $CMSNAV->get_row("SELECT * FROM `groups` WHERE `id` = '".$accounts['groups']."' "); ?>
                                <?php $category = $CMSNAV->get_row("SELECT * FROM `category` WHERE `id` = '".$groups['category']."' "); ?>
                                <tr>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$i++;?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$accounts['id'];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$category['title'];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b">
                                    <div>
                                    <p class="tw-font-bold text-black">
                                    Tài khoản:  <?=explode("|", $accounts['account'])[0];?></p><p class="tw-font-semibold text-xs">Mật khẩu:  <?=explode("|", $accounts['account'])[1];?> </p>
                                    </div></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b">
                                        <?=explode("|", $accounts['account'])[2];?></td>
                                    <td class="text-sm tw-text-red-600 text-left px-1 py-1 border-b">
                                    <?=format_cash($accounts['money']);?>Đ
                                    </td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$accounts['updatedate'];?></td>
                                </tr>
                            <?php }?>
											 </tbody>
				  </table>
                                                            </div>
                        </div>
                    </div>
            <!--- here -->
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
            <div class="w-full mb-10">
                <h2 class="v-title border-l-4 border-red-800 px-3 select-none text-white text-xl md:text-2xl font-bold">
                    LỊCH SỬ MUA NICK
                </h2>
                <div class="v-table-content select-text">
                    <div class="py-2 overflow-x-auto scrolling-touch max-w-400">
                        <table id="datatable" class="table-auto w-full scrolling-touch min-w-850">
                            <thead>
                                <tr class="v-border-hr select-none border-b-2 border-gray-300">
                                    <th class="v-table-title py-2 text-sm font-bold text-white text-left px-1">
                                        STT
                                    </th>
                                    <th class="v-table-title py-2 text-sm font-bold text-white text-left px-1">
                                        ACCID
                                    </th>
                                    <th class="v-table-title py-2 text-sm font-bold text-white text-left px-1">
                                        DANH MỤC
                                    </th>
                                    <th class="v-table-title py-2 text-sm font-bold text-white text-left px-1">
                                        TÊN GAME
                                    </th>
                                    <th class="v-table-title py-2 text-sm font-bold text-white text-left px-1">
                                        TÀI KHOẢN
                                    </th>
                                    <th class="v-table-title py-2 text-sm font-bold text-white text-left px-1">
                                        MẬT KHẨU
                                    </th>
                                    <th class="v-table-title py-2 text-sm font-bold text-white text-left px-1">
                                        ĐÍNH KÈM
                                    </th>
                                    <th class="v-table-title py-2 text-sm font-bold text-white text-left px-1">
                                        MUA GIÁ
                                    </th>
                                    <th class="v-table-title py-2 text-sm font-bold text-white text-left px-1">
                                        THỜI GIAN MUA
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-sm font-semibold">
                                <?php $i = 0; foreach($CMSNAV->get_list(" SELECT * FROM `accounts` WHERE `username` = '".$getUser['username']."' ORDER BY id DESC ") as $accounts){ ?>
                                <?php $groups = $CMSNAV->get_row("SELECT * FROM `groups` WHERE `id` = '".$accounts['groups']."' "); ?>
                                <?php $category = $CMSNAV->get_row("SELECT * FROM `category` WHERE `id` = '".$groups['category']."' "); ?>
                                <tr>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$i++;?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$accounts['id'];?>
                                    </td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b">
                                        <?=$groups['title'];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b">
                                        <?=$category['title'];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b">
                                        <?=explode("|", $accounts['account'])[0];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b">
                                        <?=explode("|", $accounts['account'])[1];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b">
                                        <?=explode("|", $accounts['account'])[2];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b">
                                        <?=format_cash($accounts['money']);?> VNĐ</td>

                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><span
                                            class="badge badge-danger"><?=$accounts['updatedate'];?></span></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                    <div class="v-table-note mt-1 py-1 font-semibold text-white text-sm">
                        Dùng điện thoại <i class="bx bxs-mobile"></i>, hãy vuốt bảng từ phải qua trái (<i
                            class="bx bxs-arrow-from-right"></i>) để xem đầy đủ thông tin!
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
    $('#datatable').DataTable();
});
</script>


<?php 
    require_once("../../public/client/Footer.php");
?>