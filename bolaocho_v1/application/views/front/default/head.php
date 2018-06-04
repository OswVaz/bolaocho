<!DOCTYPE html>
<html lang="es">

<head>
    <title><?=(isset($title))? $title : '';?></title>

    <!-- Meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="theme-color" content="#4285f4" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#4285f4">
    <meta name="msapplication-navbutton-color" content="#4285f4" />
	<meta name="format-detection" content="telephone=no">
	<meta name="author" content="Emcode">
	<meta name="description" content="anamarbeautylounge.com Salon de belleza de primera, peinados y maquillaje San Pedro Garza Garcia Nuevo León">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>css/glyphicons.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>css/botonarriba/estilos.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Indie+Flower" >
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Cabin+Condensed|Cinzel">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Questrial">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oxygen">

    <!-- js -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url()?>js/botonarriba/arribaboton.js"></script>
    <script type="text/javascript" src="<?= base_url()?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url()?>js/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url()?>js/eskju.jquery.scrollflow.min.js"></script>
	<script type="text/javascript" src="<?= base_url()?>js/menu.js"></script>

	<?php if (isset($css)) {?>
		<style type="text/css">
			<?=$css?>
		</style>
	<?php }?>
</head>
