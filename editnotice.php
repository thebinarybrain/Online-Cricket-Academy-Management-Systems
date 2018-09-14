<?php
session_start();
if(isset($_POST['noticepost']))
{
	$nid=$_POST['nid'];
	$notice=$_POST['notice'];
	$expire=$_POST['expire'];
	$type=$_POST['type'];
	if($type=='team')
	{
	$p1=strtolower($_POST['p1']);
	$p2=strtolower($_POST['p2']);
	$p3=strtolower($_POST['p3']);
	$p4=strtolower($_POST['p4']);
	$p5=strtolower($_POST['p5']);
	$p6=strtolower($_POST['p6']);
	$p7=strtolower($_POST['p7']);
	$p8=strtolower($_POST['p8']);
	$p9=strtolower($_POST['p9']);
	$p10=strtolower($_POST['p10']);
	$p11=strtolower($_POST['p11']);
	$p12=strtolower($_POST['p12']);
	$q="update notice set expire='$expire',notice='$notice',player_1='$p1',player_2='$p2',player_3='$p3',player_4='$p4',player_5='$p5',player_6='$p6',player_7='$p7',player_8='$p8',player_9='$p9',player_10='$p10',player_11='$p11',player_12='$p12',post_date=curdate() where n_id=$nid";
	}
	else if($type=='general')
		$q="update notice set type='$type',expire='$expire',notice='$notice',post_date=curdate() where n_id=$nid";
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mk_aligarian');
	$f=mysqli_query($con,$q);
	if($f)
		echo "<script>
			alert('Notice Edited Successfully');
			window.location.href='coach.php'
	      </script>";
	else
		echo "<script>
			alert('Notice cannot be edited something went wrong');
			window.location.href='coach.php'
	      </script>";
}
else
	header('location:home.php');
?>