<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical|home</title>
    <!-- pure css -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

    <!-- navbar -->
    <?php
            include 'navbar1.php';
    ?>
    <!-- navbar -->
    <div class="payhead">
        <div class="container">
            <h1 class="heading-info">Please fillup the details of the shop</h1>
        </div>

    </div>
    <form acion="" class="order1">
    <div class="info-mainform">
        <div class="container">
            <div class="">
                <h4 class="mb-5 "> <span class="fent-text">Total Amount :</span> Rs.800</h4>
                <div class="detail-form">
                    
                    <div class="input-form">
                        <div>
                            <label for="">Buyer Name</label>
                        </div>
                        <div>
                            <input type="text" name = "buyername" required>
                        </div>
                    </div>
                    <div class="input-form ml-3">
                        <div>
                            <label for="">Shop Name</label>
                        </div>
                        <div>
                            <input type="text" name = "shopname" required>
                        </div>
                    </div>
                    </div>
                    <div class="detail-form mt-3">
                        <div class="input-form">
                        <div>
                            <label for="">Mobile No.</label>
                        </div>
                        <div>
                            <input type="number" name = "mobile" required>
                        </div>
                    </div>
                    <div class="input-form ml-3">
                        <div>
                            <label for="">Email Id</label>
                        </div>
                        <div>
                            <input type="email" name = "email" required>
                        </div>
                    </div>
                    </div>
                    <div class="detail-form mt-3">
                        <div class="input-form">
                        <div>
                            <label for="">Address</label>
                        </div>
                        <div>
                            <input type="text" name = "address" required height="100px" width=100px>
                        </div>
                    </div>
                    <div class="input-form ml-3">
                        <div>
                            <label for="">State</label>
                        </div>
                        <div>
                            <input type="text" name = "state" required>
                        </div>
                    </div>
                </div>
                <div class="detail-form mt-3">
                    <div class="input-form">
                        <div>
                            <label for="">Pin Code</label>
                        </div>
                        <div>
                            <input type="number" name = "pincode" required>
                        </div>
                    </div>
                    <div class="input-form ml-3">
                        <div>
                            <label for="">GSTIN</label>
                        </div>
                        <div>
                            <input type="number" name = "gst" required>
                        </div>
                    </div>
                </div class="button_area4">
                <a href="paymentdetail.php" ><button type="submit" value="Submit" name="submit4" class="next-btn text-center" onclick ="orderdetails()"> Submit</button></a> 
                <span style="display:none" id="statu4">   Sending your Details... </span>
                
                <!--<a href="paymentdetail.php" class="next-btn text-center">Next</a> --> 
            </div>
        </div>
    </div>
</form> 
    <!-- Footer -->
    <?php
            include 'footer.php';
    ?>

    <script src="script.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/myjs.js"></script>
           
</body>
</html>