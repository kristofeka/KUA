<?php
include 'koneksi.php';
session_start();
if($_SESSION['status'] !='login'){
  header("location:login.php");
}


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
          <li class="nav-item active ">
            <a class="nav-link" href="dashboard-admin.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
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
          $query= mysql_query("SELECT * FROM `pendaftaran` WHERE `calon_suami` = '".$_SESSION['username']."' ")or die(mysql_error());
          $arr = mysql_fetch_array($query);
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
        <div class="content">
          <div class="container-fluid">
            <div class="row"> 
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title ">Data pendaftar pernikahan</h4>
                    <p class="card-category"></p>
                  </div>
                  <div class="card-body">
                    <form action="dashboard-admin.php" method="get">
                      <input id="hidden_fields" type="date" class="form-control" data-date-format="yyyy/mm/dd" name="cari">
                      <input id="hidden_fields2" type="date" class="form-control" data-date-format="yyyy/mm/dd" name="cari2">
                      <br>
                      <p>pendaftaran : <input type="checkbox" id="trigger" name="question" value="1"> </p>
                      <select id="hidden_fields3" class="form-control" name="cari3">
                        <option value=""> -- Nama Penghulu -- </option>
                        <option value="H. Syarif Hidayat, S.Ag">H. Syarif Hidayat, S.Ag</option>
                        <option value="Basirun, S.Ag">Basirun, S.Ag</option>
                        <option value="Dedi Faridi, M.Si">Dedi Faridi, M.Si</option>
                        <option value="Abdul Rosyid">Abdul Rosyid</option>
                        <option value="Harumain, S.Hi">Harumain, S.Hi</option>
                      </select>
                      <select id="hidden_fields1" class="form-control" name="cari4">
                       <option value=""> -- Lokasi -- </option>
                       <?php
// query untuk menampilkan semua mata pelajaran dari tabel 
                       $query = "SELECT * FROM jadwal_user";
                       $hasil = mysql_query($query);
                       while ($data = mysql_fetch_array($hasil))
                       {
                        echo "<option value='".$data['lokasi_nkh']."'>".$data['lokasi_nkh']."</option>";
                      }
                      ?>
                    </select>
                    <select class="form-control" name="cari5">
                      <option value=""> -- Status -- </option>
                      <option value="1">Sudah</option>
                      <option value="0">Belum</option>
                    </select>
                    <input class="btn btn-info btn-sm" type="submit" value="cari">
                  </form>
                  <?php 
                  if(isset($_GET['cari'], $_GET['cari2'], $_GET['cari3'], $_GET['cari4'], $_GET['cari5'])){
                    $cari = $_GET['cari'];
                    $cari2 = $_GET['cari2'];
                    $cari3 = $_GET['cari3'];
                    $cari4 = $_GET['cari4'];
                    $cari5 = $_GET['cari5'];
                    echo "<b>Hasil pencarian : ".$cari."  s/d ".$cari2." </b><br>";
                    echo "Nama Penghulu: ".$cari3." <br>";
                    echo "Tempat: ".$cari4." <br>";
                    echo "Status: ".$cari5." <br>";

                  }
                  ?>
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          No
                        </th>
                        <th>
                          Nama Suami & Istri
                        </th>
                        <th>
                          Status
                        </th>
                        <th>
                          Waktu pernikahan
                        </th>
                        <?php
                        if(isset($_GET['question'])){

                        }
                        else{
                          echo '<th>';
                          echo 'Tempat';
                          echo '</th>';
                        }
                        ?>
                        <?php
                        if(isset($_GET['question'])){

                        }
                        else{
                          echo '<th>';
                          echo 'Penghulu';
                          echo '</th>';
                        }
                        ?>
                        <th>
                          Aksi  
                        </th>
                      </thead>
                      <tbody>
                        <?php
                        $statusquery= mysql_query("SELECT * FROM `user` WHERE `username` = '".$_SESSION['username']."' ")or die(mysql_error());
                        $stsarr = mysql_fetch_array($statusquery); 
                        $kel = 'kelurahan';
                        $kua = 'kuabonjer';

                        if (isset($_GET['cari'])) {
                          $cari = $_GET['cari'];
                        } else {
                          $cari = "";
                        }

                        if (isset($_GET['cari2'])) {
                           $cari2 = $_GET['cari2'];
                        } else {
                           $cari2 = "";
                        }

                        if (isset($_GET['cari3'])) {
                           $cari3 = $_GET['cari3'];
                        } else {
                           $cari3 = "";
                        }

                        if (isset($_GET['cari4'])) {
                           $cari4 = $_GET['cari4'];
                        } else {
                           $cari4 = "";
                        }

                        if (isset($_GET['cari5'])) {
                           $cari5 = $_GET['cari5'];
                        } else {
                           $cari5 = "";
                        }

                        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        if ($actual_link == "http://localhost/kua/admin/dashboard-admin.php") {
                            $show = mysql_query ("SELECT pendaftaran.id_user, pendaftaran.calon_suami,
                                  pendaftaran.calon_istri,
                                  pendaftaran.status_klrhn,
                                  pendaftaran.status_kua,
                                  jadwal_user.waktu,
                                  jadwal_user.lokasi_nkh,
                                  jadwal_user.penghulu_nkh,
                                  user.username
                                  FROM jadwal_user
                                  INNER JOIN pendaftaran ON pendaftaran.id_user = jadwal_user.id_user
                                  INNER JOIN user ON user.id_user = jadwal_user.id_user
                                  ORDER BY pendaftaran.id_user"); 
                        } else {
                          if (isset($_GET['question'])) {
                            if($_SESSION['username'] == "kelurahan"){
                              $show = mysql_query ("SELECT pendaftaran.id_user, pendaftaran.calon_suami,
                              pendaftaran.calon_istri,
                              pendaftaran.status_klrhn,
                              pendaftaran.status_kua,
                              jadwal_user.waktu,
                              jadwal_user.lokasi_nkh,
                              jadwal_user.penghulu_nkh,
                              user.username
                              FROM jadwal_user
                              INNER JOIN pendaftaran ON pendaftaran.id_user = jadwal_user.id_user
                              INNER JOIN user ON user.id_user = jadwal_user.id_user
                              WHERE pendaftaran.status_klrhn = '".$_GET['cari5']."' ORDER BY jadwal_user.waktu 
                              ");  
                            } else {
                              $show = mysql_query ("SELECT pendaftaran.id_user, pendaftaran.calon_suami,
                              pendaftaran.calon_istri,
                              pendaftaran.status_klrhn,
                              pendaftaran.status_kua,
                              jadwal_user.waktu,
                              jadwal_user.lokasi_nkh,
                              jadwal_user.penghulu_nkh,
                              user.username
                              FROM jadwal_user
                              INNER JOIN pendaftaran ON pendaftaran.id_user = jadwal_user.id_user
                              INNER JOIN user ON user.id_user = jadwal_user.id_user
                              WHERE pendaftaran.status_kua = '".$_GET['cari5']."' ORDER BY jadwal_user.waktu 
                              ");  
                            }
                          } else {
                            if($_SESSION['username'] == "kelurahan"){
                                 $show = mysql_query ("SELECT pendaftaran.id_user, pendaftaran.calon_suami,
                                  pendaftaran.calon_istri,
                                  pendaftaran.status_klrhn,
                                  pendaftaran.status_kua,
                                  jadwal_user.waktu,
                                  jadwal_user.lokasi_nkh,
                                  jadwal_user.penghulu_nkh,
                                  user.username
                                  FROM jadwal_user
                                  INNER JOIN pendaftaran ON pendaftaran.id_user = jadwal_user.id_user
                                  INNER JOIN user ON user.id_user = jadwal_user.id_user
                                  WHERE 
                                  jadwal_user.waktu BETWEEN '$cari' and '$cari2' AND
                                  jadwal_user.penghulu_nkh LIKE '%$cari3%' AND
                                  jadwal_user.lokasi_nkh LIKE '%$cari4%' AND
                                  pendaftaran.status_klrhn = '".$_GET['cari5']."' ORDER BY jadwal_user.waktu");
                            } else {
                               $show = mysql_query ("SELECT pendaftaran.id_user, pendaftaran.calon_suami,
                                  pendaftaran.calon_istri,
                                  pendaftaran.status_klrhn,
                                  pendaftaran.status_kua,
                                  jadwal_user.waktu,
                                  jadwal_user.lokasi_nkh,
                                  jadwal_user.penghulu_nkh,
                                  user.username
                                  FROM jadwal_user
                                  INNER JOIN pendaftaran ON pendaftaran.id_user = jadwal_user.id_user
                                  INNER JOIN user ON user.id_user = jadwal_user.id_user
                                  WHERE 
                                  jadwal_user.waktu BETWEEN '$cari' and '$cari2' AND
                                  jadwal_user.penghulu_nkh LIKE '%$cari3%' AND
                                  jadwal_user.lokasi_nkh LIKE '%$cari4%' AND
                                  pendaftaran.status_kua = '".$_GET['cari5']."' ORDER BY jadwal_user.waktu");
                            }
                          }
                        }

                        if(mysql_num_rows($show)){
                            $no = 0;
                            while($data = mysql_fetch_array($show)){
                              ?>
                            <tr>
                                <td><?php echo $data["id_user"]?></td>
                                <td><?php echo $data["calon_suami"]?> & <?php echo $data["calon_istri"]?></td>
                                <td>
                                  <?php 
                                    if ($stsarr ['username'] === $_SESSION['username']) {
                                       if( $data['status_klrhn'] == 0){
                                         echo '<span style="font-weight: bold; color:red">Belum</span>';
                                       } else if ( $data['status_kua'] == 0){
                                        echo '<span style="font-weight: bold; color:red">Belum</span>';
                                      }  else{
                                        echo "sudah";
                                      }
                                    } else {
                                      echo "Ga sama";
                                    }
                                  ?>
                                </td>
                                <td>
                                <?php echo $data["waktu"]?>
                                </td>
                                <?php 
                                  if(isset($_GET['question'])){
                                  } 
                                  else{
                                    echo ' <td>';
                                    echo $data["lokasi_nkh"];
                                    echo '</td>';
                                  }
                                ?>
                                <?php 
                                  if(isset($_GET['question'])){

                                  } 
                                  else{
                                    echo ' <td>';
                                    echo $data["penghulu_nkh"];
                                    echo '</td>';
                                  }
                                ?>
                                <td>
                                  <a href="lihat_data.php?id=<?php echo $data['id_user']?>">Detail</a> |
                                  <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $data['id_user']?>">Update</button>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal<?php echo $data['id_user']?>" role="dialog">
                                  <?php 
                                  $id = mysql_real_escape_string($data['id_user']);
                                  $update=mysql_query("SELECT * FROM pendaftaran WHERE id_user = '$id' ")or die(mysql_error());
                                  $updateberkas = mysql_fetch_array($update);
                                  ?>
                                  <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title">Update Verifikasi</h4>
                                      </div>
                                      <div class="modal-body">
                                        <?php
                                        if ($stsarr ['username'] === $_SESSION['username']) {
                                          if( $stsarr['username'] === $kel){
                                            echo '<form action="update_ver.php" method="post">';
                                            echo '<p>ID User :';
                                            echo $updateberkas['id_user'];
                                            echo '</p>';
                                            echo '<div style="display: none;" class="form-group">';
                                            echo '<label class="bmd-label-floating">id</label>';
                                            echo '<input type="text" name="id_user" class="form-control" value="';
                                            echo $updateberkas['id_user'];
                                            echo '">';
                                            echo '</div>';
                                            echo '<div class="form-group">';
                                            echo '<label for="sel1">Select Verifikasi</label>';
                                            echo '<p>';
                                            echo '<input type="radio" name="status_klrhn" value="0"';
                                            if($updateberkas['status_klrhn']=="0"){echo "checked";}
                                            echo '/> Belum </p>';
                                            echo '<p>';
                                            echo '<input type="radio" name="status_klrhn" value="1"';
                                            if($updateberkas['status_klrhn']=="1"){echo "checked";}
                                            echo '/> sudah </p>';
                                          }
                                          elseif ($stsarr['username'] === $kua){
                                            echo '<form action="update_ver.php" method="post">';
                                            echo '<p>ID User :';
                                            echo $updateberkas['id_user'];
                                            echo '</p>';
                                            echo '<div style="display: none;" class="form-group">';
                                            echo '<label class="bmd-label-floating">id</label>';
                                            echo '<input type="text" name="id_user" class="form-control" value="';
                                            echo $updateberkas['id_user'];
                                            echo '">';
                                            echo '</div>';
                                            echo '<div class="form-group">';
                                            echo '<label for="sel1">Select Verifikasi</label>';
                                            echo '<p>';
                                            echo '<input type="radio" name="status_kua" value="0"';
                                            if($updateberkas['status_kua']=="0"){echo "checked";}
                                            echo '/> Belum </p>';
                                            echo '<p>';
                                            echo '<input type="radio" name="status_kua" value="1"';
                                            if($updateberkas['status_kua']=="1"){echo "checked";}
                                            echo '/> sudah </p>';
                                          }
                                          else{
                                            echo "same nothing";
                                          }
                                        }
                                        else {
                                          echo "Nothing";
                                        }
                                        ?>
                                      </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-sm">Simpan</button>
                                  </form>
                                </div>                               
                              </div>
                            </div>
                          </td>
                            </tr>
                         <?php $no++; } ?>
                        <?php } ?>  
                      </tbody>
                    </table>
                  </div>
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
  <script src="assets/js/hidden.js"></script>

</body>

</html>