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
$mail->Body='Hey, some notice has been posted for you at MK Aligarian Website. ';
$mail->Subject="MK Aligarian";
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'mk_aligarian');
$res=mysqli_query($con,"select * from player where authentication='yes'");
$num=mysqli_num_rows($res);
for($i=0;$i<$num;$i++)
{
	$row=mysqli_fetch_array($res);
	$mail->AddAddress($row['email']);
	$f=$mail->Send();
	if(!$f)
	{
		echo "<script>
		alert(<?php echo $mail->ErrorInfo ?>);
      </script>";
	}
	$f=0;
}
mysqli_close($con);
echo "<script>
			alert('Notice posted successfully');
			window.location.href='coach.php'
	      </script>";
?>