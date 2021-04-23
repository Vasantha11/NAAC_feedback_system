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
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$a_name = $_POST['alu_name'];
$f_name = $_POST['f_name'];
$dob = $_POST['dob'];
$course = $_POST['course'];
$yop = $_POST['yop'];
$dept = $_POST['dept'];
$p_add = $_POST['p_add'];
$c_no = $_POST['c_no'];
$m_no = $_POST['m_no'];
$email = $_POST['e_id'];
$p_org = $_POST['p_org'];
$designation = $_POST['design'];
$p_loc = $_POST['p_loc'];
$uname = $_POST['uname'];
$password= $_POST['password'];
$confirm_password = $_POST['confirm_password'];
}

//Insert Query of SQL
$query = "INSERT INTO alumini_reg( alu_name ,  f_name  ,  dob  ,  course  ,  yop  ,  dept  ,  p_address  ,  c_no  ,  m_no  ,  e_id  ,  p_org  ,  design  ,  p_loc , uname , password , confirm_password) 
VALUES ('$a_name','$f_name','$dob','$course','$yop','$dept','$p_add','$c_no','$m_no','$email','$p_org','$designation','$p_loc','$uname','$password','$confirm_password')";
$qu = mysqli_query($con,$query);
if($qu)
{
		echo "data is inserted";
		header('Location:alu.html');
}
else
{
		echo"data is not inserted ";
}




mysqli_close($con); // Closing Connection with Server*/
?>
</body>
</html>