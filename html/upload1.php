
<?php

include 'dbcon.php';


$remark = $_POST['remark'];
$name = $_POST['name'];
$pic = $_FILES['photo'];
$mobile = $_POST['mobile'];
$filenameee = $_FILES['photo']['name'];


$filename =$pic['name'];
$filepath = $pic['tmp_name'];
$fileerror =$pic['error'];

if($fileerror==0){
     $destfile = '../img/health/'.$filename;
     //echo "$destfile";
     move_uploaded_file($filepath,$destfile);

     $insertquery = "insert into general_customer_health(list,remark,name,mobile) values ('$destfile','$remark','$name','$mobile')";

     $query = mysqli_query($con,$insertquery);

     if($query){
        echo "Thank You For Uploading your Health Care list we will soon contact you!!!";
     }
     else{
        echo "Not Inserted2";
     }
   }

   $message ="Name : ". $name . "\r\n Phone number: ". $mobile . "\r\n Remark: " . $remark;

   $to_email = "kanchanbalamehtaa1464@gmail.com";
   $subject = "Name : $name ,Mobile number: $mobile, Remark: $remark";
   //$body = "$name, $remark, $destfile , $mobile";
   $fromname="Apmedico Health care Products order";
   $from = "divyabharti30092000@gmail.com";
   # $mail->addEmbeddedImage('$distfile','pic');

   $content = file_get_contents($destfile);
    $content = chunk_split (base64_encode($content));
    // a random hash will be necessary to send mixed content
    $separator = md5(time());
    // carriage return type (RFC)
    $eol = "\r\n";

    // main header (multipart mandatory)
    $headers = "From: ".$fromname. $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "This is a MIME encoded message." . $eol;
    // message
    $body = "--" . $separator . $eol;
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
    $body .= $message . $eol;

    // attachment
    $body .= "--" . $separator . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"" . $filenameee . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment" . $eol;
    $body .= $content . $eol;
    $body .= "--" . $separator . "--";

   $result = mail($to_email, $subject, $body, $from);
   if($result ==true) {
      //echo "Email successfull sent to $to_email...";
   }else{
      echo "Email sending failed...";
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