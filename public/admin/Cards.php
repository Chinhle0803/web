<?php
    require_once("../../config/config.php");
    require_once("../../config/function.php");
    $title = 'QUẢN LÝ NẠP THẺ | '.$CMSNAV->site('tenweb');
    require_once(__DIR__."/../../includes/login-admin.php");
    require_once(__DIR__."/Header.php");
    require_once(__DIR__."/Sidebar.php");
    require_once(__DIR__."/../../includes/checkLicense.php");
?>
<?php

if(isset($_POST['btnSaveOption']) && $getUser['level'] == 'admin')
{
    if($CMSNAV->site('status_demo') == 'ON')
    {
        msg_error("Chức năng này không khả dụng trên trang web DEMO!", "", 2000);
    }
    foreach ($_POST as $key => $value)
    {
        $CMSNAV->update("options", array(
            'value' => $value
        ), " `name` = '$key' ");
    }
    msg_success('Lưu thành công', '', 500);
}
?>
<main class="app-main"> <div class="wrapper"> <div class="page"> <div class="page-inner"> <div class="page-section">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">CẤU HÌNH NẠP THẺ [DOITHE1S.VN]</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Partner_ID lấy ở doithe1s.vn</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="Partner_ID" value="<?=$CMSNAV->site('Partner_ID');?>"
                                            class="form-control" placeholder="Partner_ID" required autofocus>
                                    </div>
                                </div>
                            </div><div class="form-group row">
                                <label class="col-sm-3 col-form-label">Partner_Key lấy ở doithe1s.vn</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="Partner_Key" value="<?=$CMSNAV->site('Partner_Key');?>"
                                            class="form-control" placeholder="Partner_Key" required autofocus>
                                    </div>
                                </div>
                            </div><div class="form-group row">
                                <label class="col-sm-3 col-form-label">Điền Link Callback( KIỂU GET):</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                            <b class="form-control">https://<?=$_SERVER['SERVER_NAME'];?>/api/card.php</b>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="btnSaveOption" class="btn btn-primary btn-block">
                                <span>LƯU</span></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">LỊCH SỬ NẠP THẺ</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>USERNAME</th>
                                        <th>SERI</th>
                                        <th>PIN</th>
                                        <th>LOẠI THẺ</th>
                                        <th>MỆNH GIÁ</th>
                                        <th>THỰC NHẬN</th>
                                        <th>THỜI GIAN</th>
                                        <th>TRẠNG THÁI</th>
                                        <th>GHI CHÚ</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach($CMSNAV->get_list(" SELECT * FROM `cards` WHERE `deletedate` IS NULL ORDER BY id DESC ") as $row){
                                    ?>
                                    <tr>
                                        <td><?=$i;?> <?php $i++;?></td>
                                        <td><a href="<?=BASE_URL('Admin/User/Edit/'.$CMSNAV->getUser($row['username'])['id']);?>"><?=$row['username'];?></a></td>
                                        <td><?=$row['seri'];?></td>
                                        <td><?=$row['pin'];?></td>
                                        <td><?=loaithe($row['loaithe']);?></td>
                                        <td><?=format_cash($row['menhgia']);?></td>
                                        <td><?=format_cash($row['thucnhan']);?></td>
                                        <td><span class="badge badge-dark"><?=$row['createdate'];?></span></td>
                                        <td><?=status($row['status']);?></td>
                                        <td><?=$row['note'];?></td>
                                        <td><button class="btn btn-danger delete" data-id="<?=$row['id'];?>" ><i class="fas fa-trash"></i>
                                                <span>DELETE</span></button></td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- summernote -->
<div class="modal fade" id="modal-hd-nap-the">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">HƯỚNG DẪN TÍCH HỢP NẠP THẺ CÀO</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Bước 1: Truy cập vào <a target="_blank"
                            href="<?=$CMSNAV->site('domain_cardv3');?>/account/login"><?=$CMSNAV->site('domain_cardv3');?>/account/login</a> <b>đăng
                            ký</b> tài khoản và <b>đăng nhập</b>.</li>
                    <li>Bước 2: Truy cập vào <a target="_blank" href="<?=$CMSNAV->site('domain_cardv3');?>/merchant/list">đây</a> để tiến
                        hành tạo API mới.</li>
                    <li>Bước 3: Nhập lần lượt như sau:</li>
                    <b>Tên mô tả:</b> => <i><?=check_string($_SERVER['SERVER_NAME']);?> - CMSNAV</i><br>
                    <b>Chọn ví giao dịch:</b> => <i>VND</i><br>
                    <b>Kiểu:</b> => <i>GET</i><br>
                    <b>Đường dẫn nhận dữ liệu (Callback Url):</b> => <i><?=BASE_URL('api/card.php');?></i><br>
                    <b>Địa chỉ IP (không bắt buộc):</b> => <i></i><br>
                    <li>Bước 4: Không hiểu thì hãy <a target="_blank" href="<?=file_get_contents('https://api.cmsnav.site/apiweb/Facebook.php');?>">inbox</a>.</li>
                    <li>Bước 5: Copy Partner ID dán vào ô Partner ID trên hệ thống.</li>
                    <li>Bước 6: Copy Partner Key dán vào ô Partner Key trên hệ thống.</li>
                </ul>
                <h4 class="text-center">Chúc quý khách thành công <img
                        src="https://i.pinimg.com/736x/c4/2c/98/c42c983e8908fdbd6574c2135212f7e4.jpg" width="45px;">
                </h4>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>




<script type="text/javascript">
$(".delete").on("click", function() {
    cuteAlert({
        type: "question",
        title: "Xác Nhận Xóa Bill",
        message: " ",
        confirmText: "Đồng Ý",
        cancelText: "Hủy"
    }).then((e) => {
        if (e) {
            $.ajax({
                url: "<?=BASE_URL("assets/ajaxs/admin/delete-card.php");?>",
                method: "POST",
                dataType: "JSON",
                data: {
                    id: $(this).data('id')
                },
                success: function(respone) {
                    if (respone.status == 'success') {
                        cuteToast({
                            type: "success",
                            message: respone.msg,
                            timer: 3000
                        });
                        location.reload();
                    } else {
                        cuteAlert({
                            type: "error",
                            title: "Error",
                            message: respone.msg,
                            buttonText: "Okay"
                        });
                    }
                },
                error: function() {
                    alert(html(response));
                    location.reload();
                }
            });
        }
    })
});
</script>


<script>
$(function() {
    // Summernote
    $('.textarea').summernote()
})
</script>
<script>
$(function() {
    $("#datatable").DataTable({
        "responsive": false,
        "autoWidth": false,
    });
});
</script>



<?php 
    require_once("./Footer.php");
?>