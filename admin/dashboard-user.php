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
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          <img src="../images/1.png" width="100">
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active ">
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

          $jadwalquery= mysql_query("SELECT * FROM `jadwal_user` WHERE `id_user` = '".$_SESSION['id_user']."' ")or die(mysql_error());
          $jadwalarr = mysql_fetch_array($jadwalquery);
          ?>
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
                <li class="nav-item dropdown">
                  <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">notifications</i>
                    <?php
                        if( $arr['status_klrhn'] == 1 && $arr['status_klrhn'] == 1 ){
                          echo '<span class="notification">2</span>';
                        }
                        else{
                        }
                    ?>
                    <p class="d-lg-none d-md-block">
                      Some Actions
                    </p>
                    <div class="ripple-container"></div></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                      <?php
                        if( $arr['status_klrhn'] == 0){
                          echo '<a class="dropdown-item" href="#">Data belum terverifikasi oleh Kelurahan</a>';
                        }
                        else{
                          echo '<a class="dropdown-item" href="#">Data sudah terverifikasi oleh Kelurahan</a>';
                        }
                      ?>
                      <?php
                        if( $arr['status_kua'] == 0){
                          echo '<a class="dropdown-item" href="#">Data belum terverifikasi oleh KUA</a>';
                        }
                        else{
                          echo '<a class="dropdown-item" href="#">Data sudah terverifikasi oleh KUA</a>';
                        }
                      ?>
                    </div>
                  </li>
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
          <?php 
          $queryfoto= mysql_query("SELECT * FROM `pendaftaran` WHERE `id_user` = '".$_SESSION['id_user']."' ")or die(mysql_error());
          $arrfoto = mysql_fetch_array($queryfoto);
          ?>
          <br>
          <div class="content">
            <div class="container-fluid">
              <?php
              if($jadwalarr != null){
                echo '<div class="card card-plain">';
                echo '<div class="card-header card-header-info">';
                echo '<h4 class="card-title">Jadwal pernikahan</h4>';
                echo '<p class="card-category">Tempat : '; echo $jadwalarr ['lokasi_nkh'];
                echo '</p>';
                echo '<p class="card-category"> Pada tanggal : '; 
                echo $jadwalarr ['waktu'];
                echo '<p class="card-category">Nama Penghulu : '; echo $jadwalarr ['penghulu_nkh'];
                echo '</p>';
                echo '</div>';
                echo '</div>';
              }
              else{

              }

              ?>
              <div class="row"> 
                <div class="col-md-5 offset-md-1">
                  <div class="card card-profile">
                    <div class="card-avatar">
                      <a href="#">
                        <img style="width: 200px;
                        height: 200px;" src="img/data/<?php echo $arrfoto['foto_istri_2x3']?> "/>

                      </a>
                    </div>
                    <div class="card-body">

                      <h6 class="card-category text-gray">Calon Istri</h6>
                      <h4 class="card-title"><?php echo $arr['calon_istri']; ?></h4>

                      <table class="table" style="text-align: left;">
                        <tbody>
                          <tr>
                            <td class="text-primary">
                              Tempat Tanggal Lahir
                            </td>
                            <td>
                              <?php echo $arr['ttl_istri']; ?>
                            </td>
                          </tr>
                          <tr>
                            <td class="text-primary">
                              Jenis Kelamin
                            </td>
                            <td>
                              <?php echo $arr['jk_istri']; ?>
                            </td>
                          </tr>
                          <tr>
                            <td class="text-primary">
                              Warga Negara
                            </td>
                            <td>
                              <?php echo $arr['wn_istri']; ?>
                            </td>
                          </tr>
                          <tr>
                            <td class="text-primary">
                              Agama
                            </td>
                            <td>
                              <?php echo $arr['agama_istri']; ?>
                            </td>
                          </tr>
                          <tr>
                            <td class="text-primary">
                             Pendidikan Terakhir
                           </td>
                           <td>
                            <?php echo $arr['pendi_istri']; ?>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-primary">
                            Pekerjaan
                          </td>
                          <td>
                            <?php echo $arr['peker_istri']; ?>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-primary">
                            Fotocopy KTP
                          </td>
                          <td>
                            <?php 
                            if( $arrfoto['fc_ktp_istri'] === NULL)
                            {
                              echo 'data kosong';
                            }
                            else{
                              echo 'data terisi';
                            }
                            ?>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-primary">
                            Fotocopy KTP wali istri
                          </td>
                          <td>
                            <?php 
                            if( $arrfoto['fc_ktp_wali_istri'] === NULL)
                            {
                              echo 'data kosong';
                            }
                            else{
                              echo 'data terisi';
                            }
                            ?>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-primary">
                            Fotocopy KTP orang tua istri
                          </td>
                          <td>
                            <?php 
                            if( $arrfoto['fc_ktp_ortu_istri'] === NULL)
                            {
                              echo 'data kosong';
                            }
                            else{
                              echo 'data terisi';
                            }
                            ?>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-primary">
                            Fotocopy KK
                          </td>
                          <td>
                            <?php 
                            if( $arrfoto['fc_kk_istri'] === NULL)
                            {
                              echo 'data kosong';
                            }
                            else{
                              echo 'data terisi';
                            }
                            ?>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <a style="background: transparent; border: 0px;" href="edit_data.php?id=<?php echo $arr['id_user']?>"  title="Edit Data" class="btn btn-primary btn-link btn-sm">
                      <i class="material-icons">edit</i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="card card-profile">
                  <div class="card-avatar">
                    <a href="#">
                      <img style="width: 200px;
                      height: 200px;" src="img/data/<?php echo $arrfoto['foto_suami_2x3']?>" />
                    </a>
                  </div>
                  <div class="card-body">
                    <h6 class="card-category text-gray">Calon Suami</h6>
                    <h4 class="card-title"><?php echo $arr['calon_suami']; ?></h4>

                    <table class="table" style="text-align: left;">
                      <tbody>
                        <tr>
                          <td class="text-primary">
                            Tempat Tanggal Lahir
                          </td>
                          <td>
                            <?php echo $arr['ttl_suami']; ?>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-primary">
                            Jenis Kelamin
                          </td>
                          <td>
                            <?php echo $arr['jk_suami']; ?>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-primary">
                            Warga Negara
                          </td>
                          <td>
                            <?php echo $arr['wn_suami']; ?>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-primary">
                            Agama
                          </td>
                          <td>
                           <?php echo $arr['agama_suami']; ?>
                         </td>
                       </tr>
                       <tr>
                        <td class="text-primary">
                         Pendidikan Terakhir
                       </td>
                       <td>
                        <?php echo $arr['pendi_suami']; ?>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-primary">
                        Pekerjaan
                      </td>
                      <td>
                        <?php echo $arr['peker_suami']; ?>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-primary">
                        Fotocopy KTP
                      </td>
                      <td>
                        <?php 
                        if( $arrfoto['fc_ktp_suami'] === NULL)
                        {
                          echo 'data kosong';
                        }
                        else{
                          echo 'data terisi';
                        }
                        ?>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-primary">
                        Fotocopy KTP wali suami
                      </td>
                      <td>
                        <?php 
                        if( $arrfoto['fc_ktp_wali_suami'] === NULL)
                        {
                          echo 'data kosong';
                        }
                        else{
                          echo 'data terisi';
                        }
                        ?>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-primary">
                        Fotocopy KTP orang tua suami
                      </td>
                      <td>
                        <?php 
                        if( $arrfoto['fc_ktp_ortu_suami'] === NULL)
                        {
                          echo 'data kosong';
                        }
                        else{
                          echo 'data terisi';
                        }
                        ?>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-primary">
                        Fotocopy KK
                      </td>
                      <td>
                        <?php 
                        if( $arrfoto['fc_kk_suami'] === NULL)
                        {
                          echo 'data kosong';
                        }
                        else{
                          echo 'data terisi';
                        }
                        ?>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <a style="background: transparent; border: 0px;" href="edit_data.php?id=<?php echo $arr['id_user']?>"  title="Edit Data" class="btn btn-primary btn-link btn-sm">
                  <i class="material-icons">edit</i>
                </a>
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
</body>

</html>