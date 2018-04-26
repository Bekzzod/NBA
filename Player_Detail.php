<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Player Detail</title>
<link href="base/jquery-ui.min.css" rel="stylesheet">
<link href="css/jquery-ui.min.css" rel="stylesheet">
<link href="css/projectcss.css" rel="stylesheet">
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/wwb12.min.js"></script>
<link href="css/Player_Detail.css" rel="stylesheet">
<script>
$(document).ready(function()
{
   $("#jQueryButton1").checkboxradio({ icon:false });
   var jQueryTabs1Options =
   {
      show: false,
      event: 'click',
      collapsible: true
   };
   $("#jQueryTabs1").tabs(jQueryTabs1Options);
});
</script>
</head>
<body>
<div id="container">
<div id="Layer1" >
</div>

<div id="wb_Image2" style="position:absolute;left:16px;top:40px;width:136px;height:130px;z-index:8;">
<img src="images/person.png" id="Image2" alt=""></div>
<hr id="Line1" style="position:absolute;left:160px;top:60px;width:479px;z-index:9;">
<div id="wb_Text3" style="position:absolute;left:160px;top:36px;width:249px;height:24px;z-index:10;">
<span style="color:#434343;font-family:Arial;font-size:21px;"><strong>Player Name</strong></span></div>
<div id="wb_Text4" style="position:absolute;left:161px;top:72px;width:47px;height:22px;z-index:11;">
<span style="color:#434343;font-family:Arial;font-size:19px;">#__</span></div>
<div id="wb_Line3" style="position:absolute;left:215px;top:60px;width:1px;height:30px;z-index:12;">
<img src="images/img0045.png" id="Line3" alt=""></div>
<div id="wb_Text5" style="position:absolute;left:240px;top:72px;width:58px;height:22px;z-index:13;">
<span style="color:#434343;font-family:Arial;font-size:19px;">Height</span></div>
<div id="wb_Line4" style="position:absolute;left:303px;top:60px;width:1px;height:30px;z-index:14;">
<img src="images/img0046.png" id="Line4" alt=""></div>
<div id="wb_Text6" style="position:absolute;left:318px;top:72px;width:238px;height:22px;z-index:15;">
<span style="color:#434343;font-family:Arial;font-size:19px;">TeamName</span></div>
<div id="wb_Text7" style="position:absolute;left:161px;top:111px;width:58px;height:22px;z-index:16;">
<span style="color:#434343;font-family:Arial;font-size:19px;">Born</span></div>
<div id="wb_Text8" style="position:absolute;left:161px;top:148px;width:68px;height:44px;z-index:17;">
<span style="color:#434343;font-family:Arial;font-size:19px;">College</span></div>
<div id="wb_Text9" style="position:absolute;left:288px;top:110px;width:249px;height:24px;z-index:18;">
<span style="color:#434343;font-family:Arial;font-size:21px;"><strong>DateOfBorn</strong></span></div>
<div id="wb_Text10" style="position:absolute;left:288px;top:146px;width:249px;height:24px;z-index:19;">
<span style="color:#434343;font-family:Arial;font-size:21px;"><strong>CollegeName</strong></span></div>
<div id="wb_Text11" style="position:absolute;left:449px;top:111px;width:88px;height:44px;z-index:20;">
<span style="color:#434343;font-family:Arial;font-size:19px;">Expirience</span></div>
<div id="wb_Text12" style="position:absolute;left:449px;top:148px;width:68px;height:22px;z-index:21;">
<span style="color:#434343;font-family:Arial;font-size:19px;">Salary</span></div>
<div id="wb_Text13" style="position:absolute;left:576px;top:110px;width:71px;height:24px;z-index:22;">
<span style="color:#434343;font-family:Arial;font-size:21px;"><strong>Years</strong></span></div>
<div id="wb_Text14" style="position:absolute;left:576px;top:146px;width:71px;height:24px;z-index:23;">
<span style="color:#434343;font-family:Arial;font-size:21px;"><strong>$$$</strong></span></div>
<div id="wb_Text15" style="position:absolute;left:823px;top:0px;width:249px;height:24px;z-index:24;">
<span style="color:#434343;font-family:Arial;font-size:21px;"><strong>Last Season</strong></span></div>
<table style="position:absolute;left:811px;top:32px;width:323px;height:59px;z-index:25;" id="Table1">
<tr>
<td class="cell0 CustomStyle"><h5> PPG</h5></td>
<td class="cell0 CustomStyle"><h5> APG</h5></td>
<td class="cell1 CustomStyle"><h5> RPG</h5></td>
</tr>
<tr>
<td class="cell2"><span> __.__</span></td>
<td class="cell2"><span>&nbsp; __.__</span></td>
<td class="cell3"><span>&nbsp; __.__</span></td>
</tr>
</table>
<div id="wb_Text16" style="position:absolute;left:823px;top:110px;width:249px;height:24px;z-index:26;">
<span style="color:#434343;font-family:Arial;font-size:21px;"><strong>Career</strong></span></div>
<table style="position:absolute;left:811px;top:141px;width:323px;height:59px;z-index:27;" id="Table2">
<tr>
<td class="cell0 CustomStyle"><h5> PPG</h5></td>
<td class="cell0 CustomStyle"><h5> APG</h5></td>
<td class="cell1 CustomStyle"><h5> RPG</h5></td>
</tr>
<tr>
<td class="cell2"><span> __.__</span></td>
<td class="cell2"><span>&nbsp; __.__</span></td>
<td class="cell3"><span>&nbsp; __.__</span></td>
</tr>
</table>
<label for="Editbox1" id="Label2" style="position:absolute;left:67px;top:225px;width:62px;height:37px;line-height:37px;z-index:28;">Date:</label>
<input type="date" id="Editbox1" style="position:absolute;left:146px;top:230px;width:162px;height:25px;line-height:25px;z-index:29;" name="Editbox1" value="" spellcheck="false">
<label for="" id="Label3" style="position:absolute;left:336px;top:227px;width:22px;height:32px;line-height:32px;z-index:30;">-</label>
<input type="date" id="Editbox2" style="position:absolute;left:375px;top:230px;width:162px;height:25px;line-height:25px;z-index:31;" name="Editbox1" value="" spellcheck="false">
<div id="wb_jQueryButton1" style="position:absolute;left:563px;top:225px;width:94px;height:38px;z-index:32;">
<input type="checkbox" id="jQueryButton1" name="" value="Search"><label style="width:100%;height:100%;" for="jQueryButton1">Search</label></div>
<div id="jQueryTabs1" style="position:absolute;left:50px;top:288px;width:1155px;z-index:33;">
<ul>
<li><a href="#jquerytabs1-page-0"><span>POINTS</span></a></li>
<li><a href="#jquerytabs1-page-1"><span>REBOUNDS</span></a></li>
<li><a href="#jquerytabs1-page-2"><span>ASSISTS</span></a></li>
<li><a href="#jquerytabs1-page-3"><span>STEALS</span></a></li>
<li><a href="#jquerytabs1-page-4"><span>BLOCKS</span></a></li>
</ul>
<div style="height:473px;" id="jquerytabs1-page-0">
    <div id="wb_Scribble1" style="position:absolute;left:91px;top:135px;width:1000px;height:184px;z-index:0;">
    <img src="images/img0048.png" id="Scribble1" alt=""></div>
</div>
<div style="height:473px;" id="jquerytabs1-page-1">
    <div id="wb_Scribble2" style="position:absolute;left:108px;top:79px;width:858px;height:283px;z-index:1;">
    <img src="images/img0049.png" id="Scribble2" alt=""></div>
</div>
<div style="height:473px;" id="jquerytabs1-page-2">
<div id="wb_Scribble3" style="position:absolute;left:72px;top:28px;width:946px;height:382px;z-index:2;">
<img src="images/img0050.png" id="Scribble3" alt=""></div>
<div id="wb_Scribble4" style="position:absolute;left:144px;top:165px;width:874px;height:187px;z-index:3;">
<img src="images/img0051.png" id="Scribble4" alt=""></div>
</div>
<div style="height:473px;" id="jquerytabs1-page-3">
<div id="wb_Scribble5" style="position:absolute;left:82px;top:30px;width:922px;height:354px;z-index:4;">
<img src="images/img0052.png" id="Scribble5" alt=""></div>
</div>
<div style="height:473px;" id="jquerytabs1-page-4">
<div id="wb_Scribble6" style="position:absolute;left:173px;top:139px;width:830px;height:25px;z-index:5;">
<img src="images/img0053.png" id="Scribble6" alt=""></div>
</div>
</div>
</div>
</body>
</html>