<?php

include 'database.php';

$stuID=$_POST['stuID'];
$gender=$_POST['gender'];
$course=$_POST['course'];
$age=$_POST['age'];
$name=$_POST['name'];

$sql = "update studentrec set gender='$gender',course='$course',age=$age, name='$name' where stuID=$stuID";

if(mysqli_query($conn,$sql)){
	echo "Record update Succesfully";
	header("location:update.php");
}
else{
	echo mysqli_error($conn);
}

mysqli_close($conn);