<?php 
  include 'koneksi.php';
  session_start();
  $query= mysql_query("SELECT * FROM `pendaftaran` WHERE `calon_suami` = '".$_SESSION['calon_suami']."' ")or die(mysql_error());
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
    <div class="main-panel">
      <!-- Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-9">
              <div class="card">
                <div class="card-header card-header-primary">
                  <div class="row">
                    <div class="col-md-2">
                        <img style="margin-top: 5px; padding-right: 5px;" src="../images/1.png" width="60px">
                    </div>
                    <div class="col-md-10">
                        <h3 class="card-title">Selamat Datang</h3>
                        <h5 class="card-title">KUA Kecamatan Kebun Jeruk</h5>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <form action="uploadberkasistri_register.php" method="post" enctype="multipart/form-data" onSubmit="return validasi()">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-12">
                              <p class="navbar-brand">BERKAS CALON ISTRI</p>
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-6">
                                    <label class="bmd-label-floating">Foto calon Istri 2X3</label>
                                    <input type="file" id="fotoistri1" name="foto-istriA" class="inputfile" onchange="fotoAA(this);" />
                                    <label for="fotoistri1">Choose a file</label>
                                  </div>
                                  <div class="col-md-4">
                                    <img id="fotoA" src="../img/no-image.png" width="200" />
                                    <span id="textfotoA"></span>
                                  </div>
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-6">
                                    <label class="bmd-label-floating">Foto calon Istri 4X6</label>
                                    <input type="file" id="fotoistri2" name="foto-istriB" class="inputfile" onchange="fotoBB(this);" />
                                    <label for="fotoistri2">Choose a file</label>
                                  </div>
                                  <div class="col-md-4">
                                    <img id="fotoB" src="../img/no-image.png" width="200" />
                                    <span id="textfotoB"></span>
                                  </div>
                                 </div>
                              </div>

                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-6">
                                    <label class="bmd-label-floating">Fotocopy KTP calon Istri</label>
                                    <input type="file" id="filektpistri" name="fc-ktp-istri" class="inputfile" onchange="fotoktp(this);" />
                                    <label for="filektpistri">Choose a file</label>
                                  </div>
                                  <div class="col-md-4">
                                    <img id="ktpistri" src="../img/no-image.png" width="200" />
                                    <span id="textktp"></span>
                                  </div>
                                 </div>
                              </div>            

                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-6">
                                    <label class="bmd-label-floating">Fotocopy KTP wali Istri</label>
                                    <input type="file" id="filektpwaliistri" name="fc-ktpwali-istri" class="inputfile" onchange="fotoktpwali(this);" />
                                    <label for="filektpwaliistri">Choose a file</label>
                                  </div>
                                  <div class="col-md-4">
                                    <img id="ktpwaliistri" src="../img/no-image.png" width="200" />
                                    <span id="textktpwali"></span>
                                  </div>
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-6">
                                    <label class="bmd-label-floating">Fotocopy KTP orang tua Istri</label>
                                    <input type="file" id="filektportuistri" name="fc-ktportu-istri" class="inputfile" onchange="fotoktportu(this);" />
                                    <label for="filektportuistri">Choose a file</label>
                                  </div>
                                  <div class="col-md-4">
                                    <img id="ktportuistri" src="../img/no-image.png" width="200" />
                                    <span id="textktportu"></span>
                                  </div>
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-6">
                                    <label class="bmd-label-floating">Fotocopy kartu Keluarga Istri</label>
                                    <input type="file" id="filekkistri" name="fc-kk-istri" class="inputfile" onchange="fotokk(this);"/>
                                    <label for="filekkistri">Choose a file</label>
                                  </div>
                                  <div class="col-md-4">
                                    <img id="fckk" src="../img/no-image.png" width="200" />
                                    <span id="textkk"></span>
                                  </div>
                                </div>
                              </div>
                            
                          </div>
                        </div>
                       
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Next</button>
                    <p class="card-category">sudah punya akun ? <a href="login.php">Login</a></p>
                    <div class="clearfix"></div>
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
  <script src="assets/js/foto-preview.js"></script>
  <script type="text/javascript">
  function validasi() {
    var fotoistri1 = document.getElementById("fotoistri1").value;
    var fotoistri2 = document.getElementById("fotoistri2").value;
    var filektpistri = document.getElementById("filektpistri").value;
    var filektpwaliistri = document.getElementById("filektpwaliistri").value;
    var filektportuistri = document.getElementById("filektportuistri").value;
    var filekkistri = document.getElementById("filekkistri").value;
    if (fotoistri1 != "" && fotoistri2!="" && filektpistri!="" && filektpwaliistri!="" && filektportuistri!="" && filekkistri!="") {
      return true;
    }else{
      alert('Data tidak boleh kosong!');
      return false;
    }
  }
  </script>
</body>

</html>