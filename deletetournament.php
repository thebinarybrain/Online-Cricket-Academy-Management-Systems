<?php
session_start();
if(isset($_POST['tourdelete']))
{
	$tour=$_POST['tour'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mk_aligarian');
	$row=mysqli_fetch_array(mysqli_query($con,"select * from tournament where name='$tour'"));
	$id=$row['tour_id'];
	$num=mysqli_num_rows(mysqli_query($con,"select * from matches where tour_id=$id"));
	if($num==0)
	{
		mysqli_query($con,"delete from tournament where tour_id=$id");
		echo "<script>
			alert('Tournament Deleted Successfully');
			window.location.href='coach.php'
	      </script>";
	}
	else
		echo "<script>
			alert('Sorry can not delete a tournament which has matches');
			window.location.href='coach.php'
	      </script>";
}
else
	header('location:home.php');
?>