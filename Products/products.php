<?PHP
	require_once('../Database/connect.php');

	function product_byid(int $id)
	{
		$database = connect_database();
		$request = "SELECT * FROM products WHERE id = $id";
		$request = mysqli_query($database, $request);
		if ($request)
			$request = mysqli_fetch_assoc($request);
		return $request; 
	}

?>