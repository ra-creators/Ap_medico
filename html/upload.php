
<?php

include 'dbcon.php';


$remark = $_POST['remark'];
$name = $_POST['name'];
$pic = $_FILES['photo'];
$mobile = $_POST['mobile'];
$numb = $_POST['number'];

$filename =$pic['name'];
  $filepath = $pic['tmp_name'];
  $fileerror =$pic['error'];
  if($fileerror==0){
     $destfile = '../img/priscription/'.$filename;
     //echo "$destfile";
     move_uploaded_file($filepath,$destfile);

     $insertquery = "insert into general_customer_med(medList,remark,name,mobile,days) values ('$destfile','$remark','$name','$mobile','$numb')";

     $query = mysqli_query($con,$insertquery);

     if($query){
        echo "Thank You For Uploading your Prescription we will soon contact you!!!";
     }
     else{
        echo "Not Inserted1";
     }
   }
   ?>