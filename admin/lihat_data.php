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
		LIHAT DATA
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
    				<p>Kembali</p>
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
					<div class="alert alert-info">
						<?php 
						$fotodet=mysql_query("SELECT * FROM filedata_user WHERE id_user = '$id' ")or die(mysql_error());
						$fotoberkas = mysql_fetch_array($fotodet);
						?>
						<span>Data atas nama : <?php echo $berkas['calon_suami'];?></span>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="card card-stats">
						<div class="card-header card-header-warning card-header-icon">
							<div class="card-icon">
								<img style="width: 90px;
								height: 140px;" src="img/data/<?php echo $fotoberkas['foto_suami_2x3']?> "/>
							</div>
							<p class="card-category">Nama Calon Suami</p>
							<h4 class="card-title"><?php echo $berkas['calon_suami']?></h4>
							<p class="card-category">Tempat, Tanggal Lahir</p>
							<h4 class="card-title"><?php echo $berkas['ttl_suami']?></h4>
							<p class="card-category">Jenis Kelamin</p>
							<h4 class="card-title"><?php echo $berkas['jk_suami']?></h4>
							<p class="card-category">Warga Negara</p>
							<h4 class="card-title"><?php echo $berkas['wn_suami']?></h4>
							<p class="card-category">Agama</p>
							<h4 class="card-title"><?php echo $berkas['agama_suami']?></h4>
							<p class="card-category">Pendidikan</p>
							<h4 class="card-title"><?php echo $berkas['pendi_suami']?></h4>
							<p class="card-category">Pekerjaan</p>
							<h4 class="card-title"><?php echo $berkas['peker_suami']?></h4>
							<p class="card-category">Berkas</p>
							<h5 class="card-title">
								<a style="color: #000" href="img/data/<?php echo $fotoberkas['foto_suami_2x3']?>">2X3,</a>&nbsp;
								<a style="color: #000" href="img/data/<?php echo $fotoberkas['foto_suami_4x6']?>">4X6,</a>&nbsp;
								<a style="color: #000" href="img/data/<?php echo $fotoberkas['fc_ktp_suami']?>">KTP,</a>&nbsp;
								<a style="color: #000" href="img/data/<?php echo $fotoberkas['fc_ktp_wali_suami']?>">KTP_Wali,</a>&nbsp;
								<a style="color: #000" href="img/data/<?php echo $fotoberkas['fc_ktp_ortu_suami']?>">KTP_Ortu,</a>&nbsp;
								<a style="color: #000" href="img/data/<?php echo $fotoberkas['fc_kk_suami']?>">KK</a>
								<br>
								<a style="color: #000" href="img/data/<?php echo $fotoberkas['srt_ketRT_istri']?>">SRT KET RT,</a>&nbsp;
								<a style="color: #000" href="img/data/<?php echo $fotoberkas['srt_blm_memikah_istri']?>">SRT BLM MENIKAH,</a>&nbsp;
								<a style="color: #000" href="img/data/<?php echo $fotoberkas['srt_sehat_istri']?>">SRT KET SEHAT</a>

							</h5>
						</div>
						<div class="card-footer">
							<div class="stats">
								<i class="material-icons text-danger">home</i>
								<a href="#pablo">Kembali</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="card card-stats">
						<div class="card-header card-header-warning card-header-icon">
							<div class="card-icon">
								<img style="width: 90px;
								height: 140px;" src="img/data/<?php echo $fotoberkas['foto_suami_2x3']?> "/>
							</div>
							<p class="card-category">Nama Calon Istri</p>
							<h4 class="card-title"><?php echo $berkas['calon_istri']?></h4>
							<p class="card-category">Tempat, Tanggal Lahir</p>
							<h4 class="card-title"><?php echo $berkas['ttl_istri']?></h4>
							<p class="card-category">Jenis Kelamin</p>
							<h4 class="card-title"><?php echo $berkas['jk_istri']?></h4>
							<p class="card-category">Warga Negara</p>
							<h4 class="card-title"><?php echo $berkas['wn_istri']?></h4>
							<p class="card-category">Agama</p>
							<h4 class="card-title"><?php echo $berkas['agama_istri']?></h4>
							<p class="card-category">Pendidikan</p>
							<h4 class="card-title"><?php echo $berkas['pendi_istri']?></h4>
							<p class="card-category">Pekerjaan</p>
							<h4 class="card-title"><?php echo $berkas['peker_istri']?></h4>
							<p class="card-category">Berkas</p>
							<h5 class="card-title">
								<a style="color: #000" href="img/data/<?php echo $fotoberkas['foto_istri_2x3']?>">2X3,</a>&nbsp;
								<a style="color: #000" href="img/data/<?php echo $fotoberkas['foto_istri_4x6']?>">4X6,</a>&nbsp;
								<a style="color: #000" href="img/data/<?php echo $fotoberkas['fc_ktp_istri']?>">KTP,</a>&nbsp;
								<a style="color: #000" href="img/data/<?php echo $fotoberkas['fc_ktp_wali_istri']?>">KTP_Wali,</a>&nbsp;
								<a style="color: #000" href="img/data/<?php echo $fotoberkas['fc_ktp_ortu_istri']?>">KTP_Ortu,</a>&nbsp;
								<a style="color: #000" href="img/data/<?php echo $fotoberkas['fc_kk_istri']?>">KK</a>
								<br>
								<a style="color: #000" href="img/data/<?php echo $fotoberkas['srt_ketRT_istri']?>">SRT KET RT,</a>&nbsp;
								<a style="color: #000" href="img/data/<?php echo $fotoberkas['srt_blm_memikah_istri']?>">SRT BLM MENIKAH,</a>&nbsp;
								<a style="color: #000" href="img/data/<?php echo $fotoberkas['srt_sehat_istri']?>">SRT KET SEHAT</a>

							</h5>
						</div>
						<div class="card-footer">
							<div class="stats">
								<i class="material-icons text-danger">home</i>
								<a href="#pablo">Kembali</a>
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
</body>

</html>