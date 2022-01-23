
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
            include 'navbar.php';
    ?>
    <!-- navbar -->
    <!-- getintouch -->
    <div class="getintouch">
        <div class="container"> 
            <div class="get-text">
                <h1>Get in Touch</h1>
                <h5>We Provide the best healthcare products</h5>
            </div>      
        </div>
    </div>
    <!-- getintouch -->
    <!-- contact -->
    <div class="contactbg">
        <div class="container">
            <div class="contact-grid">
                <div class="contact">
                    <h1 class="headingcon">Contact Us</h1>
                    <div class="contact-us">
                        <div class="icon pb-3">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="icon-text">
                            <span>099191 66665</span> 
                        </div> 
                        <div class="icon pb-3">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="icon-text">
                            <span>Apmedico@gmail.com</span> 
                        </div> 
                        <div class="icon pb-3">
                            <i class="fa fa-map-marker" aria-hidden="true" ></i>
                        </div>
                        <div class="icon-text">
                            <span> K61/157, Bulanala Maidagin Road, Near Sri Agrasain PG College, Maidagin, Bulanala, Varanasi, Uttar Pradesh 221001</span>
                        </div> 
                    </div>
                    <h1 class="headingcon ">Find Us</h1>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d476486.57523020834!2d78.80539122426832!3d21.09057328273192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c0a5a31faf13%3A0x19b37d06d0bb3e2b!2z4KSo4KS-4KSX4KSq4KWC4KSwLCDgpK7gpLngpL7gpLDgpL7gpLfgpY3gpJ_gpY3gpLA!5e0!3m2!1smr!2sin!4v1639580272902!5m2!1smr!2sin" width="100%" height="150%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="message">
                    <h1 class="headingcon">Send Us A Message</h1>
                    <div class="form-message">
                        <form action="#" class="form4">
                            <label for="name">Name</label><br>
                            <input type="text" name="name" id="" class="cos-input" required><br><br>
                            <label for="mobile">Mobile Number</label><br>
                            <input type="text" name="mobile" id="" class="cos-input" required><br><br>
                            <label for="message">Message</label><br><br>
                            <textarea name="message" id="" cols="30" rows="5" class="cos-input" required></textarea><br><br>
                            <div class="button-area">
                            <button type="submit" value="Submit" name="submit1" id="submit1" class="sub-btn1"  onclick ="contactUs()"> Submit</button>
                            <span>   Sending your Details...</span>
                            <!-- <input type="submit" value="Submit" class="sub-btn1">-->
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        <img src="../img/phone.png" alt="" srcset="" width="20%" height="15%" class="phone">
    </div>
    <!-- contact -->
    <!-- footer -->
        <?php
                include 'footer.php';
        ?>
     <script src="script.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/myjs.js"></script>
           
</body>
</html>
    
