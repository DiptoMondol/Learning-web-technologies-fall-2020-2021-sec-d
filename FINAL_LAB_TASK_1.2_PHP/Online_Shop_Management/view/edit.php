<?php
include('../model/db.php');


 global $nm;
 $nm = $_GET['name'];
 $conn = getConnection();
 $sql = "select * from info where employeename = '$nm'";
 $result = mysqli_query($conn, $sql);
 $data = mysqli_fetch_assoc($result);

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
          <td><input name="name" type="text" value="<?php echo  $data['employeename'];?>"></td>
          <td></td>
        </tr>   
        <tr><td colspan="4"><hr/></td></tr>
        <tr>
          <td>Contact No</td>
          <td>:</td>
         
          <td><input name="cno" type="text" value="<?php echo  $data['contact no'];?>"></td>
        </tr>   
        <tr><td colspan="4"><hr/></td></tr>
        <tr>
          <td>User Name</td>
          <td>:</td>
          <td><input name="username" type="text" value="<?php echo  $data['username'];?>"></td>
          <td></td>
        </tr>   
        <tr><td colspan="4"><hr/></td></tr>
        <tr>
          <td>Password</td>
          <td>:</td>
          <td><input name="password" type="password" value="<?php echo  $data['password'];?>"></td>
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
