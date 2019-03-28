<!DOCTYPE html>
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
                  <form action="proses_register.php" method="post" onSubmit="return validasi()">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-6">
                              <p class="navbar-brand"> CALON ISTRI </p>
                              <div class="form-group">
                                <label class="bmd-label-floating">Nama Calon Istri</label>
                                <input type="text" name="calon_istri" id="calon_istri" class="form-control">
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Tempat, Tanggal Lahir</label>
                                <input type="text" name="ttl_istri" id="ttl_istri" class="form-control">
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Jenis Kelamin</label>
                                <input type="text" name="jk_istri" id="jk_istri" class="form-control">
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Warga Negara</label>
                                <input type="text" name="wn_istri" id="wn_istri" class="form-control">
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Agama</label>
                                <input type="text" name="agama_istri" id="agama_istri" class="form-control">
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Pendidikan Terakhir</label>
                                <input type="text" name="pendi_istri" id="pendi_istri" class="form-control">
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Pekerjaan</label>
                                <input type="text" name="peker_istri" id="peker_istri" class="form-control">
                              </div>
                             
                          </div>
                          <div class="col-md-6">
                              <p class="navbar-brand"> CALON SUAMI </p>
                              <div class="form-group">
                                <label class="bmd-label-floating">Nama Calon Suami</label>
                                <input type="text" name="calon_suami" id="calon_suami" class="form-control">
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Tempat, Tanggal Lahir</label>
                                <input type="text" name="ttl_suami" id="ttl_suami" class="form-control">
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Jenis Kelamin</label>
                                <input type="text" name="jk_suami" id="jk_suami" class="form-control">
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Warga Negara</label>
                                <input type="text" name="wn_suami" id="wn_suami" class="form-control">
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Agama</label>
                                <input type="text" name="agama_suami" id="agama_suami" class="form-control">
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Pendidikan Terakhir</label>
                                <input type="text" name="pendi_suami" id="pendi_suami" class="form-control">
                              </div>
                              <div class="form-group">
                                <label class="bmd-label-floating">Pekerjaan</label>
                                <input type="text" name="peker_suami" id="peker_suami" class="form-control">
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
  <script type="text/javascript">
    function validasi() {
      var calon_istri = document.getElementById("calon_istri").value;
      var ttl_istri = document.getElementById("ttl_istri").value;
      var jk_istri = document.getElementById("jk_istri").value;
      var wn_istri = document.getElementById("wn_istri").value;
      var agama_istri = document.getElementById("agama_istri").value;
      var pendi_istri = document.getElementById("pendi_istri").value;
      var peker_istri = document.getElementById("peker_istri").value;
      var calon_suami = document.getElementById("calon_suami").value;
      var ttl_suami = document.getElementById("ttl_suami").value;
      var jk_suami = document.getElementById("jk_suami").value;
      var wn_suami = document.getElementById("wn_suami").value;
      var agama_suami = document.getElementById("agama_suami").value;
      var pendi_suami = document.getElementById("pendi_suami").value;
      var peker_suami = document.getElementById("peker_suami").value;    
      if (calon_istri != "" && ttl_istri !="" && jk_istri !="" && wn_istri !="" && agama_istri !="" && pendi_istri !="" && peker_istri !="" && calon_suami != "" && ttl_suami !="" && jk_suami !="" && wn_suami !="" && agama_suami !="" && pendi_suami !="" && peker_suami !="") {
        return true;
      }else{
        alert('Data tidak boleh kosong!');
        return false;
      }
    }
  </script>
</body>

</html>