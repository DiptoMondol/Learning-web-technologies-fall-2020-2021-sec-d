<?php

        require_once('../model/userService.php');
		if(isset($_POST['submit'])){
		if(isset($_POST['name']) || isset($_POST['cno']) || isset( $_POST['username']) || isset($_POST['password'])){
			
		$name = $_POST['name'];
		$cno = $_POST['cno'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		echo $name;
		echo $cno;
		echo $username;
		echo $password;
        $conn = getConnection();
		$sql = "INSERT INTO info (employeename,contact no, username,password) 
      VALUES('$name','$cno','$username','$password')";

		$status = mysqli_query($conn, $sql);

		if($status){
			echo "Inserted successfully";
		}else{
			echo "Error";
		}
		}
		}
?>