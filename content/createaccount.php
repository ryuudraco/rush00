<?php

	session_start();
	include_once '../Extra/functions.php';

?>

<html lang="en">
<?php ft_printhead('Title'); ?>
<body>
	<?php ft_printheader(); ?>
	<div class="maincontent">
		<h2>Create Account</h2>
		<form action="checkcreate.php" method="POST">
			<table>
				<tr>
					<td>Email:</td>
					<td><input type="text" name="login" required></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="passwd" required></td>
				</tr>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" required></td>
				</tr>
				<tr>
					<td>First name:</td>
					<td><input type="text" name="first" required></td>
				</tr>
				<tr>
					<td>last name:</td>
					<td><input type="text" name="last" required></td>
				</tr>
				<tr>
					<td><input type="submit" name="OK" value="Login"></td>
				</tr>
			</table>
		</form>
	</div>
	<?php ft_printfooter(); ?>
</body>
</html>
