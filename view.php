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
		<table border='1'>
			<tr>
				<td>$stuID</td>
				<td>$gender</td>
				<td>$course</td>
				<td>$age</td>
				<td>$name</td>
			</tr>
		</table>

		";
	}
}