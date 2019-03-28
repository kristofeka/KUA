<?php 
	include 'koneksi.php';

	$calon_istri = $_POST['calon_istri'];
	$ttl_istri = $_POST['ttl_istri'];
	$jk_istri = $_POST['jk_istri'];
	$wn_istri = $_POST['wn_istri'];
	$agama_istri = $_POST['agama_istri'];
	$pendi_istri = $_POST['pendi_istri'];
	$peker_istri = $_POST['peker_istri'];
	$calon_suami = $_POST['calon_suami'];
	$ttl_suami = $_POST['ttl_suami'];
	$jk_suami = $_POST['jk_suami'];
	$wn_suami = $_POST['wn_suami'];
	$agama_suami = $_POST['agama_suami'];
	$pendi_suami = $_POST['pendi_suami'];
	$peker_suami = $_POST['peker_suami'];

	
	$kua = mysql_query("INSERT INTO `pendaftaran` 
		VALUES (' ','$calon_istri','$ttl_istri','$jk_istri','$wn_istri','$agama_istri',
		'$pendi_istri','$peker_istri','$calon_suami','$ttl_suami','$jk_suami','$wn_suami',
		'$agama_suami','$pendi_suami','$peker_suami','0','0')");

	if(!$kua) {
		die('Invalid query: ' . mysql_error());
	} else {
		session_start();
		$_SESSION['calon_suami'] = $calon_suami;
		 $statusquery= mysql_query("SELECT * FROM `pendaftaran` WHERE `calon_suami` = '".$calon_suami."' ")or die(mysql_error());
         $stsarr = mysql_fetch_array($statusquery); 
		$upd = mysql_query("INSERT INTO `user` 
		VALUES ('','".$stsarr['id_user']."','$calon_suami','$calon_istri', 'user')");
		if(!$upd) {
		die('Invalid query: ' . mysql_error());
		} else {
			$updn = mysql_query("INSERT INTO `jadwal_user` 
			VALUES ('','".$stsarr['id_user']."','0000-00-00','-', '-')");
			if(!$updn) {
			die('Invalid query: ' . mysql_error());
			}else{
			
			header("location:berkasistri_register.php");
			}
		}
	}
?>