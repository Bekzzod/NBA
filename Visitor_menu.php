<?php
    NBACore::SetProperty('title', 'Visitor menu');
    NBACore::FillProperty('css', '/css/Visitor_menu.css');
    NBACore::FillProperty('js', '/js/VisitorMenuJS.js');
?>
    <div id="container">
        <div class="container-buttons">
            <div class="container-buttons-two">
                <div class="container-buttons-one">
                    <a href="./Teams_Main.php">
                        <div class="buttons-style">
                            <div class="text">Teams</div>
                        </div>
                    </a>
                </div>
                <div class="container-buttons-one">
                    <a href="./Players_Main.php">
                        <div class="buttons-style">
                            <div class="text">Players</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="container-buttons-two">
                <div class="container-buttons-one">
                    <a href="./Photos.php">
                        <div class="buttons-style">
                            <div class="text">Photos</div>
                        </div>
                    </a>
                </div>
                <div class="container-buttons-one">
                    <a href="./Matchup_list.php">
                        <div class="buttons-style">
                            <div class="text">Matchup</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>