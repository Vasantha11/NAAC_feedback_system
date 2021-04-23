<html>
<head></head>
<body>
<?php
$con = mysqli_connect("localhost", "root", "","naac"); // Establishing Connection with Server
 // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['emp_name'];
$designation = $_POST['desig'];
$emp_status = $_POST['emp_status'];
$dept = $_POST['dept'];
$address = $_POST['address'];
$email = $_POST['e_id'];
$mobile = $_POST['m_num'];
$uname = $_POST['uname'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
if($name !=''||$email !='')
{
//Insert Query of SQL
$query = mysqli_query($con,"INSERT INTO employee_reg(emp_name, designation, status, dept,address,email_id,mobile_no,uname,password,confirm_password)
VALUES ('$name','$designation','$emp_status','$dept','$address','$email','$mobile','$uname','$password','$confirm_password')");
echo '<script>alert("data inserted successfully");</script>';
header('Location:emploe.html');
}
else{
echo "Insertion Failed";
}
}

mysqli_close($con); // Closing Connection with Server
?>
</body>
</html>