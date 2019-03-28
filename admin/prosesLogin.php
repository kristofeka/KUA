<?php 
include 'koneksi.php';
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysql_query("select * from user where username='$username' and password='$password'");
$cek = mysql_num_rows($login);

if($cek > 0){

	
	$_SESSION['username'] = $username;
	$query= mysql_query("SELECT * FROM `user` WHERE `username` = '".$_SESSION['username']."' ")or die(mysql_error());
  	$arr = mysql_fetch_array($query);
  	if ($arr['hak_akses'] == "user"){
  		$_SESSION['status'] = "login";
      $_SESSION['id_user'] = $arr['id_user'];
  		header("location:dashboard-user.php");
  	}
  	else if($arr['hak_akses'] == "admin"){
      $_SESSION['status'] = "login";
      $_SESSION['username'] = $arr['username'];
  		header("location:dashboard-admin.php");
  	}
 
}else{
	echo "<script type='text/javascript'>";
	echo "alert('Username atau Password salah');";
	echo "window.location.href = 'login.php';";
	echo "</script>";
}

?>