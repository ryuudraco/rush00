<?php

	session_start();
	include_once '../Extra/functions.php';
	ft_admincheck();

?>

<html lang="en">

<?php ft_printhead('Title'); ?>

<html lang="en">
<?php ft_printhead('Title'); ?>
<body>
	<?php ft_printheader(); ?>
	<div class="maincontent">
		<h2>Change Admin User</h2>
		<form action="addadminexec.php" method="POST">
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="login" placeholder="Username" required></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="passwd" required></td>
				</tr>
				<tr>
					<td><input type="submit" name="OK" value="Submit"></td>
				</tr>
			</table>
		</form>
	</div>
	<?php ft_printfooter(); ?>
</body>
</html>
