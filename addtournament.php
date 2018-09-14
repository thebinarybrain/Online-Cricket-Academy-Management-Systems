<?php
session_start();
if(isset($_POST['addtour']))
{
	$nam=$_POST['name'];
	$name=strtolower($nam);
	$sdate=$_POST['sdate'];
	$edate=$_POST['edate'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mk_aligarian');
	$q0="select * from tournament where name='$name'";
	$num=mysqli_num_rows(mysqli_query($con,$q0));
	if($num!=0)
	{
		mysqli_close($con);
		echo "<script>
			alert('Tournament name already registered');
			window.location.href='coach.php'
	      </script>";
	}
	else
	{
	$q="insert into tournament(name,s_date,e_date) values('$name','$sdate','$edate')";
	$f=mysqli_query($con,$q);
	mysqli_close($con);
	if($f==1)
	{
		echo "<script>
			alert('Tournament added successfully');
			window.location.href='coach.php'
	      </script>";
	}
	else
	{
		echo "<script>
			alert('Some error occured while adding tournament');
			window.location.href='coach.php'
	      </script>";
	}
	}
}
else
	header('location:coach.php');
?>