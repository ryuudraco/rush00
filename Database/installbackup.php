<?PHP
	function db_connect()
	{
		$add = "";
		$user = "";
		$pass = "";
		$database = "rush";

		$mysqli = mysqli_connect($add, $user, $pass, $database);
		if (mysqli_connect_errno($mysqli))
		{
			echo "Failed to connect to the database: ".mysqli_connect_errno();
			return (NULL);
		}
		return $mysqli;
	}

	$db = db_connect();
	$sql = "DROP DATABASE 'rush';";
	$request = mysqli_query($db, $sql);

	var_dump(mysqli_error($db));

	$sql = "CREATE DATABASE 'rush';";
	$request = mysqli_query($db, $sql);

	var_dump(mysqli_error($db));

	$db =  connect_database();
	$sql = "CREATE DATABASE `rush`;";
	$req = mysqli_query($db, $sql);

	$db = connect_database();
	$sql = "SET FOREIGN_KEY_CHECKS=0;";
	$req = mysqli_query($db, $sql);

	$sql = "CREATE TABLE 'Users'"
	(
		`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
		`username` varchar(30) NOT NULL,
  		`email` varchar(255) NOT NULL,
  		`password` varchar(100) NOT NULL,
  		`isAdmin` tinyint(1) DEFAULT '0',
  		`firstname` varchar(45) NOT NULL,
  		`lastname` varchar(45) NOT NULL,
  		`address` varchar(100) NOT NULL,
  		'gender' tinyint(1) DEFAULT '0',
  		PRIMARY key ('id')
	)

	$sql = "CREATE TABLE 'Product'"
	(
		`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  		`name` varchar(100) NOT NULL,
  		`price` double unsigned NOT NULL,
  		`databaseid` int(10) unsigned NOT NULL,
  		`isAdult` tinyint(1) DEFAULT '0',
  		`picture` varchar(50) DEFAULT NULL,
  		`stock` int(10) unsigned DEFAULT 10,
  		'description' varchar(255)
  		PRIMARY key ('id')
	)

	$sql = "CREATE TABLE 'Credits'"
	(
		'id' int(10) unsigned NOT NULL AUTO_INCREMENT,
		'number' int(16) NOT NULL,
		'expiry' int
		'CVV' int
		PRIMARY key ('id')
	)

	$sql = "CREATE TABLE 'Category'"
	(
		'id' int(10) unsigned NOT NULL AUTO_INCREMENT,
		'name' varchar(45) NOT NULL,
		PRIMARY KEY ('id'),
		UNIQUE KEY `id_UNIQUE` (`id`)
	)
	$req = mysqli_query($db, $sql);
	var_dump(mysqli_error($db));