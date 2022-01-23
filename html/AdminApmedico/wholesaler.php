<?php
    include 'dbcon.php';

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "select * from newwho where name = '".$username."' AND password = '".$password."'";

        $result = mysqli_query($con,$query);

        $row = mysqli_fetch_array($result);

        if($row){
            echo "wholesaler";
        }
        else{
            echo "username or password incorrect";
        }
    }

?>