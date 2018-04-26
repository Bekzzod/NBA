<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Technical Administrator menu</title>
<link href="css/jquery-ui.min.css" rel="stylesheet">
<link href="css/projectcss.css" rel="stylesheet">
<link href="css/Technical_Administrator_menu.css" rel="stylesheet">
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
        <div id="Layer1">

                <div id="jQueryButton1" style="position:absolute;left:131px;top:207px;width:312px;height:140px;z-index:5;">
                        <a class="ui-button ui-widget ui-corner-all" href="./Teams_Main.php" id="jQueryButton1" style="width:100%;height:100%;">Manage Executions</a>
                </div>

                <div id="jQueryButton2" style="position:absolute;left:716px;top:207px;width:312px;height:140px;z-index:6;">
                        <a class="ui-button ui-widget ui-corner-all" href="./Players_Main.php" id="jQueryButton2" style="width:100%;height:100%;">Manage Report</a>
                </div>
        </div>
</div>

</body>
</html>