<?php
    if(isset($_REQUEST['submit'])){
	   if (empty($_REQUEST ['degree'])){
	
		echo "Field Required";
	}
	
	else{
	
		
		echo $_REQUEST['degree'];
	}
}
       
?>
<!
<!DOCTYPE html>
<html>
<head>
	<title>Degree</title>
</head>
<body>
	<form method="post">
			<fieldset>
				<legend>Degree</legend>
					<input type="checkbox" name="degree" value="SSC"> SSC
					<input type="checkbox" name="degree" value="HSC"> HSC
					<input type="checkbox" name="degree" value="BSc"> BSc
					<input type="checkbox" name="degree" value="MSc"> MSc
					<hr>
					<input type="submit" name="submit" value="submit">

			</fieldset>
	</form>

</body>
</html>