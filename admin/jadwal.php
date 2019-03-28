<?php
include 'koneksi.php';
session_start();
if($_SESSION['status'] !='login'){
  header("location:login.php");
}
$query= mysql_query("SELECT * FROM `pendaftaran` WHERE `calon_suami` = '".$_SESSION['username']."' ")or die(mysql_error());
$berkas = mysql_fetch_array($query);
$_SESSION['id_user'] = $berkas['id_user'];
$cekjadwal= mysql_query("SELECT * FROM `jadwal_user` WHERE `id_user` = '".$_SESSION['id_user']."' ")or die(mysql_error());
$cekjadwal1 = mysql_fetch_array($cekjadwal);

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
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
      -->
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          <img src="../images/1.png" width="100">
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="dashboard-user.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <?php 
          if($berkas['status_kua'] == 1){
            echo '<li class="nav-item active">';
            echo '<a class="nav-link" href="jadwal.php">';
            echo '<i class="material-icons">alarm</i>';
            echo '<p>Pilih Jadwal</p>';
            echo '</a>';
            echo '</li>';
          }
          elseif($cekjadwal1['id_user'] !== NULL){

          }
          else{

          }
          ?>
          <li class="nav-item ">
            <a class="nav-link" href="download_berkas.php">
              <i class="material-icons">description</i>
              <p>Download & Upload</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="prosedur.php">
              <i class="material-icons">timeline</i>
              <p>Prosedur pernikahan</p>
            </a>
          </li>
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
              </li> -->
            </ul>
          </div>
        </div>
        <div class="main-panel">
          <!-- Navbar --> 
          <?php 
          include "koneksi.php";
          $query= mysql_query("SELECT * FROM `pendaftaran` WHERE `calon_suami` = '".$_SESSION['username']."' ")or die(mysql_error());
          $arr = mysql_fetch_array($query);
          ?>
          <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
              <div class="navbar-wrapper">

              </div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                 <li class="nav-item">

                  <p style="margin-top: 15px">
                    Hi, <?php echo $_SESSION['username'] ?>
                  </p>

                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">
                    <i class="material-icons">logout</i>
                    <p class="d-lg-none d-md-block">
                      Account
                    </p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
        <br>
        <div class="content">
          <div class="container-fluid">
            <?php 
            $query= mysql_query("SELECT * FROM `jadwal_user` WHERE `id_user` = '".$_SESSION['id_user']."' ")or die(mysql_error());
            $jadwal = mysql_fetch_array($query);
            ?>
            <?php
            
              echo '<div class="row">';
              echo '<div class="col-md-12">';
              echo '<div class="card">';
              echo '<div class="card-header card-header-primary">';
              echo '<h4 class="card-title">Jadwal pernikahan</h4>';
              echo '<p class="card-category">silahkan isi data waktu pernikahan</p>';
              echo '</div>';
              echo '<div class="card-body">';
              echo '<form action="update_jadwal.php" method="POST">';
              echo '<div class="row">';
              echo '<div class="col-md-12">';
              echo '<p class="card-category">Tempat pernikahan</p>';
              echo '</div>';
              echo '<div class="col-md-12">';
              echo '<div class="form-group">';
              echo '<label class="bmd-label-floating">Tulis alamat</label>';
              echo '<input type="text" name="lokasi_nkh" value="';
              echo $jadwal['lokasi_nkh'];
              echo '" class="form-control">';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '<div class="row">';
              echo '<div class="col-md-6">';
              echo '<div class="form-group">';
              echo '<label class="bmd-label-floating">Waktu</label>';
              echo '<input name="waktu" class="form-control" type="date" data-date-format="yyyy/mm/dd" ';
              echo $jadwal['waktu'];
              echo '>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '<button type="submit" class="btn btn-primary pull-right">Update Profile</button>';
              echo '<div class="clearfix"></div>';
              echo '</form>';
              echo '<div class="card-footer">';
              echo '<div class="stats">';
              echo '<i class="material-icons text-danger">warning</i>';
              echo '<a href="#pablo">Apabila ingin di nikahkan di KUA Kebun Jeruk silahkan tulis KUA</a>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
            
              echo '<div class="card card-plain">';
              echo '<div class="card-header card-header-info">';
              echo '<h4 class="card-title">Jadwal pernikahan</h4>';
              echo '<p class="card-category">Tempat : '; echo $jadwal ['lokasi_nkh'];
              echo '</p>';
              echo '<p class="card-category"> Pada tanggal : '; 
              echo $jadwal ['waktu'];
              echo '<p class="card-category">Nama Penghulu : '; echo $jadwal ['penghulu_nkh'];
              echo '</p>';
              echo '</div>';
              echo '</div>';
            
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
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
<script type="text/javascript">
  $('.datepicker').datepicker();
</script>
</body>

</html>