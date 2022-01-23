<?php

$sever ="localhost";
$user="root";
$password="";
$db="apmedico";

$con = mysqli_connect($sever,$user,$password,$db);


 if($con == false)
 {
     die("connection error");
 }
?>