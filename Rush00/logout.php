<?php
	session_start();
	unset($_SESSION["logged_on_user"]);
	$_SESSION["logged_on_user"] = 0;
	session_destroy();
	header("Location: index.php");
?>