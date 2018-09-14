<?php
session_start();
if(isset($_POST['matchdetailsdelete']))
{
	$mid=$_POST['mid'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mk_aligarian');
	$row=mysqli_fetch_array(mysqli_query($con,"select t_1,t_2 from team_match where m_id=$mid"));
	$t1=$row['t_1'];
	$t2=$row['t_2'];
	mysqli_query($con,"delete from batting where t_id=$t1 or t_id=$t2");
	mysqli_query($con,"delete from bowling where t_id=$t1 or t_id=$t2");
	mysqli_close($con);
	echo "<script>
			alert('Details Deleted Successfully');
			window.location.href='coach.php'
	      </script>";
		 
}
else
	header('location:home.php');
?>