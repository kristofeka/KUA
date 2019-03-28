<?php 
	include 'koneksi.php';
    session_start();

    $srt_ket_RT_istri = $_FILES['srt_ket_RT_istri']['name'];
	$tmp = $_FILES['srt_ket_RT_istri']['tmp_name'];
	$srt_ket_RT_istrinew = $_SESSION['id_user']. ' [ SRT KET RT ISTRI ] '.$srt_ket_RT_istri;
	$path = "img/data/".$srt_ket_RT_istrinew;
    move_uploaded_file($tmp, $path);
    
    $srt_blm_istri = $_FILES['srt_blm_istri']['name'];
	$tmp = $_FILES['srt_blm_istri']['tmp_name'];
	$srt_blm_istrinew = $_SESSION['id_user']. ' [ SRT KET BLM ISTRI ] '.$srt_blm_istri;
	$path = "img/data/".$srt_blm_istrinew;
    move_uploaded_file($tmp, $path);
    
    $srt_ket_shtI = $_FILES['srt_ket_shtI']['name'];
	$tmp = $_FILES['srt_ket_shtI']['tmp_name'];
	$srt_ket_shtInew = $_SESSION['id_user']. ' [ SRT KET SHT ISTRI ] '.$srt_ket_shtI;
	$path = "img/data/".$srt_ket_shtInew;
    move_uploaded_file($tmp, $path);

    $srt_ket_RT_suami = $_FILES['srt_ket_RT_suami']['name'];
	$tmp = $_FILES['srt_ket_RT_suami']['tmp_name'];
	$srt_ket_RT_suaminew = $_SESSION['id_user']. ' [ SRT KET RT SUAMI ] '.$srt_ket_RT_suami;
	$path = "img/data/".$srt_ket_RT_suaminew;
    move_uploaded_file($tmp, $path);

    $srt_blm_suami = $_FILES['srt_blm_suami']['name'];
	$tmp = $_FILES['srt_blm_suami']['tmp_name'];
	$srt_blm_suaminew = $_SESSION['id_user']. ' [ SRT KET BLM SUAMI ] '.$srt_blm_suami;
	$path = "img/data/".$srt_blm_suaminew;
    move_uploaded_file($tmp, $path);

    $srt_ket_shtI = $_FILES['srt_ket_shtS']['name'];
	$tmp = $_FILES['srt_ket_shtS']['tmp_name'];
	$srt_ket_shtSnew = $_SESSION['id_user']. ' [ SRT KET SHT SUAMI ] '.$srt_ket_shtS;
	$path = "img/data/".$srt_ket_shtSnew;
    move_uploaded_file($tmp, $path);

    $berkas = mysql_query("UPDATE `filedata_user` SET 
		srt_ketRT_istri		    = '$srt_ket_RT_istrinew',
		srt_blm_memikah_istri	= '$srt_blm_istrinew',
		srt_sehat_istri 		= '$srt_ket_shtInew',
        srt_ketRT_suami	    = '$srt_ket_RT_suaminew',
		srt_blm_memikah_suami	= '$srt_blm_suaminew',
		srt_sehat_suami 		= '$srt_ket_shtSnew'
		WHERE id_user = '{$_SESSION['id_user']}'");

	if(!$berkas) {
		die('Invalid query: ' . mysql_error());
	} else {
		header("location:dashboard-user.php");

	}
?>