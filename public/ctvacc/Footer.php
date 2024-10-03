<div id="thongbao"></div>
<footer class="app-footer"> <div class="copyright"> Copyright © 2023. Powered By <?=$CMSNAV->site('tenweb');?> </div> </footer>
<script type="text/javascript">var skin=localStorage.getItem('skin')||'default';var disabledSkinStylesheet=document.querySelector('link[data-skin]:not([data-skin="'+skin+'"])');disabledSkinStylesheet.setAttribute('rel','');disabledSkinStylesheet.setAttribute('disabled',true);document.querySelector('html').classList.add('loading');</script> <script type="text/javascript">console.log("%c Xin chào các cao thủ F12 %c",'font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;font-size:50px;color:#FF0000;-webkit-text-fill-color:#FF0000;-webkit-text-stroke: 1px #FF0000;',"font-size:12px;color:#999999;");console.log("%c Thuê tạo website vui lòng liên hệ https://www.facebook.com/nguyennhatloc %c",'font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;font-size:50px;color:#FF0000;-webkit-text-fill-color:#FF0000;-webkit-text-stroke: 1px #FF0000;',"font-size:12px;color:#999999;");console.log("%c SIEUTHICODE.NET %c",'font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;font-size:50px;color:#FF0000;-webkit-text-fill-color:#FF0000;-webkit-text-stroke: 1px #FF0000;',"font-size:12px;color:#999999;");setInterval(function(){var before=new Date().getTime();debugger;var after=new Date().getTime();if(after-before>200){document.querySelector("html").innerHTML="";window.location.reload(true);}},100);document.getElementById("NguyenNhatLoc-AntiDevTools").remove();</script> </head> 
<div class="modal fade" id="modal-lg-cron">
<div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">CRON JOB</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-0" style="height:100%">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th></th>
                            <th>URL</th>
                            <th>CRON GẦN ĐÂY</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cron khi dùng nạp tiền momo tự động</td>
                            <td><span class="badge bg-danger"><?= base_url('cron/momo.php'); ?></span></td>
                            </td>
                            <td><?= timeAgo($CMSNAV->site('check_time_cron')); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer justify-content-between">
                <p>Liên hệ hỗ trợ cấu hình cron tại đây: <a href="<?=file_get_contents('https://api.cmsnav.site/apiweb/Facebook.php');?>" target="_blank"><?=file_get_contents('https://api.cmsnav.site/apiweb/Facebook.php');?></a></p>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--SNOW FAKE-->
<div class="snowflakes" aria-hidden="true">
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
</div>

<style>
  @-webkit-keyframes snowflakes-fall {
    0% {top:-10%}
    100% {top:100%}
  }
  @-webkit-keyframes snowflakes-shake {
    0%,100% {-webkit-transform:translateX(0);transform:translateX(0)}
    50% {-webkit-transform:translateX(80px);transform:translateX(80px)}
  }
  @keyframes snowflakes-fall {
    0% {top:-10%}
    100% {top:100%}
  }
  @keyframes snowflakes-shake {
    0%,100%{ transform:translateX(0)}
    50% {transform:translateX(80px)}
  }
  .snowflake {
    color: #fff;
    font-size: 1em;
    font-family: Arial, sans-serif;
    text-shadow: 0 0 5px #000;
    position:fixed;
    top:-10%;
    z-index:9999;
    -webkit-user-select:none;
    -moz-user-select:none;
    -ms-user-select:none;
    user-select:none;
    cursor:default;
    -webkit-animation-name:snowflakes-fall,snowflakes-shake;
    -webkit-animation-duration:10s,3s;
    -webkit-animation-timing-function:linear,ease-in-out;
    -webkit-animation-iteration-count:infinite,infinite;
    -webkit-animation-play-state:running,running;
    animation-name:snowflakes-fall,snowflakes-shake;
    animation-duration:10s,3s;
    animation-timing-function:linear,ease-in-out;
    animation-iteration-count:infinite,infinite;
    animation-play-state:running,running;
  }
  .snowflake:nth-of-type(0){
    left:1%;-webkit-animation-delay:0s,0s;animation-delay:0s,0s
  }
  .snowflake:nth-of-type(1){
    left:10%;-webkit-animation-delay:1s,1s;animation-delay:1s,1s
  }
  .snowflake:nth-of-type(2){
    left:20%;-webkit-animation-delay:6s,.5s;animation-delay:6s,.5s
  }
  .snowflake:nth-of-type(3){
    left:30%;-webkit-animation-delay:4s,2s;animation-delay:4s,2s
  }
  .snowflake:nth-of-type(4){
    left:40%;-webkit-animation-delay:2s,2s;animation-delay:2s,2s
  }
  .snowflake:nth-of-type(5){
    left:50%;-webkit-animation-delay:8s,3s;animation-delay:8s,3s
  }
  .snowflake:nth-of-type(6){
    left:60%;-webkit-animation-delay:6s,2s;animation-delay:6s,2s
  }
  .snowflake:nth-of-type(7){
    left:70%;-webkit-animation-delay:2.5s,1s;animation-delay:2.5s,1s
  }
  .snowflake:nth-of-type(8){
    left:80%;-webkit-animation-delay:1s,0s;animation-delay:1s,0s
  }
  .snowflake:nth-of-type(9){
    left:90%;-webkit-animation-delay:3s,1.5s;animation-delay:3s,1.5s
  }
  .snowflake:nth-of-type(10){
    left:25%;-webkit-animation-delay:2s,0s;animation-delay:2s,0s
  }
  .snowflake:nth-of-type(11){
    left:65%;-webkit-animation-delay:4s,2.5s;animation-delay:4s,2.5s
  }
</style>
<!--SNOW FAKE-->
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Phiên bản <b style="color:red;"><?=$config['version'];?></b>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020-2021 <a href="<?=file_get_contents('https://api.cmsnav.site/apiweb/Facebook.php');?>" target="_blank"><?=file_get_contents('https://api.cmsnav.site/apiweb/DesignedBy.php');?></a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<script src="<?=BASE_URL('template/');?>plugins/bootstrap-switch/js/popper.min.js"></script> 
<script src="<?=BASE_URL('template/');?>plugins/bootstrap-switch/js/bootstrap.min.js"></script>
<script src="<?=BASE_URL('template/');?>plugins/bootstrap-switch/js/select2.min.js"></script> 
<script src="<?=BASE_URL('template/');?>plugins/bootstrap-switch/js/pace.min.js"></script> 
<script src="<?=BASE_URL('template/');?>plugins/bootstrap-switch/js/stacked-menu.min.js"></script>
<script src="<?=BASE_URL('template/');?>plugins/bootstrap-switch/js/perfect-scrollbar.min.js"></script>
<script src="<?=BASE_URL('template/');?>plugins/bootstrap-switch/js/flatpickr.min.js"></script> 
<script src="<?=BASE_URL('template/');?>plugins/bootstrap-switch/js/jquery.easypiechart.min.js"></script> 
<script src="<?=BASE_URL('template/');?>plugins/bootstrap-switch/js/Chart.min.js"></script>
<script src="<?=BASE_URL('template/');?>plugins/bootstrap-switch/js/theme.min.js"></script> 
<script src="<?=BASE_URL('template/');?>plugins/bootstrap-switch/js/dashboard-demo.js"></script> 
<!-- jQuery -->
<script src="<?=BASE_URL('template/');?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=BASE_URL('template/');?>plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=BASE_URL('template/');?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?=BASE_URL('template/');?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?=BASE_URL('template/');?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?=BASE_URL('template/');?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?=BASE_URL('template/');?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=BASE_URL('template/');?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=BASE_URL('template/');?>plugins/moment/moment.min.js"></script>
<script src="<?=BASE_URL('template/');?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=BASE_URL('template/');?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
</script>
<!-- Summernote -->
<script src="<?=BASE_URL('template/');?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=BASE_URL('template/');?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=BASE_URL('template/');?>dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=BASE_URL('template/');?>dist/js/pages/dashboard.js"></script>
<!-- bootstrap color picker -->
<script src="<?=BASE_URL('template/');?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Ekko Lightbox -->
<script src="<?=BASE_URL('template/');?>plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- DataTables -->
<script src="<?=BASE_URL('template/');?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=BASE_URL('template/');?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=BASE_URL('template/');?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=BASE_URL('template/');?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="preload" as="style" href="/assets/app.ef70292b.css" /><link rel="preload" as="style" href="/assets/app.6f533933.css" /><link rel="modulepreload" href="/assets/app.9d310326.js" /><link rel="stylesheet" href="/assets/app.ef70292b.css" /><link rel="stylesheet" href="/assets/app.6f533933.css" /><script type="module" src="/assets/app.9d310326.js"></script>    </head>
<script src="<?=BASE_URL('template/');?>cute-alert/cute-alert.js" type="text/javascript"></script>
<link class="main-stylesheet" href="<?=BASE_URL('template/');?>cute-alert/style.css" rel="stylesheet"type="text/css">
<!-- Bootstrap 4 -->
<script src="<?=BASE_URL('template/');?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Summernote -->
<script src="<?=BASE_URL('template/');?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- bootstrap color picker -->
<script src="<?=BASE_URL('template/');?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- summernote -->
<link rel="stylesheet" href="<?=BASE_URL('template/');?>plugins/summernote/summernote-bs4.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<style>.btn-default{background-color:#f8f9fa;border-color:#ddd;color:#444}.btn-default.hover,.btn-default:active,.btn-default:hover{background-color:#e9ecef;color:#2b2b2b}</style>
<script>
new ClipboardJS('.copy');
</script>
</body>

<!-- jQuery -->
<script src="<?=BASE_URL('template/');?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=BASE_URL('template/');?>plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=BASE_URL('template/');?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?=BASE_URL('template/');?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?=BASE_URL('template/');?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?=BASE_URL('template/');?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?=BASE_URL('template/');?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=BASE_URL('template/');?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=BASE_URL('template/');?>plugins/moment/moment.min.js"></script>
<script src="<?=BASE_URL('template/');?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=BASE_URL('template/');?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
</script>
<!-- Summernote -->
<script src="<?=BASE_URL('template/');?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=BASE_URL('template/');?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=BASE_URL('template/');?>dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=BASE_URL('template/');?>dist/js/pages/dashboard.js"></script>
<!-- bootstrap color picker -->
<script src="<?=BASE_URL('template/');?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Ekko Lightbox -->
<script src="<?=BASE_URL('template/');?>plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- DataTables -->
<script src="<?=BASE_URL('template/');?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=BASE_URL('template/');?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=BASE_URL('template/');?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=BASE_URL('template/');?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
</html>