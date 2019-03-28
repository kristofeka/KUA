<?php
include 'koneksi.php';
session_start();
$statusquery= mysql_query("SELECT * FROM `user` WHERE `username` = '".$_SESSION['username']."' ")or die(mysql_error());
$stsarr = mysql_fetch_array($statusquery);
$kua = 'kuabonjer';
$id_user = $_POST['id_user'];

if ($stsarr['username'] === $kua){
	$status_kua = $_POST['status_kua'];
	$berkas = mysql_query("UPDATE `pendaftaran` SET 
		status_kua		= '$status_kua'
		WHERE id_user   = '$id_user'");
	if(!$berkas) {
		die('Invalid query: ' . mysql_error());
	} else {
		echo '<script type="text/javascript"> alert("data sudah terverifikasi")</script>';
		header("location:dashboard-admin.php");
	}
}
else {
	$status_klrhn = $_POST['status_klrhn'];
	$berkas = mysql_query("UPDATE `pendaftaran` SET 
		status_klrhn	= '$status_klrhn'
		WHERE id_user   = '$id_user'");
	if(!$berkas) {
		die('Invalid query: ' . mysql_error());
	} else {
		echo '<script type="text/javascript"> alert("data sudah terverifikasi")</script>';
		header("location:dashboard-admin.php");
	}
}





// $berkas = mysql_query("UPDATE `pendaftaran` SET 
// 	status_klrhn		= '$status_klrhn'
// 	status_kua		= '$status_kua'
// 	WHERE id_user   = '$id_user'");
// if(!$berkas) {
// 	die('Invalid query: ' . mysql_error());
// } else {
// 	header("location:dashboard-admin.php");

// }
?>