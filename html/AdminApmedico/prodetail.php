<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Leoshine | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/style.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/logo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
    <?php
        include 'navbar.php';
    ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
        include 'mainslider.php';
    ?>


  <div class="main">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- /.content-header -->
      <div class="tablebg  m-4">
        <h3 class="text-center alert alert-info">Product Detail</h3>
          <table class="table table-borderless p-2">
              <thead>
                  <tr>
                  <th scope="col">Sr.No.</th>
                  <th scope="col">Name</th>
                  <th scope="col">Skuid</th>
                  <th scope="col">Price</th>
                  <th scope="col">Stock</th>
                  
                  
                  <th scope="col">Image</th>
                  <th scope="col">Edit</th>
                  </tr>
              </thead>
              <tbody>

              <?php

                include '../dbcon.php';
                error_reporting(0);
                $query = "select * from product";

                $data = mysqli_query($con,$query);
                $total = mysqli_num_rows($data);

                if($total!=0){

                     while($result = mysqli_fetch_assoc($data)){
                       $stocktype = explode(",",result['stock']);
                        ?>

                  <tr>
                  <th scope="row"><?php echo $result['id'];?></th>
                  <td><?php echo $result['name'];?></td>
                  <td><?php echo $result['skuid'];?></td>
                  <td><?php echo $result['price'];?></td>
                  <td><?php echo $result['stock'];?></td>
                 
                  
                  <td><img src="img/products/<?php echo $result['img'];?>" alt="User Avatar" class="img-size-50 img-circle"></td>
                  <td><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                  </tr>  <?php
                    }
                }else{
                            echo "No record found";
                        }
                    ?>
                 
                 
                 <!--
                 <tr>
                  <th scope="row">2</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td><img src="dist/img/avatar2.png" alt="User Avatar" class="img-size-50 img-circle"></td>
                  <td><a href="#"><i class="fas fa-pencil-alt    "></i></a></td>
                  </tr>
                  <tr>
                  <th scope="row">3</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td><img src="dist/img/prod1.jpg" alt="User Avatar" class="img-size-50 img-circle"></td>
                  <td><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                  </tr> -->
              </tbody>
          </table>
      </div>


      <!-- <div class="slider">
        <div class="container">
          <h1>Slider Image Upload</h1>
          <button class="upload1"><i class="fa fa-upload" aria-hidden="true"></i></button>     
        </div>
      </div> -->
    </div>
  </div>
  <!-- <div class="popupform">
    <div class="container">
      <input type="file" name="" id="">
      <a href="#" class="btn btn-info ">Submit</a>
      
    </div>
    <button class="cls"><i class="fa fa-window-close" aria-hidden="true"></i></button>
  </div> -->
  
  <!-- /.content-wrapper -->

  <!-- Footer Container -->
  <?php
        include 'footer.php';
    ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- <script>
  $(document).ready(function(){
    $(".popupform").hide();
    $('.upload1').click(function(){
      $(".popupform").show();
      $(".main").css('opacity','0.1');

    });
    $(".cls").click(function(){
      $(".popupform").hide();
      $(".main").css('opacity','1');
    });
    

  });
</script> -->
</body>
</html>
