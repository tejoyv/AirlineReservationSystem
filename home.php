<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
<h2>Welcome <?php echo $_SESSION['username'];?></h2>
</body>
</html>