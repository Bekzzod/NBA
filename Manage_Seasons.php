<!doctype html>
<html>
<head>
        <meta charset="utf-8">
        <title>Manage Seasons</title>
        <link href="base/jquery-ui.min.css" rel="stylesheet">
        <link href="css/jquery-ui.min.css" rel="stylesheet">
        <link href="css/projectcss.css" rel="stylesheet">
        <link href="css/Manage_Seasons.css" rel="stylesheet">
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/wwb12.min.js"></script>
        <script src="js/tab.min.js"></script>
        <script>
                $(document).ready(function()
                {
                $("#jQueryButton1").button();
                });
        </script>
</head>
<body>
<div id="container">
        <div id="Layer3">
                <select name="Combobox1" size="1" id="Combobox1"><option selected value="2017-2018">2017-2018</option></select>
                <label id="Label2">Season:</label>
                <select name="Combobox1" size="1" id="Combobox2"><option selected value="All">All</option></select>
                <label id="Label3">Matchup Type:</label>
                <button type="submit" id="jQueryButton1" name="" value="Search">Search</button>
        </div>
</div>

<div id="Layer1" >
                <table  id="Table1">
                        <tr>
                                <th class="cell0"><h5> Season</h5></th>
                                <th class="cell1"><h5> Matchup Type</h5></th>
                                <th class="cell2"><h5> Number of Mathcup</h5></th>
                        </tr>
                </table>
</div>

<div id="Layer2" >
   <table id="Table2">
      <tr>
         <th class="cell0"><h5>Date</h5></th>
         <th class="cell1"><h5> Matchup </h5></th>
         <th class="cell2"><h5>Result</h5></th>
         <th class="cell3"><h5>Location</h5></th>
      </tr>
   </table>
</div>
</body>
</html>