<?php

include 'database.php';

$stuID=$_POST['stuID'];

$sql = "delete from studentrec where stuID=$stuID";

if(mysqli_query($conn,$sql)){
	echo "Record update Succesfully";
	header("location:delete.php");
}
else{
	echo mysqli_error($conn);
}

mysqli_close($conn);