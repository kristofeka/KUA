<?php
include 'koneksi.php';
session_start();
if($_SESSION['status'] !='login'){
  header("location:login.php");
}
$query= mysql_query("SELECT * FROM `pendaftaran` WHERE `calon_suami` = '".$_SESSION['username']."' ")or die(mysql_error());
  $berkas = mysql_fetch_array($query);
      $_SESSION['id_user'] = $berkas['id_user'];

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
            echo '<li class="nav-item ">';
            echo '<a class="nav-link" href="jadwal.php">';
            echo '<i class="material-icons">alarm</i>';
            echo '<p>Pilih Jadwal</p>';
            echo '</a>';
            echo '</li>';
          }
          else{
          }
          ?>
          <li class="nav-item active ">
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
          <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
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
        <?php 
        include "koneksi.php";
        $query= mysql_query("SELECT * FROM `pendaftaran` WHERE `calon_suami` = '".$_SESSION['username']."' ")or die(mysql_error());
        $arr = mysql_fetch_array($query);
        $_SESSION['id_user'] = $arr['id_user'];
        ?>
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <?php
                $new= mysql_query("SELECT * FROM `filedata_user` WHERE `id_user` = '".$_SESSION['id_user']."' ")or die(mysql_error());
                $neww = mysql_fetch_array($new);
                if ( $neww ['srt_ketRT_istri']== NULL ){
                  echo '<div class="card">';
                  echo '<div class="card-header card-header-primary">';
                  echo '<h4 class="card-title ">Upload Persyaratan Pengajuan Pernikahan</h4>';
                  echo '<p class="card-category">Silahkan lengkapi data berikut agar data cepat terverifiksi. Berkas di scan dan sudah terisi.</p>';
                  echo '</div>';
                  echo '<div class="card-body">';
                  echo '<form action="uploaddatatambahan_user.php" method="post" enctype="multipart/form-data">';
                  echo '<div class="row">';
                  echo '<div class="col-md-12">';

                  echo '<div class="row">';
                  echo '<div class="col-md-12">';
                  echo '<div class="form-group">';
                  echo '<div class="row">';
                  echo '<div class="col-md-4">';
                  echo '<label class="bmd-label-floating">Surat keterangan RT<br>Istri</label>';
                  echo '<input type="file" id="srt_ket_istri" name="srt_ket_RT_istri" class="inputfile" />';
                  echo '<label for="srt_ket_istri" class="pull-right">Choose a file</label>';
                  echo '</div>';
                  echo '<div class="col-md-4">';
                  echo '<label class="bmd-label-floating">Surat pernyataan belum<br>menikah Istri</label>';
                  echo '<input type="file" id="srt_blm_istri" name="srt_blm_istri" class="inputfile" />';
                  echo '<label for="srt_blm_istri" class="pull-right">Choose a file</label>';
                  echo '</div>';
                  echo '<div class="col-md-4">';
                  echo '<label class="bmd-label-floating">Surat keterangan sehat<br>Istri</label>';
                  echo '<input type="file" id="srt_shti" name="srt_ket_shtI" class="inputfile" />';
                  echo '<label for="srt_shti" class="pull-right">Choose a file</label>';
                  echo '</div>';
                  echo '<div class="col-md-4">';
                  echo '<label class="bmd-label-floating">Surat keterangan RT<br>Suami</label>';
                  echo '<input type="file" id="srt_ket_suami" name="srt_ket_RT_suami" class="inputfile" />';
                  echo '<label for="srt_ket_suami" class="pull-right">Choose a file</label>';
                  echo '</div>';
                  echo '<div class="col-md-4">';
                  echo '<label class="bmd-label-floating">Surat pernyataan belum<br>menikah Suami</label>';
                  echo '<input type="file" id="srt_blm_suami" name="srt_blm_suami" class="inputfile" />';
                  echo '<label for="srt_blm_suami" class="pull-right">Choose a file</label>';
                  echo '</div>';
                  echo '<div class="col-md-4">';
                  echo '<label class="bmd-label-floating">Surat keterangan sehat<br>Suami</label>';
                  echo '<input type="file" id="srt_shtS" name="srt_ket_shtS" class="inputfile" />';
                  echo '<label for="srt_shtS" class="pull-right">Choose a file</label>';
                  echo '</div>';
                  echo '</div>';
                  echo '</div>';
                  echo '</div>';
                  echo '</div>  ';                     
                  echo '</div>';
                  echo '</div>';
                  echo '<button type="submit" class="btn btn-primary pull-right">Simpan</button>';
                  echo '<div class="clearfix"></div>';
                  echo '</form>';
                  echo '</div>';
                  echo '</div>';

                }
                else{
                }
                ?>

                </div>
                <div class="col-md-6">
                <div class="card">
                <div class="card-header card-header-primary">
                <h4 class="card-title ">Berkas Persyaratan Pengajuan Pernikahan</h4>
                <p class="card-category">Berkas bisa didownload apabila data sudah terverifikasi</p>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                <table class="table">
                <thead class=" text-primary">
                <th>
                Model Surat
                </th>
                <th>
                Nama Berkas
                </th>
                <th>
                Download
                </th>
                </thead>
                <tbody>
                <tr>
                <td>
                N1
                </td>
                <td>
                Surat Keterangan Untuk Nikah
                </td>
                <td>
                <?php  
                if( $arr['status_klrhn'] == 0){
                 echo "Data belum terverifikasi";
                 } else{
                  echo '<a href="assets/form/N1.pdf" class="btn btn-primary btn-round">Download<div class="ripple-container"></div></a>';
                }

                ?>
                </td>
                </tr>
                <tr>
                <td>
                N2
                </td>
                <td>
                Surat Keterangan Asal Usul
                </td>
                <td>
                <?php  
                if( $arr['status_klrhn'] == 0){
                 echo "Data belum terverifikasi";
                 } else{
                  echo '<a href="assets/form/N2.pdf" class="btn btn-primary btn-round">Download<div class="ripple-container"></div></a>';
                }

                ?>
                </td>
                </tr>
                <tr>
                <td>
                N3
                </td>
                <td>
                Surat persetujuan mempelai
                </td>
                <td>
                <?php  
                if( $arr['status_kua'] == 0){
                 echo "Data belum terverifikasi";
                 } else{
                  echo '<a href="assets/form/N3.pdf" class="btn btn-primary btn-round">Download<div class="ripple-container"></div></a>';
                }

                ?>
                </td>
                </tr>
                <tr>
                <td>
                N4
                </td>
                <td>
                Surat keterangan tentang orang tua
                </td>
                <td>
                <?php  
                if( $arr['status_klrhn'] == 0){
                 echo "Data belum terverifikasi";
                 } else{
                  echo '<a href="assets/form/N4.pdf" class="btn btn-primary btn-round">Download<div class="ripple-container"></div></a>';
                }

                ?>
                </td>
                </tr>
                <tr>
                <td>
                N5
                </td>
                <td>
                Surat Keterangan Izin Orang Tua
                </td>
                <td>
                <?php  
                if( $arr['status_kua'] == 0){
                 echo 'Data belum terverifikasi';
                 } else{
                  echo '<a href="assets/form/N5.pdf" class="btn btn-primary btn-round">Download<div class="ripple-container"></div></a>';
                }

                ?>
                </td>
                </tr>
                <tr>
                <td>
                N6
                </td>
                <td>
                Surat Keterangan Kematian Suami\Istri
                </td>
                <td>
                <?php  
                if( $arr['status_kua'] == 0){
                 echo "Data belum terverifikasi";
                 } else{
                  echo '<a href="assets/form/N6.pdf" class="btn btn-primary btn-round">Download<div class="ripple-container"></div></a>';
                }

                ?>
                </td>
                </tr>
                <tr>
                <td>
                N7
                </td>
                <td>
                Surat pemberitahuan kehendak nikah
                </td>
                <td>
                <?php  
                if( $arr['status_kua'] == 0){
                 echo "Data belum terverifikasi";
                 } else{
                  echo '<a href="assets/form/N7.pdf" class="btn btn-primary btn-round">Download<div class="ripple-container"></div></a>';
                }

                ?>
                </td>
                </tbody>
                </table>
                </div>
                </div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="card">
                <div class="card-header card-header-primary">
                <h4 class="card-title ">Upload Persyaratan Pengajuan Pernikahan</h4>
                <p class="card-category">Berkas di scan dan sudah terisi.</p>
                </div>
                <div class="card-body">
                <form action="uploadform_user.php" method="post" enctype="multipart/form-data" onSubmit="return validasi()>
                <div class="row">
                <div class="col-md-12">

                <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                <div class="row">
                <div class="col-md-12">
                <label class="bmd-label-floating">N1. Surat Keterangan Untuk Nikah</label>
                <input type="file" id="N1form" name="N1_file" class="inputfile" onchange="N1a(this);" />
                <label for="N1form" class="pull-right">Choose a file</label>
                <br><span id="textN1"></span>
                </div>
                </div>
                </div>

                <div class="form-group">
                <div class="row">
                <div class="col-md-12">
                <label class="bmd-label-floating">N2. Surat Keterangan Asal Usul</label>
                <input type="file" id="N2form" name="N2_file" class="inputfile" onchange="N2a(this);" />
                <label for="N2form" class="pull-right">Choose a file</label>
                <br><span id="textN2"></span>
                </div>
                </div>
                </div>

                <div class="form-group">
                <div class="row">
                <div class="col-md-12">
                <label class="bmd-label-floating">N3. Surat persetujuan mempelai</label>
                <input type="file" id="N3form" name="N3_file" class="inputfile" onchange="N3a(this);" />
                <label for="N3form" class="pull-right">Choose a file</label>
                <br><span id="textN3"></span>
                </div>
                </div>
                </div>            

                <div class="form-group">
                <div class="row">
                <div class="col-md-12">
                <label class="bmd-label-floating">N4. Surat keterangan tentang orang tua</label>
                <input type="file" id="N4form" name="N4_file" class="inputfile" onchange="N4a(this);" />
                <label for="N4form" class="pull-right">Choose a file</label>
                <br><span id="textN4"></span>
                </div>
                </div>
                </div>

                <div class="form-group">
                <div class="row">
                <div class="col-md-12">
                <label class="bmd-label-floating">N5. Surat Keterangan Izin Orang Tua</label>
                <input type="file" id="N5form" name="N5_file" class="inputfile" onchange="N5a(this);" />
                <label for="N5form" class="pull-right">Choose a file</label>
                <br><span id="textN5"></span>
                </div>
                </div>
                </div>

                <div class="form-group">
                <div class="row">
                <div class="col-md-12">
                <label class="bmd-label-floating">N6. Surat Keterangan Kematian Suami\Istri</label>
                <input type="file" id="N6form" name="N6_file" class="inputfile" onchange="N6a(this);"/>
                <label for="N6form" class="pull-right">Choose a file</label>
                <br><span id="textN6"></span>
                </div>
                </div>
                </div>

                <div class="form-group">
                <div class="row">
                <div class="col-md-12">
                <label class="bmd-label-floating">N7. Surat pemberitahuan kehendak nikah</label>
                <input type="file" id="N7form" name="N7_file" class="inputfile" onchange="N7a(this);"/>
                <label for="N7form" class="pull-right">Choose a file</label>
                <br><span id="textN7"></span>
                </div>
                </div>
                </div>

                </div>
                </div>

                </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                <div class="clearfix"></div>
                </form>
                </div>
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
                <script src="assets/js/foto-preview.js"></script>
                <script type="text/javascript">
                  function validasi() {
                    var N1form = document.getElementById("N1form").value;
                    var N2form = document.getElementById("N2form").value;
                    var N3form = document.getElementById("N3form").value;
                    var N4form = document.getElementById("N4form").value;
                    var N5form = document.getElementById("N5form").value;
                    var N6form = document.getElementById("N6form").value;
                    var N7form = document.getElementById("N7form").value;
                    if (N1form != "" && N2form!="" && N3form!="" && N4form!="" && N5form!="" && N6form!="" && N7form!="") {
                      return true;
                    }else{
                      alert('Data tidak boleh kosong!');
                      return false;
                    }
                  }
                  </script>
                </body>

                </html>