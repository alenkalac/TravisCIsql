<?php 
	use alen\Database;

	require_once '../vendor/autoload.php';
	
	$db = new Database();
	echo $db->checkPassword("admin", "admin");
?>