<html>
<head></head>
<body>
<?php
$con = mysqli_connect("localhost", "root", "","naac");
	
	// Establishing Connection with Server
 // Selecting Database from Server
if(isset($_POST['submit']))
{ // Fetching variables of the form which travels in URL
$status = $_POST['status'];
$technical = $_POST['technical'];
$problem = $_POST['problem'];
$enthusiasm = $_POST['enthusiasm'];
$goals = $_POST['goals'];
$inventive = $_POST['inventive'];
$leadership = $_POST['leadership'];
$workplace = $_POST['workplace'];
$volunteer = $_POST['volunteer'];
$nature = $_POST['nature'];
$work = $_POST['work'];
$social_affairs = $_POST['social_affairs'];
$comments = $_POST['comments'];

}
//Insert Query of SQL
$query = "INSERT INTO employer_fb(status , technical , problem , enthusiasm , goals , inventive , leadership , workplace , volunteer , nature , work , social_affairs , comments ) 
VALUES ('$status','$technical','$problem','$enthusiasm','$goals','$inventive','$leadership','$workplace','$volunteer','$nature','$work','$social_affairs','$comments' )";
$qu = mysqli_query($con,$query);
if($qu)
{
			header('Location:back.html');
		
}
else
{
		echo "data is not inserted";
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