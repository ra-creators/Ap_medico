<?php

session_start();
session_destroy();
//echo "destroyed session";
header("location:indexnew.php");
?>