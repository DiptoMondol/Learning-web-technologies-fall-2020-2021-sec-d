  
<?php

	require_once('../models/db.php');

	function validate($user){
			
		$conn = getConnection();
		$sql = "select * from login where username='{$user['username']}' and password='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}

	}

     
	

	function insert($user){

		$conn = getConnection();
		$sql = "insert into login( id,password , name,email,user_type) values('{$user['id']}' , '{$user['password']}','{$user['name']}','{$user['email']}','{$user['user_type']}')";

		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			return false;
		}
	}
	


?>