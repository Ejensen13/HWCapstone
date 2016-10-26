<!DOCTYPE html>
<html lang="en">
	<head>
		<title>partners</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="org.css">
		<?php 
			$db = new PDO("mysql:dbname=trains;host=localhost", "root");
			$thing = $db -> query("SELECT name FROM partners");
			$j = 0;
			$names[$j] = '';
			foreach ($thing as $key=>$val){
				foreach($val as $key1=>$val1){
						$j++;
						$names[$j] = $val1;
					}
				}
		?>
	</head>
	<body>
		<header>
			<h1>United States Locomotive Historical Society</h1>
		</header>
		<nav class="col-sm-10">
				<ul>
					<li class="col-sm-10 col-m-3 col-lg-3"><a href="index.html">Home</a></li>
					<li class="col-sm-10 col-m-3 col-lg-3"><a href="History.html">History</a></li>
					<li class="col-sm-10 col-m-4 col-lg-4"><a href="partners.php">Our Partners</a></li>
				</ul>
		</nav>
		<main>
			<div class="content">
				<h3>Our Partners:</h3>
				<ul class="col-m-10">
					<?php foreach($names as $nombre){?>
						<li class="partner col-m-6"><?= $nombre ?></li>
					<?php } ?>
					<li class="partner col-m-6">Choo-Choo Train Rides Inc.</li>
					<li class="partner col-m-6">Joe's Burgers</li>
					<li class="partner col-m-6">Clinic Services</li>
					<li class="partner col-m-6">Jill Smith Foundation</li>
					<li class="partner col-m-6">Bill's Lawn Service</li>
					<li class="partner col-m-6">Jan and Gary Garcia and Family</li>
					<li class="partner col-m-6">Yolanda Zeney Foundation</li>
					<li class="partner col-m-6">Clip Clip Hair Salon</li>
					<li class="partner col-m-6">Woof Meow and Sparkle Inc.</li>
					<li class="partner col-m-6">Your Landlord</li>
					<li class="partner col-m-6">Drake and Josh</li>
					<li class="partner col-m-6">Housing Foundation of the US</li>
				</ul>
				<p class = "noborder"></p>
			</div>
			<div class="content">
				<h3>To become a partner, <a href="donate.php">donate now!</a> </h3> 
			</div>
		</main>
		<hr>
		<footer>
			<p>Call: (123) 456-7890,
			Email: LocomotiveSoc@gmail.com,
			or visit us today!
		</footer>
	</body>
</html>