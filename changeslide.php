<?php
if(isset($_POST['file']))
{
		$file=$_FILES['change']['name'];
	$target="carousel/1.jpg";
	$t2="carousel/2.jpg";
	$t3="carousel/3.jpg";
	$t4="carousel/4.jpg";
	$t5="carousel/5.jpg";
	$t6="carousel/6.jpg";
	$t7="carousel/7.jpg";
	$t8="carousel/8.jpg";
	$t9="carousel/9.jpg";
	$t10="carousel/10.jpg";
	unlink("carousel/10.jpg");
	rename("carousel/9.jpg",$t10);
	rename("carousel/8.jpg",$t9);
	rename("carousel/7.jpg",$t8);
	rename("carousel/6.jpg",$t7);
	rename("carousel/5.jpg",$t6);
	rename("carousel/4.jpg",$t5);
	rename("carousel/3.jpg",$t4);
	rename("carousel/2.jpg",$t3);
	rename("carousel/1.jpg",$t2);
	$image_size=getimagesize($_FILES['change']['tmp_name']);
	move_uploaded_file($_FILES['change']['tmp_name'],$target);
		if($image_size==FALSE)
		{
			echo "<script>
			alert('Not a valid image');
			window.location.href='player.php'
	      </script>";
		}
		  echo "<script>
			alert('Image changed Successfully');
			window.location.href='player.php'
	      </script>";
}
else
	header('location:coach.php');
	?>