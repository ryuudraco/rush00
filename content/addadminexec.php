<?php

	session_start();
	include_once '../Extra/functions.php';
	ft_admincheck();
	if ($_POST['OK'] && $_POST[login] && $_POST[passwd])
	{
		$accounts = array($_POST[login]=>array("login"=>$_POST[login], "passwd"=>hash("whirlpool",$_POST[passwd])));
		file_put_contents('../Extra/adminaccounts', serialize($accounts));
		$status = "Success";

	}
	else
		$status = "Failure";

?>

<html lang="en">

<?php ft_printhead('Title'); ?>

<html lang="en">
<?php ft_printhead('Title'); ?>
<body>
	<?php ft_printheader(); ?>
	<div class="maincontent">
		<p><?php echo($status) ?></p>
		<a href="admin.php">Admin home</a>
	</div>
	<?php ft_printfooter(); ?>
</body>
</html>
