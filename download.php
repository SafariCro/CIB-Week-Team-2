<!DOCTYPE html>
<html lang="en">
<head>	
</head>
<body>
	<?php
	
	function downloadToCSV($table,$fileName){
	
		include 'connect.php';
		$conn = OpenCon();
		
		$result = $conn->query('SELECT * FROM $table');
		if (!$result) die('Couldn\'t fetch records');
		$num_fields = mysqli_num_fields($result);
		$headers = array();
		
		/*
		for ($i = 0; $i < $num_fields; $i++) {
			$headers[] = mysqli_field_name($result , $i);
		}
		
		*/
		$fp = fopen('php://output', 'w');
		if ($fp && $result) {
			ob_end_clean();
			header('Content-Type: text/csv');
			header('Content-Disposition: attachment; filename=$fileName');
			header('Pragma: no-cache');
			header('Expires: 0');
			fputcsv($fp, $headers);
			while ($row = $result->fetch_array(MYSQLI_NUM)) {
				fputcsv($fp, array_values($row));
			}
			die;
		}
		
		$conn->close();
	
	}
	?>
</body>
</html>