<?php
/*
 * Copyright 2018 GPLv3, Zillexplorer by Mike Kilday: http://DragonFrugal.com
 */
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Zillexplorer <?=( $dyn_title ? $dyn_title : '' )?></title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="/lib/bootstrap/css/bootstrap.min.css">
  
  <script src="/lib/js/jquery/jquery-3.3.1.min.js"></script>
  <script src="/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="/lib/js/zingchart.min.js"></script>
  <script src="/lib/js/functions.js"></script>
  <script src="/lib/js/init.js"></script>
  
  <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
  </script>
  <script src="https://cdn.zingchart.com/modules/zingchart-zoom-buttons.min.js"></script>
  
  <link rel="stylesheet" href="/css/style.css">
  
  <style>

  
  
  </style>
  
</head>
<body>
<div id="main-wrapper">
	<div class="container-fluid">
 	 <div class="row content">
  
		 <!-- START #main-content -->
   	 <div id="main-content" class="col-sm-12" style="overflow-x:auto;">
    
  <?php include('template/base/topnav.php'); ?>
    
    