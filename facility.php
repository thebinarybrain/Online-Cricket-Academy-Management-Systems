<?php
session_start();
if(isset($_POST['submitfacility']))
{
	$facility=$_POST['facility'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mk_aligarian');
	$f=mysqli_query($con,"insert into academy_facility(facility) values('$facility')");
	if($f)
		echo "<script>
			alert('Facility added successfully');
			window.location.href='coach.php'
	      </script>";
	else
		echo "<script>
			alert('Facility can not be added');
			window.location.href='coach.php'
	      </script>";
	mysqli_close($con);
}
else
	header('location:coach.php');
?>