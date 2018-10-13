<?php

	session_start();
	include_once '../Extra/functions.php';

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<link rel="stylesheet" href="../Style/style.css">
</head>
    <?php ft_printhead('Title'); ?>
<body class="body">
	<?php ft_printheader(); ?>
	<div class="maincontent">
		<div class="container">
		<h2>Categories</h2>
		<table>
	    	<tr>
                <td><a href="list.php?cat=Romance" style="color:#b30000;">Romance</a></td>
	    	</tr>
	    	<tr>
                <td><a href="list.php?cat=Action" style="color:#b30000;">Action</a></td>
	    	</tr>
	    	<tr>
                <td><a href="list.php?cat=Comedy" style="color:#b30000;">Comedy</a></td>
	    	</tr>
		</table>
	</div>
	<?php ft_printfooter(); ?>
</body>
</html>