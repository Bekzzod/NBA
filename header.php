<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><!--##__TITLE__##--></title>
    <link href="css/jquery-ui.min.css" rel="stylesheet">
    <link href="css/projectcss.css" rel="stylesheet">
    <link href="css/Main.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-1.12.4.min.js"></script>
    <!--##__CSS__##-->
</head>
<body>
<?php
    NBACore::FillProperty('css', '/css/jquery-ui.min.css');
    NBACore::FillProperty('js', '/js/header.js');
    NBACore::FillProperty('css', '/css/header.css');
?>
<div class="PageHeader">
    <div class="PageHeader-content">
        <input type="submit" class="Button_back" onclick="goBack()" value="Back">
        <div class="PageHeader-content-logo">
            <div class="logo"></div>
            <div class="text">NBA Management System</div>            
        </div>
        <div id="pageName">
        </div>
    </div>
    <hr class="Line">
</div>