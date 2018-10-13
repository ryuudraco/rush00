<?php

	session_start();
	include_once '../Extra/functions.php';
	ft_admincheck();

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
	<div class="container">
		<h2>Admin Page</h2>
		<a href="../Database/install.php">Initialize database</a><br>
		<a href="add.php">Add product</a><br>
		<a href="remove.php">Remove product</a><br>
		<a href="modify.php">Modify product</a><br>
		<a href="csvgen.php">Generate from CSV</a><br>
		<a href="addadmin.php">Change admin user</a><br>
	</div>
	<?php ft_printfooter(); ?>
</body>
</html>
