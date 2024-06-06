<?php
			$name=$_POST["name"];
			$client=$_POST["client"];
			$year=$_POST["year"];
			$progress=$_POST["progress"];

		$con = mysqli_connect("localhost","root","") or die (" can not establish connection ");

		mysqli_select_db($con,"construction");

		$statment1= "insert into projects (name, client, year, progress) values('$name','$client','$year','$progress')";

		$flag =mysqli_query($con,$statment1);
		if ($flag)
		{
			echo "Record added Successfully";
		}
		else
		{
			die ("Can not add Record ".mysqli_error($con));
		}
		?>