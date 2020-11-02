<?php

    $data1= "";
    $data2= "";
    $data3= "";
if(isset($_REQUEST['submit'])){
	$dd = $_REQUEST['date'];
	$mm = $_REQUEST['month'];
	$yyyy = $_REQUEST['year'];

	if($dd == "" && $mm == "" && $yyyy == ""){
			echo " field required...";
		}
	
    else{
			$data1= $dd;
			echo $_POST['date'];
	        echo "/";
	
            $data2=$mm;
            echo $_POST['month'];
	        echo "/";
	        
            $data3=$yyyy ;
            echo $_POST['year'];

		}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Date oF Birth</title>
</head>
<body>
	<form method="post"  >
		<fieldset>
			<legend>Date of Birth</legend>
			<label>&nbsp &nbspdd</label>
			<label>&nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp mm</label>
			<label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbspyyyy</label><br>
			<input type="text" name="date" size="2" value=" <?=$data1 ?>">/
            <input type="text" name="month" size="2" value=" <?=$data2 ?>">/
            <input type="text" name="year"size="4" value=" <?=$data3 ?>">/
            <hr>
            <input type="submit" name="submit" value="submit">
		</fieldset>
	</form>

</body>
</html>