<?PHP

	session_start();
	include_once("../Extra/functions.php");
	ft_admincheck();

	include_once("../Extra/functions.php");

	ft_create_database();

	$conn = ft_connect_database();

	$sql = "CREATE TABLE Users (
		id int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		username VARCHAR(30) NOT NULL,
  		email VARCHAR(255) NOT NULL,
  		passwd VARCHAR(1000) NOT NULL,
  		firstname VARCHAR(45) NOT NULL,
  		lastname VARCHAR(45) NOT NULL,
  		address VARCHAR(100) NOT NULL,
  		gender tinyint(1) NOT NULL,
		access_keys VARCHAR(4095) NOT NULL
	)";

	if (mysqli_query($conn, $sql)) {
		echo "Table Users created successfully"."\n";
	} else {
		echo "Error creating table: " . mysqli_error($conn)."\n";
	}

	$sql = "CREATE TABLE Product
	(
		id INT(10) unsigned AUTO_INCREMENT PRIMARY KEY,
  		title VARCHAR(100) NOT NULL,
  		price INT(10) NOT NULL,
		rating FLOAT(4,2) NOT NULL,
		actors VARCHAR(1023) NOT NULL,
		director VARCHAR(255) NOT NULL,
		genres VARCHAR(1023) NOT NULL,
		image VARCHAR(1024) NOT NULL,
		description VARCHAR(2047) NOT NULL,
		access_key VARCHAR(10) NOT NULL
	)";

	if (mysqli_query($conn, $sql)) {
		echo "Table Product created successfully"."\n";
	} else {
		echo "Error creating table: " . mysqli_error($conn)."\n";
	}
	
	mysqli_close($conn);

?>
