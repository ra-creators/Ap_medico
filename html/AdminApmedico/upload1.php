<?php 

include '../dbcon.php';

$pic = $_FILES['img'];
$name = $_POST['proname'];
$skuid = $_POST['skuid'];
$stock = $_POST['stock'];
$price = $_POST['price'];

$fileerror = $pic['error'];

if($fileerror === 4){
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

        move_uploaded_file($filepath, 'img/whoproducts/'. $newImageName);

       
        $insertquery = "insert into whoproducts(skuid,name,img,stock,price) values ('$skuid','$name','$newImageName','$stock','$price')";

        $query = mysqli_query($con,$insertquery);

        if($query){
            echo "Product added successfully";

        }else{
            echo "Product not added";
        }
    }
}


?>