<?php
$emailErr ="";
$email ="";
if (empty($_POST["email"])) {
  
    echo "invalid email";
}
    else
    {
    	$email = $_POST["email"];
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailErr = "Invalid email format";
		}
	else
	{
		echo $email;
	}

?>