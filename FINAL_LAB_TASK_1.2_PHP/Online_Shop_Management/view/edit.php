<?php

include('../php/editCheck.php');
?>

<!DOCTYPE html>
<html >
<head>
  <title>REGISTRATION</title>
</head>
<body>
  <fieldset>
    <legend><b>REGISTRATION</b></legend>
    <form action="" method="POST">
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
          <td><input name="username" type="text"></td>
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
