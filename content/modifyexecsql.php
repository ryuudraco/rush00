<?php

	session_start();
	include_once '../Extra/functions.php';
	ft_admincheck();
	$conn = ft_connect_database();
	if ($_POST[OK])
	{
		$sql =
			"UPDATE Product
			SET title = '".$_POST[title]."', price= '".$_POST[price]."', rating= '".$_POST[rating]."', actors= '".$_POST[actors]."', director= '".$_POST[director]."', genres= '".$_POST[genres]."', image= '".$_POST[image]."', description = '".$_POST[decription]."'
			WHERE id = '".$_POST[id]."'";

		if (mysqli_query($conn, $sql))
		{
			$output = "Record updated successfully";
		}
		else
		{
			$output = "Unable to update ".mysqli_error($conn)."\n";
		}
	}
	else
		header("location: modify.php");

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
