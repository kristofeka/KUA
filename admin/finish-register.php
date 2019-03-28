<?php
  include 'koneksi.php';
  session_start();
    echo '<script language="javascript">';
    echo 'alert("Data Kamu Berhasil Disimpan!")';
    echo '</script>';
?>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    KUA KEBUN JERUK
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="main-panel">
      <!-- Navbar -->
              <?php 
  include "koneksi.php";
  $query= mysql_query("SELECT * FROM `pendaftaran` WHERE `id_user` = '".$_SESSION['id_user']."' ")or die(mysql_error());
  $arr = mysql_fetch_array($query);
  ?>

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-9">
              <div class="card">
                <div class="card-header card-header-primary">
                  <div class="row">
                    <div class="col-md-10">
                        <h3 class="card-title">Hi, <?php echo $arr['calon_suami'] ?></h3>
                        
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  
                   <p class="card-title" style="padding-top: 15px;">Untuk Username gunakanan nama calon suami <br>
                   dan Password gunakan nama calon istri</p>
                   <p>Username : <?php echo $arr['calon_suami'] ?></p>
                   <p>Password : <?php echo $arr['calon_istri'] ?></p>
                  <h5 class="card-title">Tunggu 2 hari hingga proses konfirmasi data selesai</h5>
                  <button type="submit" class="btn btn-primary pull-right" onclick="window.location='login.php';">Login</button>

                </div>
              </div>
            </div>
           
          </div>
        </div>
      </div>
s
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
</body>

</html>