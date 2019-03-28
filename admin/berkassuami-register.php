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
                  <form action="uploadberkassuami_register.php" method="post" enctype="multipart/form-data" onSubmit="return validasi()">
                    <div class="row">
                      <div class="col-md-12">
                        <p><?php echo $berkas['id_user'];?></p>
                        <div class="row">
                          <div class="col-md-12">
                              <p class="navbar-brand">BERKAS CALON SUAMI</p>
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-6">
                                    <label class="bmd-label-floating">Foto calon suami 2X3</label>
                                    <input type="file" id="fotosuami1" name="foto-suamiA" class="inputfile" onchange="fotoAAA(this);" />
                                    <label for="fotosuami1">Choose a file</label>
                                  </div>
                                  <div class="col-md-4">
                                    <img id="fotoAA" src="../img/no-image.png" width="200" />
                                    <span id="textfotoAA"></span>
                                  </div>
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-6">
                                    <label class="bmd-label-floating">Foto calon suami 4X6</label>
                                    <input type="file" id="fotosuami2" name="foto-suamiB" class="inputfile" onchange="fotoBBB(this);" />
                                    <label for="fotosuami2">Choose a file</label>
                                  </div>
                                  <div class="col-md-4">
                                    <img id="fotoBB" src="../img/no-image.png" width="200" />
                                    <span id="textfotoBB"></span>
                                  </div>
                                 </div>
                              </div>

                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-6">
                                    <label class="bmd-label-floating">Fotocopy KTP calon suami</label>
                                    <input type="file" id="filektpsuami" name="fc-ktp-suami" class="inputfile" onchange="fotoktpp(this);" />
                                    <label for="filektpsuami">Choose a file</label>
                                  </div>
                                  <div class="col-md-4">
                                    <img id="ktpsuami" src="../img/no-image.png" width="200" />
                                    <span id="textktpp"></span>
                                  </div>
                                 </div>
                              </div>            

                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-6">
                                    <label class="bmd-label-floating">Fotocopy KTP wali suami</label>
                                    <input type="file" id="filektpwalisuami" name="fc-ktpwali-suami" class="inputfile" onchange="fotoktpwalip(this);" />
                                    <label for="filektpwalisuami">Choose a file</label>
                                  </div>
                                  <div class="col-md-4">
                                    <img id="ktpwalisuami" src="../img/no-image.png" width="200" />
                                    <span id="textktpwalip"></span>
                                  </div>
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-6">
                                    <label class="bmd-label-floating">Fotocopy KTP orang tua suami</label>
                                    <input type="file" id="filektportusuami" name="fc-ktportu-suami" class="inputfile" onchange="fotoktportup(this);" />
                                    <label for="filektportusuami">Choose a file</label>
                                  </div>
                                  <div class="col-md-4">
                                    <img id="ktportusuami" src="../img/no-image.png" width="200" />
                                    <span id="textktportup"></span>
                                  </div>
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-6">
                                    <label class="bmd-label-floating">Fotocopy kartu Keluarga suami</label>
                                    <input type="file" id="filekksuami" name="fc-kk-suami" class="inputfile" onchange="fotokkp(this);"/>
                                    <label for="filekksuami">Choose a file</label>
                                  </div>
                                  <div class="col-md-4">
                                    <img id="fckkp" src="../img/no-image.png" width="200" />
                                    <span id="textkkp"></span>
                                  </div>
                                </div>
                              </div>
                            
                          </div>
<!--                           <div class="col-md-6">
                              <p class="navbar-brand">BERKAS CALON SUAMI</p>
                              <div class="form-group">
                                <label class="bmd-label-floating">Foto calon suami 2X3</label>
                                <input type="file" id="fotosuami1" name="foto-suami-2x3" class="inputfile" />
                                <label for="fotosuami1">Choose a file</label>
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Foto calon suami 4X6</label>
                                <input type="file" id="fotosuami2" name="foto-suami-4x6" class="inputfile" />
                                <label for="fotosuami2">Choose a file</label>
                              </div>
                              
                              <div class="form-group">
                                <label class="bmd-label-floating">Fotocopy KTP calon Suami</label>
                                <input type="file" id="filektpsuami" name="fc-ktp-suami" class="inputfile" />
                                <label for="filektpsuami">Choose a file</label>
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Fotocopy KTP wali Suami</label>
                                <input type="file" id="filektpwalisuami" name="fc-ktpwali-suami" class="inputfile" />
                                <label for="filektpwalisuami">Choose a file</label>
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Fotocopy KTP orang tua Suami</label>
                                <input type="file" id="filektportusuami" name="fc-ktportu-suami" class="inputfile"">
                                 <label for="filektportusuami">Choose a file</label>
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Fotocopy kartu Keluarga Suami</label>
                                <input type="file" id="filekksuami" name="fc-kk-suami" class="inputfile"">
                                 <label for="filekksuami">Choose a file</label>
                              </div>
                            
                          </div> -->
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
    var fotosuami1 = document.getElementById("fotosuami1").value;
    var fotosuami2 = document.getElementById("fotosuami2").value;
    var filektpsuami = document.getElementById("filektpsuami").value;
    var filektpwalisuami = document.getElementById("filektpwalisuami").value;
    var filektportusuami = document.getElementById("filektportusuami").value;
    var filekksuami = document.getElementById("filekksuami").value;
    if (fotosuami1 != "" && fotosuami2!="" && filektpsuami!="" && filektpwalisuami!="" && filektportusuami!="" && filekksuami!="") {
      return true;
    }else{
      alert('Data tidak boleh kosong!');
      return false;
    }
  }
  </script>
</body>

</html>