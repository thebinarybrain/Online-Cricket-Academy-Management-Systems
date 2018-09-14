<?php
session_start();
if(isset($_POST['submitachievement']))
{
	$ach=$_POST['achievement'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mk_aligarian');
	$f=mysqli_query($con,"insert into achievement(achievement) values('$ach')");
	if($f)
		echo "<script>
			alert('Achievement added successfully');
			window.location.href='coach.php'
	      </script>";
	else
		echo "<script>
			alert('Achievement cannot be added');
			window.location.href='coach.php'
	      </script>";
	mysqli_close($con);
}
else
	header('location:home.php');
?>