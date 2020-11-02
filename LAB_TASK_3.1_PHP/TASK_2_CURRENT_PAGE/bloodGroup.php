<?php
    if(isset($_REQUEST['submit'])){
	   if (empty($_REQUEST ['bloodGroup'])){
	
		echo "Field Required";
	}
	
	else{
	
		
		echo $_REQUEST['bloodGroup'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blood Group</title>
</head>
<body>
	<form method="post">
		<fieldset>
		<legend>Blood Group</legend>
		<select name="bloodGroup">
				    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="O+">O+</option>
                    <option value="AB+">AB+</option>
                    <option value="A-">A-</option>
                    <option value="B-">B-</option>
                    <option value="O-">O-</option>
                    <option value="AB-">AB-</option>
        </select>
        <hr>
        <input type="submit" name="submit" value="submit"> 
        </fieldset>           
	</form>

</body>
</html>