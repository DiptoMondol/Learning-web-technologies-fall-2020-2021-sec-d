<?php
if(isset($_REQUEST['submit'])){

	echo $_POST['date'];
	echo "//";
	echo $_POST['month'];
	echo "//";
	echo $_POST['year'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Date oF Birth</title>
</head>
<body>
	<form method="post" >
		<fieldset>
			<legend>Date of Birth</legend>
			<label>&nbsp &nbspdd</label>
			<label>&nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp mm</label>
			<label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbspyyyy</label><br>
			<input type="text" name="date" size="2"> /
            <input type="text" name="month" size="2"> /
            <input type="text" name="year"size="4" >
            <hr>
            <input type="submit" name="submit" value="submit">
		</fieldset>
	</form>

</body>
</html>