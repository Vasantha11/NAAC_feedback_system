<html>
<head></head>
<body>
<?php
$con = mysqli_connect("localhost", "root", "","naac");
	
	// Establishing Connection with Server
 // Selecting Database from Server
if(isset($_POST['submit']))
{ // Fetching variables of the form which travels in URL
$rapport = $_POST['rapport'];
$conduct = $_POST['conduct'];
$interested = $_POST['interested'];
$college = $_POST['college'];
$admission = $_POST['admission'];
$essential = $_POST['essential'];
$status = $_POST['status'];
$knowledge = $_POST['knowledge'];
$hostel = $_POST['hostel'];
$rate = $_POST['rate'];
$provision = $_POST['provision'];
$communication = $_POST['communication'];
$excellent = $_POST['excellent'];
$moment = $_POST['moment'];
$dept = $_POST['dept'];
$institute = $_POST['institute'];

}
//Insert Query of SQL
$query = "INSERT INTO alumini_fb( rapport, conduct , interested , college , admission , essential , status , knowledge , hostel , rate , provision , communication , excellent , moment , dept , institute ) 
VALUES ('$rapport','$conduct','$interested','$college','$admission','$essential','$status','$knowledge','$hostel','$rate','$provision','$communication','$excellent','$moment','$dept','$institute')";
$qu = mysqli_query($con,$query);
if($qu)
{
			//$message = "Thanks for your feedback";
			//echo "<script type='text/javascript'>alert('$message');</script>";
		header('Location:back.html');
		
}
else
{
		echo "data is not inserted ";
}

/*echo '<script>alert("data inserted successfully");</script>';

}
else{
echo "Insertion Failed";
}
}

mysqli_close($con); // Closing Connection with Server
?>
echo "hello";*/
?>
</body>
</html>