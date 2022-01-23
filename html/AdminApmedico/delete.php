<?php
    include "../dbcon.php";

    $id = $_GET['id'];
    $query = "delete from 'contact_us' where id =$id";

    mysqli_query($con,$query);
    header('location:contactlist.php');
?>
