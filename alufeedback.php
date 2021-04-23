<html>
<head></head>
<body>
<?php
$con = mysqli_connect("localhost", "root", "","naac");
if($con)
	{
			echo "connection is established";
	}
	else
	{
			echo "connection not is established";
	}// Establishing Connection with Server
 // Selecting Database from Server
if(isset($_POST['submit'])){
	// Fetching variables of the form which travels in URL
$company = $_POST['company'];
echo $company;
$name = $_POST['name'];
$designation = $_POST['designation'];
$address = $_POST['address'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];



echo $company;
echo $name;
echo $designation;
echo $address;
echo $email;
echo $mobile;

}

//Insert Query of SQL
$query = "INSERT INTO employer_reg( company ,  name  ,  designation  ,  address ,  email  , mobile ) VALUES ('$company','$name','$designation','$address','$email','$mobile')";
$qu = mysqli_query($con,$query);
if($qu)
{
		echo"data is inserted";
		header('Location:employer.html');
}
else
{
		echo"data is not inserted ";
}




mysqli_close($con); // Closing Connection with Server
?>
</body>
</html>



