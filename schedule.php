<?php
session_start();
if(isset($_POST['schedule']))
{
	$monday=$_POST['monday'];
	$tuesday=$_POST['tuesday'];
	$wednesday=$_POST['wednesday'];
	$thursday=$_POST['thursday'];
	$friday=$_POST['friday'];
	$saturday=$_POST['saturday'];
	$sunday=$_POST['sunday'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mk_aligarian');
	$q=mysqli_query($con,"update schedule set monday='$monday',tuesday='$tuesday',wednesday='$wednesday',thursday='$thursday',friday='$friday',saturday='$saturday',sunday='$sunday'");
	if($q)
		echo "<script>
			alert('Schedule Edited Successfully');
			window.location.href='coach.php'
	      </script>";
	else
		echo "<script>
			alert('Schedule cannot be edited something went wrong');
			window.location.href='coach.php'
	      </script>";
	mysqli_close($con);
}
else
	header('location:home.php');
?>