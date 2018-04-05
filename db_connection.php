<?php

function OpenCon()
 {
 $dbhost = "http://185.246.66.66/phpmyadmin/";
 $dbuser = "nba-admin";
 $dbpass = ">D^}.>;DLqx6vp9h";
 $db = "nba";


 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>