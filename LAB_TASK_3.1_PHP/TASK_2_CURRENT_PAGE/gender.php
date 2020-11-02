<?php

  if(isset($_REQUEST['submit'])){
	

	if (empty($_REQUEST ['gender'])){
	
		echo "Field Required";
	}
	
	else{
	
		
		echo $_REQUEST['gender'];
	}
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Gender</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend>Gender</legend>
			<input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Other" >Other
            <hr>
			<input type="submit" name="submit" value="submit">

        </fieldset>
	
	</form>

</body>
</html>