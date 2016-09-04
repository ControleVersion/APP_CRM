<?php 
// session_start inicia a sessão
session_start();

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	echo '<script> window.location.href="../login.php";</script>';
	header('location: ../login.php');
