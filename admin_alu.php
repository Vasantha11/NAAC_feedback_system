<html>
<head>
<title>login</title>
</head>
<body>
<?php
$con = mysqli_connect("localhost", "root", "","naac");
/*if($con)
	{
			echo "connection is established";
	}
	else
	{
			echo "connection not is established";
	}*/// Establishing Connection with Server
 // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$uname = $_POST['uname'];
$password = $_POST['password'];
$res=mysqli_query($con,"SELECT uname,password from admin where uname='$uname' and password='$password'");

if(mysqli_num_rows($res)!=0)
{
	
	header('Location:report_alumni.php');
}
else
{
 $message = "Username or Password incorrect";
  echo "<script type='text/javascript'>alert('$message');</script>";
}
}
?>
</body>
</html>