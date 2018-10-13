<?php

	session_start();
	include_once '../Extra/functions.php';

?>

<html lang="en">

<?php ft_printhead('Title'); ?>

<body>
	<?php ft_printheader(); ?>
	<div class="maincontent">
		<form action="updateusername.php" method="POST">
			New Username: <input type="text" name="username"><br>
			<input type="submit" name="OK" value="change">
		</form>
		<form action="deleteuser.php" method="POST">
			<input type="hidden" name="id" value="<?php echo"$_SESSION[userid]" ?>" />
			<input type="submit" name="OK" value="delete">
		</form>
		<h2>Your Films</h2>
		<?php ft_printtrending(); ?>
	</div>
	<?php ft_printfooter(); ?>
</body>
</html>
