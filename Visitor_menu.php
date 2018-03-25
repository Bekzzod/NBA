<!doctype html>
<html>
<head>
<?php
include('header.php');
?>
<meta charset="utf-8">
<title>Visitor menu</title>
<link href="css/jquery-ui.min.css" rel="stylesheet">
<link href="css/projectcss.css" rel="stylesheet">
<link href="css/Visitor_menu.css" rel="stylesheet">
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script>
$(document).ready(function()
{
   $("#jQueryButton1").button();
   $("#jQueryButton2").button();
   $("#jQueryButton3").button();
   $("#jQueryButton4").button();
});
</script>
</head>
<body>
    <div id="container">
        <div id="Layer1">
            <div id="jQueryButton1" style="position:absolute;left:130px;top:84px;width:312px;height:140px;z-index:5;">
                <a class="ui-button ui-widget ui-corner-all" href="./Teams_Main.html" id="jQueryButton1" style="width:100%;height:100%;">Teams</a>
            </div>
            <div id="jQueryButton2" style="position:absolute;left:733px;top:84px;width:312px;height:140px;z-index:6;">
                <a class="ui-button ui-widget ui-corner-all" href="./Players_Main.html" id="jQueryButton2" style="width:100%;height:100%;">Players</a>
            </div>
            <div id="jQueryButton4" style="position:absolute;left:733px;top:423px;width:312px;height:140px;z-index:7;">
                <a class="ui-button ui-widget ui-corner-all" href="" id="jQueryButton4" style="width:100%;height:100%;">Photos</a>
            </div>
            <div id="jQueryButton3" style="position:absolute;left:130px;top:423px;width:312px;height:140px;z-index:8;">
                <a class="ui-button ui-widget ui-corner-all" href="" id="jQueryButton3" style="width:100%;height:100%;">Matchups</a>
            </div>
        </div>
    </div>
</body>
</html>