<?php
session_start();
if(isset($_POST['feedbacksubmit']))
{
$feedback=$_POST['textarea'];
$rating=$_POST['rating'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'mk_aligarian');
$username=$_SESSION['usernamep'];
$q0="select id from player where email='$username'";
$result=mysqli_query($con,$q0);
$row=mysqli_fetch_array($result);
$id=$row['id'];
$q="insert into feedback(rating,feedback,p_id) values('$rating','$feedback',$id)";
$f=mysqli_query($con,$q);
if($f)
	echo "<script>
			alert('Feedback submitted Successfully');
			window.location.href='player.php'
	      </script>";
else
	echo "<script>
			alert('Feedback cannot be submitted');
			window.location.href='player.php'
	      </script>";
mysqli_close($con);
}
else
	header('location:home.php');
?>