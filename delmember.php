<?php
session_start();
if(isset($_POST['submitmemberdel']))
{
	$name=$_POST['member'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mk_aligarian');
	$q1="delete from member where name='$name'";
	$f=mysqli_query($con,$q1);
	if($f)
		echo "<script>
			alert('Member deleted successfully');
			window.location.href='coach.php'
	      </script>";
	else
		echo "<script>
			alert('Member cannot be deleted');
			window.location.href='coach.php'
	      </script>";
}
else
	header('location:home.php');
?>