<?php
    include "../dbcon.php";

    $id = $_GET['id'];
    $query = "DELETE FROM `contact_us` WHERE id = $id";

    mysqli_query($con,$query);
    header('location:contactlist.php');
?>
