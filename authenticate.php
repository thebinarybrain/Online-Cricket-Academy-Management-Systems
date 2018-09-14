<?php
session_start();
if(isset($_POST['authenticate']))
{
	$id=$_POST['id'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mk_aligarian');
	$q="update player set authentication='yes' where id=$id";
	mysqli_query($con,$q);
	mysqli_close($con);
	echo "<script>
			alert('Successfully Authenticated');
			window.location.href='coach.php'
	      </script>";
}
else
	header('location:home.php');
?>