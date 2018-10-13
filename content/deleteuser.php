<?php

	session_start();
	include_once '../Extra/functions.php';
	if (!$_POST[id])
		header("location: remove.php");
	$conn = ft_connect_database();
	$sql = 
		"DELETE FROM Users WHERE id='".$_SESSION[userid]."';";
	if (mysqli_query($conn, $sql))
	{
		header("location: logout.php");
	}
	else
	{
		$output = "Unable to delete user ".mysqli_error($conn)."\n";
	}

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
