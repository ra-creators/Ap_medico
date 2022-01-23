<?php

include 'dbcon.php';

$email=$_POST['email'];

if(strlen($email)!=0){
   
    
    

    $insertquery = "insert into staytouch(email) values ('$email')";

    $query = mysqli_query($con,$insertquery);
    
    if($query){
       echo "Thank You For Subscribing  we will contact you soon!!!";
    }
    else{
       echo "Not Inserted";
    }

}

?>