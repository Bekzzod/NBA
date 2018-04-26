<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Manage Players</title>
    <link href="base/jquery-ui.min.css" rel="stylesheet">
    <link href="css/jquery-ui.min.css" rel="stylesheet">
    <link href="css/projectcss.css" rel="stylesheet">
    <link href="css/Manage_Players.css" rel="stylesheet">
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/wwb12.min.js"></script>
    <script src="js/tab.min.js"></script>
    <script>
        $(document).ready(function()
        {
        $("#jQueryButton2").button();
        });
    </script>
</head>
<body>
    <div id="container">
        <div id="Layer3">
            <select name="Combobox1" size="1" id="Combobox1"><option selected value="All">All</option></select>
            <label  id="Label2">Position:</label>
            <label  id="Label3">Country:</label>
            <button type="submit" id="jQueryButton2" name="" value="Search">Search</button>
            <select name="Combobox2" size="1" id="Combobox2"><option>All</option></select>
            <input type="text" id="Editbox1"name="Editbox1" value="" spellcheck="false">
            <label id="Label4">Name:</label>
        </div>
    </div>
    <div id="Layer1">
        <table id="Table1">
            <tr>
                <th class="cell0"><h5> Name</h5></th>
                <th class="cell0"><h5> Position</h5></th>
                <th class="cell0"><h5>JoinYear</h5></th>
                <th class="cell0"><h5> Height</h5></th>
                <th class="cell1"><h5>Weight</h5></th>
                <th class="cell1"><h5>DateOfBirth</h5></th>
                <th class="cell1"><h5>College</h5></th>
                <th class="cell2"><h5>Country</h5></th>
            </tr>
        </table>
        <label id="Label5" >Total players: XX</label>
    </div>
</body>
</html>