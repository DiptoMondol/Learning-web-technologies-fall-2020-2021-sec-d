<?php
#Email Validation

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

   #Gender Validation
     

   if(!isset($_REQUEST['gender']))
     {
         echo "Select your Gender!";
     }
     else {
         $gender = $_REQUEST['gender'];
         echo "Submit Successful ";
     }



#DOB Validation
$date = $_REQUEST['date'];
$month = $_REQUEST['month'];
$year = $_REQUEST['year'];

if($date == NULL || $month==NULL || $year== NULL)
{
    echo "Invalid Date of Birth!";
}

elseif(($date>=1 && $date<=31) && ($month >=1 && $month<=12) && ($year >=1900 && $year <=2016))
{
    echo "Successful Submit!";
}
else {
    echo "Invalid Date of Birth!";
}

#Degree Validation

if(!isset($_REQUEST['degree']))
{
    
    echo "Invalid Degree!";
}
else {
    $degree = $_REQUEST['degree'];
    echo "Submit Successful!";
}
  

  #Blood Group Validation
  $blood =$_REQUEST['bloodGroup'];

  if(empty($bloodGroup))
  {
      echo "Invalid Blood Group!";
  }
  else {
      
      echo "Submit Successful!";
  }


#Profile Picture validation

if(!$_REQUEST['fileName'])
{
    echo "Invalid Profile!";
}

elseif ($_REQUEST['fileName']) 
{
   $file = $_REQUEST['fileName'];

   echo "Submit Successful!";
}

?>


?>