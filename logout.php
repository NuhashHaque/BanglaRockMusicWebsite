<?php 
	session_start();
	session_unset($_SESSION['user']);
	if(!isset($_COOKIE['user'])) {
		setcookie("user", "", time() - 3600);
} 
	session_destroy();

	header('location: index.php');
?>