<?php
	//session.start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Logbook TEST</title>
        <meta charset="UTF-8" />
        <meta name="keywords" content="" />
        <meta name="description" content="Logbook test page" />
        <meta name="author" content="Murph Strange" />
        <link rel="stylesheet" type="text/css" href="css/theme.css" />
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/script.js"></script>
	</head>
	<body>
		<iframe src="history.php" width="100%" height="100%" id="window"></iframe>
		<form>
			<input type="textarea" id="input" />
			<button type="button">Post</button>
		</form>
	</body>
</html>