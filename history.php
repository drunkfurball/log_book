<?php
	//session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="refresh" content ="5" />
	</head>
	<body>

		<?php
	
			$log_file = fopen("log_history.txt", "r") or die("Error opening file");
			while(!feof($log_file)) {
				echo "<p>";
				echo fget($log_file);
				echo "</p>";
			}
			fclose($log_file);
			
		?>
		
	</body>
</html>