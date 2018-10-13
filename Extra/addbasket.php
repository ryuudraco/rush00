<?php

	session_start();
	include_once '../Extra/functions.php';
    if ($_POST[OK])
	{
	    $arr = $_SESSION[basket];
	    $arr = unserialize($arr);
	    array_push($arr, $_POST[id]);
	    $_SESSION[basket] = serialize($arr);
	    header("location: $_POST[url]");
	}
    else
        header("location: index.php");
?>