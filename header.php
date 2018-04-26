<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Start Page</title>
    <link href="css/jquery-ui.min.css" rel="stylesheet">
    <link href="css/projectcss.css" rel="stylesheet">
    <link href="css/Main.css" rel="stylesheet">
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
</head>
<body>

<div class="PageHeader">
    <div class="PageHeader-content">
        <input type="submit" class="Button_back" onclick="goBack()" value="Back">
        <div class="PageHeader-content-logo">
            <div class="logo"></div>
            <div class="text">NBA Management System</div>            
        </div>
        <div id="pageName">
        </div>
    </div>
    <hr class="Line">
</div>
<script>
    function goBack(){
        window.history.back();
        console.log("back");
    }
</script>
<style>
.PageHeader{
position:relative;
text-align:left;
width:100%;
height:100px;
}

.PageHeader-content{
position:relative;    
height:100%;
}

.Line{
 background-color:#6995C2;
 width:100%;
}

.Button_back{
    position: absolute;
    right: 50px;
    top: 50%;
    transform: translate(0%,-50%);
    width: 100px;
    font-size: 20px;
    padding: 10px;
    border-radius: 10px;
    width: 130px;
    background: #c3c3c3;
}
.PageHeader-content-logo{
    position:relative;
    left:10px;
    height:90%;
    top:50%;
    transform: translate(0%,-50%);  
    width:50%;
    display:flex;
}
.PageHeader-content-logo>.text{
    color:#ada9a9;
    font-size:27px;
    position:relative;  
    top: 100%;
    height: 30px;
    transform: translate(0%,-120%);  
}
.PageHeader-content-logo>.logo{
    background:url('images/logo.jpg');
    height:100%;
    width:80px;    
    background-repeat: no-repeat;
    background-size: contain;
}

#pageName{
position:absolute;
left:50%;
top:50%;
    transform: translate(-50%,0%);
    height: 32px;
    color:#2f2f2f;
    font-size:30px;
    font-weight:700;
}
</style>
