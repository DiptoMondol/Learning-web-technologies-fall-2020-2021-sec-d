<?php

        include('../model/userService.php');
		if(isset($_POST['submit'])){
		if(isset($_POST['name']) || isset($_POST['cno']) || isset( $_POST['username']) || isset($_POST['password'])){
		$name = $_POST['name'];
		$cno = $_POST['cno'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		
		$user = [
			    'employeename'=>$name,
				'contact no'=>$cno,
				'username'=> $username,
				'password'=> $password
			];

	insertUsers($user);
	echo "User Inserted !";
	
	}
	}
?>