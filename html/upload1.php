
<?php

include 'dbcon.php';


$remark = $_POST['remark'];
$name = $_POST['name'];
$pic = $_FILES['photo'];
$mobile = $_POST['mobile'];

$filename =$pic['name'];
  $filepath = $pic['tmp_name'];
  $fileerror =$pic['error'];
  if($fileerror==0){
     $destfile = '../img/priscription/'.$filename;
     //echo "$destfile";
     move_uploaded_file($filepath,$destfile);

     $insertquery = "insert into general_customer_health(list,remark,name,mobile) values ('$destfile','$remark','$name','$mobile')";

     $query = mysqli_query($con,$insertquery);

     if($query){
        echo "Thank You For Uploading your Prescription we will soon contact you!!!";
     }
     else{
        echo "Not Inserted2";
     }
   }
//echo "$name";
/* session_start();


if(isset($_POST["submit"])){

   
   $pic=$_SESSION['pic'];
   $name=$_POST['fullname'];
   $mobile=$_POST['mobile'];
   $numb=$_POST['number'];
   */
  // print_r($pic);
 /* $filename =$pic['name'];
  $filepath = $pic['tmp_name'];
  $fileerror =$pic['error'];
  if($fileerror==0){
     $destfile = '../img/priscription/'.$filename;
     //echo "$destfile";
     move_uploaded_file($filepath,$destfile);

     $insertquery = "insert into general_customer_med(medList,name,mobile,days) values ('$destfile','$name','$mobile','$numb')";

     $query = mysqli_query($con,$insertquery);

     if($query){
        echo "Thank You For Uploading your Prescription we will soon contact you!!!";
     }
     else{
        echo "Not Inserted";
     }*/
/*  }
}
else{
   echo "No buttun has been clicked";
} */


/*
if(!empty($name)){

}else{
    echo "Name field is empty";
}
if(!empty($remark) && !empty($pic)){ //if remark and pic fiels is not empty

    $receiver = "divyabharti1464@gmail.com";  //receiver email address
    $subject = "From $name < >";  //subject of the email. Subjectb looks like From: Divya <>
    //Concating all user values inside bosy variable
    $body = "Name : $name\n Remark : $remark\n List : $pic";
    $sender = "divyabharti30092000@gmail.com"; // serder email

    if(mail($receiver, $subject, $body, $sender)){  //mail() is a inbuild php function to send mail
        echo "Your message is sent!";
    }else{
        echo "Sorry, Failed to send your message!";
    }


}else{
    echo "pic and remark field is required!";
} */
?>