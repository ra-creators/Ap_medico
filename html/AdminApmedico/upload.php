<?php

include '../dbcon.php';

$pic = $_FILES['pic'];

$fileerror = $pic['error'];
$filename = $pic['name'];
$filepath = $pic['tmp_name'];

if($fileerror == 4){
    echo "<script> alert('Image Does Not Exist'); </script>";
}
else{
    $filename = $_FILES['img']['name'];
    $filepath = $_FILES['img']['tmp_name'];
    $filesize = $_FILES['img']['size'];
    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $filename);
    $imageExtension = strtolower(end($imageExtension));
    if(!in_array($imageExtension, $validImageExtension)){
        echo "<script> alert('Invalid Image Extension'); </script>";
    }
    elseif($filesize > 1000000){
        echo "<script> alert('Image Size is too Large'); </script>";
    }else {
        $newImageName = uniqid();
        $newImageName .= '.' . $imageExtension;

        move_uploaded_file($filepath, 'img/sliders/'. $newImageName);

        $insertquery = "insert into slider(img) values ('$newImageName')";

        $query = mysqli_query($con,$insertquery);

        if($query){
            echo "Thanks for Uploading slider";
        // echo '<scrpit type="text/javascript"> alert("ImageUploaded") </script>';
        }else{
            echo "Not inserted";
            //echo '<scrpit type="text/javascript"> alert("ImageNot Uploaded") </script>';
        }
    }
}
?>