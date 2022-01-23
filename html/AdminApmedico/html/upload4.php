<?php
include 'dbcon.php';

$name = $_POST['buyername'];
$shop = $_POST['shopname'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$address =$_POST['address'];
$state =$_POST['state'];
$pincode =$_POST['pincode'];
$gst =$_POST['gst'];

/*echo $name;
echo $shop;
echo $mobile;
echo $email;
echo $address;
echo $state;
echo $pincode;
echo $gst;
*/
$insertquery = "insert into placed_order_detail(buyername,shopname,mobile,email,addres,state,pincode,gst) values ('$name','$shop','$mobile','$email','$address','$state','$pincode','$gst')";

$query = mysqli_query($con,$insertquery);


if($query){
    echo "Thank You For Placing Your order!!!";
    //header('location:paymentdetail.php');
}else{
    echo "Not Inserted4";
}


?>