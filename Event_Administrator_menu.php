<?php
NBACore::SetProperty('title', 'Event Administrator menu');
NBACore::FillProperty('css', '/css/Event_Administrator_menu.css');
NBACore::FillProperty('js', '/js/wwb12.min.js');
?>
<div id="container">
    <div id="Layer1">
        <div id="jQueryButton3" style="position:absolute;left:127px;top:340px;width:312px;height:140px;z-index:4;">
            <a class="ui-button ui-widget ui-corner-all" href="" id="jQueryButton3" onclick="window.location.href='./Matchup_list.html';return false;" style="width:100%;height:100%;">Manage Teams</a>
        </div>
        <div id="jQueryButton4" style="position:absolute;left:723px;top:340px;width:312px;height:140px;z-index:5;">
            <a class="ui-button ui-widget ui-corner-all" href="" id="jQueryButton4" style="width:100%;height:100%;">Manage Players</a>
        </div>
        <div id="jQueryButton1" style="position:absolute;left:127px;top:96px;width:312px;height:140px;z-index:6;">
            <a class="ui-button ui-widget ui-corner-all" href="./Teams_Main.html" id="jQueryButton1" style="width:100%;height:100%;">Manage Seasons</a>
        </div>

        <div id="jQueryButton2" style="position:absolute;left:723px;top:96px;width:312px;height:140px;z-index:7;">
            <a class="ui-button ui-widget ui-corner-all" href="./Players_Main.html" id="jQueryButton2" style="width:100%;height:100%;">Manage Matchups</a>
        </div>
    </div>     
    <div id="Text3">
        <span style="color:#000000;font-family:Arial;font-size:27px;">Welcome to use this system , you can click the buttons below to navigate to the corresponding page.</span>
    </div>

</div>

<script>
    $(document).ready(function()
    {
        $("#jQueryButton1").button();
        $("#jQueryButton2").button();
        $("#jQueryButton3").button();
        $("#jQueryButton4").button();
    });
</script>