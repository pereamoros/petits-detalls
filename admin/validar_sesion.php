<?php
define('PRE_BASE_PATH', __DIR__ . '/..');
require_once PRE_BASE_PATH.'/config/config.php';
session_start();

if (!isset($_SESSION['usuario_id'])) {
	header("Location: /admin/login.php");
	exit();
}
?>