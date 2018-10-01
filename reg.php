<?php	
		
		$con = mysqli_connect("localhost", "root", "", "assignment");
		
		if(mysqli_connect_errno())
		{
			echo "Failed";
		}
		
		$sql = "INSERT INTO userdetails (username, password, fullname, phonenumber, housenumber, addressline1, town, postcode)
		VALUES
		('$_POST[username]','$_POST[password]','$_POST[fullname]','$_POST[phonenumber]','$_POST[housenum]','$_POST[addrline1]','$_POST[town]','$_POST[postcode]')";
		
		if(!mysqli_query($con,$sql))
		{
			echo("Registry unsuccessful");
		}
		else
		{
			header("Location: regsuccess.html");
		}
		
		mysqli_close($con);
		
?>