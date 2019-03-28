<?php
include 'koneksi.php';
session_start();

$waktu	= $_POST['waktu'];
$lokasi_nkh = $_POST['lokasi_nkh'];
$item = array('H. Syarif Hidayat, S.Ag','Basirun, S.Ag','Dedi Faridi, M.Si','Abdul Rosyid','Harumain, S.Hi');
$random_keys=array_rand($item);
// if($waktu < 7 ){
// 	$penghulu_nkh = "H. Syarif Hidayat, S.Ag";
// }
// elseif ($waktu < 13) {
// 	$penghulu_nkh = "Basirun, S.Ag";
// }
// elseif ($waktu < 20) {
// 	$penghulu_nkh = "Dedi Faridi, M.Si";
// }
// elseif ($waktu < 25) {
// 	$penghulu_nkh = "Abdul Rosyid";
// }
// elseif ($waktu < 31) {
// 	$penghulu_nkh = "Harumain, S.Hi";
// }

$berkas = mysql_query("UPDATE `jadwal_user` SET
	waktu	= '$waktu',
	lokasi_nkh = '$lokasi_nkh',
	penghulu_nkh = '$item[$random_keys]'
	WHERE id_user= '{$_SESSION['id_user']}'");

if(!$berkas) {
	die('Invalid query: ' . mysql_error());
} else {
	echo "<SCRIPT type='text/javascript'>
	alert('jadwal pernikahan sudah di tetapkan');
	window.location.replace(\"http:dashboard-user.php\");
	</SCRIPT>";
}



?>