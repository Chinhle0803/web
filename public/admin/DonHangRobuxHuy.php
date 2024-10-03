<?php
    require_once("../../config/config.php");
    require_once("../../config/function.php");
    $title = 'DANH SÁCH ĐƠN HÀNG | '.$CMSNAV->site('tenweb');
    require_once(__DIR__."/../../includes/login-admin.php");
    require_once(__DIR__."/Header.php");
    require_once(__DIR__."/Sidebar.php");
    require_once(__DIR__."/../../includes/checkLicense.php");
?>

<?php

if(isset($_POST['Save']) && $getUser['level'] == 'admin' )
{
    if($CMSNAV->site('status_demo') == 'ON')
    {
        admin_msg_warning("Chức năng này không khả dụng trên trang web DEMO!", "", 2000);
    }
    $status = check_string($_POST['status']);
    $reason = check_string($_POST['reason']);
    $id = check_string($_POST['id']);
    $row = $CMSNAV->get_row("SELECT * FROM `orders_robux` WHERE `id` = '$id' ");
    if(!$row)
    {
        admin_msg_warning("Đơn hàng không hợp lệ", "", 2000);
    }
    if(empty($status))
    {
        admin_msg_warning("Vui lòng chọn trạng thái", "", 2000);
    }
    if($row['status'] == 'huy')
    {
        admin_msg_warning("Đơn hàng nãy đã hoàn tiền, không thể điều chỉnh trạng thái khác", "", 2000);
    }
    if($status == 'huy')
    {
        // refund
        $isMoney = $CMSNAV->cong("users", "money", $row['money'], " `username` = '".$row['username']."' ");
        if($isMoney)
        {
            $getUser = $CMSNAV->get_row("SELECT * FROM `users` WHERE `username` = '".$row['username']."' ");
            /* GHI LOG DÒNG TIỀN */
            $CMSNAV->insert("dongtien", array(
                'sotientruoc'   => $getUser['money'] + $row['money'],
                'sotienthaydoi' => $row['money'],
                'sotiensau'     => $getUser['money'],
                'thoigian'      => gettime(),
                'noidung'       => 'Hoàn tiền gói ('.$row['dichvu'].')',
                'username'      => $row['username']
            ));
        }
        else
        {
            admin_msg_warning("Không thể xử lý giao dịch vui lòng thử lại", "", 2000);
        }
    }
    $CMSNAV->update("orders_robux", array(
        'status' => $status,
        'reason' => $reason
    ), " `id` = '".check_string($_POST['id'])."' ");

    admin_msg_success("Lưu thành công", '', 500);
}
?>

<main class="app-main"> <div class="wrapper"> <div class="page"> <div class="page-inner"> <div class="page-section"> <div class="card card-fluid"> <div class="card-header">Danh sách đơn hàng robux đã hủy</div> <div class="card-body">
                <div class="table-responsive">
                            <table id="datatable1" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>NGƯỜI NHẬN ĐƠN</th>
                                        <th>NGƯỜI ĐẶT</th>
                                        <th>DỊCH VỤ</th>
                                        <th>TK|MK</th>
                                        <th>GHI CHÚ</th>
                                        <th>THANH TOÁN</th>
                                        <th>CREATEDATE</th>
                                        <th>UPDATEDATE</th>
                                        <th>STATUS</th>
                                        <th>THAO TÁC</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach($CMSNAV->get_list(" SELECT * FROM `orders_robux` WHERE `status` = 'huy' ORDER BY id DESC ") as $row){
                                    ?>
                                    <tr>
                                        <td><?=$i++;?></td>
                                        <td><?=$row['receiver'];?></td>
                                        <td><?=$row['username'];?></td>
                                        <td><?=$row['dichvu'];?></td>
                                        <td><?=$row['tk'];?>|<?=$row['mk'];?></td>
                                        <td><textarea class="form-control"readonly><?=$row['ghichu'];?></textarea></td>
                                        <td><?=format_cash($row['money']);?></td>
                                        <td><?=$row['createdate'];?></td>
                                        <td><?=$row['updatedate'];?></td>
                                        <td><?=status($row['status']);?></td>
                                        <td>
                                            <button class="btn btn-primary btnEdit" data-reason="<?=$row['reason'];?>"
                                                data-status="<?=$row['status'];?>" data-id="<?=$row['id'];?>"><i
                                                    class="fas fa-edit"></i>
                                                <span>EDIT</span></button>
                                        
                                        </td>
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



<!-- Modal -->
<div class="modal fade" id="staticBackdrop" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">EDIT ĐƠN HÀNG</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Trạng thái</label>
                        <div class="col-sm-8">
                            <input type="hidden" name="id" id="id" class="form-control" required>           
                            <select class="form-control show-tick" id="status" name="status" required>
                                <option value="">* Chọn trạng thái</option>        
                                <option value="xuly">Đang xử lý</option>
                                <option value="hoantat">Hoàn tất</option>
                                <option value="huy">Hủy</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Lý do</label>
                        <div class="col-sm-8">
                            <textarea name="reason" id="reason" placeholder="Nhập lý do hủy nếu có" class="form-control"></textarea>
                        </div>
                    </div>
                    <i>Hệ thống tự hoàn tiền lại cho khách hàng nếu đơn hàng bị hủy</i>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="Save" class="btn btn-danger">Lưu ngay</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal -->

<script type="text/javascript">
$('.btnEdit').on('click', function(e) {
    var btn = $(this);
    $("#status").val(btn.attr("data-status"));
    $("#reason").val(btn.attr("data-reason"));
    $("#id").val(btn.attr("data-id"));
    $("#staticBackdrop").modal();
    return false;
});
</script>
<script>
$(function() {
    $("#datatable").DataTable({
        "responsive": true,
        "autoWidth": false,
    });
    $("#datatable1").DataTable({
        "responsive": false,
        "autoWidth": false,
    });
    $("#datatable2").DataTable({
        "responsive": true,
        "autoWidth": false,
    });
});
</script>



<?php 
    require_once(__DIR__."/Footer.php");
?>