
<?php

$cser=mysqli_connect("localhost","root","","naac");
$query = mysqli_query($cser,"SELECT* FROM employee_fb");
			 $number=mysqli_num_rows($query);
			$l=0;
			if($number > 0)
			{
			   while($rows = mysqli_fetch_array($query))
			   {
			 $status[$l] = $rows['status'];
			 $technical[$l] = $rows['technical'];
			 $problem[$l] = $rows['problem'];
			 $enthusiasm[$l] = $rows['enthusiasm'];
			 $goals[$l] = $rows['goals'];
			 $inventive[$l] = $rows['inventive'];
			 $leadership[$l] = $rows['leadership'];
			 $workplace[$l] = $rows['workplace'];
			 $volunteer[$l] = $rows['volunteer'];
			 $nature[$l] = $rows['nature'];
			 $work[$l] = $rows['work'];
			 $social_affairs[$l] = $rows['social_affairs'];
			 $comments[$l] = $rows['comments'];
			  $l++;
			 }
			}
			else
			{
				echo'<script>alert("no data found");</script>';
			}
			 
?>
<html>
<head>
<title>data</title>
</head>
<body>
<center>
<h2>NAAC Feedback For EMPLOYEE</h2>
</center>
<table  border="1">
  <tr>
    <th>status</th>
	<th>technical</th>
	<th>problem</th>
	<th>enthusiasm</th>
	<th>goals</th>
	<th>inventive</th>
  <th>leadership</th>
  <th>workplace</th>
  <th>volunteer</th>
  <th>nature</th>
  <th>work</th>
  <th>social_affairs</th>
  <th>comments</th>
  </tr>
  <?php 
 
				for($i=0;$i<$number;$i++)	
				{					
  echo'<tr><td>'.$status[$i].'</td>
  <td>'.$technical[$i].'</td>
  <td>'.$problem[$i].'</td>
  <td>'.$enthusiasm[$i].'</td>
  <td>'.$goals[$i].'</td>
  <td>'.$inventive[$i].'</td>
  <td>'.$leadership[$i].'</td>
  <td>'.$workplace[$i].'</td>
  <td>'.$volunteer[$i].'</td>
  <td>'.$nature[$i].'</td>
  <td>'.$work[$i].'</td>
  <td>'.$social_affairs[$i].'</td>
  <td>'.$comments[$i].'</td>
  </tr>';		  }
  ?>
  </table>
  </body>
  </html>
  
			 