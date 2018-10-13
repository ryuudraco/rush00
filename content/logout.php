<?php

	session_start();
	include_once '../Extra/functions.php';
	session_destroy();
	header('location: index.php');
?>
