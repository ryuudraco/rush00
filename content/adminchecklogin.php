<?php

	session_start();
	include_once '../Extra/functions.php';
	if (file_exists('../Extra/adminaccounts'))
	{
		$accounts = unserialize(file_get_contents('../Extra/adminaccounts'));
		foreach ($accounts as $key=>$val)
		{
			if ($key == $_POST[login] && $val[passwd] == hash("whirlpool", $_POST[passwd]))
			{
				$_SESSION[admin] = true;
				$_SESSION[username] = 'admin';
				header("Location: admin.php");
			}
			else
			{
				$output = "Incorrect password or username";
			}
		}
	}

?>

<html lang="en">
<?php ft_printhead('Title'); ?>
<body>
	<?php ft_printheader(); ?>
	<div class="maincontent">
		<h2>Admin Login</h2>
		<p><?php echo($output)?></p>
		<form action="adminchecklogin.php" method="POST">
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
	</div>
	<?php ft_printfooter(); ?>
</body>
</html>
