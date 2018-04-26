<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Start Page</title>
    <link href="css/jquery-ui.min.css" rel="stylesheet">
    <link href="css/projectcss.css" rel="stylesheet">
    <link href="css/Main.css" rel="stylesheet">
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


</head>
<body>
    <div id="container">
        <label for="" id="Label1">NBA Management System</label>
        <div id="Image1">
            <img src="images/logo.jpg" id="Image1" alt="">
        </div>
        <p class="text_large">Welcome to use this NBA Management system, you can<br>redirect to different pages according to your role by clicking the buttons bellow.</p>

        <div class="buttons-container">
            <a class="button" href="/Visitor_menu.php">Visitor</a>
            <a class="button" href="/Admin_Login.php">Admin</a>
        </div>
    </div>

<div class="slider__index">
    <div class="slider multiple-items">
        <?php
        $imgSources = [
                '/images/lineup.jpg',
                '/images/xp.jpg',
                '/images/lineup.jpg',
                '/images/xp.jpg',
                '/images/lineup.jpg',
                '/images/xp.jpg',
                '/images/lineup.jpg',
                '/images/xp.jpg',
        ];?>
        <? foreach($imgSources as $imgPath):?>
            <div class="slider__index-image-wrapper"><img src="<?=$imgPath?>" class="slider__index-image" alt=""></div>
        <?endforeach;?>
    </div>
</div>
<script>
var $jq = jQuery.noConflict();
$jq(document).ready(function(){
    $jq('.multiple-items').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });
});
</script>
