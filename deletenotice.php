<?php
session_start();
if(isset($_POST['delnot']))
{
	$nid=$_POST['notice'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mk_aligarian');
	$f=mysqli_query($con,"delete from notice where n_id=$nid");
	if($f)
		echo "<script>
			alert('Notice Deleted Successfully');
			window.location.href='coach.php'
	      </script>";
	else
		echo "<script>
			alert('Notice cannot be deleted something went wrong');
			window.location.href='coach.php'
	      </script>";
	mysqli_close($con);
}
else
	header('location:home.php');
?>