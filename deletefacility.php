<?php
if(isset($_POST['deletefacility']))
{
	$facility=$_POST['delfacility'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mk_aligarian');
	$f=mysqli_query($con,"delete from academy_facility where facility='$facility'");
	if($f)
		echo "<script>
			alert('Facility deleted successfully');
			window.location.href='coach.php'
	      </script>";
	else
		echo "<script>
			alert('Facility can not be deleted');
			window.location.href='coach.php'
	      </script>";
	mysqli_close($con);
}
else
	header('location:home.php');
?>