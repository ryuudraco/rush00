<?php

	session_start();
	include_once '../Extra/functions.php';
	ft_admincheck();
	$conn = ft_connect_database();
	$sql = "SELECT * FROM Product";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result))
	{
		$str = $str."<tr><td>".$row[id]."</td><td>".$row[title]."</td><td><a href='modifyexec.php?id=".$row[id]."'>modify</a></td></tr>";
	}
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
		<h2>Modify Product</h2>
		<form action="addexec.php" method="POST">
			<table>
				<tr>
					<td>Id</td>
					<td>Name</td>
					<td>Modify</td>
				</tr>
				<?php echo "$str"; ?>
			</table>
		</form>
	</div>
	<?php ft_printfooter(); ?>
</body>
</html>
