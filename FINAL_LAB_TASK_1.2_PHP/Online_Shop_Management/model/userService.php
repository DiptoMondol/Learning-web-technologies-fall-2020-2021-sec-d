<?php

	require_once('db.php');

	function validate($user){
			
		$conn = getConnection();
		$sql = "select * from info where username='{$user['username']}' and password='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}

	}


	function getById(){

		$conn = getConnection();
		$sql = "select * from info";
		$result = mysqli_query($conn, $sql);

		$user =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($user, $data);
		}

		return $user;
	}


	function getAllUsers(){

		$conn = getConnection();
		$sql = "select * from info";
		$result = mysqli_query($conn, $sql);

		$user =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($user, $data);
		}

		return $user;
	}


	function insertUsers($user){

		$conn = getConnection();
		$sql = "insert into info values('{$user['employeename']}','{$user['contact no']}', '{$user['username']}','{$user['password']}')";

		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			return false;
		}
	}


	function deleteUsers($id){
		$conn = getConnection();
		$sql = "delete from info where id=$id";
		$status = mysqli_query($conn, $sql);
		if($status){
			return true;
		}else{
			return false;
		}
	}
	function select($id){
		$conn = getConnection();
		$sql ="select * from info where id ='$id'";
		$result = mysqli_query($conn, $sql);
		global $row;
		$row = mysqli_fetch_assoc($result);
	
	}

	function updateUsers($user){
		$conn = getConnection();
		$sql ="update info set employeename = '{$user['employeename']}',contact no = '{$user['contact no']}', '{$user['username']}','{$user['password']}')";

	    $status = mysqli_query($conn, $sql);

	    if($status){
			return true;
		}else{
			return false;
		}

	}

?>