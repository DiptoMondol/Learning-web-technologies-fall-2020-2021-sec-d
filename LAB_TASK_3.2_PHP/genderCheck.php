<?php
if(!isset($_REQUEST['gender']))
   {
       echo "Select your Gender!";
   }
   else {
       $gender = $_REQUEST['gender'];
       echo "Submit Successful ";
   }

?>