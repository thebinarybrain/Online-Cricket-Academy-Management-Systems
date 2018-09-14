<?php
session_start();
if(isset($_POST['changepas']))
{
	$pass=$_POST['pass1'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mk_aligarian');
	$f=mysqli_query($con,"update coach set password='$pass'");
	if($f)
		echo "<script>
			alert('Password Changed Successfully');
			window.location.href='coach.php'
	      </script>";
	else
		echo "<script>
			alert('Password cannot be changed, something went wrong');
			window.location.href='coach.php'
	      </script>";
	mysqli_close($con);
}
else
	header('location:home.php');
?>