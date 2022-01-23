<?php 

include '../dbcon.php';


$name = $_POST['username'];
$password = $_POST['password'];
$shop = $_POST['shop'];






    $insertquery = "insert into newwho(name,password,shop) values ('$name','$password','$shop')";

    $query = mysqli_query($con,$insertquery);

    if($query){
        echo "New Wholesaler added successfully";

    }else{
        echo "New Wholesaler not added";
    }



?>