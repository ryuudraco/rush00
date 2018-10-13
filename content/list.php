<?php

	session_start();
	include_once '../Extra/functions.php';
	$conn = ft_connect_database();
	$sql = "SELECT * FROM Product";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result))
	{
		if (in_array($_GET[cat],unserialize($row[genres])[0]))
		{
			$str = $str."<tr><td>".$row[id]."</td><td><a href='movie.php?id=".$row[id]."'>".$row[title]."</a></td></tr>";
		}
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
		<h2>Categories</h2>
		<table>
            <?php echo"$str" ?>
		</table>
	</div>
	<?php ft_printfooter(); ?>
</body>
</html>