<?php
session_start();
include "classes/class.phpmailer.php";
$mail=new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug=1;
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';
$mail->Host="smtp.gmail.com";
$mail->Port=465;
$mail->IsHTML(true);
$mail->Username="mkaligariancrick@gmail.com";
$mail->Password="52625mansur";
$mail->SetFrom("mkaligariancrick@gmail.com");
if(isset($_POST['send']))
{
	$email=$_POST['email'];
	$select=$_POST['select'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mk_aligarian');
	$q0="select authentication from player where email='$email'";
	$res=mysqli_query($con,$q0);
	$rows=mysqli_fetch_array($res);
	$auth=$rows['authentication'];
	if($select=='player')
	{
		if($auth=='no')
		{
			echo "<script>
			alert('You are not authenticated yet');
			window.location.href='home.php'
	      </script>";
		}
		else
		$q="select password,email from player where email='$email'";
	}
	else
		$q="select password,email from coach where email='$email'";
	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
	if($num==1)
	{
		$row=mysqli_fetch_array($result);
		mysqli_close($con);
		$mail->Body='Hey, you have just ask to recover your password or username for '.$select.' portal of MK Aligarian Cricket Academy. So your username is <i>'.$row['email'].'</i> and password is <i>'.$row['password'].'</i>';
		$mail->Subject="MK Aligarian password and username recovery mail";
		$mail->AddAddress($_POST['email']);
		if(!$mail->Send())
		{
			echo "<script>
			alert(<?php echo $mail->ErrorInfo; ?>);
			window.location.href='home.php'
	      </script>";
		}
		else
		{
			echo "<script>
			alert('Your username and password has been sent to your email address');
			window.location.href='home.php'
	      </script>";
		}
	}
	else
	{
		echo "<script>
			alert('Your Email Address is not registered');
			window.location.href='home.php'
	      </script>";
	}
}
else
	header('location:home.php');
?>