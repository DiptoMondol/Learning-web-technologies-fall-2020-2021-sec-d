<?php

	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form  method="POST" action="logincheck.php">
		<fieldset>
			<legend><b>LOGIN</b></legend>
		<table>
			<tr>
				<td>User Name :</td>
				<td><input type="text" name="username" ></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" name="password""></td>
			
			</tr>
		
		</table>
		
		<hr>
			<input type="checkbox" name="checkRemember" >Remember Me
			<br><br>
			<input type="submit" name="submit" value="Submit"> <a href="forgotpassword.html">Forgot Paswword?</a>
			
	
		</fieldset>
	</form>
</body>
</html>
                
