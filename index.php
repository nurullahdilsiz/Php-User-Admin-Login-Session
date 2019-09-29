<?php
include 'setting.php';
session_start();


if (isset($_SESSION['user_name'])) {
	include 'home.php';
}else{
	include 'login.php';
}


?>



