<!Doctype html>
<html>
	<head>
		<link rel = "stylesheet" href = "stylesheethome.css" >
		<h1> Champion's Chipper</h1>
		<title>Welcome to Champion's Chipper</title>
	</head>
	<body>
		<ul>
			<li style="float:right"><a href="register.html">Register</a></li>
			<li style="float:right"><a href="login.html">Login</a></li>
			<li><a class="active" href="menu.php">Menu</a></li>
			<li><a href="index.php">About</a></li>
			<li><a href="contact.php">Contact Us</a></li>
		</ul>
		<p> Chips </p>
		<hr>
		<br>
		
		<!-- CHIPS -->
		<div id="menu">
		<?php
			$con = mysqli_connect("localhost", "root", "", "assignment");
			
			$sql = "SELECT * FROM menu WHERE category = 'chips'";
			$result = mysqli_query($con, $sql);
			
			if (mysqli_num_rows($result) > 0)
			{
				//output data of each row
				while($row = mysqli_fetch_assoc($result))
				{
					echo "".$row['name']."<br>".$row['description']
					."<br> Price: € ".$row['price']."<br><br>";
				}
			}
			else
			{
				echo "There are no products in your table";
			}
			
		?>
		
			<img src="chips.jpg" id="chips" alt="maps" width="450" height="250">
			
		</div>
		
		<br>
		<hr>
		<p> Pizza </p>
		<hr>
		<br>
		
		<!-- PIZZA -->
		<div id="menu">
		<?php
			$con = mysqli_connect("localhost", "root", "", "assignment");
			
			$sql = "SELECT * FROM menu WHERE category = 'pizza'";
			$result = mysqli_query($con, $sql);
			
			if (mysqli_num_rows($result) > 0)
			{
				//output data of each row
				while($row = mysqli_fetch_assoc($result))
				{
					echo "".$row['name']."<br>".$row['description']
					."<br> Price: € ".$row['price']."<br><br>";
				}
			}
			else
			{
				echo "There are no products in your table";
			}
		?>
		
			<img src="pizza.jpg" id="pizza" alt="pizza" width="450" height="250">
		
		</div>
		
		<br>
		<hr>
		<p> Burger </p>
		<hr>
		<br>
		<!-- BURGER -->
		<div id="menu">
		<?php
			$con = mysqli_connect("localhost", "root", "", "assignment");
			
			$sql = "SELECT * FROM menu WHERE category = 'burger'";
			$result = mysqli_query($con, $sql);
			
			if (mysqli_num_rows($result) > 0)
			{
				//output data of each row
				while($row = mysqli_fetch_assoc($result))
				{
					echo "".$row['name']."<br>".$row['description']
					."<br> Price: € ".$row['price']."<br><br>";
				}
			}
			else
			{
				echo "There are no products in your table";
			}
		?>
		
			<img src="burger.png" id="burger" alt="burger" width="450" height="250">
		
		</div>
		
		<br>
		<hr>
		<p> Drinks </p>
		<hr>
		<br>
		
		<!-- DRINKS -->
		<div id="menu">
		<?php
			$con = mysqli_connect("localhost", "root", "", "assignment");
			
			$sql = "SELECT * FROM menu WHERE category = 'drinks'";
			$result = mysqli_query($con, $sql);
			
			if (mysqli_num_rows($result) > 0)
			{
				//output data of each row
				while($row = mysqli_fetch_assoc($result))
				{
					echo "".$row['name']."<br>".$row['description']
					."<br> Price: € ".$row['price']."<br><br>";
				}
			}
			else
			{
				echo "There are no products in your table";
			}
			
		?>
		
			<img src="drinks.jpg" id="drinks" alt="drinks" width="300" height="250">
		
		</div>
	</body>
</html>