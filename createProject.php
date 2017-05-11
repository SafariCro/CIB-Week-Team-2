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
	$projectName = mysqli_real_escape_string($conn, $_REQUEST['projectName']);
	
	$sql = "INSERT INTO projects (projectID, projectName)
	VALUES ('$projectID', '$projectName')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	
	header('location: http://localhost/cib/createProject.html');
	exit;
	?>
</body>
</html>