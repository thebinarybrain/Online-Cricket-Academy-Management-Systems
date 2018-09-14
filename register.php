<?php
if(isset($_POST['register']))
{
$nam=$_POST['name'];
$emai=$_POST['email'];
$dob=$_POST['dob'];
$name=strtolower($nam);
$email=strtolower($emai);
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'mk_aligarian');
$q="select * from player where email='$email' or name='$name'";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);
if($num==0)
{
	$q="insert into player(name,email,password,DOB,authentication) values('$name','$email','$password','$dob','no')";
	mysqli_query($con,$q);
	mysqli_close($con);
}
else
{
	echo "<script>
			alert('Email or Name Already Registered please add some references to name or change your email address');
			window.location.href='home.php'
	      </script>";
}
echo "<script>
			alert('Successfully Registered, Ask your Coach to authenticate you');
			window.location.href='home.php'
	      </script>";
}
else
	header('location:home.php');
?>