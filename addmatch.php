<?php
session_start();
if(isset($_POST['addmatch']))
{
	$tour=strtolower($_POST['tour']);
	$mdate=$_POST['mdate'];
	$toss=strtolower($_POST['toss']);
	$mom=strtolower($_POST['mom']);
	$result=strtolower($_POST['result']);
	$venue=strtolower($_POST['venue']);
	$u1=strtolower($_POST['um_1']);
	$u2=strtolower($_POST['um_2']);
	$t2=strtolower($_POST['team_2']);
	$t1=strtolower($_POST['team_1']);
	$w=$_POST['keeper'];
	$l1=strlen($w);
	$w=substr($w,0,($l1-1));
	$c=$_POST['captain'];
	$l2=strlen($c);
	$c=substr($c,0,($l2-1));
	$w2=$_POST['keeper2'];
	$l21=strlen($w2);
	$w2=substr($w2,0,($l21-1));
	$c2=$_POST['captain2'];
	$l22=strlen($c2);
	$c2=substr($c2,0,($l22-1));
	$team_1_p_1=strtolower($_POST['team_1_p_1']);
	$team_1_p_2=strtolower($_POST['team_1_p_2']);
	$team_1_p_3=strtolower($_POST['team_1_p_3']);
	$team_1_p_4=strtolower($_POST['team_1_p_4']);
	$team_1_p_5=strtolower($_POST['team_1_p_5']);
	$team_1_p_6=strtolower($_POST['team_1_p_6']);
	$team_1_p_7=strtolower($_POST['team_1_p_7']);
	$team_1_p_8=strtolower($_POST['team_1_p_8']);
	$team_1_p_9=strtolower($_POST['team_1_p_9']);
	$team_1_p_10=strtolower($_POST['team_1_p_10']);
	$team_1_p_11=strtolower($_POST['team_1_p_11']);
	$team_2_p_1=strtolower($_POST['team_2_p_1']);
	$team_2_p_2=strtolower($_POST['team_2_p_2']);
	$team_2_p_3=strtolower($_POST['team_2_p_3']);
	$team_2_p_4=strtolower($_POST['team_2_p_4']);
	$team_2_p_5=strtolower($_POST['team_2_p_5']);
	$team_2_p_6=strtolower($_POST['team_2_p_6']);
	$team_2_p_7=strtolower($_POST['team_2_p_7']);
	$team_2_p_8=strtolower($_POST['team_2_p_8']);
	$team_2_p_9=strtolower($_POST['team_2_p_9']);
	$team_2_p_10=strtolower($_POST['team_2_p_10']);
	$team_2_p_11=strtolower($_POST['team_2_p_11']);
	if($w==1 || $c==1)
	{
		if($w==1)
			$team_1_p_1=$team_1_p_1." (Wk)";
		if($c==1)
			$team_1_p_1=$team_1_p_1." (C)";
	}
	if($w==2 || $c==2)
	{
		if($w==2)
			$team_1_p_2=$team_1_p_2." (Wk)";
		if($c==2)
			$team_1_p_2=$team_1_p_2." (C)";
	}
	if($w==3 || $c==3)
	{
		if($w==3)
			$team_1_p_3=$team_1_p_3." (Wk)";
		if($c==3)
			$team_1_p_3=$team_1_p_3." (C)";
	}
	if($w==4 || $c==4)
	{
		if($w==4)
			$team_1_p_4=$team_1_p_4." (Wk)";
		if($c==4)
			$team_1_p_4=$team_1_p_4." (C)";
	}
	if($w==5 || $c==5)
	{
		if($w==5)
			$team_1_p_5=$team_1_p_5." (Wk)";
		if($c==5)
			$team_1_p_5=$team_1_p_5." (C)";
	}
	if($w==6 || $c==6)
	{
		if($w==6)
			$team_1_p_6=$team_1_p_6." (Wk)";
		if($c==6)
			$team_1_p_6=$team_1_p_6." (C)";
	}
	if($w==7 || $c==7)
	{
		if($w==7)
			$team_1_p_7=$team_1_p_7." (Wk)";
		if($c==7)
			$team_1_p_7=$team_1_p_7." (C)";
	}
	if($w==8 || $c==8)
	{
		if($w==8)
			$team_1_p_8=$team_1_p_8." (Wk)";
		if($c==8)
			$team_1_p_8=$team_1_p_8." (C)";
	}
	if($w==9 || $c==9)
	{
		if($w==9)
			$team_1_p_9=$team_1_p_9." (Wk)";
		if($c==9)
			$team_1_p_9=$team_1_p_9." (C)";
	}
	if($w==10 || $c==10)
	{
		if($w==10)
			$team_1_p_10=$team_1_p_10." (Wk)";
		if($c==10)
			$team_1_p_10=$team_1_p_10." (C)";
	}
	if($w==11 || $c==11)
	{
		if($w==11)
			$team_1_p_11=$team_1_p_11." (Wk)";
		if($c==11)
			$team_1_p_11=$team_1_p_11." (C)";
	}
	if($w2==1 || $c2==1)
	{
		if($w2==1)
			$team_2_p_1=$team_2_p_1." (Wk)";
		if($c2==1)
			$team_2_p_1=$team_2_p_1." (C)";
	}
	if($w2==2 || $c2==2)
	{
		if($w2==2)
			$team_2_p_2=$team_2_p_2." (Wk)";
		if($c2==2)
			$team_2_p_2=$team_2_p_2." (C)";
	}
	if($w2==3 || $c2==3)
	{
		if($w2==3)
			$team_2_p_3=$team_2_p_3." (Wk)";
		if($c2==3)
			$team_2_p_3=$team_2_p_3." (C)";
	}
	if($w2==4 || $c2==4)
	{
		if($w2==4)
			$team_2_p_4=$team_2_p_4." (Wk)";
		if($c2==4)
			$team_2_p_4=$team_2_p_4." (C)";
	}
	if($w2==5 || $c2==5)
	{
		if($w2==5)
			$team_2_p_5=$team_2_p_5." (Wk)";
		if($c2==5)
			$team_2_p_5=$team_2_p_5." (C)";
	}
	if($w2==6 || $c2==6)
	{
		if($w2==6)
			$team_2_p_6=$team_2_p_6." (Wk)";
		if($c2==6)
			$team_2_p_6=$team_2_p_6." (C)";
	}
	if($w2==7 || $c2==7)
	{
		if($w2==7)
			$team_1_p_7=$team_1_p_7." (Wk)";
		if($c2==7)
			$team_2_p_7=$team_2_p_7." (C)";
	}
	if($w2==8 || $c2==8)
	{
		if($w2==8)
			$team_2_p_8=$team_2_p_8." (Wk)";
		if($c2==8)
			$team_2_p_8=$team_2_p_8." (C)";
	}
	if($w2==9 || $c2==9)
	{
		if($w2==9)
			$team_2_p_9=$team_2_p_9." (Wk)";
		if($c2==9)
			$team_2_p_9=$team_2_p_9." (C)";
	}
	if($w2==10 || $c2==10)
	{
		if($w2==10)
			$team_2_p_10=$team_2_p_10." (Wk)";
		if($c2==10)
			$team_2_p_10=$team_2_p_10." (C)";
	}
	if($w2==11 || $c2==11)
	{
		if($w2==11)
			$team_2_p_11=$team_2_p_11." (Wk)";
		if($c2==11)
			$team_2_p_11=$team_2_p_11." (C)";
	}
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mk_aligarian');
	$q="insert into teams(name,player_1,player_2,player_3,player_4,player_5,player_6,player_7,player_8,player_9,player_10,player_11) values('$t1','$team_1_p_1','$team_1_p_2','$team_1_p_3','$team_1_p_4','$team_1_p_5','$team_1_p_6','$team_1_p_7','$team_1_p_8','$team_1_p_9','$team_1_p_10','$team_1_p_11')";
	mysqli_query($con,$q);
	$q1="insert into teams(name,player_1,player_2,player_3,player_4,player_5,player_6,player_7,player_8,player_9,player_10,player_11) values('$t2','$team_2_p_1','$team_2_p_2','$team_2_p_3','$team_2_p_4','$team_2_p_5','$team_2_p_6','$team_2_p_7','$team_2_p_8','$team_2_p_9','$team_2_p_10','$team_2_p_11')";
	mysqli_query($con,$q1);
	$res1=mysqli_query($con,"select t_id from teams");
	$num1=mysqli_num_rows($res1);
	for($i=0;$i<($num1-1);$i++)
		$row1=mysqli_fetch_array($res1);
	$row2=mysqli_fetch_array($res1);
	$t1id=$row1['t_id'];
	$t2id=$row2['t_id'];
	$row3=mysqli_fetch_array((mysqli_query($con,"select tour_id from tournament where name='$tour'")));
	$tourid=$row3['tour_id'];
	$type="tournament";
	$q2="insert into matches(type,match_date,team_1,result,mom,team_2,match_venue,umpire_1,umpire_2,tour_id) values('$type','$mdate',$t1id,'$result','$mom',$t2id,'$venue','$u1','$u2',$tourid)";
	$fl=mysqli_query($con,$q2);
	$result=mysqli_query($con,"select * from matches");
	$number=mysqli_num_rows($result);
	for($i=0;$i<$number;$i++)
		$row_get=mysqli_fetch_array($result);
	$maid=$row_get['m_id'];
	$name1=mysqli_fetch_array(mysqli_query($con,"select name from teams where t_id=$t1id"));
	$name2=mysqli_fetch_array(mysqli_query($con,"select name from teams where t_id=$t2id"));
	if($toss==$name1['name'])
		$toss=$t1id;
	else if($toss==$name2['name'])
		$toss=$t2id;
	mysqli_query($con,"insert into team_match(t_1,t_2,m_id,toss) values($t1id,$t2id,$maid,$toss)");
	mysqli_close($con);
	if($fl)
		echo "<script>
			alert('Match Registered Successfully');
			window.location.href='coach.php'
	      </script>";
	else
		echo "<script>
			alert('Something Went Wrong Try Again');
			window.location.href='coach.php'
	      </script>";
}
else
	header('location:coach.php');
?>