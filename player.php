<?php
session_start();
if(isset($_SESSION['usernamep']))
{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MK ALIGARIAN CRICKET ACADEMY</title>
  <link href="css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="SHORTCUT ICON" href="MK.png"/>
  <link rel='stylesheet prefetch' href='http:////netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'/>
  <style>
.carousel-indicators li
{
background:#cecece;
}
.carousel-indicators .active
{
background:#428bca;
}
</style>
  </head>
   <body onload="size()">
  <script>
  function size()
  {
	 var w=window.innerWidth;
	var  h=window.innerHeight;
	  if( w<1000 || h<500 )
	  {
	  document.getElementById("cc").innerHTML="";
	  document.getElementById("c").innerHTML="<br/>";
	  document.getElementById("hd").innerHTML="<div class='h4' style='center'><div class='label label-success'>MK ALIGARIAN CRICKET ACADEMY</div></div>";
	  }
  }
  </script>
   <div class="container">
	<div class="row">
		<div class="col-md-2">
		<img src="MK.jpeg"/>
		</div>
		<div style="position:relative;top:20px;float:left">
		<div class="col-md-2">
		<form style='position:relative;top:16px' action='logout.php' method='post'><button class='btn btn-danger'>Log Out <span class='glyphicon glyphicon-off'></span></button></form>
		</div>
		<div class="col-md-offset-1 col-md-2">
		<div class="h3"><a style="text-decoration:none" href="#last"><span class="label label-primary">Centers</span></a></div>
		</div>
		<div class="col-md-offset-1 col-md-2">
		<div class="h3"><a style="text-decoration:none" href="#last"><span class="label label-primary">Contact Us</span></a></div><div id="c"></div>
		</div>
		<div class="col-md-offset-2 col-md-2" id="cc" style="position:relative;left:350px;bottom:15px">
		<img src="MK.jpeg"/>
		</div>
		</div>
		<!--<div class="col-md-offset-2 col-md-2">
		<div class="h2"><span style="position:relative;right:50px;top:20px" class="label label-primary">Our Members</span></div>-->
		</div>
	<br/><br/>
	<div class="row">
		<div class="col-md-offset-1 col-md-10">
					<div class="carousel slide" data-ride="carousel" id="slide1"  data-interval="4000" style="height:390px;margin-top:-30px;border-radius:10px" >
	
	<!-- indicator -->
	<ol class="carousel-indicators">
		<li data-target="#slide1" data-slide-to="0" class="active"></li>
		<li data-target="#slide1" data-slide-to="1" ></li>
		<li data-target="#slide1" data-slide-to="2" ></li>
		<li data-target="#slide1" data-slide-to="3" ></li>
		<li data-target="#slide1" data-slide-to="4" ></li>
		<li data-target="#slide1" data-slide-to="5" ></li>
		<li data-target="#slide1" data-slide-to="6" ></li>
		<li data-target="#slide1" data-slide-to="7" ></li>
		<li data-target="#slide1" data-slide-to="8" ></li>
		<li data-target="#slide1" data-slide-to="9" ></li>
	</ol>
		<div class="carousel-inner" style="border-radius:10px" >
			<div class="item active">
				<image src="carousel/1.jpg"  width="100%" style="height:390px;border-radius:10px">
			</div>
			<div class="item">
				<image width="100%" style="height:390px;border-radius:10px" src="carousel/2.jpg">
			</div>
			<div class="item">
				<image width="100%" style="height:390px;border-radius:10px" src="carousel/3.jpg">
			</div>
			<div class="item">
				<image width="100%" style="height:390px;border-radius:10px" src="carousel/4.jpg">
			</div>
			<div class="item">
				<image width="100%" style="height:390px;border-radius:10px" src="carousel/5.jpg">
			</div>
			<div class="item">
				<image width="100%" style="height:390px;border-radius:10px" src="carousel/6.jpg">
			</div>
			<div class="item">
				<image width="100%" style="height:390px;border-radius:10px" src="carousel/7.jpg">
			</div>
			<div class="item">
				<image width="100%" style="height:390px;border-radius:10px" src="carousel/8.jpg">
			</div>
			<div class="item">
				<image width="100%" style="height:390px;border-radius:10px" src="carousel/9.jpg">
			</div>
			<div class="item">
				<image width="100%" style="height:390px;border-radius:10px" src="carousel/10.jpg">
			</div>
		</div>
		<a href="#slide1" class="left carousel-control" style="border-radius:10px" data-slide="prev"><span class="icon-prev"></span></a>
		<a href="#slide1" class="right carousel-control" style="border-radius:10px" data-slide="next"><span class="icon-next"></span></a>
	</div>
			<!--<img src="1.jpg" id="imain" style="border-radius:10px;border-color:grey;border-style:solid;height:350px;width:100%" class="img-rounded img-responsive">-->
			<div id="hd"><div class="h2" style="text-align:center"><div class="label label-success">MK ALIGARIAN CRICKET ACADEMY</div></div></div>
		</div>
		<!--<div class="col-md-offset-1 col-md-3">
			<img src="13.jpg" id="imain2" style="border-radius:10px;border-color:grey;border-style:solid;height:350px;width:100%" class="img-rounded img-responsive">
			<b id="carouselthumbnail" style="margin-top:5px;padding:10px;text-align:center" class="thumbnail">shoaib nusrat</b>
		</div>-->
	</div><br/><br/>
	<div class="row">
	<div class="col-md-12">
	<?php $con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mk_aligarian');
	$em=$_SESSION['usernamep'];
	$q="select message from player where email='$em'";
	$res=mysqli_query($con,$q);
	$row=mysqli_fetch_array($res);
	if(!empty($row['message']))
	{
	?>
	<marquee><img src="NewBlink.gif"/><?php echo $row['message']."  <sub>--message by coach</sub>" ?>
	</marquee>
	<?php
	}
	mysqli_close($con);
	?>
	<ul style="background-color:lightblue;border-radius:5px" class="nav nav-pills nav-justified">
		<li class="active"><a style="color:white;font-weight:bold" href="#profile" data-toggle="tab">Profile</a></li>
		<li><a style="color:white;font-weight:bold" href="#notice" data-toggle="tab">Notice</a></li>
		<li><a style="color:white;font-weight:bold" href="#schedule" data-toggle="tab">Schedule</a></li>
		<li><a style="color:white;font-weight:bold" href="#tournament" data-toggle="tab">Tournaments</a></li>
		<li><a style="color:white;font-weight:bold" href="#match" data-toggle="tab">Warm Up Matches</a></li>
		<li><a style="color:white;font-weight:bold" href="#feedback" data-toggle="tab">Complaint/Suggestions</a></li>
	</ul><br/><br/><br/>
	<div class="tab-content">
		<div id="profile" class="tab-pane active">
		<div class="row">
		<div class="col-md-4">
		<?php	
			$con=mysqli_connect('localhost','root');
			mysqli_select_db($con,'mk_aligarian');
			$email=$_SESSION['usernamep'];
			$q="select * from player where email='$email'"; 
			$res=mysqli_query($con,$q);
			$row=mysqli_fetch_array($res);
			$dob=$row['DOB'];
			$q1="select (datediff(Curdate(),'$dob'))/365 as age";
			$res2=mysqli_query($con,$q1);
			$row2=mysqli_fetch_array($res2);
			$age=floor($row2['age']);
			$name=strtoupper($row['name']);
			echo "<i><br/><br/><img style='height:200px;width:250px;margin-left:30px;border:solid;border-color:#bdbdbd' class='img-responsive' src='profile/".$row['photo']."'><p style='text-align:justify'>"."<div class='h3'><b><br/><br/>".$name."</b></div>"."<br/><br/>Age : <b>".$age."<br/><br/>"." </b>Skill : <b>".$row['skill']."<br/><br/></b>Email address :   <b>".$row['email']."<br/><br/></b>Mobile number : <b>".$row['mobile_no']."<br/><br/></b>Address : <b>".$row['address']."<br/><br/></b>Authenticated : <b>".$row['authentication']."</b></p></i>";
			?>
			</div>
			<div class="col-md-offset-2 col-md-6">
			<h3><div class="label label-success">Edit Profile</div></h3>
			<form  method="post" action="edit.php" enctype="multipart/form-data">
			<input type="hidden"  name="id" value="<?php echo $row['id'] ?>"/>
			<div class="form-group">
			<label for="skill">Skill</label>
			<select class="form-control" name="skill" id="skill"/>
			<option>Right Arm Left Break</option>
			<option>Right Arm Off Break</option>
			<option>Left Arm Left Break</option>
			<option>Left Arm Off Break</option>
			<option>Right Arm Medium Pace</option>
			<option>Left Arm Medium Pace</option>
			<option>Right handed Batsman</option>
			<option>Left handed Batsman</option>
			<option>WicketKeeper Batsman</option>
			<option>Batsman WicketKeeper</option>
			<option>Batting Alrounder</option>
			<option>Bowling Alrounder</option>
			</select>
			</div>
			<div class="form-group">
			<label for="email">Email</label>
			<input type="text"  value="<?php echo $row['email'] ?>" class="form-control" name="email" id="email"/>
			</div>
			<div class="form-group">
			<label for="mobile_no">Mobile No</label>
			<input type="number" value="<?php echo $row['mobile_no'] ?>"  class="form-control" name="mobile_no" id="mobile_no"/>
			</div>
			<div  class="form-group">
			<label for="password">Password <span id="span" onclick="managesee()" class="glyphicon glyphicon-eye-open"></span></label>
			<input type="password" value="<?php echo $row['password'] ?>" class="form-control" name="password" id="password"/>
			</div>
			<div class="form-group">
			<label for="address">Address</label>
			<input type="text" value="<?php echo $row['address'] ?>" class="form-control" name="address" id="address"/>
			</div>
			<button class="btn btn-primary" name="edit">Save Changes <span class="glyphicon glyphicon-ok-sign"></span></button>
			</form><br/><br/><br/>
			<form action="edit.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="email" value="<?php echo $_SESSION['usernamep'] ?>"/>
			<div class="form-group">
			<input type="file" name="profile" required class="form-control"/>
			</div>
			<button class="btn btn-primary" name="editp">Edit Photo <span class="glyphicon glyphicon-ok-sign"></span></button>
			</form>
			</div>
			</div>
		</div>
		<div id="notice" class="tab-pane">
			<?php
		$con=mysqli_connect('localhost','root');
		mysqli_select_db($con,'mk_aligarian');
		$q="select * from notice where expire>=curdate()";
		$res=mysqli_query($con,$q);
		$num=mysqli_num_rows($res);
		for($i=0;$i<$num;$i++)
		{
			$row=mysqli_fetch_array($res);
			if($row['type']=='team')
			{
				?>
				<ul><b><li class="list-group-item-success"><?php echo $row['notice']." posted on ".$row['post_date'] ?></li></b></ul>
				<div class="h4"><div class="label label-success">Team</div></div>
				<div style="height:300px;overflow:auto" class="table-responsive">
				<table class="table table-hover">
					<thead>
						<th>No</th>
						<th>Name</th>
					</thead>
					<tbody>
				<?php
				for($j=1;$j<=12;$j++)
				{
					?>
					<tr>
					<td><?php echo $j ?></td>
					<td><?php echo $row['player_'.$j] ?> </td>
					</tr>
					<?php
				}
				?>
				</tbody>
				</table>
				</div>
				<?php
			}
			else if($row['type']=='general')
			{
				?><ul><b><li class="list-group-item-danger"><?php echo $row['notice']." posted on ".$row['post_date'] ?></li></b></ul><?php
			}
		}
		mysqli_close($con);
			?>
		</div>
		<div id="schedule" class="tab-pane">
		<?php
		$con=mysqli_connect('localhost','root');
		mysqli_select_db($con,'mk_aligarian');
		$schedule=mysqli_fetch_array(mysqli_query($con,"select * from schedule"));
		mysqli_close($con);
		?>
		<div class="row">
		<div class="col-md-offset-2 col-md-8">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<th>Days</th>
						<th>Schedule</th>
					</thead>
					<tbody>
						<tr>
							<td>Monday:</td>
							<td><?php echo $schedule['monday'] ?></td>
						</tr>
						<tr>
							<td>Tuesday:</td>
							<td><?php echo $schedule['tuesday'] ?></td>
						</tr>
						<tr>
							<td>Wednesday:</td>
							<td><?php echo $schedule['wednesday'] ?></td>
						</tr>
						<tr>
							<td>Thursday:</td>
							<td><?php echo $schedule['thursday'] ?></td>
						</tr>
						<tr>
							<td>Friday:</td>
							<td><?php echo $schedule['friday'] ?></td>
						</tr>
						<tr>
							<td>Saturday:</td>
							<td><?php echo $schedule['saturday'] ?></td>
						</tr>
						<tr>
							<td>Sunday:</td>
							<td><?php echo $schedule['sunday'] ?></td>
						</tr>
					</tbody>
				</table>
			</div>
			</div>
			</div>
		</div>
		<div id="tournament" class="tab-pane">
		<?php
		$con=mysqli_connect('localhost','root');
		mysqli_select_db($con,'mk_aligarian');
		$qu="select * from tournament";
		$res=mysqli_query($con,$qu);
		$nu=mysqli_num_rows($res);
		?><div class="panel-group" id="accordion"><?php
		for($i=0;$i<$nu;$i++)
		{
			$r=mysqli_fetch_array($res);
			?>
				<div class="panel panel-primary">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a href="#<?php echo $i ?>" data-toggle="collapse" data-parent="#accordion"><?php  $n=$r['name'];echo strtoupper($n)." Tournament from ".$r['s_date']." to ".$r['e_date']; ?></a>
					</h4>
				</div>
				<div id="<?php echo $i ?>" class="panel-collapse collapse">
					<div class="panel-body">
						<ul>
						<?php 
						$que="select * from matches where tour_id in (select tour_id from tournament where name='$n')";
						$resu=mysqli_query($con,$que);
						$numb=mysqli_num_rows($resu);
						for($j=0;$j<$numb;$j++)
						{
							$ro=mysqli_fetch_array($resu);
							$t1=$ro['team_1'];
							$t2=$ro['team_2'];
							$r1=mysqli_fetch_array(mysqli_query($con,"select * from teams where t_id=$t1"));
							$r2=mysqli_fetch_array(mysqli_query($con,"select * from teams where t_id=$t2"));
							?><li><?php echo strtoupper($r1['name'])." Vs ".strtoupper($r2['name'])." Played on ".strtoupper($ro['match_date'])." at ".strtoupper($ro['match_venue'])." <br/>: ".strtoupper($ro['result'])." and Man Of The Match was ".strtoupper($ro['mom']) ?></li><br/><br/>
							<div class="row">
							<?php
							$mid=$ro['m_id'];
							$check=mysqli_num_rows(mysqli_query($con,"select b_id from batting where t_id in(select toss from team_match where m_id=$mid)"));
							if($check!=0)
							{
								?><div class="col-md-2">
							<form action="scoreboard.php" method="post">
							<input type="hidden" name="mid" value="<?php echo $ro['m_id'] ?>"/>
							<button class="btn btn-warning" name="scoreboard">Scoreboard</button>
							</form></div><?php
							} 
								?></div><br/>
							<?php
						}
						?>
						</ul>
					</div>
				</div>
			</div>
			
			<?php
		}
		mysqli_close($con);
		?></div>
		</div>
		<div id="match" class="tab-pane">
				<?php
		$con=mysqli_connect('localhost','root');
		mysqli_select_db($con,'mk_aligarian');
		$res=mysqli_query($con,"select * from matches where type='warm up'");
		$num=mysqli_num_rows($res);
		for($i=0;$i<$num;$i++)
		{
		$row=mysqli_fetch_array($res);
		$t1=$row['team_1'];
		$t2=$row['team_2'];
		$r1=mysqli_fetch_array(mysqli_query($con,"select * from teams where t_id=$t1"));
		$r2=mysqli_fetch_array(mysqli_query($con,"select * from teams where t_id=$t2"));
		?><li><?php echo strtoupper($r1['name'])." Vs ".strtoupper($r2['name'])." Played on ".strtoupper($row['match_date'])." at ".strtoupper($row['match_venue'])." <br/>: ".strtoupper($row['result'])." and Man Of The Match was ".strtoupper($row['mom']) ?></li><br/><br/>
		<div class="row">
		<?php
		$mid=$row['m_id'];
		$check=mysqli_num_rows(mysqli_query($con,"select b_id from batting where t_id in(select toss from team_match where m_id=$mid)"));
		if($check!=0)
		{
		?>
		<form action="scoreboard.php" method="post">
		<input type="hidden" name="mid" value="<?php echo $row['m_id'] ?>"/>
		<button class="btn btn-warning" name="scoreboard">Scoreboard</button>
		</form><br/><br/>
		<?php } 
		?></div>
		<?php
		}
		mysqli_close($con);
		?><br/><br/>
		</div>
		<div id="feedback" class="tab-pane">
		<div style="margin-top:50px" class="row">
						<div class="col-md-offset-4 col-md-4">
						<form style="padding:20px;border-radius:10px;background-color:#3498DB" method="post" action="feedback.php">
						<div class="form-group">
						<label for="textarea">Feedback</label>
						<textarea class="form-control" required maxlength="100" id="textarea" name="textarea" rows="5" cols="5"></textarea>
						</div>
						<div class="form-group">
						<label> Give your Rating</label>
						<div class="radio">
							<label>
								<input type="radio" required name="rating" value="1"/>Very Bad
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" required  name="rating" value="2"/>Bad
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" required  name="rating" value="3"/>Good
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" required  name="rating" value="4"/>Very Good
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" required  name="rating" value="5"/>Awesome
							</label>
						</div>
						</div>
						<button class="btn btn-success" name="feedbacksubmit" type="submit">Done</button>
						</form>
						</div>
					</div>
		</div>
	</div><br/><br/><br/>
	</div>
	</div>
	</div>
	<?php
	include "members.php";
	?>
	<?php
	include "footer.php";
	?>
	<!--<div class="container-fluid" style="width:100%;background-color:#34495E;">
	<div class="row" >
		<div id="last" class="col-md-offset-1 col-md-3">
			<h1><span class="label">Centers</span></h1>
			<span style="color:white">
			<b><i><u>MK Aligarians Night Cricket Academy</b></i></u><br/>
			Address: Street 2, Iqra Colony<br/>
			Near Iqra Public School<br/>
			Aligarh 202001<br/>
			Timings: 6:30 PM to 10 PM<br/>
			<span><br/><br/>
			<span style="color:white">
			<b><i><u>MK Aligarians Cricket Academy</b></i></u><br/>
			Address: Near Qayampur Morh<br/>
			Quarsi Bypass Ramghat Road<br/>
			Aligarh 202001<br/>
			Timings: 1:30 PM to 6:30 PM<br/>
			<span>
		</div>
		<div class="col-md-offset-1 col-md-3">
			<h1><span class="label">Contact Us</span></h1>
			<span style="color:white">
			Address: 822, Hadi Nagar<br/>
			Dhorrah Mafi<br/>
			Aligarh (UP)- 202001<br/>
			Mob: 9319598092<br/>
			Email: nawabmansur@gmail.com<br/>
		
			<div class="wrapper">
	    <ul class="social-icons icon-circle list-unstyled list-inline"> 
		<li> <a href="#" class="h1"><i style="position:relative;top:10px"class="fa fa-facebook"></i></a></li>
		<li> <a href="#" class="h1"><i  style="position:relative;left:30px;top:10px" class="fa fa-instagram"></i></a></li>
		<li> <a href="#" class="h1"><i style="position:relative;left:60px;top:10px" class="fa fa-youtube"></i></a></li>		
		</ul>
		</div><br/><br/><br/>
			<div class="well" style="position:relative;right:40px;width:110%;color:#34495E">MK ALIGARIAN CRICKET ACADEMY <span class="glyphicon glyphicon-copyright-mark"></span> <span class="glyphicon glyphicon-registration-mark"></span></div>
			</span>
		</div>
		<div class="col-md-offset-1 col-md-3">
		<h1><span class="label">Sponsors</span></h1>
			
		</div>
	</div>
  </div>-->
  <script src="jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
	<script src="Home.js"></script>
	<script>
	function managesee()
	{
		var pass=document.getElementById("password");
		var span=document.getElementById("span");
		if(pass.getAttribute("type")=="password")
		{
			pass.setAttribute("type","text");
			span.setAttribute("class","glyphicon glyphicon-eye-close");
		}
		else if(pass.getAttribute("type")=="text")
		{
			pass.setAttribute("type","password");
			span.setAttribute("class","glyphicon glyphicon-eye-open");
		}
	}
	</script>
  </body>
</html>
<?php
}
else
	header('location:home.php');
?>