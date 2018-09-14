<?php
session_start();
include "classes/class.phpmailer.php";
if(isset($_POST['sendm']))
{
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
	$mail->Body='Hey, some message has been posted for you at MK Aligarian Website. ';
	$mail->Subject="MK Aligarian";
	$name=$_POST['select'];
	$mes=$_POST['message'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mk_aligarian');
	 $q="update player set message='$mes' where name='$name'";
	$f=mysqli_query($con,$q);
	$row=mysqli_fetch_array(mysqli_query($con,"select * from player where name='$name'"));
	mysqli_close($con);
	if($f)
	{
		$mail->AddAddress($row['email']);
		if(!$mail->Send())
		{
			echo "<script>
			alert(<?php echo $mail->ErrorInfo ?>);
			</script>";
		}
		echo "<script>
			alert('Successfully Sent');
			window.location.href='coach.php'
	      </script>";
	}
}
else
	header('location:home.php');
?>