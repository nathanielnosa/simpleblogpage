<?php 


$conn = mysqli_connect("localhost", "root", "", "blog");

if (!$conn==true) {
	
	echo "<script>alert('Error In connecting the databas')</script>";
}

 ?>