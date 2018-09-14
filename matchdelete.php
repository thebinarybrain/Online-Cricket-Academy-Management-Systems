<?php
session_start();
if(isset($_POST['matchdelete']))
{
	$tour=$_POST['tour'];
	$m=$_POST['matchdel'];
	$str=explode(" ",$m);
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mk_aligarian');
	$mid=$str[0];
	$r1=mysqli_num_rows(mysqli_query($con,"select t_id from batting where t_id in (select team_1 from matches where m_id=$mid)"));
	$r2=mysqli_num_rows(mysqli_query($con,"select t_id from bowling where t_id in (select team_1 from matches where m_id=$mid)"));
	if($r1==0 && $r2==0)
	{
		$r3=mysqli_fetch_array(mysqli_query($con,"select team_1,team_2 from matches where m_id=$mid"));
		$t1=$r3['team_1'];
		$t2=$r3['team_2'];
		mysqli_query($con,"delete from team_match where m_id=$mid");
		mysqli_query($con,"delete from matches where m_id=$mid");
		mysqli_query($con,"delete from teams where t_id=$t1 or t_id=$t2");
		echo "<script>
			alert('Match Deleted Successfully');
			window.location.href='coach.php'
	      </script>";
	}
	else
		echo "<script>
			alert('Match can not be deleted, first delete its details');
			window.location.href='coach.php'
	      </script>";
}
else
	header('location:home.php');
?>