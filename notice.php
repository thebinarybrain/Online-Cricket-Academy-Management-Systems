<?php
session_start();
if(isset($_POST['noticepost']))
{
	$notice=$_POST['notice'];
	$expire=$_POST['expire'];
	$type=$_POST['type'];
	if($type=='team')
	{
	$w=$_POST['keeper'];
	$l1=strlen($w);
	$w=substr($w,0,($l1-1));
	$c=$_POST['captain'];
	$l2=strlen($c);
	$c=substr($c,0,($l2-1));
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
	if($w==1 || $c==1)
	{
		if($w==1)
			$p1=$p1." (Wk)";
		if($c==1)
			$p1=$p1." (C)";
	}
	if($w==2 || $c==2)
	{
		if($w==2)
			$p2=$p2." (Wk)";
		if($c==2)
			$p2=$p2." (C)";
	}
	if($w==3 || $c==3)
	{
		if($w==3)
			$p3=$p3." (Wk)";
		if($c==3)
			$p3=$p3." (C)";
	}
	if($w==4 || $c==4)
	{
		if($w==4)
			$p4=$p4." (Wk)";
		if($c==4)
			$p4=$p4." (C)";
	}
	if($w==5 || $c==5)
	{
		if($w==5)
			$p5=$p5." (Wk)";
		if($c==5)
			$p5=$p5." (C)";
	}
	if($w==6 || $c==6)
	{
		if($w==6)
			$p6=$p6." (Wk)";
		if($c==6)
			$p6=$p6." (C)";
	}
	if($w==7 || $c==7)
	{
		if($w==7)
			$p7=$p7." (Wk)";
		if($c==7)
			$p7=$p7." (C)";
	}
	if($w==8 || $c==8)
	{
		if($w==8)
			$p8=$p8." (Wk)";
		if($c==8)
			$p8=$p8." (C)";
	}
	if($w==9 || $c==9)
	{
		if($w==9)
			$p9=$p9." (Wk)";
		if($c==9)
			$p9=$p9." (C)";
	}
	if($w==10 || $c==10)
	{
		if($w==10)
			$p10=$p10." (Wk)";
		if($c==10)
			$p10=$p10." (C)";
	}
	if($w==11 || $c==11)
	{
		if($w==11)
			$p11=$p11." (Wk)";
		if($c==11)
			$p11=$p11." (C)";
	}
	if($w==12 || $c==12)
	{
		if($w==12)
			$p12=$p12." (Wk)";
		if($c==12)
			$p12=$p12." (C)";
	}
	$q="insert into notice(type,expire,notice,player_1,player_2,player_3,player_4,player_5,player_6,player_7,player_8,player_9,player_10,player_11,player_12,post_date) values('$type','$expire','$notice','$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9','$p10','$p11','$p12',curdate())";
	}
	else if($type=='general')
		$q="insert into notice(type,expire,notice,post_date) values('$type','$expire','$notice',curdate())";
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mk_aligarian');
	$f=mysqli_query($con,$q);
	mysqli_close($con);
	if($f)
	{
		header('location:sendnotification.php');
	}
	else
		echo "<script>
			alert('Notice cannot be posted something went wrong');
			window.location.href='coach.php'
	      </script>";
}
else
	header('location:home.php');
?>