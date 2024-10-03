<?php
    require_once("../../config/config.php");
    require_once("../../config/function.php");
    $title = 'QUẢN LÝ NGÂN HÀNG | '.$CMSNAV->site('tenweb');
    require_once(__DIR__."/../../includes/login-admin.php");
    require_once(__DIR__."/Header.php");
    require_once(__DIR__."/Sidebar.php");
    require_once(__DIR__."/../../includes/checkLicense.php");
?>
<?php
if(isset($_GET['delete']) && $getUser['level'] == 'admin')
{
    if($CMSNAV->site('status_demo') == 'ON')
    {
        admin_msg_warning("Chức năng này không khả dụng trên trang web DEMO!", "", 2000);
    }
    $delete = check_string($_GET['delete']);
    $CMSNAV->remove("bank", " `id` = '$delete' ");
    admin_msg_success("Xóa thành công", BASE_URL("Admin/Bank"), 300);
}

if(isset($_POST['btnThemNganHang']) && $getUser['level'] == 'admin') 
{
    if($CMSNAV->site('status_demo') == 'ON')
    {
        admin_msg_warning("Chức năng này không khả dụng trên trang web DEMO!", "", 2000);
    }
    $isInsert = $CMSNAV->insert("bank", array(
        'name' => check_string($_POST['name']),
        'stk' => check_string($_POST['stk']),
        'logo' => check_string($_POST['logo']),
        'bank_name' => check_string($_POST['bank_name']),
        'ghichu' => check_string($_POST['ghichu'])
    ));
    if($isInsert)
    {
        admin_msg_success("Thêm thành công", '', 1000);
    }
}

if(isset($_POST['btnSave']) && $getUser['level'] == 'admin') 
{
    if($CMSNAV->site('status_demo') == 'ON')
    {
        admin_msg_warning("Chức năng này không khả dụng trên trang web DEMO!", "", 2000);
    }
    $CMSNAV->update("bank", array(
        'name' => check_string($_POST['name']),
        'stk' => check_string($_POST['stk']),
        'logo' => check_string($_POST['logo']),
        'bank_name' => check_string($_POST['bank_name']),
        'ghichu' => check_string($_POST['ghichu'])
    ), " `id` = '".check_string($_POST['id'])."' ");
    admin_msg_success("Lưu thành công", '', 1000);
}

if(isset($_POST['btnSaveOption']) && $getUser['level'] == 'admin')
{
    if($CMSNAV->site('status_demo') == 'ON')
    {
        admin_msg_warning("Chức năng này không khả dụng trên trang web DEMO!", "", 2000);
    }
    foreach ($_POST as $key => $value)
    {
        $CMSNAV->update("options", array(
            'value' => $value
        ), " `name` = '$key' ");
    }
    admin_msg_success('Lưu thành công', '', 500);
}
?>


<main class="app-main"> <div class="wrapper"> <div class="page"> <div class="page-inner"> <div class="page-section">  
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ngân hàng</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">CẤU HÌNH MOMO, BANK AUTO (<span style="color:blue"><a type="button" data-toggle="modal"
                                                    data-target="#modal-hd-auto-momo" href="#">Xem hướng dẫn</a></span>)</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ON/OFF Nạp tiền qua Bank</label>
                                <div class="col-sm-9">
                                    <select class="form-control show-tick" name="status_napbank" required>
                                        <option value="<?=$CMSNAV->site('status_napbank');?>">
                                            <?=$CMSNAV->site('status_napbank');?>
                                        </option>
                                        <option value="ON">ON</option>
                                        <option value="OFF">OFF</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">API Bank cần Auto</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="api_bank" value="<?=$CMSNAV->site('api_bank');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">STK Bank cần Auto</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="stk_bank" value="<?=$CMSNAV->site('stk_bank');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Mật Khẩu Bank cần Auto</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="mk_bank" value="<?=$CMSNAV->site('mk_bank');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <p>Đăng ký tài khoản API: <a href="https://apiv3.web2m.com/"
                                        target="_blank">Tại đây</a></p>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">API Momo Auto</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="api_momo" value="<?=$CMSNAV->site('api_momo');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <p>- Số dư ví MOMO: <b><?=format_cash(getMoney_momo($CMSNAV->site('api_momo')));?></b></p>
                                <p>Liên hệ hỗ trợ kết nối Auto MOMO: <a
                                        href="<?=file_get_contents('https://api.cmsnav.site/apiweb/Facebook.php');?>"
                                        target="_blank">Tại đây</a></p>
                            </div>
                            <hr>
                            <hr>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nội dung nạp tiền</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="noidung_naptien"
                                            value="<?=$CMSNAV->site('noidung_naptien');?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Lưu ý nạp ngân hàng</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <textarea class="textarea" name="luuy_napbank"
                                            rows="6"><?=$CMSNAV->site('luuy_napbank');?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Chiết khấu khuyến mãi</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="ck_bank"
                                            placeholder="Khuyến mãi thêm bao nhiêu % khi nạp tiền qua ngân hàng, ví điện tử"
                                            value="<?=$CMSNAV->site('ck_bank');?>" class="form-control">
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
                        <h3 class="card-title">DANH SÁCH THÔNG TIN THANH TOÁN</h3>
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
                                        <th>NGÂN HÀNG</th>
                                        <th>LOGO</th>
                                        <th>CHỦ TÀI KHOẢN</th>
                                        <th>STK</th>
                                        <th>LƯU Ý</th>
                                        <th width="20%">THAO TÁC</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach($CMSNAV->get_list(" SELECT * FROM `bank` WHERE `id` IS NOT NULL ORDER BY id DESC ") as $row){
                                    ?>
                                    <tr>
                                        <td><?=$row['name'];?></td>
                                        <td><img src="<?=$row['logo'];?>" height="50px;" /></td>
                                        <td><?=$row['bank_name'];?></td>
                                        <td><?=$row['stk'];?></td>
                                        <td><?=$row['ghichu'];?></td>
                                        <td>
                                            <a type="button" href="#" data-toggle="modal"
                                                data-target="#Edit<?=$row['id'];?>" class="btn btn-primary"><i
                                                    class="fas fa-edit"></i>
                                                <span>EDIT</span></a>
                                            <a type="button"
                                                href="<?=BASE_URL('public/admin/Bank.php?delete='.$row['id']);?>"
                                                class="btn btn-danger"><i class="fas fa-trash"></i>
                                                <span>DELETE</span></a>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="Edit<?=$row['id'];?>" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="defaultModalLabel">EDIT NGÂN HÀNG
                                                    </h4>
                                                </div>
                                                <form action="" method="POST">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" name="name"
                                                                    placeholder="Nhập tên ngân hàng"
                                                                    class="form-control" value="<?=$row['name'];?>"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" name="logo"
                                                                    placeholder="Nhập link logo"
                                                                    value="<?=$row['logo'];?>" class="form-control"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" name="stk"
                                                                    placeholder="Nhập số tài khoản"
                                                                    value="<?=$row['stk'];?>" class="form-control"
                                                                    required>
                                                                <input type="hidden" name="id" value="<?=$row['id'];?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" name="bank_name"
                                                                    placeholder="Nhập tên chủ tài khoản"
                                                                    class="form-control" value="<?=$row['bank_name'];?>"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <textarea class="form-control" name="ghichu"
                                                                    placeholder="Nhập ghi chú nếu có"
                                                                    rows="6"><?=$row['ghichu'];?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger waves-effect"
                                                            data-dismiss="modal"><span>ĐÓNG</span></button>
                                                        <button type="submit" name="btnSave"
                                                            class="btn btn-primary waves-effect"><span>LƯU
                                                                LẠI</span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>NGÂN HÀNG</th>
                                        <th>LOGO</th>
                                        <th>CHỦ TÀI KHOẢN</th>
                                        <th>STK</th>
                                        <th>LƯU Ý</th>
                                        <th>THAO TÁC</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <a type="button" href="#" data-toggle="modal" data-target="#AddBank"
                            class="btn btn-info btn-block"><i class="fas fa-plus-circle"></i> <span>THÊM NGÂN
                                HÀNG</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">LỊCH SỬ NẠP BANK AUTO</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable1" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>USERNAME</th>
                                        <th>MÃ GD</th>
                                        <th>MONEY</th>
                                        <th>NỘI DUNG</th>
                                        <th>THỜI GIAN</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach($CMSNAV->get_list(" SELECT * FROM `bank_auto` WHERE `deletedate` IS NULL ORDER BY id DESC ") as $row){
                                    ?>
                                    <tr>
                                        <td><?=$i++;?></td>
                                        <td><a
                                                href="<?=BASE_URL('Admin/User/Edit/'.$CMSNAV->getUser($row['username'])['id']);?>"><?=$row['username'];?></a>
                                        </td>
                                        <td><?=$row['tid'];?></td>
                                        <td><?=$row['amount'];?></td>
                                        <td><?=$row['description'];?></td>
                                        <td><?=$row['time'];?></td>
                                        <td><button class="btn btn-danger deleteBank" data-id="<?=$row['id'];?>"><i
                                                    class="fas fa-trash"></i>
                                                <span>DELETE</span></button></td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
            $(".deleteBank").on("click", function() {
                cuteAlert({
                    type: "question",
                    title: "Xác Nhận Xóa Bill",
                    message: " ",
                    confirmText: "Đồng Ý",
                    cancelText: "Hủy"
                }).then((e) => {
                    if (e) {
                        $.ajax({
                            url: "<?=BASE_URL("assets/ajaxs/admin/delete-bank.php");?>",
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
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">LỊCH SỬ NẠP MOMO AUTO</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>USERNAME</th>
                                        <th>MÃ GD</th>
                                        <th>SDT</th>
                                        <th>TÊN</th>
                                        <th>MONEY</th>
                                        <th>NỘI DUNG</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach($CMSNAV->get_list(" SELECT * FROM `momo` WHERE `deletedate` IS NULL ORDER BY id DESC ") as $row){
                                    ?>
                                    <tr>
                                        <td><?=$i++;?></td>
                                        <td><a
                                                href="<?=BASE_URL('Admin/User/Edit/'.$CMSNAV->getUser($row['username'])['id']);?>"><?=$row['username'];?></a>
                                        </td>
                                        <td><?=$row['tranId'];?></td>
                                        <td><?=$row['partnerId'];?></td>
                                        <td><?=$row['partnerName'];?></td>
                                        <td><?=$row['amount'];?></td>
                                        <td><?=$row['comment'];?></td>
                                        <td><button class="btn btn-danger deleteMomo" data-id="<?=$row['id'];?>"><i
                                                    class="fas fa-trash"></i>
                                                <span>DELETE</span></button></td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
            $(".deleteMomo").on("click", function() {
                cuteAlert({
                    type: "question",
                    title: "Xác Nhận Xóa Bill",
                    message: " ",
                    confirmText: "Đồng Ý",
                    cancelText: "Hủy"
                }).then((e) => {
                    if (e) {
                        $.ajax({
                            url: "<?=BASE_URL("assets/ajaxs/admin/delete-momo.php");?>",
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
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>



<div class="modal fade" id="AddBank" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">THÊM NGÂN HÀNG</h4>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="name" placeholder="Nhập tên ngân hàng" class="form-control"
                                required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="logo" placeholder="Nhập link logo" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="stk" placeholder="Nhập số tài khoản" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="bank_name" placeholder="Nhập tên chủ tài khoản"
                                class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea class="form-control" name="ghichu" placeholder="Nhập ghi chú nếu có"
                                rows="6"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect"
                        data-dismiss="modal"><span>ĐÓNG</span></button>
                    <button type="submit" name="btnThemNganHang" class="btn btn-primary waves-effect"><span>THÊM
                            NGAY</span></button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-hd-auto-momo">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">HƯỚNG DẪN TÍCH HỢP NẠP TIỀN TỰ ĐỘNG QUA VÍ MOMO</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Hướng dẫn lấy Token MOMO để cài Auto.</p>
                <ul>
                    <li>Bước 1: Truy cập vào <a target="_blank"
                            href="https://apiv3.web2m.com/Auth/Register?ref=373">đây</a> để <b>đăng ký</b> tài khoản và
                        <b>đăng nhập</b>.
                    </li>
                    <li>Bước 2: Chọn ngân hàng bạn muốn kết nối Auto, sau đó nhấn vào nút <b>Thêm tài khoản MoMo</b>.
                    </li>
                    <li>Bước 3: Nhập đầy đủ thông tin đăng nhập MoMo của bạn vào form để tiến hành kết nối.</li>
                    <li>Bước 4: Nhấn vào <b>Lấy Token</b> sau đó check email để copy <b>Token</b> vừa lấy.</li>
                    <li>Bước 5: Dán <b>Token</b> vào ô <b>Token MOMO</b> trong website của bạn và nhấn Lưu.</li>
                    <li>Bước 6: Quay lại <a target="_blank" href="https://apiv3.web2m.com/App/transfer">đây</a> và tiến
                        hành gia hạn gói MOMO và bắt đầu sử dụng Auto.</li>
                </ul>
                <!-- <p>Hướng dẫn lấy mã QR MOMO</p>-->
                <!--<ul>-->
                <!--    <li>Bước 1: Truy cập App <b>MOMO</b> -> <b>Ví của tôi</b> -> nhấn vào <b>Tên Chủ Ví</b> ở dòng đầu-->
                <!--        tiên trong ví MOMO của bạn.</li>-->
                <!--    <li>Bước 2: Kéo xuống dưới cùng chọn <b>Mã NHẬN TIỀN của tôi</b> -> nhấn <b>lưu hình</b>.</li>-->
                <!--    <li>Bước 3: Sau khi lưu hình bạn vào <a target="_blank" href="https://imgur.com/upload?beta">đây</a>-->
                <!--        để up hình vừa lưu lên cloud.</li>-->
                <!--    <li>Bước 4: Sau khi up lên cloud imgur bạn rê chuột phải vào ảnh chọn <b>copy địa chỉ hình ảnh</b>-->
                <!--        (hoặc tiếng anh có nghĩa tương tự) để tiến hành copy link ảnh .jpg hoặc .png.</li>-->
                <!--    <li>Bước 5: Dán link ảnh vừa copy vào ô <b>QR CODE</b>.</li>-->
                <!--</ul> -->
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

<script>
$(function() {
    $("#datatable").DataTable({
        "responsive": false,
        "autoWidth": false,
    });
    $("#datatable1").DataTable({
        "responsive": false,
        "autoWidth": false,
    });
    $("#datatable2").DataTable({
        "responsive": false,
        "autoWidth": false,
    });
});
</script>
<script>
$(function() {
    // Summernote
    $('.textarea').summernote()
})
</script>


<?php 
    require_once(__DIR__."/Footer.php");
?>