<?php
	
	$data = "";

	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['email'];
		
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
	<title>Email</title>
</head>
<body>
	<form method="post" >
		<fieldset>
			<legend>Email</legend>
			<input type="text" name="email" value="diptomondol17@gmail.com">
			 <button title="hint:sample@example.com"><b>i</b></button><hr>
			 <input type="submit" name="submit" value="submit">
			
		</fieldset>
		
	</form>

</body>
</html>
