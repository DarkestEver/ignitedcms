<!DOCTYPE html>
<html lang="en" class=" js no-touch no-android chrome no-firefox no-iemobile no-ie no-ie10 no-ios">

<head>
    <meta charset="utf-8">
    <title>Ignited CMS</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <style>
        .file-input-wrapper {
            overflow: hidden;
            position: relative;
            cursor: pointer;
            z-index: 1;
        }
        .file-input-wrapper input[type=file],
        .file-input-wrapper input[type=file]:focus,
        .file-input-wrapper input[type=file]:hover {
            position: absolute;
            top: 0;
            left: 0;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
            z-index: 99;
            outline: 0;
        }
        .file-input-name {
            margin-left: 8px;
        }
    </style>
    <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/css/animate.css" type="text/css">
    <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/css/font.css" type="text/css" cache="false">
    <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/js/fuelux/fuelux.css" type="text/css">
    <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/js/nestable/nestable.css" type="text/css" cache="false" />
    <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/css/plugin.css" type="text/css">
    <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/css/app.css" type="text/css">
    <!--[if lt IE 9]>
    <script src="<?php echo (base_url()."resources")?>/js/ie/respond.min.js" cache="false"></script>
    <script src="<?php echo (base_url()."resources")?>/js/ie/html5.js" cache="false"></script>
    <script src="<?php echo (base_url()."resources")?>/js/ie/fix.js" cache="false"></script>
  <![endif]-->

   <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/css/superfish.css" media="screen">
    <style type="text/css">
        @font-face {
            font-family: 'MuseoSans-500';
            src: url('<?php echo base_url(); ?>/resources/fonts/museo.woff');
        }
        .my-center {
            margin-left: auto;
            margin-right: auto;
        }
        #tidy {
            max-width: 1170px;
            margin: 0 auto;
        }
        .gap {
            margin-top: 50px;
        }
        body {
            background-color: #f2f2f2;
            font-family: 'Open sans', sans-serif;
            font-size: 14px;
            line-height: 24px;
            color: #777;
            -webkit-font-smoothing: antialiased;
            /* Fix for webkit rendering */
        }
        .shorttag {
            /*display:none;*/
        }
        .pm-footer {
            position: relative;
            bottom: 0px;
            min-height: 200px;
            background-color: #fff;
        }
        .footer-brand {
            /*color: #ccc;*/
        }


         .pm-header{
          min-height:150px; 
          background-color:#B384A3; 
          border-bottom:1px solid #ccc;
          }

          .pm-btext{
            font-family: 'open sans';
            /*font-family: 'MuseoSans-500', sans-serif;*/
            color:#fff; 
            
          }

        .pms-container{
          font-size: 14px;
          line-height: 22px;
        }


        .logo
        {
          float:left;
          position:relative;
          /*width: 210px;
          height:87px;*/
          
          
          top:0px;
          left:5px;

        }


        .head-outer
        {
          position: relative;
          background-color: #fff;
          border-bottom: 1px solid #cccccc;
          box-shadow: 0 4px 4px rgba(0, 0, 0, .11);
          min-height: 90px;
          z-index: 999;
        }


        .head
        {
          height:80px;
          background-color:#fff;
          min-width: 205px;
          
        }

        .menu
        {
            position:relative;
            top:25px;
            font-size: 14px;
            color: #000000;
            float:right;
            
            /* background-color:#fa824f; */
            /* min-width: 150px;*/
        }

        
        .phone-number-bar {
            position: relative;
            min-height: 30px;
            font-size: 16px;
            background-color: #333;
        }
        .phone-number {
            position: relative;
            margin: 0 auto;
            max-width: 1170px;
        }
        .num {
            float: right;
            position: relative;
            padding-top: 5px;
            padding-right: 5px;
            color: #fff;
        }
        .social-media {
            margin-top: 5px;
        }
        .tab-content {
            background-color: #f2f2f2;
        }
        .pm-container {
            position: relative;
            background-color: #ccc;
            /* background-color: #fff;*/
            font-size: 14px;
            line-height: 24px;
        }
      
        .pm-btext {
            font-family: 'open sans';
            /*font-family: 'MuseoSans-500', sans-serif;*/
            color: #fff;
        }
        
        a {
            color: #E0604E;
            /*text-decoration: underline;*/
        }
        /*for the login button on menu*/
        a.stop:hover {
            background-color: #E0604E;
        }
        .purplet {
            /*color: #bc8dbe; */
            color: #E0604E;
        }
        .bg-purplet {
            background-color: #E0604E;
        }
        .btn-purplet {
            color: #fff !important;
            background-color: #E0604E;
            border-color: #E0604E;
        }

        .btn-black{
            color: #fff !important;
            background-color: #363636;
            border-color: #363636;
            
        }
        /*page builder styles*/
        .handle {
            display: inline;
            float: left;
            cursor: move;
        }
        .grow {
            display: inline;
            width: 20px;
            height: 20px;
            float: left;
            text-align: center;
            color: #666;
            cursor: pointer;
        }
        .shrink {
            display: inline;
            width: 20px;
            height: 20px;
            float: left;
            text-align: center;
            color: #666;
            cursor: pointer;
        }
        .remove {
            display: inline;
            width: 20px;
            height: 20px;
            float: right;
            text-align: center;
            color: #333;
            cursor: pointer;
        }
        #sortable {
            /*background-color: #cccccc;
            margin-left: 20px;*/
        }
        .clearfix {
            clear: both;
            font-size: 1px;
        }
        .text {
            display: inline;
            float: left;
            color: #ffffff;
        }
        .popover{
            min-width: 150px;
        }
        .popover-title{
            color:#333;
        }
        .popover-content{
            color:#333;
        }
        .pm-hidden{
            display:none;
        }
        
    </style>
</head>

<body style="" screen_capture_injected="true">
    <section class="hbox stretch">
   