<html>
<head></head>
<body>

<?php
$con = mysqli_connect("localhost", "root", "","naac");
	
	// Establishing Connection with Server
 // Selecting Database from Server

 

if(isset($_POST['submit']))
{ // Fetching variables of the form which travels in URL
$teaching = $_POST['teaching'];
$cirrculum = $_POST['cirrculum'];
$evaluation = $_POST['evaluation'];
$reference = $_POST['reference'];
$sufficient = $_POST['sufficient'];
$theory = $_POST['theory'];
$course = $_POST['course'];
$knowledge = $_POST['knowledge'];
$workload = $_POST['workload'];
$updated = $_POST['updated'];
$facilities = $_POST['facilities'];
$canteen = $_POST['canteen'];
$tests = $_POST['tests'];
$propose = $_POST['propose'];
$learners = $_POST['learners'];
$recommend = $_POST['recommend'];
$comments = $_POST['comments'];
$challenges = $_POST['challenges'];


}
//Insert Query of SQL
$query="INSERT INTO employee_fb(teaching , cirrculum , evaluation , reference , sufficient , theory , course , knowledge , workload , updated , facilities , canteen , tests , propose , learners , recommend , comments , challenges ) 
VALUES ('$teaching','$cirrculum','$evaluation','$reference','$sufficient','$theory','$course','$knowledge','$workload','$updated','$facilities','$canteen','$tests','$propose','$learners','$recommend','$comments','$challenges')";
$qu=mysqli_query($con,$query);
if($qu)
{
			header('Location:back.html');
}
else
{
		echo"data is not inserted ";
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