<?php
    NBACore::SetProperty('title', 'Teams Detail');
    NBACore::FillProperty('css', '/css/Teams_Main.css');
    NBACore::FillProperty('js', '/js/wwb12.min.js');
    NBACore::FillProperty('js', '/js/tab.min.js');
?>
    <div id="container">
        <div id="jQueryTabs1">
            <ul class="nav-tabs">
                <li><a href="#jquerytabs1-page-0"><span>Eastern</span></a></li>
                <li class="active"><a href="#jquerytabs1-page-1"><span>Western</span></a></li>
            </ul>
            <div class="tab-pane" style="height:781px;" id="jquerytabs1-page-0">
                <div id="Layer3">
                    <table id="Table2">
                        <tr>
                            <td class="cell0"><span> </span></td>
                            <td class="cell0"><span> </span></td>
                            <td class="cell1"><span> </span></td>
                        </tr>
                        <tr>
                            <td class="cell2"><span> </span></td>
                            <td class="cell2"><span> </span></td>
                            <td class="cell3"><span> </span></td>
                        </tr>
                        <tr>
                            <td class="cell2"><span> </span></td>
                            <td class="cell2"><span> </span></td>
                            <td class="cell3"><span> </span></td>
                        </tr>
                        <tr>
                            <td class="cell2"><span> </span></td>
                            <td class="cell2"><span> </span></td>
                            <td class="cell3"><span> </span></td>
                        </tr>
                        <tr>
                            <td class="cell2"><span> </span></td>
                            <td class="cell2"><span> </span></td>
                            <td class="cell3"><span> </span></td>
                        </tr>
                        <tr>
                            <td class="cell4"><span> </span></td>
                            <td class="cell4"><span> </span></td>
                            <td class="cell5"><span> </span></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="tab-pane active" style="height:781px;" id="jquerytabs1-page-1">
                <div id="Layer2" >
                    <table id="Table1">
                        <tr>
                            <td class="cell0"><span> </span></td>
                            <td class="cell0"><span> </span></td>
                            <td class="cell1"><span> </span></td>
                        </tr>
                        <tr>
                            <td class="cell2"><span> </span></td>
                            <td class="cell2"><span> </span></td>
                            <td class="cell3"><span> </span></td>
                        </tr>
                        <tr>
                            <td class="cell2"><span> </span></td>
                            <td class="cell2"><span> </span></td>
                            <td class="cell3"><span> </span></td>
                        </tr>
                        <tr>
                            <td class="cell2"><span> </span></td>
                            <td class="cell2"><span> </span></td>
                            <td class="cell3"><span> </span></td>
                        </tr>
                        <tr>
                            <td class="cell2"><span> </span></td>
                            <td class="cell2"><span> </span></td>
                            <td class="cell3"><span> </span></td>
                        </tr>
                        <tr>
                            <td class="cell4"><span> </span></td>
                            <td class="cell4"><span> </span></td>
                            <td class="cell5"><span> </span></td>
                        </tr>
                    </table>
                </div>
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
        });
    </script>