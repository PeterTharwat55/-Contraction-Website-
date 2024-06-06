<html>
	<head>
		<style>
			table {
					border-collapse: collapse;
					width: 100%;
					color: #000000;
					font-family: monospace;
					font-size: 25px;
					text-align: left;
				}

			th {
				background-color: #588c7e;
				color: white;
			 }
				tr:nth-child(even) {background-color: #f2f2f2}

				header {
					list-style-type: none;		
					margin: 0;
					padding: 0;
					overflow: hidden;
					background-color: #333; 
					}

				li {
					float: left;
					}
				li a {
					display: block;
					color: white;
					text-align: center;
					padding: 20px 20px;
					text-decoration: none;
					}

				li a:hover {
						background-color: #111;
						}
		</style>
	
	
	<header>
		<li><img src="logo-sm-2-1.png"></li>

		<li><a href="HomePage - Copy.html">Home</a></li>
		
		<li><a href="Services.html">Our Services</a></li>
				
		<li><a href="http://localhost/TestSelection.php">Our Portfolio</a></li>
				
		<li><a href="About us.html">About us</a></li>
				
		<li><a href="Contact us.html">Contact us</a></li>
				
		<li><a href="Sign in.html">Sign in</a></li>
				
		<li><a href="Sign up.html">Sign up</a></li>
				<br>
	</header>
			 <link rel="stylesheet" href="External css.css">

			<title>Portfolio</title>
</head>
	<body>
		<table>
			<tr>
			<th>Id</th>
			<th>name</th>
			<th>Client</th>
			<th>year</th>
			<th>Progress</th>
			</tr>
				<?php
			$conn = mysqli_connect("localhost", "root", "","myPeter");
	
			// Check connection
			if ($conn->connect_error)
			 {
				die("Connection failed: " . $conn->connect_error);
 			 }

			$sql = "SELECT id, name, client, year, progress FROM Projects";

			$result = $conn->query($sql);

			if ($result->num_rows > 0)
			 {
				// output data of each row
				while($row = $result->fetch_assoc()) 
				{
				echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . 							"</td><td>" . $row["client"]. "</td></td>" . "</td><td>" . $row["year"]. 				"</td></td>" . "</td><td>" . $row["progress"]. "</td></tr>";
				}
			echo "</table>";
			}
			else
			 { echo "0 results"; }

			$conn->close();
				?>
		</table>
	</body>
</html>
