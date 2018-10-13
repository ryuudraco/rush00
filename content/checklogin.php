<?php

	session_start();
	include_once '../Extra/functions.php';
	$conn = ft_connect_database();
	$sql = "SELECT id, username, email, passwd FROM Users WHERE email = '".$_POST[login]."'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result))
		{
			if (hash("whirlpool", $_POST[passwd]) == $row[passwd])
			{
				$_SESSION[username] = $row[username];
				$_SESSION[userid] = $row[id];
				header("Location: user.php"); 
			}
			else
				$output = "Incorrect password";
    	}
	} else {
		$results = 0;
		$output = "Account does not exist";
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
		<p><?php echo "$output"; ?></p>
	</div>
	<?php ft_printfooter(); ?>
</body>
</html>
