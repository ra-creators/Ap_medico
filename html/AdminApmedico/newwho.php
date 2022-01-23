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
      <div class="">
        <div class="form-group mx-5  ">
          <form action="" class="tablebg" onsubmit="return checkText()">
            <h5 class="alert alert-info text-center ">New Wholesale Update</h5>
            <div class="row ">
              <div class="col-md-5 mx-4">
                <label for="Name" class="form-label">User Name</label>
                <input type="text" class="form-control" placeholder="Enter Your User Name" name="username" required><br>
                <label for="skuid">Password</label>
                <input type="password" name="password" id="" class="form-control" placeholder="Enter Your Password" required>
              </div>
              <div class="col-md-5 mx-4">
                <label for="">Shop Name</label>
                <input type="text" name="shop" id="" class="form-control" placeholder="Enter Your Shop Name" required><br>
                  </div>
            </div>
            <div class="button-area">
              <button type="submit" value="Submit" name="submit1" id="submit1" class="btn btn-primary m-5" onclick ="newWho()"> Submit</button>
              <span style="display:none;">   Sending your Details...</span>
              </div>
            <!--<input type="submit" value="Submit" class="btn btn-primary m-5"> -->
          </form> 
        </div>
      </div>
      <!-- <div class="slider">
        <div class="container">
          <h1>Slider Image Upload</h1>
          <button class="upload1"><i class="fa fa-upload" aria-hidden="true"></i></button>     
        </div>
      </div> -->
    </div>
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
  <!--Footer Container -->
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

<script src="dist/js/script.js"></script>
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
