<?php
NBACore::SetProperty('title', 'Matchup List');
NBACore::FillProperty('css', '/css/Matchup_list.css');
NBACore::FillProperty('js', '/js/wwb12.min.js');
NBACore::FillProperty('js', '/js/tab.min.js');
?>
    <div id="container">
        <input type="date" id="Editbox1" name="Editbox1" value="" spellcheck="false">
        <button type="button" id="jQueryButton1" onclick="$('#Editbox1').slideshow('nextimage');return false;" name="" Value=">>">>></button>
        <button type="button" id="jQueryButton2" onclick="$('#Editbox1').slideshow('nextimage');return false;" name="" value="<<"><<</button>
            <div id="Text3">
                <span style="color:#434343;font-family:Arial;font-size:53px;">VS</span>
            </div>
            <div id="Image3" style="position:absolute;left:713px;top:93px;width:248px;height:118px;z-index:22;">
            <img src="images/img0001.png" id="Image3" alt=""></div>
            <div id="Image2" style="position:absolute;left:320px;top:93px;width:248px;height:118px;z-index:23;">
            <img src="images/img0001.png" id="Image2" alt=""></div>
            <div id="Text4">
                <span style="color:#000000;font-family:Arial;font-size:19px;">10:30 Start</span>
            </div>
    </div>
    <div id="Layer1">
        <div id="Layer1_Container">
            <table id="Table1">
                <tr>
                    <td class="cell0"><span > </span></td>
                    <td class="cell0"><span > </span></td>
                    <td class="cell1"><span > </span></td>
                    <td class="cell0"><span > </span></td>
                    <td class="cell0"><span > </span></td>
                    <td class="cell0"><span > </span></td>
                    <td class="cell0"><span > </span></td>
                    <td class="cell2"><span > </span></td>
                    <td class="cell3"><span > </span></td>
                </tr>
                <tr>
                    <td class="cell4"><span > Status</span></td>
                    <td class="cell4"><span > Date\time</span></td>
                    <td class="cell5"><span >Logo Team 1</span></td>
                    <td class="cell4"><span > Name Team 1</span></td>
                    <td class="cell4"><span > Score</span></td>
                    <td class="cell4"><span > Logo Team 2</span></td>
                    <td class="cell4"><span > Name Team 2</span></td>
                    <td class="cell6"><span > Location</span></td>
                    <td class="cell7">
                    <div id="jQueryButton3">
                        <a class="ui-button ui-widget ui-corner-all" href="" id="jQueryButton3" style="width:100%;height:100%;">View</a>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td class="cell4"><span>&nbsp; Status</span></td>
                    <td class="cell4"><span> Date\time</span></td>
                    <td class="cell5"><span> Logo Team 1</span></td>
                    <td class="cell4"><span> Name Team 1</span></td>
                    <td class="cell4"><span>&nbsp; Score</span></td>
                    <td class="cell4"><span> Logo Team 2</span></td>
                    <td class="cell4"><span> Name Team 2</span></td>
                    <td class="cell6"><span> Location</span></td>
                    <td class="cell7">
                    <div id="jQueryButton4">
                        <a class="ui-button ui-widget ui-corner-all" href="" id="jQueryButton4" style="width:100%;height:100%;">View</a>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td class="cell4"><span >&nbsp; Status</span></td>
                    <td class="cell4"><span > Date\time</span></td>
                    <td class="cell5"><span > Logo Team 1</span></td>
                    <td class="cell4"><span > Name Team 1</span></td>
                    <td class="cell4"><span >&nbsp; Score</span></td>
                    <td class="cell4"><span > Logo Team 2</span></td>
                    <td class="cell4"><span > Name Team 2</span></td>
                    <td class="cell6"><span > Location</span></td>
                    <td class="cell7">
                    <div id="jQueryButton7">
                        <a class="ui-button ui-widget ui-corner-all" href="" id="jQueryButton7" style="width:100%;height:100%;">View</a>
                    </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <script>
        $(document).ready(function()
        {
            $("#jQueryButton1").button();
            $("#jQueryButton2").button();
            $("#jQueryButton3").button();
            $("#jQueryButton4").button();
            $("#jQueryButton5").button();
            $("#jQueryButton6").button();
            $("#jQueryButton7").button();
        });
    </script>