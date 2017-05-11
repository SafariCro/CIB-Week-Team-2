<!DOCTYPE html>
<html lang="en">
<head>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"
	<meta charset="UTF-8">
	<style>
	
	
	body {
		background: url(Images/mount.jpeg) no-repeat;
		background-size: 100%;
		background-attachment: fixed;
	}
	
	#login {
		margin: auto;
		width: 30%;
		padding: 10px;
		box-shadow: 0 0 2px 2px #666;
		background-color: #F5F5F5;
		
		display:flex;
		justify-content:center;
		align-items:center;
		
		font-family: 'Oswald', sans-serif
	}
	
	#container {
		position: absolute;
		top: 0; right: 0; bottom: 0; left: 0;
		
		display:flex;
		justify-content:center;
		align-items:center;
	}
	
	table, th, td {
		border: 1px solid black;
	}
	
	</style>
</head>
<body>
	<div id="container">
		<div id="login">
			<form action="" method="post">
				<?php
					include 'connect.php';
					$conn = OpenCon();
					
					$sql = "SELECT * FROM employees";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						echo "<table><tr>
						<th>ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Other Names</th>
						<th>Position</th>
						<th>Date of Birth</th>
						</tr>";
						// output data of each row
						while($row = $result->fetch_assoc()) {
							echo 
							"<tr><td>".$row["employeeID"].
							"</td><td>".$row["firstName"].
							"</td><td>".$row["lastName"].
							"</td><td>".$row["otherNames"].
							"</td><td>".$row["position"].
							"</td><td>".$row["dateOfBirth"].
							"</td></tr>";
						}
						echo "</table>";
					} else {
						echo "0 results";
					}
					$conn->close();
				?>
				<br><br>
				<a href="downloadEmployees.php"> Download as CSV</a><br><br>
				<a href="createProject.html"> Create a new Project</a><br>
				<a href="createProjectLink.html"> Create a new Project Link</a><br>
				<a href="createTimesheet.html"> Create a new Timesheet</a><br>
				<a href="viewTimesheet.php"> View Timesheets</a>
			</form>
		</div>
	</div>
</body>
</html>