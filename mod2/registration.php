<?php 
$uname = $_POST['uname'];
$eml = $_POST['email'];
$mob = $_POST['contct'];
$address = $_POST['addr'];
$dob = $_POST['dob'];

//Establishing a connection with PHP 
$connection_details = mysqli_connect("localhost","root","","sectiong");
if(!$connection_details)
{
	die("problem in connection establish");
}

// save button coding

if(isset($_POST['submit']))
{
$insert_query = "INSERT INTO regis(uname,emal,mob,addr,dob) VALUES('$uname','$eml','$mob','$address','$dob')";
if(mysqli_query($connection_details,$insert_query))
{
	//echo "data inserted successfully";
	//echo "<script>alert()</script>";
	header("refresh:0,url=form.html");
}
else{
	echo "unable to store data";
}
}

//Display button coding
if(isset($_POST['display']))
{
	$display_query = "SELECT * FROM regis";
	$data = mysqli_query($connection_details,$display_query);
	if(mysqli_num_rows($data)>0){
		echo "<table border=1 px solid black>";
		echo "<tr>
		<th>Id</th>
		<th>User_Name</th>
		<th>User_Email</th>
		<th>Contact No</th>
		<th>Address</th>
		<th>DateOfBirth</th></tr>";

		while($new_data = mysqli_fetch_assoc($data))
		{
			echo "<form >";
			echo "<tr>";
			echo "<td><input type=text name=id value=$new_data[id]></td>";
			echo "<td>".$new_data['id']."</td>   ";
			echo "<td>".$new_data['uname']."  </td> ";
			echo "<td>".$new_data['emal']." </td>  ";
			echo "<td>".$new_data['mob']." </td>  ";
			echo "<td>".$new_data['addr']."</td>   ";
			echo "<td>".$new_data['dob']." </td>  ";
			echo "</tr>";
			echo "</form>";

		}
		echo "</table>";

	}
	else{
		echo "no record found";
	}

}

?>
