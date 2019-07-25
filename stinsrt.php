<?php
include "conn.php";
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$branch=$_POST['branch'];
$query="INSERT INTO `student`(`student_name`, `student_email`, `student_address`, `student_branch`) VALUES ('$name','$email','$address','$branch')";
$result=mysqli_query($con,$query);
if ($result) {
	// header('location:student.html');
	echo 'successfully Inserted';
}
else
{
	echo "Failed to Insert".mysqli_error($con);
}


?>