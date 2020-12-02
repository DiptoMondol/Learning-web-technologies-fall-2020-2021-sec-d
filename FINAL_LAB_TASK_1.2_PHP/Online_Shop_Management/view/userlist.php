<?php
	require_once('../php/header.php');
	require_once('../model/db.php');

	$conn = getConnection();
	$sql = "select * from info";
	$result = mysqli_query($conn, $sql);
	//$data = mysqli_fetch_assoc($result);
	//echo $data['employeename'];

?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome Home! <?php echo $_COOKIE['flag'];?></h1>
	
	<a href="home.php">Back</a> |
	<a href="../php/logout.php">logout</a>

	<h3>User list</h3>

	<table border="1">
		<tr>
			<td>Employee Name</td>
			<td>Contact No</td>
			<td>User Name</td>
			<td>Password</td>
			<td>Action</td>
		</tr>

		<?php 
			while($data = mysqli_fetch_assoc($result)){
		?>
				<tr>
					<td><?= $data['employeename'] ?></td>
					<td><?= $data['contact no'] ?></td>
					<td><?= $data['username'] ?></td>
					<td><?= $data['password'] ?></td>
					<td>
						<a href="insert.php" >Insert</a> |
						<a href="edit.php?name=<?= $data['employeename'] ?>">Update</a> |
					    <a href="delete.php"> DELETE</a>
						
					</td>
				</tr>

		<?php } ?>

	</table>
</body>
</html>