<?php
session_start();
if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$select=$_POST['select'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mk_aligarian');
	if($select=='player')
	{
	$q="select * from player where email='$username' and password='$password'";
	$res=mysqli_query($con,$q);
	$num=mysqli_num_rows($res);
	if($num==1)
	{
		$row=mysqli_fetch_array($res);
		mysqli_close($con);
		if($row['authentication']=='yes')
		{
		$_SESSION['usernamep']=$username;
		header('location:player.php');
		}
		else
			echo "<script>
			alert('You are not yet authenticated');
			window.location.href='home.php'
	      </script>";
	}
	else
		echo "<script>
			alert('Incorrect Credantials');
			window.location.href='home.php'
	      </script>";
	}
	else
	{
		$q="select * from coach where username='$username' and password='$password'";
		$res=mysqli_query($con,$q);
		$num=mysqli_num_rows($res);
		mysqli_close($con);
		if($num==1)
		{
			$_SESSION['usernamec']=$username;
			header('location:coach.php');
		}
		else
			echo "<script>
			alert('Incorrect Credantials');
			window.location.href='home.php'
	      </script>";
	}
	
}
else
	header('location:home.php');
?>