<?php
    NBACore::SetProperty('title', 'Report Team');
    NBACore::FillProperty('css', '/css/Report_Team.css');
    NBACore::FillProperty('js', '/js/wwb12.min.js');
    NBACore::FillProperty('js', '/js/tab.min.js');
?>
        <div id="container">
                <div id="Layer3">
                        <select name="Combobox1" id="Combobox1"><option selected value="Points">Points</option></select>
                        <label for="Label2" id="Label2">Rank by:</label>
                        <label for="jQueryButton2" id="Label3">View by:</label>
                        <select name="Combobox2" id="Combobox2"><option>Average</option></select>
                        <button type="submit" id="jQueryButton2" name="" value="Search">Search</button>
                        <select name="Combobox1" id="Combobox3"><option selected value="Regular Season">Regular Season</option></select>
                        <label for="" id="Label4">Matchup Type:</label>
                </div>
        </div>
        <div id="Layer1">
                <table id="Table1">
                        <tr>
                                <th class="cell0"><h5>Rank</h5></th>
                                <th class="cell1"><h5> Name</h5></th>
                                <th class="cell2"><h5>Conference</h5></th>
                                <th class="cell1"><h5>Division</h5></th>
                                <th class="cell1"><h5> Points</h5></th>
                                <th class="cell1"><h5>Rebounds</h5></th>
                                <th class="cell1"><h5>Assists</h5></th>
                                <th class="cell1"><h5>Steals</h5></th>
                                <th class="cell1"><h5>Blocks</h5></th>
                                <th class="cell1"><h5>Turnovers</h5></th>
                                <th class="cell3"><h5>Fouls</h5></th>
                        </tr>
                </table>
        </div>
    <script>
        $(document).ready(function()
        {
            $("#jQueryButton2").button();
        });
    </script>