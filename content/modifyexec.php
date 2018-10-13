<?php

	session_start();
	include_once '../Extra/functions.php';
	ft_admincheck();
	if (!$_GET[id])
		header("location: modify.php");
	$conn = ft_connect_database();
	$sql = 
		"SELECT * FROM Product WHERE id='".$_GET[id]."';";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row[id];
		$title = $row[title];
		$price = $row[price];
		$rating = $row[rating];
		$actors = $row[actors];
		$director = $row[director];
		$genres = $row[genres];
		$image = $row[image];
		$description = $row[description];
		$access_key = $row[access_key];
	}

?>

<html lang="en">
<?php ft_printhead('Title'); ?>
<body>
	<?php ft_printheader(); ?>
	<div class="maincontent">
	<h2>Modify Product</h2>
		<form action="modifyexecsql.php" method="POST">
			<table>
				<tr>
					<td>Title:</td>
					<td><input type="text" name="title" value="<?php echo"$title" ?>" ></td>
				</tr>
				<tr>
					<td>Price:</td>
					<td><input type="text" name="price" value="<?php echo"$price" ?>" ></td>
				</tr>
				<tr>
					<td>Rating:</td>
					<td><input type="text" name="rating" value="<?php echo"$rating" ?>" ></td>
				</tr>
				<tr>
					<td>Actors:</td>
					<td><input type="text" name="actors" value="<?php echo"$actors" ?>"></td>
				</tr>
				<tr>
					<td>Director:</td>
					<td><input type="text" name="director"  value="<?php echo"$director" ?>"></td>
				</tr>
				<tr>
					<td>Genres:</td>
					<td><input type="text" name="genres" value="<?php echo"$genres" ?>"></td>
				</tr>
				<tr>
					<td>Image:</td>
					<td><input type="text" name="image"  value="<?php echo"$image" ?>"></td>
				</tr>
				<tr>
					<td>Description:</td>
					<td><input type="text" name="description"  value="<?php echo"$description" ?>"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value="<?php echo"$id" ?>" /><input type="submit" name="OK" value="Submit"></td>
				</tr>
			</table>
		</form>
	</div>
	<?php ft_printfooter(); ?>
</body>
</html>
