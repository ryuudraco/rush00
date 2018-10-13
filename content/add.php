<?php

	session_start();
	include_once '../Extra/functions.php';
	ft_admincheck();

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<link rel="stylesheet" href="../Style/style.css">
</head>
<?php ft_printhead('Title'); ?>
<body class="body">
	<div class="container">
		<h2>Add Product</h2>
		<form action="addexec.php" method="POST">
			<table>
				<tr>
					<td>Title:</td>
					<td><input type="text" name="title"  ></td>
				</tr>
				<tr>
					<td>Price:</td>
					<td><input type="text" name="price"  ></td>
				</tr>
				<tr>
					<td>Rating:</td>
					<td><input type="text" name="rating"  ></td>
				</tr>
				<tr>
					<td>Actors:</td>
					<td><input type="text" name="actors" ></td>
				</tr>
				<tr>
					<td>Director:</td>
					<td><input type="text" name="director"  ></td>
				</tr>
				<tr>
					<td>Genres:</td>
					<td><input type="text" name="genres" ></td>
				</tr>
				<tr>
					<td>Image:</td>
					<td><input type="text" name="image"  ></td>
				</tr>
				<tr>
					<td>Description:</td>
					<td><input type="text" name="description"  ></td>
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
