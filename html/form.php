

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <div class="uploadform ">
        <button class="btnclose"><i class="fa fa-window-close" aria-hidden="true"></i></button>
     
      <h2>Upload your Prescription here</h2>  <br>
      <input type="file" class="text-center" name="photo" required/><br>
      <label name="remark-grid" for="name">Remark <span class="text-red">*</span></label><br>
      <textarea name="remark" cols="33" rows="5" required></textarea>
      <br><br>
      <input type="submit" value="Next" name="next"  class="bg2-btn nextbtn1"> 
      <!-- <a href="upload.php?$pic&$remark" class="bg2-btn nextbtn1" name='submit'>Next</a> -->
       <?php
        if(isset($_POST['next'])){
            $pic=$_FILES['photo'];
            $remark=$_POST['remark'];
            session_start();
            $_SESSION['pic']=$pic;
            $_SESSION['remark']=$remark;
        }
        ?>
      </div>

     <!-- <div class="info-form">
      <label>Full Name </label>
      <input type="text" name="fullname" placeholder="Enter your Full Name" required/>
      <label>Mobile Number </label>
      <input type="text" name="mobile" required>
      <label>Medicine For Number of Day's </label>
      <input type="number" name="number" required>
      <input type="submit" value="Submit" name="submit" class="bg2-btn nextbtn1">





        const myform =document.getElementById("myform");

myform.addEventListener("submit", (e) => {
    e.preventDefault();

    const request = new XMLHttpRequest();

    request.open("post","upload1.php");
    request.onload = function (){
        console.log(request.responseText);

    }
    request.send(new FormData(myform));
});



      </div> -->
    
    </form>
</body>
</html>