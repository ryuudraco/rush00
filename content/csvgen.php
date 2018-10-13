<?php

	session_start();
	include_once '../Extra/functions.php';
	//ft_admincheck();

	$arr = array();
	$handle = fopen ("../Extra/shortmovielist.csv", "r");
	$str = fgets($handle);
	while ($str = fgets($handle))
	{
		array_push($arr, str_getcsv($str, ","));
	}

	$conn = ft_connect_database();

	foreach ($arr as $val)
	{
		$price = 19;
		if ($val[22] > 5)
			$price = 29;
		$val[3] = preg_replace('/"/', '\'', $val[3]);
		preg_match_all("/(?<='name': ')(.*?)(?='})/", $val[3], $genarr);
		$genser = serialize($genarr);
		$val[9] = preg_replace('/[^A-Za-z0-9 \-]/', '', $val[9]);
		$sql = 
			"INSERT INTO Product (title, price, rating, actors, director, genres, image, description, access_key)
			VALUES ('".$val[20]."', '".$price."', '".$val[22]."', '', '', '".$genser."', 'https://image.tmdb.org/t/p/original".$val[11]."', '".$val[9]."', '".rand(0,999999999)."');";
		mysqli_query($conn, $sql);
	}

?>

<html lang="en">
<?php ft_printhead('Title'); ?>
<body>
	<?php ft_printheader(); ?>
	<div class="maincontent">
		<p>CSV integrated into database.</p>
	</div>
	<?php ft_printfooter(); ?>
</body>
</html>
