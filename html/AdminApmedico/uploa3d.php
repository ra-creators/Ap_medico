<?php

include '../dbcon.php';

$proname = $_POST["proname"];
$pic = $_FILES['img'];
$skuid = $_POST['skuid'];
$price = $_POST['price'];
$stock = $_POST['stock'];
//$stock2 = $_POST['stock2'];

$check = implode(",",$stock);
//$check2 = implode($stock2);
//echo $check;
//echo $check2;

$fileerror = $pic['error'];


//print_r($pic) ;
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

        move_uploaded_file($filepath, 'img/products/'. $newImageName);

        $insert = "insert into product(skuid,name,price,img,stock) values ('$skuid','$proname','$price','$newImageName','$check')";
        $query = mysqli_query($con,$insert);
        if($query){
            echo "added";
           // echo "<script>alert('Successfully Added');
            //</script>";
        }
        else {
            echo "not added";
        }
    }
}

/*if($fileerror == 0){
    $destfile = 'img/sliders/'.$filename;

    move_uploaded_file($filepath,$destfile);

    //$file = addslashes(file_get_contents($_FILES['pic']['tmp_name']));

    $insertquery = "insert into slider(img) values ('$destfile')";

    $query = mysqli_query($con,$insertquery);

    if($query){
        echo "Thanks for Uploading slider";
       // echo '<scrpit type="text/javascript"> alert("ImageUploaded") </script>';
    }else{
        echo "Not inserted";
        //echo '<scrpit type="text/javascript"> alert("ImageNot Uploaded") </script>';
    }
}*/
?>