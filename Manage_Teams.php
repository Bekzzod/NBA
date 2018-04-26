<?php
NBACore::SetProperty('title', 'Manage Teams');
NBACore::FillProperty('css', '/css/Manage_Teams.css');
NBACore::FillProperty('js', '/js/wwb12.min.js');
NBACore::FillProperty('js', '/js/tab.min.js');
?>
<?php
include 'db_connection.php';
$conn = OpenCon();
?>
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
<script>
    $(document).ready(function()
    {
        $("#jQueryButton1").button();
        $("#jQueryButton2").button();
    });
</script>