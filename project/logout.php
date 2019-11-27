<?php 
session_start();
session_destroy();
echo "<center>You have been logged out</center>";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.container{
			columns: center;
		}
	</style>
</head>
<body>
<center>

	<div class="container"> <label></label><a href="studentlogin.php">Home</a> </div>
	</center>
</body>
</html>
