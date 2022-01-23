
<?php

include 'dbcon.php';
/* error_reporting(E_ALL);
if(isset($_FILES) && (bool)$_FILES){
   $allowedExtensions = array("jpg","png");
   foreach($_FILES as $name => $file){
      $filename = $file['name'];
      $tempname = $file['tmpname'];
      $filetype = $file['type'];
      $pathparts = pathinfo($filename);
      $ext = $pathparts['extension'];
      if(!in_array($ext, $allowedExtensions)){
         die("File $filename has the extensions $ext which is not allowed");
      }
   }
   $headers = "From : $from";

   $semi_rand = md5(time());
   $mime_boundary = "==Multipart_Boundary_x($semi_rand)x";

   $headers .= "\nMIME-Version: 1.0\n"."Content-Type: multipart/mixed/\n"."boundary=\"{$mime_boundary}\"";
   $message="This is a multipart message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";
   $message .="--{$mime_boundary}\n";
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "./vendor/autoload.php";

$mail = new PHPMailer(true);
*/

$remark = $_POST['remark'];
$name = $_POST['name'];
$pic = $_FILES['photo'];
$filenameee = $_FILES['photo']['name'];
//$fileName = $_FILES['photo']['tmp_name'];
$mobile = $_POST['mobile'];
$numb = $_POST['number'];


$fileerror =$pic['error'];
$filename =$pic['name'];
$filepath = $pic['tmp_name'];

if($fileerror==0){
   
     $destfile = '../img/priscription/'.$filename;
     //echo "$destfile";
     move_uploaded_file($filepath,$destfile);

     $insertquery = "insert into general_customer_med(medList,remark,name,mobile,days) values ('$destfile','$remark','$name','$mobile','$numb')";

     $query = mysqli_query($con,$insertquery);

     if($query){
        echo "Thank You For Uploading your Prescription we will contact you soon!!!";
     }
     else{
        echo "Not Inserted";
     }
   
   
   $message ="Name : ". $name . "\r\n Phone number: ". $mobile . "\r\n Remark: " . $remark;

   $to_email = 'kanchanbalamehta1464@gmail.com';
   $subject = "Name : $name ,Mobile number: $mobile, Remark: $remark, Medicines for :$numb";
    //$body = "$name, $remark,'<br>'.$destfile".'<img src="cid:pic">';
   $fromname="Apmedico Medicine Order";
   $from = 'divyabharti30092000@gmail.com';
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
    $body .= "$message" . $eol;

    // attachment
    $body .= "--" . $separator . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"" . $filenameee . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment" . $eol;
    $body .= $content . $eol;
    $body .= "--" . $separator . "--";
    //$body = "Name: $name \r\n Mobile number : $mobile \r\n Remark: $remark \r\n Medicines for Number of Day's: $numb";

   $result = mail($to_email, $subject, $body, $headers);
   if($result == true) {
      //echo "Email successfull sent to $to_email...";
   }else{
      echo "Email sending failed...";
   }
}
