<?php
$con = mysqli_connect("localhost", "root", "","naac");
$name = $_POST['name'];
$res=mysqli_query($con,"SELECT * from alumini_reg where alu_name='$name'");

?>