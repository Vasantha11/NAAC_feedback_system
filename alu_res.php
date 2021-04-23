
<?php

$cser=mysqli_connect("localhost","root","","naac");






$query = mysqli_query($cser,"SELECT* FROM alumini_fb");
			 $number=mysqli_num_rows($query);
			$l=0;
			if($number > 0)
			{
			   while($rows = mysqli_fetch_array($query))
			   {
			 $rapport[$l] = $rows['rapport'];
			 $conduct[$l] = $rows['conduct'];
			 $interested[$l] = $rows['interested'];
			 $college[$l] = $rows['college'];
			 $admission[$l] = $rows['admission'];
			 $essential[$l] = $rows['essential'];
			 $status[$l] = $rows['status'];
			 $knowledge[$l] = $rows['knowledge'];
			 $hostel[$l] = $rows['hostel'];
			 $rate[$l] = $rows['rate'];
			 $provision[$l] = $rows['provision'];
			 $communication[$l] = $rows['communication'];
			 $excellent[$l] = $rows['excellent'];
			 $moment[$l] = $rows['moment'];
			 $dept[$l] = $rows['dept'];
			 $institute[$l] = $rows['institute'];
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
<h2>NAAC Feedback For ALUMNI</h2>
</center>
<table  border="1">
  <tr>
    <th>rapport</th>
	<th>conduct</th>
	<th>interested</th>
	<th>college</th>
	<th>admission</th>
	<th>essential</th>
  <th>status</th>
  <th>knowledge</th>
  <th>hostel</th>
  <th>rate</th>
  <th>provision</th>
  <th>communication</th>
  <th>excellent</th>
  <th>moment</th>
  <th>dept</th>
  <th>institute</th>
  </tr>
  <?php 
 
				for($i=0;$i<$number;$i++)	
				{					
  echo'<tr><td>'.$rapport[$i].'</td>
  <td>'.$conduct[$i].'</td>
  <td>'.$interested[$i].'</td>
  <td>'.$college[$i].'</td>
  <td>'.$admission[$i].'</td>
  <td>'.$essential[$i].'</td>
  <td>'.$status[$i].'</td>
  <td>'.$knowledge[$i].'</td>
  <td>'.$hostel[$i].'</td>
  <td>'.$rate[$i].'</td>
  <td>'.$provision[$i].'</td>
  <td>'.$communication[$i].'</td>
  <td>'.$excellent[$i].'</td>
  <td>'.$moment[$i].'</td>
  <td>'.$dept[$i].'</td>
  <td>'.$institute[$i].'</td>
  </tr>';
 
			}
  ?>
  </table>
  </body>
  </html>
  
			 