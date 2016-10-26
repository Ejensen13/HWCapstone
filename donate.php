<!DOCTYPE html>
<html lang="en">
	<head>
		<title>donate</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="org.css">
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
				<form action="confirmation.php" method="post">
					<div>
						<fieldset>
							<legend><h3>Become a Partner, Donate Today! </h3></legend>
							<strong>Name of Individual, Group, or Organization: </strong>
							<input name="name"><br>
							<strong>Email: </strong>
							<input type="email" name="email" required><br>
							<strong>Card Type:</strong><br>
								<label><input type="radio" name="cc" value="visa"> Visa</label>
								<label><input type="radio" name="cc" value="mastercard"> Mastercard</label>
								<label><input type="radio" name="cc" value="discover"> Discover</label>
								<label><input type="radio" name="cc" value="americanexpress"> American Express</label><br>
							<strong>Credit Card Number: </strong>
							<input type="password" name="ccnum" required><br>
							<strong>Amount to Donate: </strong>
							<input type="number" name="amt" required><br>
							<strong>Allocation Preference: </strong><br>
							<textarea cols="40" rows="4" name="allocation"> Let us know where your donation should go!</textarea><br>
							<input type="submit" value="Donate Now!">
						</fieldset>
					</div>
				</form>
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