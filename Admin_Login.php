    <?php
    NBACore::SetProperty('title', 'Login page');
    NBACore::FillProperty('css', '/css/Admin_Login.css');
    NBACore::FillProperty('js', '/js/wwb12.min.js');
    NBACore::FillProperty('js', '/js/AdminJS.js');
    ?>

    <div id="container">
        <div class="content">
            <div id="Text3" >
                <span>Users can login into the system using their jobnumber and password.</span>
            </div>
            <div class="content-log-in">
                <div class="header">Log In</div>
                <div class="form">
                    <form name="loginform" method="post" accept-charset="UTF-8" id="loginform">
                        <input type="hidden" name="form_name" value="loginform">
                        <div class="form-group">
                            <label for="email">User Name:</label>
                            <input  class="form-control" name="username" type="text" id="username" value="">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input name="password" type="password" id="password" value="" class="form-control" id="pwd">
                        </div>
                        <div class="conteiner-button"> 
                            <input type="submit" class="btn btn-default button-log-in" value="Log in"/>
                        </div>
                    </form>
                </div>
            </div>

            <div id="Layer1" >
                <div id="Text4" >
                    <span><strong>FOR TESTING ONLY!</strong></span>
                </div>
                <div id="Text5">
                    <span >Which type of user would you like to <br>log in to the system as?</span>
                </div>
                <input type="submit" name="" class="btn btn-default button-log-in"  value="Event Administrator"/>
                <input type="submit" name="" class="btn btn-default button-log-in"  value="Technical Administrator"/>
                <a href="#" class="Layer1-close">X</a>
            </div>

        </div>
    </div>

    <script>
        $(document).ready(function()
        {
            $("#jQueryButton1").button();
            $("#jQueryButton2").button();
            $("#jQueryButton3").button();
            $(document).onload(function(){
                ShowObject('Layer1', 1);
            });
        });
    </script>