<?php 
	include('../php/regitrationCheck.php');

 ?>
<html>

<head></head>
<body>
<center>
<form method ="post" action="">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="600px">
				<fieldset>
					<legend><h3>REGISTRATION</h3></legend>
					Id<br/><input type="text" name="id"><br/>
					Password<br/><input type="password" name ="password"><br/>
               																				 
					Confirm Password<br/><input type ="password" name ="cpassword"><br/>
					
					Name<br/><input type="text" name ="name"><br/>
					
					Email<br/><input type="text" name ="email"><br/>
					
					
					
					User Type
					
						<select name="type" multiple>
							<option value="admin">admin</option>
							<option value="teacher">teacher</option>
							
						</select>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
</body>
</html>		
