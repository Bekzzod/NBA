<?php
NBACore::SetProperty('title', 'Add a new matchup for regular season');
NBACore::FillProperty('css', '/css/Add_a_new_matchup_for_regular_season.css');
NBACore::FillProperty('js', '/js/wwb12.min.js');
?>
<div id="container">
    <div id="Layer1" style="position:absolute;text-align:left;left:281px;top:263px;width:705px;height:473px;z-index:40;">
        <div id="wb_Form1" style="position:absolute;left:44px;top:65px;width:585px;height:377px;z-index:21;">
            <form name="Add" method="post" action="" enctype="text/plain" id="Form1">

                <label for="" id="Label2" style="position:absolute;left:10px;top:15px;width:89px;height:16px;line-height:16px;z-index:5;">Season:</label>
                <label for="" id="Label3" style="position:absolute;left:107px;top:15px;width:89px;height:16px;line-height:16px;z-index:6;">2017-2018</label>
                <label for="" id="Label4" style="position:absolute;left:330px;top:15px;width:89px;height:16px;line-height:16px;z-index:7;">Matchup Type</label>
                <label for="" id="Label5" style="position:absolute;left:454px;top:15px;width:100px;height:16px;line-height:16px;z-index:8;">Regular Season</label>
                <label for="Editbox1" id="Label6" style="position:absolute;left:10px;top:91px;width:75px;height:16px;line-height:16px;z-index:9;">Date:</label>            
                <input type="date" id="Editbox1" style="position:absolute;left:85px;top:90px;width:190px;height:16px;line-height:16px;z-index:10;" name="Editbox1" value="" spellcheck="false">
                <label for="Editbox2" id="Label7" style="position:absolute;left:344px;top:91px;width:47px;height:16px;line-height:16px;z-index:11;">Time:</label>
                <input type="time" id="Editbox2" style="position:absolute;left:427px;top:90px;width:125px;height:16px;line-height:16px;z-index:12;" name="Editbox2" value="" spellcheck="false">
                <label for="Editbox3" id="Label8" style="position:absolute;left:10px;top:153px;width:75px;height:16px;line-height:16px;z-index:13;">Location:</label>
                <input type="text" id="Editbox3" style="position:absolute;left:85px;top:152px;width:467px;height:16px;line-height:16px;z-index:14;" name="Editbox3" value="" spellcheck="false">
                <label for="Combobox1" id="Label9" style="position:absolute;left:10px;top:208px;width:75px;height:16px;line-height:16px;z-index:15;">Team(Away):</label>
                <select name="Combobox1" size="1" id="Combobox1" style="position:absolute;left:10px;top:241px;width:200px;height:28px;z-index:16;">
                </select>
                <label for="Combobox2" id="Label10" style="position:absolute;left:479px;top:217px;width:75px;height:16px;line-height:16px;z-index:17;">Team(Home):</label>
                <select name="Combobox2" size="1" id="Combobox2" style="position:absolute;left:362px;top:241px;width:200px;height:28px;z-index:18;"></select>
                <label for="" id="Label11" style="position:absolute;left:293px;top:243px;width:29px;height:16px;line-height:16px;z-index:19;">VS</label>
                <input type="submit" id="Button1" name="" value="Submit" style="position:absolute;left:259px;top:313px;width:96px;height:25px;z-index:20;">
            </form>
        </div>
    </div>
</div>