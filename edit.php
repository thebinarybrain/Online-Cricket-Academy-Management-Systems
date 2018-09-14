<?php
session_start();
if(isset($_POST['edit']))
{
	$id=$_POST['id'];
	$skill=$_POST['skill'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$address=$_POST['address'];
	$mobile_no=$_POST['mobile_no'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mk_aligarian');
	$q="select email from player where email='$email' and id!=$id";
	$res=mysqli_query($con,$q);
	$num=mysqli_num_rows($res);
	if($num!=0)
	{
		mysqli_close($con);
		echo "<script>
			alert('Email already registered');
			window.location.href='player.php'
	      </script>";
	}
	else
	{
		$q1="update player set email='$email',skill='$skill',password='$password',address='$address',mobile_no='$mobile_no' where id=$id";
		$_SESSION['usernamep']=$email;
		mysqli_query($con,$q1);
		mysqli_close($con);
		echo "<script>
			alert('Changes has been saved');
			window.location.href='player.php'
	      </script>";
	}
}
else if(isset($_POST['editp']))
{
	$email=$_POST['email'];
	$file=$_FILES['profile']['name'];
	$target="profile/".basename($_FILES['profile']['name']);
	$image_size=getimagesize($_FILES['profile']['tmp_name']);
		if($image_size==FALSE)
		{
			echo "<script>
			alert('Not a valid image');
			window.location.href='player.php'
	      </script>";
		}
		else
		{
			$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mk_aligarian');
	$q1="update player set photo='$file' where email='$email'";
	mysqli_query($con,$q1);
	move_uploaded_file($_FILES['profile']['tmp_name'],$target);
	echo "<script>
			alert('Changes Saved');
			window.location.href='player.php'
	      </script>";
		}
}
else
	header('location:home.php');
?>