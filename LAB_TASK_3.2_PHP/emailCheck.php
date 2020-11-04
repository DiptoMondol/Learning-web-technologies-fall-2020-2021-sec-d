<?php
if(isset($_REQUEST['submit'])){
	$email=$_REQUEST['email'];
     
     if(empty($email))
        {
			echo " Enter your email address!";
		}
	  elseif(!preg_match("/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/",$email))
	    {
			echo "Invalid email address! "; 
		}
		 else {
			echo $_POST['email'];  
		}
}
?>