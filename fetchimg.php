<?php
include 'conn.php';
	$id=$_POST['id'];
	$query="SELECT `student_profile_pic` FROM `student` WHERE id='$id'";
	$update_query=mysqli_query($con,$query);
	// while($row = mysql_fetch_array($update_query))
	// {

// echo "<img src='$row[0]'/>";

// }

while($row = mysqli_fetch_array($update_query)){
            
                // echo "<img src=$row['student_profile_pic']>";
                <img src='<?php echo $row['student_profile_pic']; ?>' /> 
        }
?>