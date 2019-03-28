<?php

session_start();
$ip = $_SERVER['REMOTE_ADDR'];
$_SESSION['ip_user'] = $ip;

echo $ip;
?>