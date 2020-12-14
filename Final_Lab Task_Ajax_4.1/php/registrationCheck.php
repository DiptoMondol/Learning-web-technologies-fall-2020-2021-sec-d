<?php
    require_once('../service/userService.php');
    if(isset($_POST['check_email']))
    {
        $email= $_POST['emailId'];

        if(isset($email))
        {
            $getemail = getEmail($email);
            if(!empty($getemail))
            {
                echo "email already exists!";
            }

            else
            {
                echo "seems good!";
            }
        }
    }

?>
<?php 
	session_start();
	require_once('../service/userService.php');

	if(isset($_POST['submit'])){

		$name 	= $_POST['name'];
		$id 	= $_POST['id'];
		$password 	= $_POST['password'];
		$cpassword 	= $_POST['cpassword'];
		$email 		= $_POST['email'];

		if(empty($name) || empty($cpassword) || empty($password) || empty($email) || empty($id) || empty(_$POST['type'])){
			header('location: ../views/register.php?error=null_value');
        }

                
        else{

			$user = [
				'id'=> $id,
				
				'password'=> $password,
				'name'=> $name,
				
				'email'=> $email,
				'user_type'=> $_$POST['type']
			];

			$status = insert($user);

			if($status){
				header('location: ../views/login.php?success=registration_done');
			}else{
				header('location: ../views/registration.php?error=db_error');
			}
		}
	}



?>