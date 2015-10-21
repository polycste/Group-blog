<?php 
	session_start();
	unset($_SESSION['user_id']);
	unset($_SESSION['user_name']);
	session_destroy();
	//cookie
	setcookie("user_name", $_SESSION["user_name"], time() - 172800);

	header("Location:../../index.php");
?>