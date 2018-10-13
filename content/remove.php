<?php

	session_start();
	include_once '../Extra/functions.php';
	ft_admincheck();
	$conn = ft_connect_database();
	$sql = "SELECT * FROM Product";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result))
	{
		$str = $str."<tr><td>".$row[id]."</td><td>".$row[title]."</td><td><a href='removeexec.php?id=".$row[id]."'>delete</a></td></tr>";
	}
?>

<html lang="en">
<?php ft_printhead('Title'); ?>
<body>
	<?php ft_printheader(); ?>
	<div class="maincontent">
		<h2>Remove Product</h2>
		<form action="addexec.php" method="POST">
			<table>
				<tr>
					<td>Id</td>
					<td>Name</td>
					<td>Delete</td>
				</tr>
				<?php echo "$str"; ?>
			</table>
		</form>
	</div>
	<?php ft_printfooter(); ?>
</body>
</html>
