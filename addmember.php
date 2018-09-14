<?php
session_start();
if(isset($_POST['submitmember']))
{
	$name=$_POST['name'];
	$file=$_FILES['photo']['name'];
	$target="members/".basename($_FILES['photo']['name']);
	$image_size=getimagesize($_FILES['photo']['tmp_name']);
		if($image_size==FALSE)
		{
			echo "<script>
			alert('Not a valid image');
			window.location.href='coach.php'
	      </script>";
		}
		else
		{
			$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mk_aligarian');
	$num=mysqli_num_rows(mysqli_query($con,"select * from member where name='$name'"));
	if($num==0)
	{
	$q1="insert into member(name,image) values('$name','$file')";
	$f=mysqli_query($con,$q1);
	move_uploaded_file($_FILES['photo']['tmp_name'],$target);
	if($f)
	echo "<script>
			alert('Member added successfully');
			window.location.href='coach.php'
	      </script>";
	else
		echo "<script>
			alert('Member cannot be added');
			window.location.href='coach.php'
	      </script>";
	}
	else
		echo "<script>
			alert('Cannot register, Member is already registered with this name');
			window.location.href='coach.php'
	      </script>";
	}
}
else
	header('location:home.php');
?>