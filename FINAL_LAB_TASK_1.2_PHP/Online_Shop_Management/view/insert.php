<?php

 require_once('../model/userService.php');
        $conn = getConnection();
		$sql = "insert into info values('','{$user['employeename']}','{$user['contact no']}', '{$user['username']}', '{$user['password']}', '{$user['email']}', '{$user['type']}')";

		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			return false;
		}
?>

<!DOCTYPE html>
<html >
<head>
  <title>REGISTRATION</title>
</head>
<body>
  <fieldset>
    <legend><b>REGISTRATION</b></legend>
    <form action="registration.php" method="POST">
      <br/>
      <table width="100%"  cellspacing="0">
        <tr>
          <td>Employee Name</td>
          <td>:</td>
          <td><input name="name" type="text"></td>
          <td></td>
        </tr>   
        <tr><td colspan="4"><hr/></td></tr>
        <tr>
          <td>Contact No</td>
          <td>:</td>
         
          <td><input name="cno" type="text"></td>
        </tr>   
        <tr><td colspan="4"><hr/></td></tr>
        <tr>
          <td>User Name</td>
          <td>:</td>
          <td><input name="userName" type="text"></td>
          <td></td>
        </tr>   
        <tr><td colspan="4"><hr/></td></tr>
        <tr>
          <td>Password</td>
          <td>:</td>
          <td><input name="password" type="password"></td>
          <td></td>
        </tr>   
        <tr><td colspan="4"><hr/></td></tr>
      </table>
      <hr/>
      <input type="submit" name= "submit" value="Submit">
      <input type="reset">
    </form>
  </fieldset>
</body>
</html>
