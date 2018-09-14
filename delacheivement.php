<?php
session_start();
if(isset($_POST['submitachievement']))
{
	$ach=$_POST['achievement'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mk_aligarian');
	$f=mysqli_query($con,"delete from achievement where achievement='$ach'");
	if($f)
		echo "<script>
			alert('Achievement deleted successfully');
			window.location.href='coach.php'
	      </script>";
	else
		echo "<script>
			alert('Achievement cannot be deleted');
			window.location.href='coach.php'
	      </script>";
		  mysqli_close($con);
}
else
	header('location:home.php');
?>