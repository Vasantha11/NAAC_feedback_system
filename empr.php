<html>
<head></head>
<body>
<?php

$con = mysqli_connect("localhost", "root", "","naac");
	if(isset($_POST['submit']))
{
$company = $_POST['company'];
$name = $_POST['name'];
$designation = $_POST['designation'];
$address = $_POST['address'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$uname = $_POST['uname'];
$password= $_POST['password'];
$confirm_password = $_POST['confirm_password'];
}

//Insert Query of SQL
$query = "INSERT INTO employer_reg( company ,  name  ,  designation  ,  address ,  email  , mobile , uname , password , confirm_password ) 
VALUES ('$company','$name','$designation','$address','$email','$mobile','$uname','$password','$confirm_password')";
$qu = mysqli_query($con,$query);
if($qu)
{
		echo"data is inserted";
		header('Location:emplr.html');
}
else
{
		echo"data is not inserted ";
}
mysqli_close($con); // Closing Connection with Server
?>
</body>
</html>