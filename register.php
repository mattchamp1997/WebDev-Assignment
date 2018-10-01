<!Doctype html>
<html>
	<head>
		<link rel = "stylesheet" href = "stylesheethome.css" >
		<h1> Champion's Chipper</h1>
		<title>Welcome to Champion's Chipper</title>
	</head>
	<body>
		<ul>
			<li style="float:right"><a class="active" href="register.php">Register</a></li>
			<li style="float:right"><a href="login.php">Login</a></li>
			<li><a href="menu.php">Menu</a></li>
			<li><a href="index.php">About</a></li>
			<li><a href="contact.php">Contact Us</a></li>
		</ul>
		<p> Register </p>
		<hr>
		<br>
		<form action="reg.php" method="post">
		Username: <input type="text" name="username" placeholder="Enter your username">
		<br>
		Password: <input type="text" name="password" placeholder="Enter your password">
		<br>
		Full Name: <input type="text" name="fullname" placeholder="Enter your full name">
		<br>
		Phone Number: <input type="text" name="phonenumber" placeholder="Enter your phone number">
		<br>
		House Number: <input type="text" name="housenum" placeholder="Enter your house number">
		<br>
		Address Line 1: <input type="text" name="addrline1" placeholder="Enter your address">
		<br>
		Town: <input type="text" name="town" placeholder="Enter your town">
		<br>
		Postcode: <input type="text" name="postcode" placeholder="Enter your postcode">
		<br><br>
		<input type="submit">
		<br>
		
	</form>
	</body>
</html>