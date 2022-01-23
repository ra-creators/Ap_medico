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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="good-wise">
      <h1 class="" id="greeting"></h1>
      <h1  id="time"> </h1>
    </div>
    <!-- /.content-header -->  
  </div>
  
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
  <div class="popupform">
    <form action="">
      <input type="file" name="" id="">
      <input type="submit" value="Submit" class="btn btn-info ">
    </form>
    </div>
    <button class="cls"><i class="fa fa-window-close" aria-hidden="true"></i></button>
  </div>
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
<script>
  $(document).ready(function(){
    $(".popupform").hide();

    clock();

    $('.upload1').click(function(){
      $(".popupform").show();
    

    });
    $(".cls").click(function(){
      $(".popupform").hide();
    });
    $("form").submit(function(e){
      $(".popupform").hide();
      e.preventDefault()
    });

  }); 

  function clock(){
    var tm=new Date();
    var h=tm.getHours();
    var m=tm.getMinutes();
    var s=tm.getSeconds();
    var session="AM";
    var greeting="Good Morning";

    console.log(h)
    console.log(m)
    console.log(s)

    if(h>5){
      greeting="Good Morning";
      var imgmor="sunrise.jpg"
      $(".bg").css("background-image","url("+ imgmor +")");
    }
    if(h>12){
      greeting="Good Afternoon"
      var imgnoon="noon.jpg"
      $(".bg").css("background-image","url("+ imgnoon+")");
    }

    if(h>=18){
      greeting="Good Evening";
      var imgeven="sunset.jpg";
      $(".bg").css("background-image","url("+ imgeven +")");
    };

    if(h>=21){
      greeting="Good Night";
      var imgnight="goodnight.jpg";
      $(".bg").css("background-image","url("+ imgnight +")");
    }


    if(h==0){
        h=12;
    }

    if(h>12){
        session="PM" 
        h=h-12;
    }
    if(h<10){
        h="0"+h;
    }

    if(m<10){
        m="0"+m;
    }
    if(s<10){
        s="0"+s;
    }

    var time= h +":"+ m +":" + s +" "+ session  ;
    var gre= greeting ;

    $("#greeting").html(gre);
    $("#time").html(time);

    setTimeout(clock,1000)
  }
  
</script>
</body>
</html>
