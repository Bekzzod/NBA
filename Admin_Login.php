    <?php
    NBACore::SetProperty('title', 'Login page');
    NBACore::FillProperty('css', '/css/Admin_Login.css');
    NBACore::FillProperty('js', '/js/wwb12.min.js');
    ?>

    <div id="container">
        <div id="Login1" style="position:absolute;left:275px;top:248px;width:807px;height:448px;z-index:10;">
            <form name="loginform" method="post" accept-charset="UTF-8" id="loginform">
                <input type="hidden" name="form_name" value="loginform">
                <table id="Login1">
                    <tr>
                        <td class="header">Log In</td>
                    </tr>
                    <tr>
                        <td class="label"><label for="username">User Name</label></td>
                    </tr>
                    <tr>
                        <td class="row"><input class="input" name="username" type="text" id="username" value=""></td>
                    </tr>
                    <tr>
                        <td class="label"><label for="password">Password</label></td>
                    </tr>
                    <tr>
                        <td class="row"><input class="input" name="password" type="password" id="password" value=""></td>
                    </tr>
                    <tr>
                        <td class="row"><input id="rememberme" type="checkbox" name="rememberme"><label for="rememberme">Remember me</label></td>
                    </tr>
                    <tr>
                        <td style="text-align:center;vertical-align:bottom"><input class="button" type="submit" name="login" value="Log in" id="login"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div id="Text3" style="position:absolute;left:366px;top:187px;width:625px;height:22px;z-index:13;">
             <span style="color:#2B2B2B;font-family:Arial;font-size:19px;">Users can login into the system using their jobnumber and password.</span>
        </div>
        <div id="Layer1" style="position:absolute;text-align:left;visibility:hidden;left:301px;top:231px;width:707px;height:454px;z-index:14;">
            <div id="Text4" style="position:absolute;left:236px;top:57px;width:246px;height:24px;z-index:4;">
                <span style="color:#FFD700;font-family:Arial;font-size:21px;"><strong>FOR TESTING ONLY!</strong></span>
            </div>
            <div id="Text5" style="position:absolute;left:221px;top:95px;width:261px;height:36px;text-align:center;z-index:5;">
                <span style="color:#000000;font-family:Arial;font-size:16px;">Which type of user would you like to <br>log in to the system as?</span>
            </div>
            <button type="submit" id="jQueryButton1" onclick="ShowObject('Layer1', 0);return false;" name="" value="Event Administrator">Event Administrator</button>
            <button type="submit" id="jQueryButton2" onclick="ShowObject('Layer1', 0);return false;" name="" value="Technical Administrator">Technical Administrator</button>
            <button type="reset" id="jQueryButton3" onclick="window.location.href='./index.php';return false;" name="" value="Back" style="position:absolute;left:631px;top:10px;width:63px;height:47px;z-index:8;">Back</button>
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