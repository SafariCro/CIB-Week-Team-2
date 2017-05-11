<!DOCTYPE html>
<html lang="en">
<head>
	<style>

	</style>
</head>
<body>
	<?php
	include 'connect.php';

	$conn = OpenCon();
	
	$projectID = mysqli_real_escape_string($conn, $_REQUEST['projectID']);
	$employeeID = mysqli_real_escape_string($conn, $_REQUEST['employeeID']);
	
	$sql = "INSERT INTO projectemployeelink (projectID, employeeID)
	VALUES ('$projectID', '$employeeID')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	
	header('location: http://localhost/cib/createProjectLink.html');
	exit;
	?>
</body>
</html>