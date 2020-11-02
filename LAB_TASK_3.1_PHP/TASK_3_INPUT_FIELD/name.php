<?php
	
	$data = "";

	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['name'];
		
		if($name == ""){
			echo " field required...";
		}else{
			$data = $name;
			echo $data;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="post" >
		<fieldset>
			<legend>Name</legend>
			<input type="text" name="name" value="Dipto">
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>