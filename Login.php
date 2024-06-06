<html>
	<body>
		<?php
			$username=$_POST["username"];
			$password=$_POST["password"];

			$conn = mysqli_connect("localhost", "root", "","construction");
	
			// Check connection
			if ($conn->connect_error)
			 {
				die("Connection failed: " . $conn->connect_error);
 			 }

			$sql = "SELECT username, password FROM users where username = '$username'" ;
			$result = $conn->query($sql);
			if($result->num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					if($row["username"] == $username && $row["password"] == $password)
					{
						echo "Welcome to our website";
header('location:insertion form.html');
						
					}
					else
					{
						echo "invalid user name or password";
					}
				}
			}
			else
			{
				echo "0 rows selected";
			}
		?>

	</body>
</html>