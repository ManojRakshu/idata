<?php
include "conn.php";
$name = $_POST['name'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$pwd = password_hash($pwd, PASSWORD_BCRYPT);
$query="INSERT INTO `user`(`name`, `email`, `password`) VALUES ('$name','$email','$pwd')";
$result=mysqli_query($con,$query);
if ($result) {
	echo "Successfully Inserted";
	
}
else
{
	echo "Failed to Insert".mysqli_error($con);
}


?>