<?php 
include 'koneksi.php';
session_start();

    $id_user = $_POST['id_user'];
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
    
    $berkas = mysql_query("UPDATE `pendaftaran` SET 
		calon_istri		= '$calon_istri',
		ttl_istri		= '$ttl_istri',
		jk_istri 		= '$jk_istri',
		wn_istri	    = '$wn_istri',
		agama_istri 	= '$agama_istri',
		pendi_istri		= '$pendi_istri',
		peker_istri		= '$peker_istri',
        calon_suami		= '$calon_suami',
		ttl_suami		= '$ttl_suami',
		jk_suami 		= '$jk_suami',
		wn_suami	    = '$wn_suami',
		agama_suami 	= '$agama_suami',
		pendi_suami		= '$pendi_suami',
		peker_suami		= '$peker_suami'
		WHERE id_user   = '$id_user'");

	if(!$berkas) {
		die('Invalid query: ' . mysql_error());
	} else {
		header("location:dashboard-user.php");

	}

?>