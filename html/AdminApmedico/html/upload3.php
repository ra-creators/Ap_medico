<?php
include 'dbcon.php';

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$msg = $_POST['message'];

$insertquery ="insert into contact_us(name,mobile,msg) values ('$name','$mobile','$msg')";

$query = mysqli_query($con,$insertquery);

if($query){
    echo "Thank You For Your Precious Message we will contact you soon!!!";
}else{
    echo "Not Inserted";
}

?>