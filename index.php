<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>
<link href="css/jquery-ui.min.css" rel="stylesheet">
<link href="css/projectcss.css" rel="stylesheet">
<link href="css/Main.css" rel="stylesheet">
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script>
$(document).ready(function()
{
   $("#jQueryButton1").button();
   $("#jQueryButton2").button();
});
</script>
</head>
<body>
<div id="container">
<label for="" id="Label1" style="position:absolute;left:384px;top:43px;width:642px;height:127px;line-height:127px;z-index:4;">NBA Management System</label>
<div id="wb_Image1" style="position:absolute;left:37px;top:13px;width:125px;height:260px;z-index:5;">
<img src="images/logo.jpg" id="Image1" alt=""></div>
<div id="wb_Text1" style="position:absolute;left:8px;top:239px;width:1201px;height:64px;text-align:center;z-index:6;">
<span style="color:#000000;font-family:Arial;font-size:27px;">Welcome to use this NBA Management system, you can<br>redirect to different pages according to your role by clicking the buttons bellow.</span></div>
<div id="Layer1" style="position:absolute;text-align:left;left:162px;top:347px;width:905px;height:394px;z-index:7;">
<div id="wb_jQueryButton1" style="position:absolute;left:93px;top:131px;width:276px;height:130px;z-index:0;">
<a class="ui-button ui-widget ui-corner-all" href="" id="jQueryButton1" onclick="window.location.href='./Visitor_menu.html';return false;" style="width:100%;height:100%;">Visitor</a></div>
<div id="wb_jQueryButton2" style="position:absolute;left:542px;top:131px;width:276px;height:130px;z-index:1;">
<a class="ui-button ui-widget ui-corner-all" href="" id="jQueryButton2" onclick="window.location.href='./Admin_Login.html';return false;" style="width:100%;height:100%;">Admin</a></div>
</div>
</div>
</body>
</html>