<?php
if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['name'];
     echo $_POST['name'];
     if($name == ""){
			echo " field required...";
		}else{
			$data = $name;
			
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
			<input type="text" name="name" value="">
			<hr>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
</body>
</html>