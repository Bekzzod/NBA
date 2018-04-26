<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Team Detail</title>
<link href="base/jquery-ui.min.css" rel="stylesheet">
<link href="css/jquery-ui.min.css" rel="stylesheet">
<link href="css/projectcss.css" rel="stylesheet">
<link href="css/Teams_Detail.css" rel="stylesheet">
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/wwb12.min.js"></script>
<script src="js/tab.min.js"></script>
<script>
$(document).ready(function()
{
   $("#jQueryTabs1 a").click(function()
   {
      $(this).tab('show');
   });
   $("#jQueryButton1").button();
});
</script>
</head>
<body>
<div id="container">
        <div id="jQueryTabs1">
                <ul class="nav-tabs">
                        <li class="active"><a href="#jquerytabs1-page-0"><span>Roster</span></a></li>
                        <li><a href="#jquerytabs1-page-1"><span>Matchup</span></a></li>
                        <li><a href="#jquerytabs1-page-2"><span>Lineup</span></a></li>
                </ul>
                <div class="tab-pane active" style="height:562px;" id="jquerytabs1-page-0">
                        <table id="Table1">
                                <tr>
                                        <th class="cell0"><h5>№</h5></th>
                                        <th class="cell1"><h5>Name</h5></th>
                                        <th class="cell0"><h5> Position</h5></th>
                                        <th class="cell0"><h5> DateOfBirth</h5></th>
                                        <th class="cell0"><h5> College</h5></th>
                                        <th class="cell0"><h5> Experience</h5></th>
                                        <th class="cell2"><h5> Salary</h5></th>
                                </tr>
                        </table>
                </div>

                <div class="tab-pane" style="height:562px;" id="jquerytabs1-page-1">
                        <table id="Table2">
                                <tr>
                                        <th class="cell0"><h5>Date</h5></th>
                                        <th class="cell1"><h5>Matchup Type</h5></th>
                                        <th class="cell0"><h5> Opponent</h5></th>
                                        <th class="cell0"><h5> Start Time</h5></th>
                                        <th class="cell0"><h5> Result</h5></th>
                                        <th class="cell0"><h5> Location</h5></th>
                                        <th class="cell2"><h5> Status</h5></th>
                                </tr>
                        </table>
                </div>

                <div class="tab-pane" style="height:562px;" id="jquerytabs1-page-2">
                        <div id="Image3" style="position:absolute;left:8px;top:54px;width:1235px;height:523px;z-index:2;">
                                <img src="images/lineup.jpg" id="Image3" alt="">
                        </div>
                </div>
        </div>
        <select name="Combobox1" size="1" id="Combobox1">
                <option selected value="2017-2018">2017-2018</option>
        </select>
        <button type="submit" id="jQueryButton1" name="" value="Search" style="position:absolute;left:480px;top:150px;width:107px;height:26px;z-index:11;">Search</button>
      
        <div id="Image2" style="position:absolute;left:43px;top:50px;width:147px;height:84px;z-index:12;">
                <img src="images/logo.jpg" id="Image2" alt="" title="Team logo">
        </div>

        <div id="Text3">
                <span style="color:#000000;font-family:Arial;font-size:21px;">Team Name</span>
        </div>

        <div id="Line1" style="position:absolute;left:330px;top:50px;width:1px;height:25px;z-index:14;">
                <img src="images/.." id="Line1" alt="">
        </div>

        <div id="Text4">
                <span style="color:#000000;font-family:Arial;font-size:21px;">Division Name of Conference Name</span>
        </div>
</div>

</body>
</html>