<?php

	session_start();
	include_once '../Extra/functions.php';
	$conn = ft_connect_database();
	if ($_POST[OK])
	{
		$sql =
			"UPDATE Users
			SET username = '".$_POST[username]."'
			WHERE id = '".$_SESSION[userid]."'";

		if (mysqli_query($conn, $sql))
		{
			$output = "Username updated successfully";
			$_SESSION[username] = $_POST[username];
		}
		else
		{
			$output = "Unable to update ".mysqli_error($conn)."\n";
		}
	}
	else
		header("location: index.php");

?>

<html lang="en">
<?php ft_printhead('Title'); ?>
<body>
	<?php ft_printheader(); ?>
	<div class="maincontent">
		<p><?php echo "$output"; ?></p>
	</div>
	<?php ft_printfooter(); ?>
</body>
</html>
