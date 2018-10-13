<?php

	session_start();
	include_once '../Extra/functions.php';
	ft_admincheck();
	$conn = ft_connect_database();
	if ($_POST[OK])
	{
		$sql = 
			"INSERT INTO Product (title, price, rating, actors, director, genres, image, description, access_key)
			VALUES ('".$_POST[title]."', '".$_POST[price]."', '".$_POST[rating]."', '".$_POST[actors]."', '".$_POST[director]."', '".$_POST[genres]."', '".$_POST[image]."', '".$_POST[description]."', '".rand(0,999999999)."');";
		if (mysqli_query($conn, $sql))
		{
			$output = "New record created successfully";
		}
		else
		{
			$output = "Unable to add to table".mysqli_error($conn)."\n";
		}
	}
	else
		header("location: add.php");

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
