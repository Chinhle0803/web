<?php
        require_once("../../config/config.php");
        require_once("../../config/function.php");
        $title = 'MÃ GIẢM GIÁ | '.$CMSNAV->site('tenweb');
        require_once("../../public/client/Header.php");
        require_once("../../public/client/Nav.php");
?>
<?php require_once('Sidebar.php');?>
<div class="tw-col-span-12 md:tw-col-span-8">
                        <div class="tw-bg-white tw-rounded tw-p-4 md:tw-py-4 md:tw-px-5 tw-w-full tw-mb-4">
                            <div class="tw-border-b tw-border-gray-200 tw-pb-2 tw-mb-4 tw-text-gray-800">

                            </div>

                            <!-- MÃ GIẢM GIÁ -->
			<div class="tw-mt-4 tw-bg-white tw-rounded tw-w-full">
			   <div class="tw-border-b tw-border-gray-200 tw-pb-2 tw-text-gray-800 tw-p-3 md:tw-py-3 md:tw-px-5">
				  <h2 class="tw-text-lg tw-font-semibold">Mã giảm giá</h2>
			   </div>
			   <div class="tw-p-2 md:tw-p-4 overflow-x-auto">
				  <table id="datatable" class="tw-w-full tw-rounded-t ">
					 <thead>
						<tr class="tw-text-md tw-font-semibold tw-tracking-wide tw-text-left tw-text-gray-900 tw-border tw-border-b-0 tw-bg-gray-200">
							<td class="tw-px-2 tw-py-2">STT</td>
							<td class="tw-px-2 tw-py-2">Mã giảm giá</td>
							<td class="tw-px-2 tw-py-2">Số lượt sử dụng</td>
							<td class="tw-px-2 tw-py-2">% Giảm giá</td>
							<td class="tw-px-2 tw-py-2">Dịch vụ</td>
						</tr>
					 </thead>
					 <tbody class="bg-white tw-border tw-border-t-0 tw-rounded">
							<?php $i = 0; foreach($CMSNAV->get_list(" SELECT * FROM `magiamgia` ORDER BY id DESC ") as $row){ ?>
                                <tr>
                                    <td class="text-sm tw-text-center text-gray-800 text-left px-1 py-1 border-b"><?=$i++;?></td>
                                    <td class="text-sm tw-text-center tw-text-green-500 text-left px-1 py-1 border-b"><?=$row['code'];?></td>
                                    <td class="text-sm tw-text-center tw-text-red-400 text-left px-1 py-1 border-b"><?=$row['solan'];?></td>
                                    <td class="text-sm tw-text-center tw-text-red-600 text-left px-1 py-1 border-b"><?=$row['giam'];?>%</td>
                                    <td class="text-sm tw-text-center tw-text-blue-500 text-left px-1 py-1 border-b"><?=displayvoucher($row['dichvu']);?></td>
                                </tr>
                                <?php }?>
											 </tbody>
				  </table>
			   </div>
			</div>
			<!-- MÃ GIẢM GIÁ -->
                        </div>






    
<?php 
    require_once("../../public/client/Footer.php");
?>