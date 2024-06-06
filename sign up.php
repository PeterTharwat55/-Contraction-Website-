<?php
			$name=$_POST["name"];
			$username=$_POST["username"];
			$password=$_POST["password"];
			

		$con = mysqli_connect("localhost","root","") or die (" can not establish connection ");

		mysqli_select_db($con,"construction");

		$statment1= "insert into users (username, password, name) values('$username','$password','$name')";

		$flag =mysqli_query($con,$statment1);
		if ($flag)
		{
			echo "Record added Successfully";}
			
		else
		{
			die ("Can not add Record ".mysqli_error($con));
		}
		?>