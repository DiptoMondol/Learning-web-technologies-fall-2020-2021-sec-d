<?php
	
	session_start();
    if(isset($_REQUEST['submit'])){
        if(!empty($_REQUEST['name']) || !empty($_REQUEST['password']) || !empty($_REQUEST['cpass']) ||  !empty($_REQUEST['id']) ||  !empty($_REQUEST['user'])){
            
            $info = $_REQUEST['name']."|".$_REQUEST['password']. "|".$_REQUEST['cpass'] ."|".$_REQUEST['id'] ."|".$_REQUEST['user']."\n";
            $myfile = fopen("registrationfile.txt", "w");
            fwrite($myfile, $info);
            fclose($myfile);
            echo "Registration done!";
            
        }
        
        else{
            echo "Error!";
            
        }
    }
?>

<html>

<head></head>
<body>
<center>
<form method ="post" action="registration.php">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>REGISTRATION</h3></legend>
					Id<br/><input type="text" name="id"><br/>
					Password<br/><input type="password" name ="password"><br/>
					Confirm Password<br/><input type ="password" name ="cpass"><br/>
					Name<br/><input type="text" name ="name"><br/>
					User Type<hr/>
					<input type="radio" name="user" />User
					<input type="radio" name ="user"/>Admin
					<hr/>
					<input type="submit" name="submit" value="Sign Up">
					<a href="login.html">Sign In</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
</body>
</html>		
		