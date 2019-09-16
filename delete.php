<?php

include 'database.php';

$sql ="select * from studentrec";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		$stuID=$row['stuID'];
		$gender=$row['gender'];
		$course=$row['course'];
		$age=$row['age'];
		$name=$row['name'];

		echo "
	
				<style>
					input{
						width:110px;
					}
				</style>
				<form method='POST' action='delete_code.php'>
					<input type='hidden' name='stuID' value=$stuID />
					<input type='text' name='gender' value=$gender disabled />
					<input type='text' name='course' value=$course disabled />
					<input type='text' name='age' value=$age disabled />
					<input type='text' name='name' value=$name disabled />
					<input type='submit' value='delete now!' />
				</form>
				<br>	

		";
	}
}