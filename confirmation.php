<!DOCTYPE html>
<html lang="en">
	<head>
		<title>confirmation</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="org.css">
		<?php 
		//assigning name variable
		$nombre = $_POST['name'];
		//assigning query array variables
		$partinfo[0] = $nombre; $partinfo[1] = $_POST['email'];
		$partinfo[2] = $_POST['cc']; $partinfo[3] = $_POST['ccnum'];
		$partinfo[4] = $_POST['amt'];$partinfo[5] = $_POST['allocation'];
		
		//query the db
		$db = new PDO("mysql:dbname=trains;host=localhost", "root");
		$db -> query("INSERT INTO partners VALUES ($partinfo[0],$partinfo[1],$partinfo[2],$partinfo[3],$partinfo[4],$partinfo[5])");
		?>
	</head>
	<body>
		<header class="col-sm-10">
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
			<h3>Thank you for your donation <?= $nombre ?>!</h3>
				<p class="noborder">
					Your donation has upgraded your status to partner!
					Your name will now appear under the 'Our Partners' tab on our website.
				</p>
				<p class="noborder">
					Our exhibits are made available because of partners, like you! We hold annual
					exclusive, partners-only events. You will be notified of these events by email
					prior to the event date.
				</p>
				<p class="noborder">
					Partners also have the ability to rent our facilities for special events, including
					meetings, receptions and galas. For more information regarding renting of our facilities,
					please contact us.
				</p>
			</div>
		</main>
		<hr>
		<footer>
			<h5>Visit Us Today!</h5>
			<p>123 ChooChoo Ln <br>
			Small Town, USA</p>
		</footer>
	</body>
</html>