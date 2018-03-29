<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Photos</title>
<link href="base/jquery-ui.min.css" rel="stylesheet">
<link href="css/jquery-ui.min.css" rel="stylesheet">
<link href="css/projectcss.css" rel="stylesheet">
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/wwb12.min.js"></script>
<link href="css/Photos.css" rel="stylesheet">
<script>
$(document).ready(function()
{
   $("#jQueryButton1").button();
});
</script>
</head>
<body>
    <div id="container">
    <label for="" id="Label3">When you like a photo, you can right-click a photo and choose the download menu item in the context menu to download.</label>
    </div>
    <div id="Layer1">
        <div id="PhotoGallery1">
            <div id="PhotoGallery1">
                <div class="thumbnails">
                    <div class="thumbnail">
                        <a href="images/person.png"><img alt="" id="PhotoGallery1_img0" src="images/person.png"></a>
                    </div>
                    <div class="thumbnail">
                        <a href="person.png"><img alt="" id="PhotoGallery1_img0" src="images/person.png"></a>
                    </div>
                    <div class="thumbnail">
                        <a href="images/person.png"><img alt="" id="PhotoGallery1_img2" src="images/person.png"></a>
                    </div>
                    <div class="thumbnail">
                        <a href="images/person_small.png"><img alt="" id="PhotoGallery1_img3" src="images/person.png"></a>
                    </div>
                    <div class="clearfix visible-col4"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="Layer2">
        <div id="Pagination1">
            <ul id="Pagination1">
            <li><a href="javascript:history.back()">&laquo; Prev</a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href="">Next &raquo;</a></li>
            </ul>
        </div>
        <button type="button" id="jQueryButton1" name="" value="Download photos in current page">Download photos in current page</button>
        <label for="" id="Label2">Total XX Photos , YY Photos in one page, Total ZZ Pages</label>
    </div>
</body>
</html>