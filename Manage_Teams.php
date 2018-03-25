<!doctype html>
<html>
<head>
        <meta charset="utf-8">
        <title>Manage Teams</title>
        <link href="base/jquery-ui.min.css" rel="stylesheet">
        <link href="css/jquery-ui.min.css" rel="stylesheet">
        <link href="css/projectcss.css" rel="stylesheet">
        <link href="css/Manage_Teams.css" rel="stylesheet">
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/wwb12.min.js"></script>
        <script src="js/tab.min.js"></script>
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
        <button type="button" id="jQueryButton1" name="" value="Add a new team">Add a new team</button>
        <div id="Layer3">
                <select name="Combobox1" id="Combobox1">
                <option selected value="All">All</option>
                </select>
                <label id="Label2">Conference</label>
                <label id="Label3">Division</label>
                <button type="submit" id="jQueryButton2" name="" value="Search">Search</button>
                <select name="Combobox2" size="1" id="Combobox2">
                <option>All</option>
                </select>
        </div>
</div>
<div id="Layer1">
        <table id="Table1">
                <tr>
                        <th class="cell0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;">LOGO </span></th>
                        <th class="cell0"><h5> Name</h5></th>
                        <th class="cell0"><h5> Conference</h5></th>
                        <th class="cell0"><h5> Division</h5></th>
                        <th class="cell0"><h5> Coach</h5></th>
                        <th class="cell1"><h5> TotalSalary($ Millinon)</h5></th>
                </tr>
        </table>
</div>
</body>
</html>