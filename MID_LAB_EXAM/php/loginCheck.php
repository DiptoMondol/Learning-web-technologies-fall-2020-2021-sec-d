<?php
	//session_start();

	if(isset($_REQUEST['submit'])){
		$id = $_REQUEST['id'];
		$password = $_REQUEST['password'];
        $myfile = fopen("../view/registrationfile.txt", "r");
        $readfile = fread($myfile, filesize("../view/registrationfile.txt"));
        $user_info = explode("|", $readfile);
		if(empty($id) || empty($password)){
			
            
			header('location: ../view/login.php?msg=null');
		}else{

            
			if($user_info[3] == $id and $user_info[2] == $password){
				
				header('location: ../view/admin_home.php');
			}else{
				header('location: ../view/login.php?msg=invalid');
			}
		}
	}else{
		header('location: ../view/login.php');
	}
	

?>