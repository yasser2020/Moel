<?php
use App\Settings;
use App\SocialNetwork;
   $setting=Settings::findOrFail(1);
   $socail_networks=SocialNetwork::get();
?>
    <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>موئل</title>
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico"> -->
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('assets/roots/css/bootstrap.rtl.min.css')}}">
    <!-- Font-awesome  -->
    <link rel="stylesheet" href="{{asset('assets/roots/css/font-awesome.min.css')}}">
    <!-- Style Css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.rtl.css')}}"/>
    <link href="{{ asset('dashboard_files/css/noty.css') }}" rel="stylesheet">
    <script src="{{asset('dashboard_files/js/noty.min.js')}}"></script>


    <link rel="stylesheet" href="{{asset('dashboard_files/plugins/font-awesome/css/font-awesome.min.css')}}">
     
</head>
<body>
    <!-- #1478ac #64cacf #00dbee -->
<div class="wrap">
    <div id="wrap-content">

  