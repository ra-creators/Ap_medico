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
    <nav class="navbar navbar-expand-lg  navbar-dark ">
        <div class="container">
            <h2>Apmedico</h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse m10" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0  ">
              <li class="nav-item">
                <a class="nav-link active" aria-current="" href="indexnew.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="about.html">About</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link active" href="contact.html">Contact</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link active" href="wholesale.html">wholesale</a>
              </li>
            </ul>
            
          </div>
        </div>
    </nav>
    <!-- navbar -->
<div class="main">
    <div class="carouse">
        <div id="carouselExampleIndicators" class="carousel slide"         data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img src="../img/pharmacybanner.jpg" class="d-block w-100 h-50" alt="...">
                    <div class="showcase_text text-light">
                        <h2 >Protect Your Family <br>
                            from CoronaVirus </h2>
                        <h6 >Stay Healthy and Safe !</h6>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img src="../img/pharmacybanner.jpg" class="d-block w-100 h-50 " alt="..." >
                     <div class="showcase_text text-light">
                        <h2 class="text-light">Protect Your Family <br>
                            from CoronaVirus </h2>
                        <h6>Stay Healthy and Safe !</h6>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../img/pharmacybanner.jpg" class="d-block w-100 h-50" alt="...">
                     <div class="showcase_text text-light">
                        <h2 class="text-light">Protect Your Family <br>
                            from CoronaVirus </h2>
                        <h6>Stay Healthy and Safe !</h6>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- showcase -->
    <!-- showcase -->
    <!-- order -->
    <div class="order">
        <div class="container">
            <div class="order-grid">
                <div class="bg1">
                    <h3>Order Medicines</h3>
                    <h6>Prescription Required <span class="text-warnig">*</span></h6><br>
                    <a href="#" class="bg1-btn btnorder1">Order Now</a>
                </div>
                <div class="bg2">
                    <h3>Healthcare Products</h3>
                    <h6 class="text-warrning">Prescription Not Required </h6><br>
                    <a href="#" class="bg2-btn btncare">Order Now</a>  
                    <!-- <img src="../img/himalaya.png" alt="" width="50%" height="50%"> -->
                </div>
            </div>
        </div>
    </div>
    <!-- order -->
    <!-- popup form order-->
    <div class="wrapper">
    <div class="uploadform ">
        <button class="btnclose"><i class="fa fa-window-close" aria-hidden="true"></i></button>
        <h2>Upload your Prescription here</h2>
<form actrion ="#">
        <input type="file" accept="image/*" capture="camera" / class="text-center" name="photo">
        <div class="remark-grid">
            <div class="">
                <label for="name">Remark <span class="text-red">*</span></label><br>   
            </div>
            <div class="">
                <textarea name="remark" id="" cols="33" rows="5"></textarea> 
            </div>
        </div><br><br>
        <a href="#" class="bg2-btn nextbtn1">Next</a>
    </div>
    <div class="info-form">
        <button class="btnclose"><i class="fa fa-window-close" aria-hidden="true"></i></button>
        <div class="form-grid">
            <div class="">
                <label for="name">Full Name</label><br>   
            </div>
            <div class="">
                <input type="text" name="name"> <br>
            </div>
        </div>
        <div class="form-grid">
            <div class="">
                <label for="name">Mobile Number</label><br>   
            </div>
            <div class="">
                <input type="text" name="mobile"> <br>
            </div>
        </div>
        <div class="form-grid">
            <div class="">
                <label for="name">Medicine For Number of Day's</label><br>   
            </div>
            <div class="">
                <input type="number" name="number" id=""> <br>
            </div>
        </div><br>
        <div class="button-area">
        <button type="submit" value="Submit" name="submit" class="bg2-btn mt-3 submitbtn2"> Submit</button>
        <span>   Sending your Details...</span>
        </div>
        
    </div>
</form>
    </div>

    
    <!-- popupform -->
    <!-- popup form healtcare-->
    <div class="wrapper">
    <div class="care-order">
        <button class="btnclose"><i class="fa fa-window-close" aria-hidden="true"></i></button>
        <h2>Upload Your List</h2>
        <form action="#" name="form2">
        <input type="file" accept="image/*" capture="camera" / class="text-center img-upload" name="photo">
        <div class="remark-grid">
            <div class="">
                <label for="name">Remark <span class="text-red">*</span></label><br>   
            </div>
            <div class="">
                <textarea name="remark" id="" cols="33" rows="5"></textarea>
            </div>
        </div><br>
        <a href="#" class="bg2-btn nextbtn-care">Next</a>
    </div>
    <div class="care-info">
        <button class="btnclose"><i class="fa fa-window-close" aria-hidden="true"></i></button>
        <div class="form-grid">
            <div class="">
                <label for="name">Full Name</label><br>   
            </div>
            <div class="">
                <input type="text" name="name"> <br>
            </div>
        </div>
        <div class="form-grid">
            <div class="">
                <label for="name">Mobile Number</label><br>   
            </div>
            <div class="">
                <input type="text" name="mobile"> <br>
            </div>
        </div><br><br>
        <div class="button-area">
        <button type="submit" value="Submit" name="submit" class="bg2-btn mt-3 submitbtn1"> Submit</button>
        <span>   Sending your Details...</span>
        </div>
        
    </div>
    </form>
    </div>
    <!-- popupform -->

    <!-- save -->
    <div class="save">
        <div class="container">
            <div class="save-grid">
                <div class="">
                    <h1 class="text-light">Apmedico</h1>
                </div>
                <div class="text-center">
                    <span>Save 15 % extra on medicines & enjoy FREE <br> DELIVERY with Plus membership</span>
                </div>
                <div class="">
                    <img src="../img/deliveryman.png" alt="" width="100%" height="100%">
                </div>
            </div>   
        </div>
    </div>
    <!-- save -->

    <!-- associated company -->
    <div class="associated">
        <div class="container">
            <h1 class="text-center">Associated Company </h1>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="associated-grid">
                        <div class="">
                            <div class="bg3">
                                <img src="../img/download1.png" alt="" width="150px" height="150px">
                            </div>
                        </div>
                        <div class=" ">
                            <div class="bg4">
                                <img src="../img/download2.png" alt="" width="150px" height="150px">
                            </div>
                        </div>
                        <div class=" ">
                            <div class="bg5">
                                <img src="../img/download3.png" alt="" width="150px" height="150px">
                            </div>
                            
                        </div>
                        <div class=" ">
                            <div class="bg3">
                                <img src="../img/allergy.png" alt="" width="150px" height="150px">
                            </div>
                           
                        </div>
                        <div class=" ">
                            <div class="bg4">
                                <img src="../img/healthcare.png" alt="" width="150px" height="150px">
                            </div>
                            
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="associated-grid">
                        <div class="">
                            <div class="bg3">
                                <img src="../img/medi.png" alt="" width="150px" height="150px">
                            </div>
                        </div>
                        <div class=" ">
                            <div class="bg4">
                                <img src="../img/skincare.png" alt="" width="150px" height="150px">
                            </div>
                        </div>
                        <div class=" ">
                            <div class="bg5">
                                <img src="../img/protection.png" alt="" width="150px" height="150px">
                            </div>
                            
                        </div>
                        <div class=" ">
                            <div class="bg3">
                                <img src="../img/allergy.png" alt="" width="150px" height="150px">
                            </div>
                           
                        </div>
                        <div class=" ">
                            <div class="bg4">
                                <img src="../img/healthcare.png" alt="" width="150px" height="150px">
                            </div>
                            
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="associated-grid">
                        <div class="">
                            <div class="bg3">
                                <img src="../img/medi.png" alt="" width="150px" height="150px">
                            </div>
                        </div>
                        <div class=" ">
                            <div class="bg4">
                                <img src="../img/skincare.png" alt="" width="150px" height="150px">
                            </div>
                        </div>
                        <div class=" ">
                            <div class="bg5">
                                <img src="../img/protection.png" alt="" width="150px" height="150px">
                            </div>
                            
                        </div>
                        <div class=" ">
                            <div class="bg3">
                                <img src="../img/allergy.png" alt="" width="150px" height="150px">
                            </div>
                           
                        </div>
                        <div class=" ">
                            <div class="bg4">
                                <img src="../img/healthcare.png" alt="" width="150px" height="150px">
                            </div>
                            
                        </div>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>
    <!-- associated company -->
    <!-- new arrival -->
    <div class="newarrival">
        <div class="row wavebg">
            
            <div class="col-12"><h1 class="text-center">New Arrivals</h1></div>
           
        </div>
        <div class="container">
            <div class="today-product mt-5 mb-5">
                <div class="today-grid">
                    <div class="card">
                        <img src="../img/vitaminC.png" alt="" height="180px" width="100%">
                        <h4>Vitamin C Candy</h4>
                        <h4 class="text-green">form <span>RS 700</span></h4>
                    </div>
                    <div class="card">
                        <img src="../img/hand_sanitizer.png" alt="" height="180px" width="100%">
                        <h4>Vitamin C Candy</h4>
                        <h4 class="text-green">form <span>RS 700</span></h4>
                    </div>

                    <div class="card">
                        <img src="../img/dettol200ml.jpg" alt="" height="180px" width="100%">
                        <h4>Vitamin C Candy</h4>
                        <h4 class="text-green">form <span>RS 700</span></h4>
                        
                    </div>
                    <div class="card">
                        <img src="../img/vitaminC.png" alt="" height="180px" width="100%">
                        <h4>Vitamin C Candy</h4>
                        <h4 class="text-green">form <span>RS 700</span></h4>
                    </div>
                    <div class="card">
                        <img src="../img/hand_sanitizer.png" alt="" height="180px" width="100%">
                        <h4>Vitamin C Candy</h4>
                        <h4 class="text-green">form <span>RS 700</span></h4>
                        
                    </div>
                    <div class="card">
                        <img src="../img/dettol200ml.jpg" alt="" height="180px" width="100%">
                        <h4>Vitamin C Candy</h4>
                        <h4 class="text-green">form <span>RS 700</span></h4>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- new arrival -->
    <!-- Shortage of Medicine -->
    <div class="newarrivalsec">
        <div class="row wavebg2">
            <div class="col-12"><h1 class="text-center">Short Stocked Medicines</h1></div>
            
        </div>
        <div class="container">
            <div class="today-product mt-5 mb-5">
                <div class="today-grid">
                    <div class="card">
                        <img src="../img/vitaminD3.jpg" alt="" height="180px" width="100%">
                        <h4>Vitamin D3 25ug 250 Tablets</h4>
                        <h4 class="text-green"><span>RS 700</span></h4>
                        
                    </div>
                    <div class="card">
                        <img src="../img/vitaminCTeb.png" alt="" height="180px" width="100%">
                        <h4>Vitamin C Chewing Tablets 500mg</h4>
                        <h4 class="text-green"><span>RS 700</span></h4>
                        
                      
                    </div>

                    <div class="card">
                        <img src="../img/paracetomal.png" alt="" height="180px" width="100%">
                        <h4>Paracetamol Tablets IP Dolo-650</h4>
                        <h4 class="text-green"><span>RS 700</span></h4>
                    </div>
                    <div class="card">
                        <img src="../img/vitaminD3.jpg" alt="" height="180px" width="100%">
                        <h4>Vitamin C Candy</h4>
                        <h4 class="text-green"><span>RS 700</span></h4>
                        
                    </div>
                    <div class="card">
                        <img src="../img/vitaminCTeb.png" alt="" height="180px" width="100%">
                        <h4>Vitamin C Candy</h4>
                        <h4 class="text-green"><span>RS 700</span></h4>
                          
                    </div>
                    <div class="card">
                        <img src="../img/paracetomal.png" alt="" height="180px" width="100%">
                        <h4>Vitamin C Candy</h4>
                        <h4 class="text-green"><span>RS 700</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shortage of Medicine -->
    <!-- medico -->
    <div class="medico">
        <div class="container medicobg">
            <div class="medico-grid">
                <div class="3">
                    <span class="count">1000</span><span class="count-text">+</span><br>
                    <span>Apmedico Client</span>

                </div>
                <div class="">
                    <span class="count">1000</span><span class="count-text">+</span><br>
                    <span>Apmedico Orders</span>
                </div>
                <div class="">
                    <span class="count">1000</span><span class="count-text">+</span><br>
                    <span>Apmedico Sold Order </span>
                </div>
            </div>
        </div>
    </div>
    <!-- medico -->
    <!-- testimonial -->
    <div class="row wavebg3">
        <h1 class="text-center">Testimonial</h1>
    </div>
    <div class="testimonial">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active  bg6">
                        <div class="text-test">
                            <h4 class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis egestas luctus morbi convallis non tincidunt. Integer tempor, enim diam pharetra nunc ornare et feugiat. Proin vestibulum ullamcorper.</h4>
                            <h6 class="text-center text-success">Stay Healthy and Safe !</h6>
                        </div>
                    </div>
                    <div class="carousel-item active bg6">
                         <div class="text-test">
                            <h4 class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis egestas luctus morbi convallis non tincidunt. Integer tempor, enim diam pharetra nunc ornare et feugiat. Proin vestibulum ullamcorper.</h4>
                            <h6 class="text-center text-success">Stay Healthy and Safe !</h6>
                        </div>
                    </div>
                    <div class="carousel-item bg6">
                         <div class="text-test">
                            <h2 class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis egestas luctus morbi convallis non tincidunt. Integer tempor, enim diam pharetra nunc ornare et feugiat. Proin vestibulum ullamcorper.</h2>
                            <h6 class="text-center text-success">In quam ut molestie quis platea.</h6>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div> 


    <!-- testimonial -->
    <!-- popupfor for order -->
    <div class="userpopup">
        <div class="general">
            <button class="pop-btn gencus-btn">General Customer</button>
        </div>
        <div class="wholser">
            <button class="pop-btn who-btn">Retailer/Wholesaler</button>
        </div> 
    </div>
    <div class="form">
        <div class="form-flex">
            <div class="form-in">
                <form action="">
                    <h1 class="user-icon"><i class="fa fa-user text-center" aria-hidden="true"></i></h1>
                    <label for="username">Username</label> 
                    <input type="text" name="" id="" placeholder="Username"> <br><br>
                    <label for="password">Password</label>
                    <input type="password" name="" id="" placeholder="Password"><br><br>
                    <h5 class="text-center">If You Don't Have A Credentials Kindly Call 4152637895 </h5><br>
                    <input type="submit" value="Login" class="btn " id ="loginbtn">
                </form>         
            </div>
            <div class="form-img">
                <img src="../img/doctor.jpg" alt="doctor_image" width="" height="">
    
            </div>
        </div>
    </div>

    
    

    <!-- Footer -->
    <div class="footer">
        <div class="footer-grid">
            <div class="footer-heading">
                <div class="leoshine">
                    <span class="brand-text">Apmedico</span>
                    <p class="footer-para">Scelerisque sit et bibendum molestie duis in velit dis. Ac viverra nunc nulla sed dui. Et faucibus lobortis ultrices fermentum luctus feugiat semper. </p>
                </div>
            </div>
            <div class="footer-about">
                <ul>
                    <li>About Us</li>
                    <li>Shop</li>
                    <li>Term</li>
                    <li>Services</li>
                    <li>Contact Us</li>
                </ul>
            </div>
            <div class="footer-contact">
                <span>Contact Us</span>
                <div class="contact-felx">
                    <div class="icon">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="">
                        <span>apmedico@gmail.com</span>
                    </div>
                </div>
                <div class="contact-felx">
                    <div class="icon">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="">
                        <span>9876543210</span>
                    </div>
                </div>
                <div class="contact-felx">
                    <div class="icon">
                        <i class="fa fa-map-marker-alt" aria-hidden="true"></i>
                    </div>
                    <div class="">
                        <span>2118 Thornridge cir.syracuse, connecticut 35624</span>
                    </div>
                </div>
            </div>
            <div class="singup">
                <span> Sing up for Update</span>
                <input type="text" name="" id="" placeholder="Email"><br>
                <input type="submit" value="Submit" class="btn btn-dark">
            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/myjs.js"></script>
           
</body>
</html>