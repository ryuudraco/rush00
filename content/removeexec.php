<?php

	session_start();
	include_once '../Extra/functions.php';
	ft_admincheck();
	if (!$_GET[id])
		header("location: remove.php");
	$conn = ft_connect_database();
	$sql = 
		"DELETE FROM Product WHERE id='".$_GET[id]."';";
	if (mysqli_query($conn, $sql))
	{
		header("location: remove.php");
	}
	else
	{
		$output = "Unable to delete product ".mysqli_error($conn)."\n";
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
