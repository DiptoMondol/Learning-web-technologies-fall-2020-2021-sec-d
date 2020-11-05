<?php
	session_start();
	if(isset($_COOKIE['flag'])){
?>


<!DOCTYPE html>
<html>
<head>
	<title>Public Home</title>
</head>
<body>
	<h1>Welcome to xCompany! </h1>
	<a href="logout.php">logout</a>
</body>
</html>

<?php

	}else{
		header('location: login.php?msg=login_first');
	}

?>
