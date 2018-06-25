<!DOCTYPE html>
<html lang="es">

<head>
    <title>Bolaocho.com.mx</title>

    <!-- Meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="theme-color" content="#4285f4" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#4285f4">
    <meta name="msapplication-navbutton-color" content="#4285f4" />
	<meta name="format-detection" content="telephone=no">
	<meta name="author" content="Aron Garcia">
	<meta name="description" content="">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>css/back_office/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>css/back_office/dashboard.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>css/back_office/back_office.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>css/back_office/sticky-footer.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>css/glyphicons_nuevos.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Indie+Flower" >
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Cabin+Condensed|Cinzel">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Questrial">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oxygen">

    <!-- js -->
    <script type="text/javascript" src="<?= base_url()?>js/botonarriba/arribaboton.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/back_office/back_office.js"></script>
    <script type="text/javascript" src="<?= base_url()?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= base_url()?>js/menu.js"></script>
    <script type="text/javascript" src="<?= base_url()?>js/jquery.js"></script>
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->

	<?php if (isset($pagina)) {?>
		<script type="text/javascript" src="<?=base_url().'js/back_office/'.$pagina.'.js' ?>"></script>
	<?php }?>
	<!-- 1 -->
	<?php if (isset($dropzone)) {?>
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>css/back_office/dropzone.css">
		<script type="text/javascript" src="<?= base_url()?>js/back_office/dropzone/dropzone.js"></script>
	<?php }?>
	<?php if (isset($css)) {?>
		<style type="text/css">
			<?=$css?>
		</style>
	<?php }?>

</head>
