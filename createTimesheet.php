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
	
	$startDate = mysqli_real_escape_string($conn, $_REQUEST['startDate']);
	$endDate = mysqli_real_escape_string($conn, $_REQUEST['endDate']);
	$projectID = mysqli_real_escape_string($conn, $_REQUEST['projectID']);
	$workCode = mysqli_real_escape_string($conn, $_REQUEST['workCode']);
	$employeeID = mysqli_real_escape_string($conn, $_REQUEST['employeeID']);
	
	$sql = "INSERT INTO timesheets (startDate, endDate, projectID
	, workCode, employeeID)
	VALUES ('$startDate', '$endDate', '$projectID', '$workCode', '$employeeID')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	
	header('location: http://localhost/cib/createTimesheet.html');
	?>
</body>
</html>