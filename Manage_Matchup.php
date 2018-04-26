<?php
NBACore::SetProperty('title', 'Manage Matchup');
NBACore::FillProperty('css', '/css/Manage_Matchup.css');
NBACore::FillProperty('js', '/js/wwb12.min.js');
NBACore::FillProperty('js', '/js/tab.min.js');
?>

    <div id="container">
        <div id="Layer1">
            <div id="jQueryTabs1">
                <ul class="nav-tabs">
                <li><a href="#jquerytabs1-page-0"><span>Preseason</span></a></li>
                <li class="active"><a href="#jquerytabs1-page-1"><span>Regular Season</span></a></li>
                </ul>
                <div class="tab-pane" style="height:681px;" id="jquerytabs1-page-0">
                    <div id="Layer2">
                        <div id="Layer2_Container">
                            <table id="Table1">
                                <tr>
                                    <td class="cell0"><span></span> Date</span></td>
                                    <td class="cell0"><span> Team(Away)</span></td>
                                    <td class="cell0"><span> Team(Home)</span></td>
                                    <td class="cell0"><span> Time</span></td>
                                    <td class="cell0"><span> Location</span></td>
                                    <td class="cell0"><span> Done?</span></td>
                                    <td class="cell0"><span> Update</span></td>
                                    <td class="cell1"><span> Delete</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane active" style="height:681px;" id="jquerytabs1-page-1">
                    <div id="Layer4">
                        <div id="Layer4_Container">
                        <button type="button" id="jQueryButton2" name="Addnew" value="Add a new matchup">Add a new matchup</button>
                        <button type="button" id="jQueryButton3" name="" value="Export to Excel">Export to Excel</button>
                            <div id="Layer5">
                                <div id="Layer5_Container">
                                    <table id="Table2">
                                        <tr>
                                            <td class="cell0"><span> Date</span></td>
                                            <td class="cell0"><span> Team(Away)</span></td>
                                            <td class="cell0"><span> Team(Home)</span></td>
                                            <td class="cell0"><span> Time</span></td>
                                            <td class="cell0"><span> Location</span></td>
                                            <td class="cell0"><span> Done?</span></td>
                                            <td class="cell0"><span> Update</span></td>
                                            <td class="cell1"><span> Delete</span></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Layer3" >
                <select name="Combobox1" size="1" id="Combobox1">
                  <option selected value="2017-2018">2017-2018</option>
                </select>
                
                <label for="Label2" id="Label2">Season:</label>
                <label for="Label3" id="Label3">Date:</label>
                <button type="submit" id="jQueryButton1" name="" value="Search">Search</button>
                <input type="date" id="Editbox1" name="Date" value="" spellcheck="false">
            </div>
        </div>
    </div>
<script>
    $(document).ready(function()
    {
        $("#jQueryTabs1 a").click(function()
        {
            $(this).tab('show');
        });
        $("#jQueryButton1").button();
        $("#jQueryButton2").button();
        $("#jQueryButton3").button();
    });
</script>