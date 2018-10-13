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
		<h2>Login</h2>
		<form action="checklogin.php" method="POST">
			<table>
				<tr>
					<td>Email:</td>
					<td><input type="text" name="login" placeholder="email" required></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="passwd" required></td>
				</tr>
				<tr>
					<td><input type="submit" name="OK" value="Login"></td>
				</tr>
			</table>
		</form>
		<p>Don't have an account? Create one <a href="createaccount.php">here</a>.</p>
	</div>
	<?php ft_printfooter(); ?>
</body>
</html>
