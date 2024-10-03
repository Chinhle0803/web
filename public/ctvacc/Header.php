<!DOCTYPE html>
<html class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?=$CMSNAV->site('favicon');?>">
    <meta property="og:title" content="<?=$CMSNAV->site('tenweb');?>" />
    <meta property="og:image" content="<?=$CMSNAV->site('anhbia');?>" />
    <meta property="og:description" content="<?=$CMSNAV->site('mota');?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="<?=$CMSNAV->site('tukhoa');?>" />
    <meta name="description" content="<?=$CMSNAV->site('mota');?>" />
    <title><?=$title;?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-default/default.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=BASE_URL('template/');?>plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Ionicons -->
    <!--<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?=BASE_URL('template/');?>plugins/font.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="<?=BASE_URL('template/');?>plugins/font2.css">
  <meta name="theme-color" content="#3063A0"> <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
  <link rel="stylesheet" href="<?=BASE_URL('template/');?>plugins/bootstrap-switch/css/bootstrap2/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="<?=BASE_URL('template/');?>plugins/bootstrap-switch/css/bootstrap2/all.min.css"> 
  <link rel="stylesheet" href="<?=BASE_URL('template/');?>plugins/bootstrap-switch/css/bootstrap2/select2.min.css"> 
  <link rel="stylesheet" href="<?=BASE_URL('template/');?>plugins/bootstrap-switch/css/bootstrap2/flatpickr.min.css">
  <link rel="stylesheet" href="<?=BASE_URL('template/');?>plugins/bootstrap-switch/css/bootstrap2/theme.min.css" data-skin="default"> 
  <link rel="stylesheet" href="<?=BASE_URL('template/');?>plugins/bootstrap-switch/css/bootstrap2/theme-dark.min.css" data-skin="dark">
  <link rel="stylesheet" href="<?=BASE_URL('template/');?>plugins/bootstrap-switch/css/bootstrap2/custom.css">
  <link class="main-stylesheet" href="<?=BASE_URL('template/');?>plugins/bootstrap-switch/css/bootstrap2/cute-alert.css" rel="stylesheet" type="text/css">
  <script src="<?=BASE_URL('template/');?>plugins/bootstrap-switch/css/bootstrap2/jquery-3.4.1.min.js"></script> 
  <script src="<?=BASE_URL('template/');?>plugins/bootstrap-switch/css/bootstrap2/cute-alert.js"></script> 
  <script src="<?=BASE_URL('template/');?>plugins/bootstrap-switch/css/bootstrap2/ckeditor.js"></script>
    <link rel="stylesheet" href="<?=BASE_URL('template/');?>plugins/summernote/summernote-bs4.css">

</head>
<?php CheckLogin();?>
<?php
if($getUser['ctvacc'] != 1)
{
    header('location:/');
    exit();
}

?>