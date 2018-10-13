<?PHP
	function connect_database()
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
?>