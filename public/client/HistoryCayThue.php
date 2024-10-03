<?php
        require_once("../../config/config.php");
        require_once("../../config/function.php");
        $title = 'LỊCH SỬ | '.$CMSNAV->site('tenweb');
        require_once("../../public/client/Header.php");
        require_once("../../public/client/Nav.php");
?>
<?php if($CMSNAV->site('theme_web') == 'theme1') { ?>
<style>
    .vactive{
        --tw-border-opacity: 1;
        border-color: rgba(239,68,68,var(--tw-border-opacity));
        --tw-bg-opacity: 1;
        background-color: rgba(239,68,68,var(--tw-bg-opacity));
        font-weight: 800 !important;
        --tw-text-opacity: 1;
        color: rgba(255,255,255,var(--tw-text-opacity));
    }
        .checkbox-withdraw{
        display: inline-block;
        width: 1.25rem;
        height: 1.25rem;
        border: solid 2px #cd3e3e;
        border-radius: 9999px;
        }

        #xTech-GasForm input[type=radio]{
        display: none;
        }

        #xTech-GasForm input[type=radio]:checked + .checkbox-withdraw{
        background-color: #cd3e3e;
        }
</style>
<?php require_once('Sidebar.php');?>
<div class="tw-col-span-12 md:tw-col-span-8">
                        <div class="tw-bg-white tw-rounded tw-p-4 md:tw-py-4 md:tw-px-5 tw-w-full tw-mb-4">
                            <div class="tw-border-b tw-border-gray-200 tw-pb-2 tw-mb-4 tw-text-gray-800">

                            </div>
                            <!-- begin lich su -->
			<div class="tw-mt-4 tw-bg-white tw-rounded tw-w-full">
			   <div class="tw-border-b tw-border-gray-200 tw-pb-2 tw-text-gray-800 tw-p-3 md:tw-py-3 md:tw-px-5">
				  <h2 class="tw-text-lg tw-font-semibold">Lịch sử cày thuê</h2>
			   </div>
			   <div class="tw-p-2 md:tw-p-4 overflow-x-auto">
				  <table id="datatable" class="tw-w-full tw-rounded-t ">
					 <thead>
						<tr class="tw-text-md tw-font-semibold tw-tracking-wide tw-text-left tw-text-gray-900 tw-border tw-border-b-0 tw-bg-gray-200">
							<td class="tw-px-2 tw-py-2">STT</td>
							<td class="tw-px-2 tw-py-2">Gói</td>
							<td class="tw-px-2 tw-py-2">Giá</td>
							<td class="tw-px-2 tw-py-2">Trạng thái</td>
							<td class="tw-px-2 tw-py-2">Username|Password</td>
							<td class="tw-px-2 tw-py-2">Note</td>
							<td class="tw-px-2 tw-py-2">Note Admin</td>
							<td class="tw-px-2 tw-py-2">Thời gian</td>
						</tr>
					 </thead>
					 <tbody class="bg-white tw-border tw-border-t-0 tw-rounded">
							<?php $i = 0; foreach($CMSNAV->get_list(" SELECT * FROM `orders_caythue` WHERE `username` = '".$getUser['username']."' ORDER BY id DESC ") as $row){ ?>
                                <tr>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$i++;?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$row['dichvu'];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$row['money'];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=status($row['status']);?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$row['tk'];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$row['ghichu'];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$row['reason'];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><spanclass="badge badge-danger"><?=$row['createdate'];?></span></td>
                                </tr>
                                <?php }?>
											 </tbody>
				  </table>
			   </div>
			</div>
			<!-- begin lich su -->
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
                    LỊCH SỬ CÀY THUÊ
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
                                        DỊCH VỤ
                                    </th>
                                    <th class="v-table-title py-2 text-sm font-bold text-white text-left px-1">
                                        TÀI KHOẢN
                                    </th>
                                    <th class="v-table-title py-2 text-sm font-bold text-white text-left px-1">
                                        MẬT KHẨU
                                    </th>
                                    <th class="v-table-title py-2 text-sm font-bold text-white text-left px-1">
                                        GIÁ
                                    </th>
                                    <th class="v-table-title py-2 text-sm font-bold text-white text-left px-1">
                                        THỜI GIAN TẠO
                                    </th>
                                    <th class="v-table-title py-2 text-sm font-bold text-white text-left px-1">
                                        CẬP NHẬT
                                    </th>
                                    <th class="v-table-title py-2 text-sm font-bold text-white text-left px-1">
                                        TRẠNG THÁI
                                    </th>
                                    <th class="v-table-title py-2 text-sm font-bold text-white text-left px-1">
                                        LÝ DO
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-sm font-semibold">
                                <?php $i = 0; foreach($CMSNAV->get_list(" SELECT * FROM `orders_caythue` WHERE `username` = '".$getUser['username']."' ORDER BY id DESC ") as $row){ ?>
                                <tr>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$i++;?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$row['dichvu'];?>
                                    </td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$row['tk'];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$row['mk'];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b">
                                        <?=format_cash($row['money']);?> VNĐ</td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><span
                                            class="badge badge-danger"><?=$row['createdate'];?></span></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><span
                                            class="badge badge-danger"><?=$row['updatedate'];?></span></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b">
                                        <?=status($row['status']);?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b">
                                        <?=$row['reason'];?></td>
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