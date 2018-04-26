<?php
NBACore::SetProperty('title', 'Manage Players');
NBACore::FillProperty('css', '/css/Manage_Players.css');
NBACore::FillProperty('js', '/js/wwb12.min.js');
NBACore::FillProperty('js', '/js/tab.min.js');
?>
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
<script>
    $(document).ready(function()
    {
        $("#jQueryButton2").button();
    });
</script>