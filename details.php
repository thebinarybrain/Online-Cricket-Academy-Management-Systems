<?php
session_start();
if(isset($_POST['fdetail']))
{
	$ba=$_POST['bat_team'];
	$extra=$_POST['extra'];
	$bo=$_POST['bowl_team'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mk_aligarian');
	mysqli_query($con,"insert into batting(t_id,extra) values($ba,$extra)");
	mysqli_query($con,"insert into bowling(t_id) values($bo)");
	if(!isset($_POST['dnba_1']))
	{
		$r1=$_POST['r_1'];
		$b1=$_POST['b_1'];
		$f1=$_POST['f_1'];
		$s1=$_POST['s_1'];
		$m1=$_POST['m_1'];
		echo $m1;
		mysqli_query($con,"update batting set r_s_1=$r1,b_f_1=$b1,f_s_1=$f1,s_s_1=$s1,m_out_1='$m1' where t_id=$ba");
		$bo1=$_POST['bo_1'];
		if($bo1!='--select bowler--')
		{
			mysqli_query($con,"update batting set bowler_1='$bo1' where t_id=$ba");
		}
		$fi1=$_POST['fi_1'];
		if($fi1!='--select fielder--')
		{
			mysqli_query($con,"update batting set fielder_1='$fi1' where t_id=$ba");
		}
	}
	if(!isset($_POST['dnba_2']))
	{
		$r2=$_POST['r_2'];
		$b2=$_POST['b_2'];
		$f2=$_POST['f_2'];
		$s2=$_POST['s_2'];
		$m2=$_POST['m_2'];
		mysqli_query($con,"update batting set r_s_2=$r2,b_f_2=$b2,f_s_2=$f2,s_s_2=$s2,m_out_2='$m2' where t_id=$ba");
		$bo2=$_POST['bo_2'];
		if($bo2!='--select bowler--')
		{
			mysqli_query($con,"update batting set bowler_2='$bo2' where t_id=$ba");
		}
		$fi2=$_POST['fi_2'];
		if($fi2!='--select fielder--')
		{
			mysqli_query($con,"update batting set fielder_2='$fi2' where t_id=$ba");
		}
	}
	if(!isset($_POST['dnba_3']))
	{
		$r3=$_POST['r_3'];
		$b3=$_POST['b_3'];
		$f3=$_POST['f_3'];
		$s3=$_POST['s_3'];
		$m3=$_POST['m_3'];
		mysqli_query($con,"update batting set r_s_3=$r3,b_f_3=$b3,f_s_3=$f3,s_s_3=$s3,m_out_3='$m3' where t_id=$ba");
		$bo3=$_POST['bo_3'];
		if($bo3!='--select bowler--')
		{
			mysqli_query($con,"update batting set bowler_3='$bo3' where t_id=$ba");
		}
		$fi3=$_POST['fi_3'];
		if($fi3!='--select fielder--')
		{
			mysqli_query($con,"update batting set fielder_3='$fi3' where t_id=$ba");
		}
	}
if(!isset($_POST['dnba_4']))
	{
		$r4=$_POST['r_4'];
		$b4=$_POST['b_4'];
		$f4=$_POST['f_4'];
		$s4=$_POST['s_4'];
		$m4=$_POST['m_4'];
		mysqli_query($con,"update batting set r_s_4=$r4,b_f_4=$b4,f_s_4=$f4,s_s_4=$s4,m_out_4='$m4' where t_id=$ba");
		$bo4=$_POST['bo_4'];
		if($bo4!='--select bowler--')
		{
			mysqli_query($con,"update batting set bowler_4='$bo4' where t_id=$ba");
		}
		$fi4=$_POST['fi_4'];
		if($fi4!='--select fielder--')
		{
			mysqli_query($con,"update batting set fielder_4='$fi4' where t_id=$ba");
		}
	}
if(!isset($_POST['dnba_5']))
	{
		$r5=$_POST['r_5'];
		$b5=$_POST['b_5'];
		$f5=$_POST['f_5'];
		$s5=$_POST['s_5'];
		$m5=$_POST['m_5'];
		mysqli_query($con,"update batting set r_s_5=$r5,b_f_5=$b5,f_s_5=$f5,s_s_5=$s5,m_out_5='$m5' where t_id=$ba");
		$bo5=$_POST['bo_5'];
		if($bo5!='--select bowler--')
		{
			mysqli_query($con,"update batting set bowler_5='$bo5' where t_id=$ba");
		}
		$fi5=$_POST['fi_5'];
		if($fi5!='--select fielder--')
		{
			mysqli_query($con,"update batting set fielder_5='$fi5' where t_id=$ba");
		}
	}
if(!isset($_POST['dnba_6']))
	{
		$r6=$_POST['r_6'];
		$b6=$_POST['b_6'];
		$f6=$_POST['f_6'];
		$s6=$_POST['s_6'];
		$m6=$_POST['m_6'];
		mysqli_query($con,"update batting set r_s_6=$r6,b_f_6=$b6,f_s_6=$f6,s_s_6=$s6,m_out_6='$m6' where t_id=$ba");
		$bo6=$_POST['bo_6'];
		if($bo6!='--select bowler--')
		{
			mysqli_query($con,"update batting set bowler_6='$bo6' where t_id=$ba");
		}
		$fi6=$_POST['fi_6'];
		if($fi6!='--select fielder--')
		{
			mysqli_query($con,"update batting set fielder_6='$fi6' where t_id=$ba");
		}
	}
if(!isset($_POST['dnba_7']))
	{
		$r7=$_POST['r_7'];
		$b7=$_POST['b_7'];
		$f7=$_POST['f_7'];
		$s7=$_POST['s_7'];
		$m7=$_POST['m_7'];
		mysqli_query($con,"update batting set r_s_7=$r7,b_f_7=$b7,f_s_7=$f7,s_s_7=$s7,m_out_7='$m7' where t_id=$ba");
		$bo7=$_POST['bo_7'];
		if($bo7!='--select bowler--')
		{
			mysqli_query($con,"update batting set bowler_7='$bo7' where t_id=$ba");
		}
		$fi7=$_POST['fi_7'];
		if($fi7!='--select fielder--')
		{
			mysqli_query($con,"update batting set fielder_7='$fi7' where t_id=$ba");
		}
	}
if(!isset($_POST['dnba_8']))
	{
		$r8=$_POST['r_8'];
		$b8=$_POST['b_8'];
		$f8=$_POST['f_8'];
		$s8=$_POST['s_8'];
		$m8=$_POST['m_8'];
		mysqli_query($con,"update batting set r_s_8=$r8,b_f_8=$b8,f_s_8=$f8,s_s_8=$s8,m_out_8='$m8' where t_id=$ba");
		$bo8=$_POST['bo_8'];
		if($bo8!='--select bowler--')
		{
			mysqli_query($con,"update batting set bowler_8='$bo8' where t_id=$ba");
		}
		$fi8=$_POST['fi_8'];
		if($fi8!='--select fielder--')
		{
			mysqli_query($con,"update batting set fielder_8='$fi8' where t_id=$ba");
		}
	}
if(!isset($_POST['dnba_9']))
	{
		$r9=$_POST['r_9'];
		$b9=$_POST['b_9'];
		$f9=$_POST['f_9'];
		$s9=$_POST['s_9'];
		$m9=$_POST['m_9'];
		mysqli_query($con,"update batting set r_s_9=$r9,b_f_9=$b9,f_s_9=$f9,s_s_9=$s9,m_out_9='$m9' where t_id=$ba");
		$bo9=$_POST['bo_9'];
		if($bo9!='--select bowler--')
		{
			mysqli_query($con,"update batting set bowler_9='$bo9' where t_id=$ba");
		}
		$fi9=$_POST['fi_9'];
		if($fi9!='--select fielder--')
		{
			mysqli_query($con,"update batting set fielder_9='$fi9' where t_id=$ba");
		}
	}
if(!isset($_POST['dnba_10']))
	{
		$r10=$_POST['r_10'];
		$b10=$_POST['b_10'];
		$f10=$_POST['f_10'];
		$s10=$_POST['s_10'];
		$m10=$_POST['m_10'];
		mysqli_query($con,"update batting set r_s_10=$r10,b_f_10=$b10,f_s_10=$f10,s_s_10=$s10,m_out_10='$m10' where t_id=$ba");
		$bo10=$_POST['bo_10'];
		if($bo10!='--select bowler--')
		{
			mysqli_query($con,"update batting set bowler_10='$bo10' where t_id=$ba");
		}
		$fi10=$_POST['fi_10'];
		if($fi10!='--select fielder--')
		{
			mysqli_query($con,"update batting set fielder_10='$fi10' where t_id=$ba");
		}
	}
if(!isset($_POST['dnba_11']))
	{
		$r11=$_POST['r_11'];
		$b11=$_POST['b_11'];
		$f11=$_POST['f_11'];
		$s11=$_POST['s_11'];
		$m11=$_POST['m_11'];
		mysqli_query($con,"update batting set r_s_11=$r11,b_f_11=$b11,f_s_11=$f11,s_s_11=$s11,m_out_11='$m11' where t_id=$ba");
		$bo11=$_POST['bo_11'];
		if($bo11!='--select bowler--')
		{
			mysqli_query($con,"update batting set bowler_11='$bo11' where t_id=$ba");
		}
		$fi11=$_POST['fi_11'];
		if($fi11!='--select fielder--')
		{
			mysqli_query($con,"update batting set fielder_11='$fi11' where t_id=$ba");
		}
	}
if(!isset($_POST['dnbo_1']))
{
	$o1=$_POST['o_1'];
	$m1=$_POST['ma_1'];
	$r1=$_POST['rg_1'];
	$w1=$_POST['w_1'];
	mysqli_query($con,"update bowling set o_b_1=$o1,m_1=$m1,r_g_1=$r1,w_t_1=$w1 where t_id=$bo");
}
if(!isset($_POST['dnbo_2']))
{
	$o2=$_POST['o_2'];
	$m2=$_POST['ma_2'];
	$r2=$_POST['rg_2'];
	$w2=$_POST['w_2'];
	mysqli_query($con,"update bowling set o_b_2=$o2,m_2=$m2,r_g_2=$r2,w_t_2=$w2 where t_id=$bo");
}
if(!isset($_POST['dnbo_3']))
{
	$o3=$_POST['o_3'];
	$m3=$_POST['ma_3'];
	$r3=$_POST['rg_3'];
	$w3=$_POST['w_3'];
	mysqli_query($con,"update bowling set o_b_3=$o3,m_3=$m3,r_g_3=$r3,w_t_3=$w3 where t_id=$bo");
}
if(!isset($_POST['dnbo_4']))
{
	$o4=$_POST['o_4'];
	$m4=$_POST['ma_4'];
	$r4=$_POST['rg_4'];
	$w4=$_POST['w_4'];
	mysqli_query($con,"update bowling set o_b_4=$o4,m_4=$m4,r_g_4=$r4,w_t_4=$w4 where t_id=$bo");
}
if(!isset($_POST['dnbo_5']))
{
	$o5=$_POST['o_5'];
	$m5=$_POST['ma_5'];
	$r5=$_POST['rg_5'];
	$w5=$_POST['w_5'];
	mysqli_query($con,"update bowling set o_b_5=$o5,m_5=$m5,r_g_5=$r5,w_t_5=$w5 where t_id=$bo");
}
if(!isset($_POST['dnbo_6']))
{
	$o6=$_POST['o_6'];
	$m6=$_POST['ma_6'];
	$r6=$_POST['rg_6'];
	$w6=$_POST['w_6'];
	mysqli_query($con,"update bowling set o_b_6=$o6,m_6=$m6,r_g_6=$r6,w_t_6=$w6 where t_id=$bo");
}
if(!isset($_POST['dnbo_7']))
{
	$o7=$_POST['o_7'];
	$m7=$_POST['ma_7'];
	$r7=$_POST['rg_7'];
	$w7=$_POST['w_7'];
	mysqli_query($con,"update bowling set o_b_7=$o7,m_7=$m7,r_g_7=$r7,w_t_7=$w7 where t_id=$bo");
}
if(!isset($_POST['dnbo_8']))
{
	$o8=$_POST['o_8'];
	$m8=$_POST['ma_8'];
	$r8=$_POST['rg_8'];
	$w8=$_POST['w_8'];
	mysqli_query($con,"update bowling set o_b_8=$o8,m_8=$m8,r_g_8=$r8,w_t_8=$w8 where t_id=$bo");
}
if(!isset($_POST['dnbo_9']))
{
	$o9=$_POST['o_9'];
	$m9=$_POST['ma_9'];
	$r9=$_POST['rg_9'];
	$w9=$_POST['w_9'];
	mysqli_query($con,"update bowling set o_b_9=$o9,m_9=$m9,r_g_9=$r9,w_t_9=$w9 where t_id=$bo");
}
if(!isset($_POST['dnbo_10']))
{
	$o10=$_POST['o_10'];
	$m10=$_POST['ma_10'];
	$r10=$_POST['rg_10'];
	$w10=$_POST['w_10'];
	mysqli_query($con,"update bowling set o_b_10=$o10,m_10=$m10,r_g_10=$r10,w_t_10=$w10 where t_id=$bo");
}
if(!isset($_POST['dnbo_11']))
{
	$o11=$_POST['o_11'];
	$m11=$_POST['ma_11'];
	$r11=$_POST['rg_11'];
	$w11=$_POST['w_11'];
	mysqli_query($con,"update bowling set o_b_11=$o11,m_11=$m11,r_g_11=$r11,w_t_11=$w11 where t_id=$bo");
}
mysqli_close($con);
header('location:matchdetails2.php');
}
else
	header('location:home.php');
?>