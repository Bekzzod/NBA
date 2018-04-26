<?php
NBACore::SetProperty('title', 'Manage Seasons');
NBACore::FillProperty('css', '/css/Manage_Seasons.css');
NBACore::FillProperty('js', '/js/wwb12.min.js');
NBACore::FillProperty('js', '/js/tab.min.js');
?>

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
<script>
    $(document).ready(function()
    {
        $("#jQueryButton1").button();
    });
</script>