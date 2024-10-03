<?php
        require_once("../../config/config.php");
        require_once("../../config/function.php");
        $title = 'THANH TOÁN | '.$CMSNAV->site('tenweb');
        require_once("../../public/client/Header.php");
        require_once("../../public/client/Nav.php");
?>
<?php
if(isset($_GET['id']))
{
    $row = $CMSNAV->get_row(" SELECT * FROM `category_robux` WHERE `id` = '".check_string($_GET['id'])."'  ");
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
<?php if($CMSNAV->site('theme_web') == 'theme1') { ?>
<?php require_once('Sidebar.php');?>
<div class="tw-col-span-12 md:tw-col-span-8">
                        <div class="tw-bg-white tw-rounded tw-p-4 md:tw-py-4 md:tw-px-5 tw-w-full tw-mb-4">
                            <div class="tw-border-b tw-border-gray-200 tw-pb-2 tw-mb-4 tw-text-gray-800">
                                <h2 class="tw-text-lg tw-font-semibold"></h2>
                                <p class="tw-text-xs">
                                                                    </p>
                            </div>
                            <!---->
                            <form id="formSubmit" class="tw-max-w-sm form_data" method="POST" >
                                <div class="tw-mb-2">
                                    <div id="thongbao" style="padding-bottom: 13px;"></div>
                                    <div class="tw-mb-2">
                                        <label for="" class="tw-text-gray-700 tw-text-sm"><?=$row['title'];?></label>
                                        <select name="type" id="dichvu" class="tw-border tw-border-gray-300 tw-h-10 tw-px-3 tw-w-full tw-rounded focus:tw-outline-none">
                                        <option data-amount="0" value="">Chọn gói</option>
                                        <?php foreach($CMSNAV->get_list("SELECT * FROM `groups_robux` WHERE `category` = '".$row['id']."' ") as $group) {?>
                                            <option data-amount="<?=$group['money'];?>" value="<?=$group['id'];?>" class="tw-front-medium tw-text-red-600"><?=$group['title'];?></option>
                                        <?php }?>
                                    </select>                                                        
                                    </div>            
                                    <div id="anh"  style="display: none">
                                        <b style="color:red">CỐ TÌNH ĐIỀN SAI THÔNG TIN NHIỀU LẦN HOẶC CHƯA TẮT XÁC MINH 2 BƯỚC CÓ THỂ SẼ DẪN ĐẾN MẤT TIỀN</b>
                                        <br />
                                    </div>
                                    <div class="tw-mb-4">
                                    <label class="tw-text-gray-700 tw-text-sm">Giá tiền </label> 
                                    <input name="totalAmount" id="totalAmount" class="tw-border tw-border-gray-300 tw-h-10 tw-px-3 tw-w-full tw-rounded focus:tw-outline-none" readonly/>
                                </div>

                                <div class="tw-mb-4">
                                    <label class="tw-text-gray-700 tw-text-sm">Tài khoản </label> 
                                    <input id="tk" class="tw-border tw-border-gray-300 tw-h-10 tw-px-3 tw-w-full tw-rounded focus:tw-outline-none" />
                                </div>
                                <div class="tw-mb-4">
                                    <label class="tw-text-gray-700 tw-text-sm">Mật khẩu </label> 
                                    <input id="mk" class="tw-border tw-border-gray-300 tw-h-10 tw-px-3 tw-w-full tw-rounded focus:tw-outline-none" />
                                </div>
                                <div class="tw-mb-4">
                                    <label class="tw-text-gray-700 tw-text-sm">Ghi chú</label> 
                                    <input id="ghichu" class="tw-border tw-border-gray-300 tw-h-10 tw-px-3 tw-w-full tw-rounded focus:tw-outline-none" />
                                </div>
                                <div class="tw-mb-4">
                                    <label class="tw-text-gray-700 tw-text-sm">Mã giảm giá (Nếu có)</label> 
                                    <input id="magiamgia" class="tw-border tw-border-gray-300 tw-h-10 tw-px-3 tw-w-full tw-rounded focus:tw-outline-none" />
                                </div>
                                <button type="button"  id="Submit" class="tw-text-center tw-h-10 tw-bg-red-500 tw-w-32 hover:tw-bg-red-600 tw-text-white tw-font-semibold tw-rounded">
                                    Đặt ngay
                                </button>
								</div>
						
						</form>

						<!-- end content -->
                 
				
				
				
           
			
			<div class="tw-border-2 tw-border-amber-300 tw-bg-white tw-rounded tw-text-sm tw-leading-7 tw-px-3 tw-py-1 tw-my-2">
				<div class="relative">
				    <?=$row['luuy'];?>   
				</div>
			</div>
                            <!-- begin lich su cay thue -->
			<div class="tw-mt-4 tw-bg-white tw-rounded tw-w-full">
			   <div class="tw-border-b tw-border-gray-200 tw-pb-2 tw-text-gray-800 tw-p-3 md:tw-py-3 md:tw-px-5">
				  <h2 class="tw-text-lg tw-font-semibold">Đơn gần nhất</h2>
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
							<?php $i = 0; foreach($CMSNAV->get_list(" SELECT * FROM `orders_robux` WHERE `username` = '".$getUser['username']."' ORDER BY id DESC ") as $row){ ?>
                                <tr>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$i++;?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$row['dichvu'];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$row['money'];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=status($row['status']);?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$row['tk'];?>/<?=$row['mk'];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$row['ghichu'];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><?=$row['reason'];?></td>
                                    <td class="text-sm text-gray-800 text-left px-1 py-1 border-b"><spanclass="badge badge-danger"><?=$row['createdate'];?></span></td>
                                </tr>
                                <?php }?>
											 </tbody>
				  </table>
			   </div>
			</div>
			<!-- begin lich su cay thue -->
                        </div>
                    

<script>
function openModal(e){
    var username = $(e).data('username');
    var password = $(e).data('password');
    var note = $(e).data('note');
    $("#dataItems").modal('show');
    $("#taikhoan").val(username);
    $("#matkhau").val(password);
    $("#ghichu").val(note);
}
$("#dichvu").on('change', function(e){
    var amount = e.target.options[e.target.selectedIndex].dataset.amount;
    $("#anh").show();
    $("#totalAmount").val(formatNumber(amount));
})
function formatNumber(num) {
  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')+' đ';
}
function SubmitPay(){
   var data = $("#formSubmit").serialize();
   $.ajax({
   url: '/Model/BuyItems',
   data: data,
   dataType: "json",
   type: "POST",
   success: function(data) {
       if (data.status == 'success') {
            $('#msgCard').html('<div class="tw-py-2 tw-px-3 tw-border tw-rounded tw-text-sm tw-w-full tw-block tw-font-semibold tw-bg-green-100 tw-border-green-300 tw-text-green-500"><div class="relative">'+data.msg+'</div>');
            setTimeout(function(){window.location.reload();}, 2000);
        } else {
            $('#msgCard').html('<div class="tw-py-2 tw-px-3 tw-border tw-rounded tw-text-sm tw-w-full tw-block tw-font-semibold tw-bg-red-100 tw-border-red-300 tw-text-red-500"><div class="relative">'+data.msg+'</div>');
        }
   }
});
}
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#datatable').DataTable();
});
</script>
<script type="text/javascript">
function showPrice() {
    var ketqua = $('#dichvu').children('option:selected').attr('data-money').replace(/(.)(?=(\d{3})+$)/g, '$1.');
    $("#thanhtoan").html(ketqua);
}
$("#Submit").on("click", function() {

    $('#Submit').html('<i class="fa fa-spinner fa-spin"></i> ĐANG XỬ LÝ').prop('disabled',
        true);
    $.ajax({
        url: "<?=BASE_URL("assets/ajaxs/OdersGame.php");?>",
        method: "POST",
        data: {
            type: 'OrderRobux',
            tk: $("#tk").val(),
            mk: $("#mk").val(),
            magiamgia: $("#magiamgia").val(),
            ghichu: $("#ghichu").val(),
            dichvu: $("#dichvu").val()
        },
        success: function(response) {
            $("#thongbao").html(response);
            $('#Submit').html(
                    '<i class="fa fa-cart-plus mr-1" aria-hidden="true"></i>THANH TOÁN')
                .prop('disabled', false);
        }
    });
});
</script>
<?php }?>

<!--THEME 2-->

<?php if($CMSNAV->site('theme_web') == 'theme2') { ?>
<div class="mt-12 relative w-full max-w-6xl mx-auto text-gray-800 pb-8 px-2 md:px-0 ">
    <div class="block fade-in font-extrabold mb-2 md:mb-4 md:py-4 md:text-3xl neles-font2 neles-glass nelesnapthe py-2 text-2xl text-center text-yellow-400 uppercase" style="
    padding: 7px;
">
            <?=$row['title'];?>
        </div>
        <br>
    <div class="mb-4 py-4 md:p-4 bg-box-dark">
        <div
            class="fade-in mb-2 py-2 md:mb-4 block uppercase md:py-4 text-center text-yellow-400 md:text-3xl text-2xl font-extrabold text-fill ">
           
        </div>
        
       <div class="col-span-12 color-grant font-bold gap-2 grid grid-cols-10 nelesnapthe px-2 py-2 rounded select-none sticky text-xl w-1/2" style="
    margin: auto;
">
           
          <div class="col-span-12 md:col-span-12 neles-font neles-glass-boder text-center" style="
">
                SỐ TIỀN CẦN THANH TOÁN: <b id="thanhtoan">0</b>đ
            <div class="absolute flex inset-y-0 items-center neles-glass-boder pointer-events-none px-2  text-trueGray-700" style="color: #ffffff78;">
                                             <ion-icon name="card"></ion-icon>
                                            </div>
                                         <div class="absolute flex inset-y-0 items-center neles-glass-boder pointer-events-none px-2 right-0 text-trueGray-700" style="color: #ffffff78;">
                                             <ion-icon name="card"></ion-icon>
                                            </div>    
            </div>
            
         
            
            
        </div>
        <div class="v-account-detail p-2 md:px-0 mt-5">
            <div class="v-infomations ">
                <div class="py-3 px-5">
                    <span class="mb-2 block">
                       <div class="flex items-center relative">
                                            <select id="dichvu" onchange="showPrice()" class="appearance-none bg-trueGray-900 block focus:bg-trueGray-900 focus:border-yellow-500 focus:outline-none leading-tight neles-font2 neles-glass px-3 py-2 rounded text-white w-full">
                                <option data-money="0" value="">* Chọn gói cần mua</option>
                                <?php foreach($CMSNAV->get_list("SELECT * FROM `groups_robux` WHERE `category` = '".$row['id']."' ") as $group) {?>
                                <option data-money="<?=$group['money'];?>" value="<?=$group['id'];?>">
                                    <?=$group['title'];?></option>
                                <?php }?>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                
                               <div class="absolute flex inset-y-0 items-center neles-glass-boder pointer-events-none px-2 right-0 text-trueGray-700" style="color: #ffffff78;">
                                              <ion-icon name="chevron-down-sharp" role="img" class="md hydrated" aria-label="chevron down sharp"></ion-icon>
                                            </div>
  
                            </div>
                            <div class="absolute flex inset-y-0 items-center neles-glass-boder pointer-events-none px-2 text-trueGray-700" style="color: #ffffff78;">
                                              <ion-icon name="chevron-down-sharp" role="img" class="md hydrated" aria-label="chevron down sharp"></ion-icon>
                                            </div>
                                            <div class="absolute flex inset-y-0 items-center neles-glass-boder pointer-events-none px-2 right-0 text-trueGray-700" style="color: #ffffff78;">
                                             <ion-icon name="chevron-back-circle-sharp" role="img" class="md hydrated" aria-label="chevron back circle sharp"></ion-icon>
                                            </div>
                                            
                                            
                            </div>
                        </div>
                    </span>
                                                 <span class="mb-2 block">
                        <div class="flex items-center relative"><input placeholder="Nhập tài khoản đăng nhập" id="tk"
                                class="appearance-none bg-trueGray-900 block focus:bg-trueGray-900 focus:border-yellow-500 focus:outline-none leading-tight neles-font2 neles-glass px-3 py-2 rounded text-white w-full">
                        <div class="absolute flex inset-y-0 items-center neles-glass-boder pointer-events-none px-2 right-0 text-trueGray-700" style="color: #ffffff78;">
                                             <ion-icon name="chevron-back-circle-sharp" role="img" class="md hydrated" aria-label="chevron back circle sharp"></ion-icon>
                                            </div>
                                       <div class="absolute flex inset-y-0 items-center neles-glass-boder pointer-events-none px-2  text-trueGray-700" style="color: #ffffff78;">
                                             <ion-icon name="chevron-forward-circle-sharp" role="img" class="md hydrated" aria-label="chevron forward circle sharp"></ion-icon>
                                            </div>     
                                            
                                            
                                            
                        </div>
                    </span>
                    <span class="mb-2 block">
                        <div class="flex items-center relative"><input placeholder="Nhập mật khẩu" id="mk"
                                class="appearance-none bg-trueGray-900 block focus:bg-trueGray-900 focus:border-yellow-500 focus:outline-none leading-tight neles-font2 neles-glass px-3 py-2 rounded text-white w-full">
                       <div class="absolute flex inset-y-0 items-center neles-glass-boder pointer-events-none px-2 right-0 text-trueGray-700" style="color: #ffffff78;">
                                             <ion-icon name="chevron-back-circle-sharp" role="img" class="md hydrated" aria-label="chevron back circle sharp"></ion-icon>
                                            </div>
                                        <div class="absolute flex inset-y-0 items-center neles-glass-boder pointer-events-none px-2  text-trueGray-700" style="color: #ffffff78;">
                                             <ion-icon name="chevron-forward-circle-sharp" role="img" class="md hydrated" aria-label="chevron forward circle sharp"></ion-icon>
                                            </div>    
                                            
                                            
                        </div>
                    </span>
                    <span class="mb-2 block">
                        <div class="flex items-center relative"><textarea placeholder="Nhập ghi chú nếu có" id="ghichu"
                                class="appearance-none bg-trueGray-900 block focus:bg-trueGray-900 focus:border-yellow-500 focus:outline-none leading-tight neles-font2 neles-glass px-3 py-2 rounded text-white w-full"></textarea>
                        <div class="absolute flex inset-y-0 items-center neles-glass-boder pointer-events-none px-2 right-0 text-trueGray-700" style="color: #ffffff78;">
                                             <ion-icon name="chevron-back-circle-sharp" role="img" class="md hydrated" aria-label="chevron back circle sharp"></ion-icon>
                                            </div>
                                    <div class="absolute flex inset-y-0 items-center neles-glass-boder pointer-events-none px-2  text-trueGray-700" style="color: #ffffff78;">
                                             <ion-icon name="chevron-forward-circle-sharp" role="img" class="md hydrated" aria-label="chevron forward circle sharp"></ion-icon>
                                            </div>        
                                            
                        </div>
                    </span>
                                                            <center>
                    <button type="button" id="Submit" class="flex focus:outline-none h-10 homepayin items-center justify-center neles-font2 neles-glass-boder2 nelesnapthe pt-1 px-4 rounded text-2xl text-center uppercase" style="">
                                           THANH TOÁN
                                        </button></center>
                                        <style>
                                            .nelesnapthe:hover{
                                                transition: .4s all;
                                                transform: translateY(-3px);
                                                
                                            }
                                             .nelesnapthe{
                                                transition: .7s all;
                                                transform: translateY(3px);
                                                
                                            }
                                            </style>
               
            </div>
        </div>
        <div class="alert-info chino-card-ovf chino-card" role="alert">
            <?=$row['luuy'];?>
        </div>
    </div>    
</div>
<script type="text/javascript">
function showPrice() {
    var ketqua = $('#dichvu').children('option:selected').attr('data-money').replace(/(.)(?=(\d{3})+$)/g, '$1.');
    $("#thanhtoan").html(ketqua);
}
$("#Submit").on("click", function() {

    $('#Submit').html('<i class="fa fa-spinner fa-spin"></i> ĐANG XỬ LÝ').prop('disabled',
        true);
    $.ajax({
        url: "<?=BASE_URL("assets/ajaxstheme2/OdersGame.php");?>",
        method: "POST",
        data: {
            type: 'OrderRobux',
            tk: $("#tk").val(),
            mk: $("#mk").val(),
            magiamgia: $("#magiamgia").val(),
            ghichu: $("#ghichu").val(),
            dichvu: $("#dichvu").val()
        },
        success: function(response) {
            $("#thongbao").html(response);
            $('#Submit').html(
                    '<i class="fa fa-cart-plus mr-1" aria-hidden="true"></i>THANH TOÁN')
                .prop('disabled', false);
        }
    });
});
</script>

<?php }?>
<?php 
    require_once("../../public/client/Footer.php");
?>