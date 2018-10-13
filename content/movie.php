<?php

	session_start();
	include_once '../Extra/functions.php';

    $con = ft_connect_database();
    $sql = "SELECT * FROM PRODUCT WHERE id = '".$_GET['id']."';";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result))
    {
        $title = $row['title'];
        $desc = $row['description'];
        $img = $row['image'];
        $rating = $row['rating'];
        $genre = $row['genres'];
    }

    $gen = unserialize('$genre');
    $count = count(array($gen));
?>

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
		<div class="movcontainer">
            <h1>
                <?php echo "$title" ?>
            </h1>
            <div class="image">
                <img class="image" src="<?php echo "$img";?>" alt="">
            </div>
            <br>
            <tr>
                <td><?php echo "$rating"?>/10★</td>
            </tr>
            <br>
            <div>
                <p><?php echo"$desc" ?></p>
            </div>
			<table>
            <form action="../Extra/addbasket.php" method="POST">
            <tr>
					    <td class="button"><input type="hidden" name="id" value="<?php echo"$_GET[id]" ?>" /><input type="hidden" name="url" value="../content/movie.php?id=<?php echo"$_GET[id]" ?>" /><input type="submit" name="OK" value="Add to Basket"></td>
				</tr>
			</form>
			</table>
		</div>
	</div>
	<?php ft_printfooter(); ?>
</body>
</html>