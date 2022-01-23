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
            <h1 class="heading-info">Payment Details</h1>
        </div>

    </div>
    <div class="payment-page">
        <div class="container">
            <div class="payment-container">
                <h4 class="fent-text">QR Code</h4>
                <div class="getway">
                    <div class="">
                        <img src="../img/barcode.png" alt="barcode" width="40%" height="40%" class="barcode">
                    </div>
                    <div>
                        <ul class="payicon">
                            <li><img src="../img/googlepay.png" alt="" srcset=""></li>
                            <li><img src="../img/PhonePe.png" alt="" srcset=""></li>
                            <li><img src="../img/applepay.png" alt="" srcset=""></li>
                        </ul>
                    </div> 
                </div>
                <h4 class="fent-text">Bank Details</h4>
                <div class="whitebg">
                    <div class="row">
                        <div class="col-3">
                           <h5 class="fent-text">Bank Account Details</h5><br>
                           <h5 class="fent-text">Bank Branch</h5><br>
                            <h5 class="fent-text">IFSC</h5><br>
                            
                        </div>
                        <div class="col-3">
                            <h5>19203903038130</h5><br>
                            <h5>varanasi</h5><br> 
                            <h5>02SF32</h5><br>
                        </div>
                        <div class="col-3">
                            <h5 class="fent-text">Bank Address</h5><br>
                            <h5 class="fent-text">Recipient Name</h5><br>

                        </div>
                        <div class="col-3">
                            <h5>varanasi </h5><br>
                            <h5>Apmedico</h5><br>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-5">
                        <h4>Upload the payment Details</h4> 
                    </div>
                    <div class="col-7">
                        <a href="#" class="uploadimg" > <i class="fas fa-upload"></i> Upload Image</a>
    
                    </div>
                </div>   
            </div>
            <a href="#" class="next-btn text-center" id="showbtn">Place Order</a>   
        </div> 
    </div>
    <!-- Footer -->
    <?php
            include 'footer.php';
    ?>
    <div class="popupimage1">
        <form action="">
            <button class="btnclose1"><i class="fa fa-window-close" aria-hidden="true"></i></button>
            <input type="file" name="" id="">
        </form>    
    </div>
    <div class="popupimage">
            <img src="../img/popupimag.jpg" alt="" class="scr">
            <div class="thankyou">
                <h1 class="">Thank You !</h1>
                <h4><span>Your order has been placed successfully.</span></h4>
                <button class="closewin btn btn-light"id="closebtn">close</button>
            </div>
           
         
    </div>
       
      
    <script src="../js/jquery.js"></script>
    <script src="../js/myjs.js"></script>
    <script>
        $(document).ready(function(){
      
          $('.popupimage').hide();
          $('.popupimage1').hide();
      
          $('#showbtn').click(function(){
            $('.popupimage').show();
            $('.main').css("opacity","0.2")
          });
          $('#closebtn').click(function(){
            $('.popupimage').hide();
            $('.main').css("opacity","1")
          });
          $('.uploadimg').click(function(){
            $('.popupimage1').show();
          });
          $(".btnclose1").click(function(){
            $('.popupimage1').hide();
              
          })
        });
    </script>
           
</body>
</html>