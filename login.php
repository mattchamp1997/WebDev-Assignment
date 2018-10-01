<?php
		
		$con = mysqli_connect("localhost", "root", "", "assignment");
		
		if(mysqli_connect_errno())
		{
			echo "Failed";
		}

        $username = $_POST["username"];
        $password = $_POST["password"];

		$sql = "SELECT * FROM userdetails WHERE username = '$username'";
		
		if(!mysqli_query($con,$sql))
		{
			header("Location: loginfail.html");
		}
		else
		{			
			$sql = "SELECT * FROM userdetails WHERE password = '$password'";
			
			if(mysqli_query($con,$sql))
			{
				header("Location: loginsuccess.html");
				
			}
			else
			{
				header("Location: loginfail.html");
			}
		}
		
		mysqli_close($con);
		
?>