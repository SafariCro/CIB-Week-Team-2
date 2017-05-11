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
	
	$firstName = mysqli_real_escape_string($conn, $_REQUEST['firstName']);
	$lastName = mysqli_real_escape_string($conn, $_REQUEST['lastName']);
	$otherNames = mysqli_real_escape_string($conn, $_REQUEST['otherNames']);
	$position = mysqli_real_escape_string($conn, $_REQUEST['position']);
	$dateOfBirth = mysqli_real_escape_string($conn, $_REQUEST['dateOfBirth']);
	
	$sql = "INSERT INTO Employees (firstName, lastName, otherNames
	, position, dateOfBirth)
	VALUES ('$firstName', '$lastName', '$otherNames', '$position'
	, '$dateOfBirth')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	
	header('location: http://localhost/cib/createEmp.html');
	exit;

	?>
</body>
</html>