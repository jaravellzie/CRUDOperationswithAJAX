<?php

include 'database.php';
$table="studentrec";

$stuID=$_POST['stuID'];
$gender=$_POST['gender'];
$course=$_POST['course'];
$age=$_POST['age'];
$name=$_POST['name'];

$sql="Insert into $table VALUES ($stuID,'$gender','$course',$age,'$name')";

if(mysqli_query($conn,$sql)){
	echo "New record created";

}
else{
	echo "<br>";
	echo mysqli_error($conn);
}
mysqli_close($conn);