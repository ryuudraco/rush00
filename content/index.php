<?php

	session_start();
	include_once '../Extra/functions.php';

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
		<div class="slide-containter">
			<div class="mySlides fade">
  				<div class="numbertext">1 / 5</div>
  				<img src="" style="width:100%">
  				<div class="mov-header">Toy Story</div>
  				<div class="slide-text">Caption One</div>
			</div>
			<div class="slide-images fade">
  				<div class="numbertext">2 / 5</div>
  				<img src="" style="width:100%">
  				<div class="mov-header">Jumanji</div>
  				<div class="slide-text">Caption Two</div>
			</div>
				<div class="slide-images fade">
  					<div class="numbertext">3 / 5</div>
 					<img src="" style="width:100%">
 					<div class="mov-header"></div>
 					<div class="slide-text">Caption Three</div>
				</div>
				<div class="slide-images fade">
  					<div class="numbertext">4 / 5</div>
 					<img src="" style="width:100%">
 					<div class="mov-header">Toy Story</div>
 					<div class="slide-text">Caption Three</div>
				</div>
				<div class="slide-images fade">
  					<div class="numbertext">5 / 5</div>
 					<img src="" style="width:100%">
 					<div class="mov-header">Toy Story</div>
 					<div class="slide-text">Caption Three</div>
				</div>
				<a class="slide-prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="slide-next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<br>
		<div style="text-align:center">
  			<span class="slide-dot" onclick="currentSlide(1)"></span> 
  			<span class="slide-dot" onclick="currentSlide(2)"></span> 
  			<span class="slide-dot" onclick="currentSlide(3)"></span>
  			<span class="slide-dot" onclick="currentSlide(4)"></span> 
  			<span class="slide-dot" onclick="currentSlide(5)"></span> 
		</div>
		<div class="index-container">
			<h2>Trending</h2>
				<?php ft_printtrending(); ?>
			<h2>New Movies</h2>
				<?php ft_printnew(); ?>
	</div>
	<?php ft_printfooter(); ?>
</body>
</html>
