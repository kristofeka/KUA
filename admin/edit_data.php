<?php
  include 'koneksi.php';
  session_start();
    if($_SESSION['status'] !='login'){
      header("location:login.php");
    }
    $id = mysql_real_escape_string($_GET['id']);
    $det=mysql_query("SELECT * FROM pendaftaran WHERE id_user = '$id' ")or die(mysql_error());
    $berkas = mysql_fetch_array($det);

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
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-9">
              <div class="card">
                <div class="card-header card-header-primary">
                  <div class="row">
                    <div class="col-md-1">
                        <img style="margin-top: 5px; padding-right: 5px;" src="../images/1.png" width="60px">
                    </div>
                    <div class="col-md-10">
                        <h3 class="card-title">Perubahan Data</h3>
                        <h5 class="card-title">Username : <?php echo $berkas['calon_suami'];?> </h5>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <form action="update_data.php" method="post">
                    <div class="row">
                      <div class="col-md-12">
                        <div style="display: none;" class="form-group">
                          <label class="bmd-label-floating">id</label>
                          <input type="text" name="id_user" class="form-control" value="<?php echo $berkas['id_user'] ?> ">
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                              <p class="navbar-brand"> CALON ISTRI </p>
                              <div class="form-group">
                                <label class="bmd-label-floating">Nama Calon Istri</label>
                                <input type="text" name="calon_istri" class="form-control" value="<?php echo $berkas['calon_istri'] ?> ">
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Tempat, Tanggal Lahir</label>
                                <input type="text" name="ttl_istri" class="form-control" value="<?php echo $berkas['ttl_istri'] ?> ">
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Jenis Kelamin</label>
                                <input type="text" name="jk_istri" class="form-control" value="<?php echo $berkas['jk_istri'] ?> ">
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Warga Negara</label>
                                <input type="text" name="wn_istri" class="form-control" value="<?php echo $berkas['wn_istri'] ?> ">
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Agama</label>
                                <input type="text" name="agama_istri" class="form-control" value="<?php echo $berkas['agama_istri'] ?> ">
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Pendidikan Terakhir</label>
                                <input type="text" name="pendi_istri" class="form-control" value="<?php echo $berkas['pendi_istri'] ?> ">
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Pekerjaan</label>
                                <input type="text" name="peker_istri" class="form-control" value="<?php echo $berkas['peker_istri'] ?> ">
                              </div>
                             
                          </div>
                          <div class="col-md-6">
                              <p class="navbar-brand"> CALON SUAMI </p>
                              <div class="form-group">
                                <label class="bmd-label-floating">Nama Calon Suami</label>
                                <input type="text" name="calon_suami" class="form-control" value="<?php echo $berkas['calon_suami'] ?> ">
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Tempat, Tanggal Lahir</label>
                                <input type="text" name="ttl_suami" class="form-control" value="<?php echo $berkas['ttl_suami'] ?> ">
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Jenis Kelamin</label>
                                <input type="text" name="jk_suami" class="form-control" value="<?php echo $berkas['jk_suami'] ?> ">
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Warga Negara</label>
                                <input type="text" name="wn_suami" class="form-control" value="<?php echo $berkas['wn_suami'] ?> ">
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Agama</label>
                                <input type="text" name="agama_suami" class="form-control" value="<?php echo $berkas['agama_suami'] ?> ">
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Pendidikan Terakhir</label>
                                <input type="text" name="pendi_suami" class="form-control" value="<?php echo $berkas['pendi_suami'] ?> ">
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Pekerjaan</label>
                                <input type="text" name="peker_suami" class="form-control" value="<?php echo $berkas['peker_suami'] ?> ">
                              </div>
                             
                          </div>
                        </div>
                       
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                  </form>
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