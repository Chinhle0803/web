<?php
    require_once("../../config/config.php");
    require_once("../../config/function.php");
    $title = 'NẠP THẺ CÀO | '.$CMSNAV->site('tenweb');
    require_once("../../public/client/Header.php");
    require_once("../../public/client/Nav.php");
    CheckLogin();
?>
<?php if($CMSNAV->site('theme_web') == 'theme1') { ?>
            <script>
                function Tab(id){
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                            tabcontent[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" vactive", "");
                    }
                    document.getElementById(id).style.display = "block";
                    event.currentTarget.className += " vactive";
                }
            </script>
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
            </style>
            <?php require_once('Sidebar.php');?>
            <div class="tw-col-span-12 md:tw-col-span-8">
                <div class="tw-bg-white tw-rounded tw-p-4 md:tw-py-4 md:tw-px-5 tw-w-full tw-mb-4">
                    <div class="tw-border-b tw-border-gray-200 tw-pb-2 tw-mb-4 tw-text-gray-800">
                        <h2 class="tw-text-lg tw-font-semibold">Nạp Thẻ Cào</h2>
                        <p class="tw-text-xs">
                            Tự động 24/7 - Nhập sai mệnh giá sẽ mất thẻ.
                        </p>
                    </div>
                    <!---->
                     <form method="POST" class="tw-max-w-sm form_data">
                        <div class="tw-mb-2">
                            <div id="thongbaonapthe" style="padding-bottom: 13px;"></div>
                            <label class="tw-text-gray-700 tw-text-sm"> Nhà mạng <b>(Ưu tiên Viettel, Vinaphone)</b></label>
                                    <div class="tw-grid tw-grid-cols-12 tw-gap-2 tw-text-sm">
                                        <style>
                                            #charge label {
                                                display: flex;
                                                align-items: center;
                                            }
                                            [type=radio] { 
                                                position: absolute;
                                                opacity: 0;
                                                left: -9999px;
                                            }
                                            [type=radio] {
                                                cursor: pointer;
                                            }
                                            [type=radio]:checked + label {
                                                border-width: 2px;
                                                --tw-border-opacity: 1;
                                                border-color: rgba(239,68,68,var(--tw-border-opacity));
                                            }
                                            [type=radio]:checked + label>img {
                                                filter: grayscale(0%);
                                            }
                                            label>img{
                                                filter: grayscale(100%);
                                            }
                                        </style>
                                        <input type="radio" id="vt" name="type" value="Viettel" class="input-absolute" checked/>
                                        <label for="vt" class="tw-col-span-4 tw-border-gray-300 tw-h-10 tw-px-3 tw-rounded tw-font-bold">
                                            <img src="/assets/images/viettel.png" />
                                        </label>

                                        <input type="radio" id="vn" name="type" value="Vinaphone"  class="input-absolute"/>
                                        <label for="vn" class="tw-col-span-4 tw-border-gray-300 tw-h-10 tw-px-3 tw-rounded tw-font-bold">
                                            <img src="/assets/images/vinaphone.png" />
                                        </label>

                                        <input type="radio" id="mb" name="type" value="Mobifone"  class="input-absolute"/>
                                        <label for="mb" class="tw-col-span-4 tw-border-gray-300 tw-h-10 tw-px-3 tw-rounded tw-font-bold">
                                            <img src="/assets/images/mobifone.png" />
                                        </label>
                                    </div>
                                </div>
                                <div class="tw-mb-2">
                            <label class="tw-text-gray-700 tw-text-sm"> Mệnh giá </label>
                            <select id="menhgia" class="tw-border tw-border-gray-300 tw-h-10 tw-px-3 tw-w-full tw-rounded focus:tw-outline-none">
                                <option disabled="disabled" value="">Chọn mệnh giá</option>
                                <option class="tw-font-medium tw-text-red-600" value="10000">
                                    Thẻ 10,000đ
                                </option>
                                <option class="tw-font-medium tw-text-red-600" value="20000">
                                    Thẻ 20,000đ
                                </option>
                                <option class="tw-font-medium tw-text-red-600" value="30000">
                                    Thẻ 30,000đ
                                </option>
                                <option class="tw-font-medium tw-text-red-600" value="50000">
                                    Thẻ 50,000đ
                                </option>
                                <option class="tw-font-medium tw-text-red-600" value="100000">
                                    Thẻ 100,000đ
                                </option>
                                <option class="tw-font-medium tw-text-red-600" value="200000">
                                    Thẻ 200,000đ
                                </option>
                                <option class="tw-font-medium tw-text-red-600" value="300000">
                                    Thẻ 300,000đ
                                </option>
                                <option class="tw-font-medium tw-text-red-600" value="500000">
                                    Thẻ 500,000đ
                                </option>
                                <option class="tw-font-medium tw-text-red-600" value="1000000">
                                    Thẻ 1,000,000đ
                                </option>
                            </select>
                        </div>
                        <div class="tw-mb-4"><label class="tw-text-gray-700 tw-text-sm"> Mã thẻ </label> <input id="pin" class="tw-border tw-border-gray-300 tw-h-10 tw-px-3 tw-w-full tw-rounded focus:tw-outline-none" /></div>
            
                        <div class="tw-mb-4"><label class="tw-text-gray-700 tw-text-sm"> Serial thẻ </label> <input id="seri" class="tw-border tw-border-gray-300 tw-h-10 tw-px-3 tw-w-full tw-rounded focus:tw-outline-none" /></div>
            
                        <button type="button" id="NapThe" class="tw-text-center tw-h-10 tw-bg-red-500 tw-w-32 hover:tw-bg-red-600 tw-text-white tw-font-semibold tw-rounded">
                            Nạp Thẻ
                        </button>
                    </form>
                </div>
                <div class="tw-border-2 tw-border-amber-300 tw-bg-white tw-rounded tw-text-sm tw-leading-7 tw-px-3 tw-py-1 tw-my-2">
                    <div class="relative">
                        <p>
               
                            <span style="color: rgb(220, 38, 38);"><strong>Lưu ý: </strong></span>
                        </p>
                        <p>
                            <span style="color: rgb(220, 38, 38);"><strong>- Vui lòng nạp đúng mệnh giá, sai mệnh giá sẽ không được cộng tiền vào tài khoản.</strong></span>
                        </p>
                        <p>
                            <span style="color: rgb(220, 38, 38);"><strong>- Thẻ cào bị treo ĐANG XỬ LÝ quá 10p kể từ lúc nạp thẻ xin vui lòng liên hện page để được hỗ trợ.</strong></span>
                        </p>
                    </div>
                </div>
                <!-- begin lich su -->
			<div class="tw-mt-4 tw-bg-white tw-rounded tw-w-full">
			   <div class="tw-border-b tw-border-gray-200 tw-pb-2 tw-text-gray-800 tw-p-3 md:tw-py-3 md:tw-px-5">
				  <h2 class="tw-text-lg tw-font-semibold">Thẻ nạp gần nhất</h2>
			   </div>
			   <div class="tw-p-2 md:tw-p-4 overflow-x-auto">
				  <table id="datatable" class="tw-w-full tw-rounded-t ">
					 <thead>
						<tr class="tw-text-md tw-font-semibold tw-tracking-wide tw-text-left tw-text-gray-900 tw-border tw-border-b-0 tw-bg-gray-200">
							<td class="tw-px-2 tw-py-2">STT</td>
							<td class="tw-px-2 tw-py-2">Loại Thẻ</td>
							<td class="tw-px-2 tw-py-2">Mã thẻ/Seri</td>
							<td class="tw-px-2 tw-py-2">M.giá/T.nhận</td>
							<td class="tw-px-2 tw-py-2">Trạng thái</td>
							<td class="tw-px-2 tw-py-2">Thời gian</td>
						</tr>
					 </thead>
					 <tbody class="bg-white tw-border tw-border-t-0 tw-rounded">
							<?php $i = 0; foreach($CMSNAV->get_list("SELECT * FROM `cards` WHERE `username` = '".$getUser['username']."' ") as $cards) { ?>
                                <tr>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$i++;?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$cards['loaithe'];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b">
                                    <div>
                                    <p class="tw-font-bold text-black">
                                    Mã:  <?=$cards['pin'];?></p><p class="tw-font-semibold text-xs">Seri:  <?=$cards['seri'];?></p>
                                    </div></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><p class="tw-text-gray-800">
                                                        <i class="bx bxs-upvote tw-relative" style="top: 1px;"></i>
                                                        Gửi Thẻ:  <?=format_cash($cards['menhgia']);?>đ
                                                    </p>
                                                    <p class="tw-text-sm tw-text-red-600">
                                                        <i class="bx bxs-downvote tw-relative" style="top: 1px;"></i>
                                                        Nhận:
                                                                                                                    <b><?=$cards['thucnhan'];?>đ</b>
                                                                                                                </p></td>
                                    <td class="text-sm tw-text-red-600 text-left px-1 py-1 border-b">
                                    <?=status($cards['status']);?>
                                    </td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$cards['createdate'];?></td>
                                </tr>
                            <?php }?>
											 </tbody>
				  </table>
			   </div>
			</div>
			<!-- begin lich su -->
			
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
            <div class="w-full mb-2">
                <div class="rounded w-full">
                    <span>
                        <form method="POST" class="w-full">
                            <h2
                                class="v-title border-l-4 border-red-800 px-3 select-none text-white text-xl md:text-2xl font-bold">
                                KHU NẠP THẺ
                            </h2>
                            <div class="py-3 px-5">
                                <span class="mb-2 block">
                                    <div class="flex items-center relative">
                                        <select id="loaithe"
                                            class="border border-gray-500 rounded bg-white text-gray-800 appearance-none w-full py-2 px-3 leading-tight focus:outline-none">
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
                                </span>
                                <span class="mb-2 block">
                                    <div class="flex items-center relative">
                                        <select id="menhgia"
                                            class="border border-gray-500 rounded bg-white text-gray-800 appearance-none w-full py-2 px-3 leading-tight focus:outline-none">

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
                                </span>
                                <span class="mb-2 block">
                                    <div class="flex items-center relative"><input type="number" id="pin"
                                            placeholder="Mã số thẻ"
                                            class="border border-gray-500 rounded bg-white text-gray-800 appearance-none w-full py-2 px-3 leading-tight focus:outline-none" />
                                    </div>
                                </span>
                                <span class="mb-2 block">
                                    <div class="flex items-center relative"><input type="number" id="seri"
                                            placeholder="Số serial"
                                            class="border border-gray-500 rounded bg-white text-gray-800 appearance-none w-full py-2 px-3 leading-tight focus:outline-none" />
                                    </div>
                                </span>
                                <div class="mt-4 text-center">
                                    <button type="button" id="NapThe"
                                        class="uppercase flex w-40 font-semibold rounded items-center justify-center h-10 text-white text-xl rounded-none focus:outline-none px-4 text-center bg-red-500 hover:bg-red-600">
                                        Nạp Thẻ
                                    </button>
                                </div>
                                <div class="mt-2 text-red-500 font-semibold text-sm">
                                </div>
                            </div>
                        </form>
                    </span>
                    <!---->
                </div>
            </div>
            <div class="v-bg w-full mb-2 px-2">
                <h2
                    class="v-title border-l-4 border-red-800 px-3 select-none text-white text-xl md:text-2xl font-bold">
                    LỊCH SỬ NẠP THẺ
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
                                        NHÀ MẠNG
                                    </th>
                                    <th class="v-table-title py-2 text-sm font-bold text-white text-left px-1">
                                        M.GIÁ/T.NHẬN
                                    </th>
                                    <th class="v-table-title py-2 text-sm font-bold text-white text-left px-1">
                                        MÃ THẺ
                                    </th>
                                    <th class="v-table-title py-2 text-sm font-bold text-white text-left px-1">
                                        SERIAL THẺ
                                    </th>
                                    <th class="v-table-title py-2 text-sm font-bold text-white text-left px-1">
                                        TRẠNG THÁI
                                    </th>
                                    <th class="v-table-title py-2 text-sm font-bold text-white text-left px-1">
                                        NẠP LÚC
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-sm font-semibold">
                            <?php $i = 0; foreach($CMSNAV->get_list("SELECT * FROM `cards` WHERE `username` = '".$getUser['username']."' ") as $cards) { ?>
                                <tr>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$i++;?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$cards['loaithe'];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=format_cash($cards['menhgia']);?> VNĐ</td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$cards['seri'];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$cards['pin'];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b">
                                    <?=status($cards['status']);?>
                                    </td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$cards['createdate'];?></td>
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
$("#NapThe").on("click", function() {
  $('#NapThe').html('<i class="fa fa-spinner fa-spin"></i> ĐANG XỬ LÝ').prop('disabled', true);
  
  // Lấy giá trị của radio button được chọn
  var loaithe = $('input[name="type"]:checked').val();
  
  $.ajax({
    url: "<?=BASE_URL("assets/ajaxs/NapThe.php");?>",
    method: "POST",
    data: {
      loaithe: loaithe, // Sử dụng giá trị của radio button
      menhgia: $("#menhgia").val(),
      seri: $("#seri").val(),
      pin: $("#pin").val()
    },
    success: function(response) {
      $("#thongbaonapthe").html(response);
      $('#NapThe').html('Nạp Thẻ').prop('disabled', false);
    }
  });
});

</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').DataTable();
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
    require_once("../../public/client/Footer.php");
?>