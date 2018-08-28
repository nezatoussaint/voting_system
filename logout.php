<?php
ob_start();
session_start();
if(isset($_SESSION['id'])) {
	session_destroy();
	unset($_SESSION['id']);
	unset($_SESSION['name']);
	unset($_SESSION['course']);
	unset($_SESSION['year']);
	header("Location: index.php");
} else {
	header("Location: index.php");
}
?>