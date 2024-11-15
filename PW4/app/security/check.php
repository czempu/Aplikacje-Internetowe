<?php
require_once dirname(__FILE__).'/../../config.php';


session_start();
//pobranie roli
$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';

//jeśli brak parametru (niezalogowanie) to idź na stronę logowania
if ( empty($role) ){
	header("Location: ".$conf->app_url.'/app/security/login.php');
	exit();
}
//jeśli ok to idź dalej