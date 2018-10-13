<?php

	session_start();
	include_once '../Extra/functions.php';
	include_once '../Products/products.php';

	$con = ft_connect_database();
    $sql = "SELECT * FROM PRODUCT WHERE id = '".$_GET['id']."';";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result))
    {
        $title = $row['title'];
		$img = $row['image'];
	}

	$array = unserialize($_SESSION['basket'])[0];
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<link rel="stylesheet" href="../Style/style.css">
</head>
<?php ft_printhead('Title'); ?>
<body class="body">
	<?php ft_printheader(); ?>
	<div class="maincontent">
		<div class="container">
			<h2>Basket</h2>
			<table>
				<tr>
					<?php
					for ($i = 0; $i < $count; $i++)
					{
							echo '<td><?php echo "$title" ?></td>';
							echo '<td style="float:right">1</td>';
					}
					?>
				</tr>
				<tr>
					<td class="button"><input type="submit" name="OK" value="Confirm Order"></td>
					<td><input type="submit" name="OK" value="Cancel Order"></td>
				</tr>
			</table>
		</div>
	</div>
	<?php ft_printfooter(); ?>
</body>
</html>