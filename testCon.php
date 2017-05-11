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

	echo "Connected Successfully";

	CloseCon($conn);

	?>
</body>
</html>