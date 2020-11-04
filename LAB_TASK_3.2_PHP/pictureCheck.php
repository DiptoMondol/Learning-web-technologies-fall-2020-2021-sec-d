<?php
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

