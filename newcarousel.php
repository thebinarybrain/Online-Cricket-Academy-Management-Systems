<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MK ALIGARIAN CRICKET ACADEMY</title>
  <link href="css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="SHORTCUT ICON" href="MK.png">
  <link rel='stylesheet prefetch' href='http:////netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
  </head>
  <body>
  <div class="container">
	<div class="row">
		<div class="col-md-12">
<div class="carousel slide" data-ride="carousel" id="slide1"  data-interval="4000" style="height:70%" >
	
	<!-- indicator -->
	<ol class="carousel-indicators">
		<li data-target="slide1" data-slide-to="0" class="active"></li>
		<li data-target="slide1" data-slide-to="1" ></li>
		<li data-target="slide1" data-slide-to="2" ></li>
		<li data-target="slide1" data-slide-to="3" ></li>
	
		
	
		
	</ol>
	
		<div class="carousel-inner" >
			<div class="item active">
				<image src="carousel/1.jpg" width="100%" style="height:100%">
			</div>
			
			
			
			<div class="item">
				<image width="100%" style="height:100%" src="carousel/2.jpg">
			</div>
			<div class="item">
				<image width="100%" style="height:100%" src="carousel/3.jpg">
			</div>
			<div class="item">
				<image width="100%" style="height:100%" src="carousel/4.jpg">
			</div>
			
			
				
				
			
		</div>
		<a href="#slide1" class="left carousel-control" data-slide="prev"><span class="icon-prev"></span></a>
		<a href="#slide1" class="right carousel-control" data-slide="next"><span class="icon-next"></span></a>
	</div>
	</div>
	</div>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
			<input type="file" name="change" required class="form-control"/>
			</div>
	<button class="btn btn-success" name="file">Change</button>
	</form>
	<?php
	if(isset($_POST['file']))
	{
		$file=$_FILES['change']['name'];
	$target="carousel/1.jpg";
	$t2="carousel/2.jpg";
	$t3="carousel/3.jpg";
	$t4="carousel/4.jpg";
	rename("carousel/3.jpg",$t4);
	rename("carousel/2.jpg",$t3);
	rename("carousel/1.jpg",$t2);
	$image_size=getimagesize($_FILES['change']['tmp_name']);
	move_uploaded_file($_FILES['change']['tmp_name'],$target);
		if($image_size==FALSE)
		{
			echo "<script>
			alert('Not a valid image');
			//window.location.href='player.php'
	      </script>";
		}
		  echo "hi";
	}
	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="jquery.min.js"></script>
  </body>
</html>