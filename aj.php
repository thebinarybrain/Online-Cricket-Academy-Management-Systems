<?php
session_start();
$s=$_GET['s'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'mk_aligarian');
$r1=mysqli_fetch_array(mysqli_query($con,"select tour_id from tournament where name='$s'"));
$tid=$r1['tour_id'];
$que=mysqli_query($con,"select m_id,team_1,team_2,match_date from matches where tour_id=$tid");
$num=mysqli_num_rows($que);
for($i=0;$i<$num;$i++)
{
$r2=mysqli_fetch_array($que);
$t1=$r2['team_1'];
$t2=$r2['team_2'];
	$n1=mysqli_fetch_array(mysqli_query($con,"select name from teams where t_id=$t1"));
	$n2=mysqli_fetch_array(mysqli_query($con,"select name from teams where t_id=$t2"));
	echo "<option> ".$r2['m_id']." ".strtoupper($n1['name'])." Vs ".strtoupper($n2['name'])." on ".$r2['match_date']."</option>";
}
mysqli_close($con);
?>