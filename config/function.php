<?php
$CMSNAV = new CMSNAV;
require_once(__DIR__.'/../vendor/autoload.php');

$config = [
    'project'   => 'SHOPROBLOX',
    'version'   => '3.0.4'
];
function CMSNAV_info($message) {
    return die('<script type="text/javascript">iziToast.info({ title: "Info", message: "'. $message .'", position: "topRight", timer: 5000, });</script>');
}

function CMSNAV_warning($message) {
    return die('<script type="text/javascript">iziToast.warning({ title: "Caution", message: "'. $message .'", position: "topRight", timer: 5000, });</script>');
}
function CMSNAV_success($message) {
    return die('<script type="text/javascript">iziToast.success({ title: "OK", message: "'. $message .'", position: "topRight", zindex: 9999, });</script>');
}

function CMSNAV_error($message) {
    return die('<script type="text/javascript">iziToast.error({  title: "Error",  message: "'. $message .'", position: "topRight", timer: 5000, });</script>');
}

function cmsnav_success2($text, $url, $time) {
    return die('<script type="text/javascript">Swal.fire("Thành Công", "'.$text.'","success");
    setTimeout(function(){ location.href = "'.$url.'" },'.$time.');</script>');
}

function checkAddon($id_addon){
    $CMSNAV = new CMSNAV;
    $domain = str_replace('www.', '', $_SERVER['HTTP_HOST']);
    if($CMSNAV->get_row("SELECT * FROM `addons` WHERE `id` = '$id_addon' ")['purchase_key'] == md5($domain.'|'.$id_addon)){
        return true;
    }
    return false;
}
function BASE_URL($url)
{
    $a = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"];
    if($a == 'http://localhost'){
        $a = 'http://localhost/CMSNAV.CO/SHOPNICK2';
    }
    return $a.'/'.$url;
}
function getMoney_momo($token)
{

    $result = curl_get('https://apiv3.web2m.com/apigetsodu/'.$token.'');
    $result = json_decode($result, true);

    if (isset($result['status']) && $result['status'] == true) {
        return $result['SoDu'];
    } else {
        return 0;
    }
}
function getUser($username, $row)
{
    global $CMSNAV;
    return $CMSNAV->get_row("SELECT * FROM `users` WHERE `username` = '$username' ")[$row];
}

function active_sidebar($path)
{
    foreach($path as $row)
    {
        if($row == substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1))
        {
            return 'active';
        }
    }
    return '';
}
function menuopen_sidebar($path)
{
    foreach($path as $row)
    {
        if($row == substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1))
        {
            return 'menu-open';
        }
    }
    return '';
}
function insert_options($name, $value)
{
    global $CMSNAV;
    if(!$CMSNAV->get_row("SELECT * FROM `options` WHERE `name` = '$name' "))
    {
        $CMSNAV->insert("options", [
            'name'  => $name,
            'value' => $value
        ]);
    }
}
function format_date($time){
    return date("H:i:s d/m/Y", $time);
}
function card24h($api_card, $loaithe, $menhgia, $seri, $pin, $code)
{
    $callback = BASE_URL('api/card.php');
    $url_api = 'https://nhanthecao.vn/';
    $json = json_decode(curl_get($url_api.'api/card-auto.php?auto=true&type='.$loaithe.'&menhgia='.$menhgia.'&seri='.$seri.'&pin='.$pin.'&APIKey='.$api_card.'&callback='.$callback.'&content='.$code), true);
    return $json;
}

/* CONFIG RÚT TIỀN */
function listbank()
{
    $html = '
    <option value="">Chọn ngân hàng</option>
    <option value="MOMO">MOMO</option>
    <option value="VIETTEL PAY">VIETTEL PAY</option>
    <option value="ZALO PAY">ZALO PAY</option>
    <option value="VIETINBANK">VIETINBANK</option>
    <option value="VIETCOMBANK">VIETCOMBANK</option>
    <option value="AGRIBANK">AGRIBANK</option>
    <option value="TPBANK">TPBANK</option>
    <option value="HDB">HDB</option>
    <option value="VPBANK">VPBANK</option>
    <option value="MBBANK">MBBANK</option>
    <option value="OCEANBANK">OCEANBANK</option>
    <option value="BIDV">BIDV</option>
    <option value="SACOMBANK">SACOMBANK</option>
    <option value="ACB">ACB</option>
    <option value="ABBANK">ABBANK</option>
    <option value="NCB">NCB</option>
    <option value="IBK">IBK</option>
    <option value="CIMB">CIMB</option>
    <option value="EXIMBANK">EXIMBANK</option>
    <option value="SEABANK">SEABANK</option>
    <option value="SCB">SCB</option>
    <option value="DONGABANK">DONGABANK</option>
    <option value="SAIGONBANK">SAIGONBANK</option>
    <option value="PG BANK">PG BANK</option>
    <option value="PVCOMBANK">PVCOMBANK</option>
    <option value="KIENLONGBANK">KIENLONGBANK</option>
    <option value="VIETCAPITAL BANK">VIETCAPITAL BANK</option>
    <option value="OCB">OCB</option>
    <option value="MSB">MSB</option>
    <option value="SHB">SHB</option>
    <option value="VIETBANK">VIETBANK</option>
    <option value="VRB">VRB</option>
    <option value="NAMABANK">NAMABANK</option>
    <option value="SHBVN">SHBVN</option>
    <option value="VIB">VIB</option>
    <option value="TECHCOMBANK">TECHCOMBANK</option>
    ';
    return $html;
}

function daily($data)
{
    if($data == 0)
    {
        return 'Thành viên';
    }
    else if($data == 1)
    {
        return 'Đại lý';
    }
}
function trangthai($data)
{
    if($data == 'xuly')
    {
        return 'Đang xử lý';
    }
    else if($data == 'hoantat')
    {
        return 'Hoàn tất';
    }
    else if($data == 'thanhcong')
    {
        return 'Thành công';
    }
    else if($data == 'huy')
    {
        return 'Hủy';
    }
    else if($data == 'thatbai')
    {
        return 'Thất bại';
    }
    else
    {
        return 'Khác';
    }
}
function loaithe($data)
{
    if ($data == 'Viettel' || $data == 'viettel')
    {
        $show = 'https://i.imgur.com/xFePMtd.png';
    }
    else if ($data == 'Vinaphone' || $data == 'vinaphone')
    {
        $show = 'https://i.imgur.com/s9Qq3Fz.png';
    }
    else if ($data == 'Mobifone' || $data == 'mobifone')
    {
        $show = 'https://i.imgur.com/qQtcWJW.png';
    }
    else if ($data == 'Vietnamobile' || $data == 'vietnamobile')
    {
        $show = 'https://i.imgur.com/IHm28mq.png';
    }
    else if ($data == 'Zing' || $data == 'zing')
    {
        $show = 'https://i.imgur.com/xkd7kQ0.png';
    }
    else if ($data == 'Garena' || $data == 'garena')
    {
        $show = 'https://i.imgur.com/BLkY5qm.png';
    }
    return '<img style="text-align: center;" src="'.$show.'" width="70px" />';
}


function sendCSM($mail_nhan,$ten_nhan,$chu_de,$noi_dung,$bcc)
{
    global $CMSNAV;
        // PHPMailer Modify
        $mail = new PHPMailer();
        $mail->SMTPDebug = 0;
        $mail ->Debugoutput = "html";
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $CMSNAV->site('email'); // GMAIL STMP
        $mail->Password = $CMSNAV->site('pass_email'); // PASS STMP
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom($CMSNAV->site('email'), $bcc);
        $mail->addAddress($mail_nhan, $ten_nhan);
        $mail->addReplyTo($CMSNAV->site('email'), $bcc);
        $mail->isHTML(true);
        $mail->Subject = $chu_de;
        $mail->Body    = $noi_dung;
        $mail->CharSet = 'UTF-8';
        $send = $mail->send();
        return $send;
}
function parse_order_id($des)
{
    global $CMSNAV;
    $re = '/'.$CMSNAV->site('noidung_naptien').'\d+/im';
    preg_match_all($re, $des, $matches, PREG_SET_ORDER, 0);
    if (count($matches) == 0 )
        return null;
    // Print the entire match result
    $orderCode = $matches[0][0];
    $prefixLength = strlen($CMSNAV->site('noidung_naptien'));
    $orderId = intval(substr($orderCode, $prefixLength ));
    return $orderId ;
}
function gettime()
{
    return date('Y/m/d H:i:s', time());
}
function check_string($data)
{
    return trim(htmlspecialchars(addslashes($data)));
    //return str_replace(array('<',"'",'>','?','/',"\\",'--','eval(','<php'),array('','','','','','','','',''),htmlspecialchars(addslashes(strip_tags($data))));
}
function format_cash($price)
{
    return str_replace(",", ".", number_format($price));
}
function curl_get($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    
    curl_close($ch);
    return $data;
}
function random($string, $int)
{  
    return substr(str_shuffle($string), 0, $int);
}
function pheptru($int1, $int2)
{
    return $int1 - $int2;
}
function phepcong($int1, $int2)
{
    return $int1 + $int2;
}
function phepnhan($int1, $int2)
{
    return $int1 * $int2;
}
function phepchia($int1, $int2)
{
    return $int1 / $int2;
}
function check_img($img)
{
    $filename = $_FILES[$img]['name'];
    $ext = explode(".", $filename);
    $ext = end($ext);
    $valid_ext = array("png","jpeg","jpg","PNG","JPEG","JPG","gif","GIF");
    if(in_array($ext, $valid_ext))
    {
        return true;
    }
}
function msg_success2($text)
{
    return die('<div class="tw-py-2 tw-px-3 tw-border tw-rounded tw-text-sm tw-w-full tw-block tw-font-semibold tw-bg-green-100 tw-border-green-300 tw-text-green-500"><div class="relative">'.$text.'</div>');
}
function msg_error2($text)
{
    return die('<div class="tw-py-2 tw-px-3 tw-border tw-rounded tw-text-sm tw-w-full tw-block tw-font-semibold tw-bg-red-100 tw-border-red-300 tw-text-red-500"><div class="relative">'.$text.'</div>');
}
function msg_warning2($text)
{
    return die('<div class="alert alert-warning alert-dismissible error-messages">
    <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>'.$text.'</div>');
}
function msg_success($text, $url, $time)
{
    return die('<div class="tw-py-2 tw-px-3 tw-border tw-rounded tw-text-sm tw-w-full tw-block tw-font-semibold tw-bg-green-100 tw-border-green-300 tw-text-green-500"><div class="relative">
    <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>'.$text.'</div><script type="text/javascript">setTimeout(function(){ location.href = "'.$url.'" },'.$time.');</script>');
}
function msg_error($text, $url, $time)
{
    return die(' <div class="alert alert-danger alert-dismissible error-messages">
    <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>'.$text.'</div><script type="text/javascript">setTimeout(function(){ location.href = "'.$url.'" },'.$time.');</script>');
}
function msg_warning($text, $url, $time)
{
    return die('<div class="alert alert-warning alert-dismissible error-messages">
    <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>'.$text.'</div><script type="text/javascript">setTimeout(function(){ location.href = "'.$url.'" },'.$time.');</script>');
}

// function msg_success2($text)
// {
//     return die('<script type="text/javascript">cuteToast({ type: "success", message: "'.$text.'", timer: 5000 });</script>');
// }
// function msg_error2($text)
// {
//     return die('<script type="text/javascript">cuteToast({ type: "error", message: "'.$text.'", timer: 5000 });</script>');
// }
// function msg_warning2($text)
// {
//     return die('<script type="text/javascript">cuteToast({ type: "warning", message: "'.$text.'", timer: 5000 });</script>');
// }
// function msg_success($text, $url, $time)
// {
//     return die('<script type="text/javascript">Swal.fire("Thành Công", "'.$text.'","success");
//     setTimeout(function(){ location.href = "'.$url.'" },'.$time.');</script>');
// }
// function msg_error($text, $url, $time)
// {
//     return die('<script type="text/javascript">Swal.fire("Thất Bại", "'.$text.'","error");
//     setTimeout(function(){ location.href = "'.$url.'" },'.$time.');</script>');
// }
// function msg_warning($text, $url, $time)
// {
//     return die('<script type="text/javascript">Swal.fire("Thông Báo", "'.$text.'","warning");
//     setTimeout(function(),'.$time.');</script>');
// }
function msg_success22($text)
{
    return die('<script type="text/javascript">cuteToast({ type: "success", message: "'.$text.'", timer: 5000 });</script>');
}
function msg_error22($text)
{
    return die('<script type="text/javascript">cuteToast({ type: "error", message: "'.$text.'", timer: 5000 });</script>');
}
function msg_warning22($text)
{
    return die('<script type="text/javascript">cuteToast({ type: "warning", message: "'.$text.'", timer: 5000 });</script>');
}
function admin_msg_success($text, $url, $time)
{
    return die('<script type="text/javascript">Swal.fire("Thành Công", "'.$text.'","success");
    setTimeout(function(){ location.href = "'.$url.'" },'.$time.');</script>');
}
function admin_msg_error($text, $url, $time)
{
    return die('<script type="text/javascript">Swal.fire("Thất Bại", "'.$text.'","error");
    setTimeout(function(){ location.href = "'.$url.'" },'.$time.');</script>');
}
function admin_msg_warning($text, $url, $time)
{
    return die('<script type="text/javascript">Swal.fire("Thông Báo", "'.$text.'","warning");
    setTimeout(function(){ location.href = "'.$url.'" },'.$time.');</script>');
}
function display_banned($data)
{
    if ($data == 1)
    {
        $show = '<span class="badge badge-danger">Banned</span>';
    }
    else if ($data == 0)
    {
        $show = '<span class="badge badge-success">Hoạt động</span>';
    }
    return $show;
}
function display_ctv($data)
{
    if ($data == 1)
    {
        return '<span class="badge badge-success">CTV CÀY THUÊ</span>';
    }
    if ($data == 0)
    {
        return '';
    }
    return NULL;
}
function display_admin($data)
{
    if ($data =='admin')
    {
        return '<span class="badge badge-success">ADMIN</span>';
    }
    if ($data == 'admin')
    {
        return '';
    }
    return NULL;
}
function display_ctvrobux($data)
{
    if ($data == 1)
    {
        return '<span class="badge badge-success">CTV BÁN ROBUX VÀ GPASS</span>';
    }
    if ($data == 0)
    {
        return '';
    }
    return NULL;
}
function display_ctvacc($data)
{
    if ($data == 1)
    {
        return '<span class="badge badge-success">CTV BÁN ACC</span>';
    }
    if ($data == 0)
    {
        return '';
    }
    return NULL;
}
function display_loaithe($data)
{
    if ($data == 0)
    {
        $show = '<span class="badge badge-warning">Bảo trì</span>';
    }
    else 
    {
        $show = '<span class="badge badge-success">Hoạt động</span>';
    }
    return $show;
}
function display_ruttien($data)
{
    if ($data == 'xuly')
    {
        $show = '<span class="badge badge-info">Đang xử lý</span>';
    }
    else if ($data == 'hoantat')
    {
        $show = '<span class="badge badge-success">Đã thanh toán</span>';
    }
    else if ($data == 'huy')
    {
        $show = '<span class="badge badge-danger">Hủy</span>';
    }
    return $show;
}
function XoaDauCach($text)
{
    return trim(preg_replace('/\s+/',' ', $text));
}
function display($data)
{
    if ($data == 'HIDE')
    {
        $show = '<span class="badge badge-danger">ẨN</span>';
    }
    else if ($data == 'SHOW')
    {
        $show = '<span class="badge badge-success">HIỂN THỊ</span>';
    }
    return $show;
}
function displayvoucher($data)
{
    if ($data == 'caythue')
    {
        $show = '<span class="badge badge-danger">Cày Thuê</span>';
    }
    else if ($data == 'robux')
    {
        $show = '<span class="badge badge-danger">Robux</span>';
    }
    else if ($data == 'gamepass')
    {
        $show = '<span class="badge badge-danger">GamePass</span>';
    }
    else if ($data == 'muaacc')
    {
        $show = '<span class="badge badge-danger">Mua Acc</span>';
    }
    return $show;
}
function displayrobuxv2($data)
{
    if ($data == 'link')
    {
        $show = '<span class="badge badge-warning">Link</span>';
    }
    else if ($data == 'userpass')
    {
        $show = '<span class="badge badge-warning">Tài Khoản|Mật Khẩu</span>';
    }
    return $show;
}
function status($data)
{
    if ($data == 'xuly'){
        $show = '<span class="badge badge-info">Đang chờ duyệt</span>';
    }
    else if ($data == 'hoantat'){
        $show = '<span class="badge badge-success">Hoàn tất</span>';
    }
    else if ($data == 'thanhcong'){
        $show = '<span class="badge badge-success">Thành công</span>';
    }
    else if ($data == 'success'){
        $show = '<span class="badge badge-success">Success</span>';
    }
    else if ($data == 'thatbai'){
        $show = '<span class="badge badge-danger">Thất bại</span>';
    }
    else if ($data == 'error'){
        $show = '<span class="badge badge-danger">Error</span>';
    }
    else if ($data == 'loi'){
        $show = '<span class="badge badge-danger">Lỗi</span>';
    }
    else if ($data == 'huy'){
        $show = '<span class="badge badge-danger">Hủy</span>';
    }
    else if ($data == 'dangnap'){
        $show = '<span class="badge badge-warning">Đang đợi nạp</span>';
    }
    else if ($data == 2){
        $show = '<span class="badge badge-success">Hoàn tất</span>';
    }
    else if ($data == 1){
        $show = '<span class="badge badge-info">Đang xử lý</span>';
    }
    else if ($data == 'dangcay'){
        $show = '<span class="badge badge-warning">Đang cày</span>';
    }
    else{
        $show = '<span class="badge badge-warning">Khác</span>';
    }
    return $show;
}
function getHeader(){
    $headers = array();
    $copy_server = array(
        'CONTENT_TYPE'   => 'Content-Type',
        'CONTENT_LENGTH' => 'Content-Length',
        'CONTENT_MD5'    => 'Content-Md5',
    );
    foreach ($_SERVER as $key => $value) {
        if (substr($key, 0, 5) === 'HTTP_') {
            $key = substr($key, 5);
            if (!isset($copy_server[$key]) || !isset($_SERVER[$key])) {
                $key = str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', $key))));
                $headers[$key] = $value;
            }
        } elseif (isset($copy_server[$key])) {
            $headers[$copy_server[$key]] = $value;
        }
    }
    if (!isset($headers['Authorization'])) {
        if (isset($_SERVER['REDIRECT_HTTP_AUTHORIZATION'])) {
            $headers['Authorization'] = $_SERVER['REDIRECT_HTTP_AUTHORIZATION'];
        } elseif (isset($_SERVER['PHP_AUTH_USER'])) {
            $basic_pass = isset($_SERVER['PHP_AUTH_PW']) ? $_SERVER['PHP_AUTH_PW'] : '';
            $headers['Authorization'] = 'Basic ' . base64_encode($_SERVER['PHP_AUTH_USER'] . ':' . $basic_pass);
        } elseif (isset($_SERVER['PHP_AUTH_DIGEST'])) {
            $headers['Authorization'] = $_SERVER['PHP_AUTH_DIGEST'];
        }
    }
    return $headers;
}

function check_username($data)
{
    if (preg_match('/^[a-zA-Z0-9_-]{3,16}$/', $data, $matches))
    {
        return True;
    }
    else
    {
        return False;
    }
}
function check_email($data)
{
    if (preg_match('/^.+@.+$/', $data, $matches))
    {
        return True;
    }
    else
    {
        return False;
    }
}
function check_phone($data)
{
    if (preg_match('/^\+?(\d.*){3,}$/', $data, $matches))
    {
        return True;
    }
    else
    {
        return False;
    }
}
function check_url($url)
{
    $c = curl_init();
    curl_setopt($c, CURLOPT_URL, $url);
    curl_setopt($c, CURLOPT_HEADER, 1);
    curl_setopt($c, CURLOPT_NOBODY, 1);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($c, CURLOPT_FRESH_CONNECT, 1);
    if(!curl_exec($c))
    {
        return false;
    }
    else
    {
        return true;
    }
}
function check_zip($img)
{
    $filename = $_FILES[$img]['name'];
    $ext = explode(".", $filename);
    $ext = end($ext);
    $valid_ext = array("zip","ZIP");
    if(in_array($ext, $valid_ext))
    {
        return true;
    }
}
function TypePassword($string)
{
    return $string;
}
function phantrang($url, $start, $total, $kmess)
{
    $out[] = ' <div class="tw-pb-8">
        <div class="tw-min-w-max" data-v-05c811c3="">
            <section class="tw-flex tw-justify-between tw-py-1 tw-text-gray-700 tw-font-montserrat tw-select-none" data-v-05c811c3="">
              <ul class="tw-flex tw-items-center" data-v-05c811c3=""><li class="tw-pr-2" data-v-05c811c3="">';
    $neighbors = 2;
    if ($start >= $total) $start = max(0, $total - (($total % $kmess) == 0 ? $kmess : ($total % $kmess)));
    else $start = max(0, (int)$start - ((int)$start % (int)$kmess));
    $base_link = '<li><a class="
              tw-flex tw-items-center tw-justify-center
              hover:tw-bg-gray-200
              tw-rounded-md tw-transform tw-text-sm tw-h-6 tw-px-2
            " href="' . strtr($url, array('%' => '%%')) . 'page=%d' . '">%s</a></li>';
    $out[] = $start == 0 ? '' : sprintf($base_link, $start / $kmess, '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="tw-h-4 tw-w-4" data-v-05c811c3=""><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" data-v-05c811c3=""></path></svg>');
    if ($start > $kmess * $neighbors) $out[] = sprintf($base_link, 1, '1');
    if ($start > $kmess * ($neighbors + 1)) $out[] = '<li class="page-item"><a class="page-link">...</a></li>';
    for ($nCont = $neighbors;$nCont >= 1;$nCont--) if ($start >= $kmess * $nCont) {
        $tmpStart = $start - $kmess * $nCont;
        $out[] = sprintf($base_link, $tmpStart / $kmess + 1, $tmpStart / $kmess + 1);
    }
    $out[] = '<li class="
              tw-flex
              hover:tw-bg-red-600 hover:tw-text-white
              tw-transition
              tw-duration-200
              tw-rounded-md
              tw-transform
              tw-h-6
              tw-px-2
              tw-text-sm
              tw-items-center
              tw-justify-center
             tw-bg-red-500 tw-text-white"><a class="page-link">' . ($start / $kmess + 1) . '</a></li>';
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
        $out[] = sprintf($base_link, $display_page, '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="tw-h-4 tw-w-4" data-v-05c811c3=""><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" data-v-05c811c3=""></path></svg>
        ');
    }
    $out[] = '</ul></nav>';
    return implode('', $out);
}
function myip()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))     
    {  
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];  
    }  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))    
    {  
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];  
    }  
    else  
    {  
        $ip_address = $_SERVER['REMOTE_ADDR'];  
    }
    return $ip_address;
}
function timeAgo($time_ago)
{
    $time_ago   = date("Y-m-d H:i:s", $time_ago);
    $time_ago   = strtotime($time_ago);
    $cur_time   = time();
    $time_elapsed   = $cur_time - $time_ago;
    $seconds    = $time_elapsed ;
    $minutes    = round($time_elapsed / 60 );
    $hours      = round($time_elapsed / 3600);
    $days       = round($time_elapsed / 86400 );
    $weeks      = round($time_elapsed / 604800);
    $months     = round($time_elapsed / 2600640 );
    $years      = round($time_elapsed / 31207680 );
    // Seconds
    if($seconds <= 60)
    {
        return "$seconds giây trước";
    }
    //Minutes
    else if($minutes <= 60)
    {
        return "$minutes phút trước";
    }
    //Hours
    else if($hours <= 24)
    {
        return "$hours tiếng trước";
    }
    //Days
    else if($days <= 7)
    {
        if($days == 1)
        {
            return "Hôm qua";
        }
        else
        {
            return "$days ngày trước";
        }
    }
    //Weeks
    else if($weeks <= 4.3)
    {
        return "$weeks tuần trước";
    }
    //Months
    else if($months <=12)
    {
        return "$months tháng trước";
    }
    //Years
    else
    {
        return "$years năm trước";
    }
}
function dirToArray($dir) {
  
    $result = array();
 
    $cdir = scandir($dir);
    foreach ($cdir as $key => $value)
    {
       if (!in_array($value,array(".","..")))
       {
          if (is_dir($dir . DIRECTORY_SEPARATOR . $value))
          {
             $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value);
          }
          else
          {
             $result[] = $value;
          }
       }
    }
   
    return $result;
 }

 function realFileSize($path)
{
    if (!file_exists($path))
        return false;

    $size = filesize($path);
   
    if (!($file = fopen($path, 'rb')))
        return false;
   
    if ($size >= 0)
    {//Check if it really is a small file (< 2 GB)
        if (fseek($file, 0, SEEK_END) === 0)
        {//It really is a small file
            fclose($file);
            return $size;
        }
    }
   
    //Quickly jump the first 2 GB with fseek. After that fseek is not working on 32 bit php (it uses int internally)
    $size = PHP_INT_MAX - 1;
    if (fseek($file, PHP_INT_MAX - 1) !== 0)
    {
        fclose($file);
        return false;
    }
   
    $length = 1024 * 1024;
    while (!feof($file))
    {//Read the file until end
        $read = fread($file, $length);
        $size = bcadd($size, $length);
    }
    $size = bcsub($size, $length);
    $size = bcadd($size, strlen($read));
   
    fclose($file);
    return $size;
}
function FileSizeConvert($bytes)
{
    $bytes = floatval($bytes);
        $arBytes = array(
            0 => array(
                "UNIT" => "TB",
                "VALUE" => pow(1024, 4)
            ),
            1 => array(
                "UNIT" => "GB",
                "VALUE" => pow(1024, 3)
            ),
            2 => array(
                "UNIT" => "MB",
                "VALUE" => pow(1024, 2)
            ),
            3 => array(
                "UNIT" => "KB",
                "VALUE" => 1024
            ),
            4 => array(
                "UNIT" => "B",
                "VALUE" => 1
            ),
        );

    foreach($arBytes as $arItem)
    {
        if($bytes >= $arItem["VALUE"])
        {
            $result = $bytes / $arItem["VALUE"];
            $result = str_replace(".", "," , strval(round($result, 2)))." ".$arItem["UNIT"];
            break;
        }
    }
    return $result;
}
function GetCorrectMTime($filePath)
{

    $time = filemtime($filePath);

    $isDST = (date('I', $time) == 1);
    $systemDST = (date('I') == 1);

    $adjustment = 0;

    if($isDST == false && $systemDST == true)
        $adjustment = 3600;
   
    else if($isDST == true && $systemDST == false)
        $adjustment = -3600;

    else
        $adjustment = 0;

    return ($time + $adjustment);
}
function DownloadFile($file) { // $file = include path
    if(file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.basename($file));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        ob_clean();
        flush();
        readfile($file);
        exit;
    }
}
// LẤY THÔNG TIN PHÀN THƯỞNG VÒNG QUAY
function gift($id, $item, $type=null) 
{
    $CMSNAV = new CMSNAV;
    $res = $CMSNAV->get_row(" SELECT * FROM `mini_game_gift` WHERE `id_vongquay` = '$id'");
    $prefix = 'item_';
    $json = json_decode($res[$prefix.$item], true);

    if ($type == 'text')  {
         return $json['text'];
    }else if ($type == 'kimcuong') {
         return $json['kimcuong'];
    }else if ($type == 'tyle') {
         return $json['tyle'];
    }else {
         return $json;
    }
}
// LẤY THÔNG TIN CHUNG VÒNG QUAY
function mini_game($id, $action)
{
    $CMSNAV = new CMSNAV;
    $result = $CMSNAV->get_row(" SELECT * FROM `mini_game` WHERE `id` = '$id'");
    return $result[$action];
}
function compact_string($string, $length=5, $replace) {
    $compact = substr($string,  0, $length );
    $compact = $compact.$replace;
    return $compact;
}
function checkCoupon($coupon, $user_id, $total_money)
{
    global $CMSNAV;
    // check coupon có tồn tại hay không
    if ($coupon = $CMSNAV->get_row("SELECT * FROM `coupons` WHERE `code` = '".check_string($coupon)."' AND `min` <= $total_money AND `max` >= $total_money AND `used` < `amount` ")) {
        // chek số lượng còn hay không
        if ($coupon['used'] < $coupon['amount']) {
            // check đã dùng hay chưa
            if (!$CMSNAV->get_row("SELECT * FROM `coupon_used` WHERE `coupon_id` = '".$coupon['id']."' AND `user_id` = '".$user_id."' ")) {
                return $coupon['discount'];
            }
            return false;
        }
        return false;
    }
    return false;
}
function webhookcaythue($service, $username) {
    global $CMSNAV;
    $url = "'".$CMSNAV->site('webhookcaythue')."'";

    $timestamp = date("c", strtotime("now"));

    $json_data = json_encode([
        "content" => "***```Có Đơn Đặt Cày Thuê Mới  ```*** <@889800156944420914>",
        "embeds" => [
            [
                "title" => "ĐƠN HÀNG VỪA ĐẶT",
                "type" => "rich",
                "description" => "**$service**",
                "url" => "https://'".$_SERVER['SERVER_NAME']."'/",
                "timestamp" => $timestamp,
                "color" => hexdec( "00ff00" ),
                "footer" => [
                    "text" => "CTV CÀY THUÊ ĐÂU RÒI LÊN SHOP DUYỆT ĐI MẤY EM"
                ],
                "fields" => [
                    [
                        "name" => "Dịch vụ",
                        "value" => $service,
                        "inline" => false
                    ],
                    [
                        "name" => "Tài khoản mua",
                        "value" => $username,
                        "inline" => false
                    ]
                ]
            ]
        ]

    ],
    JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, [ 'Content-Type: application/json; charset=utf-8' ]);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
	$response   = curl_exec($ch);
}
function webhookgamepass($service, $username) {
    global $CMSNAV;
    $url = "'".$CMSNAV->site('webhookgamepass')."'";

    $timestamp = date("c", strtotime("now"));

    $json_data = json_encode([
        "content" => "***```Có Đơn Đặt Cày Thuê Mới  ```*** <@894108203674107914>",
        "embeds" => [
            [
                "title" => "ĐƠN HÀNG VỪA ĐẶT",
                "type" => "rich",
                "description" => "**$service**",
                "url" => "https://'".$_SERVER['SERVER_NAME']."'/",
                "timestamp" => $timestamp,
                "color" => hexdec( "00ff00" ),
                "footer" => [
                    "text" => "CTV GAMEPASS ĐÂU RÒI LÊN SHOP DUYỆT ĐƠN ĐI NÀO"
                ],
                "fields" => [
                    [
                        "name" => "Dịch vụ",
                        "value" => $service,
                        "inline" => false
                    ],
                    [
                        "name" => "Tài khoản mua",
                        "value" => $username,
                        "inline" => false
                    ]
                ]
            ]
        ]

    ],
    JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, [ 'Content-Type: application/json; charset=utf-8' ]);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
	$response   = curl_exec($ch);
}
function webhookrobux($service, $username) {
    $url = "'".$CMSNAV->site('webhookrobux')."'";

    $timestamp = date("c", strtotime("now"));

    $json_data = json_encode([
        "content" => "***```Có Đơn Đặt Cày Thuê Mới  ```*** <@894108203674107914>",
        "embeds" => [
            [
                "title" => "ĐƠN HÀNG VỪA ĐẶT",
                "type" => "rich",
                "description" => "**$service**",
                "url" => "https://'".$_SERVER['SERVER_NAME']."'/",
                "timestamp" => $timestamp,
                "color" => hexdec( "00ff00" ),
                "footer" => [
                    "text" => "CTV ROBUX ĐÂU RÒI LÊN SHOP DUYỆT ĐƠN ĐI NÀO"
                ],
                "fields" => [
                    [
                        "name" => "Dịch vụ",
                        "value" => $service,
                        "inline" => false
                    ],
                    [
                        "name" => "Tài khoản mua",
                        "value" => $username,
                        "inline" => false
                    ]
                ]
            ]
        ]

    ],
    JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, [ 'Content-Type: application/json; charset=utf-8' ]);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
	$response   = curl_exec($ch);
}
// SOURCE CODE BY NGUYỄN ANH VŨ 