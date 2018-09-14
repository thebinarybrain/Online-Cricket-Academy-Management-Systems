<?php
session_start();
if(isset($_SESSION['usernamep']))
	header('location:player.php');
if(isset($_SESSION['usernamec']))
	header('location:coach.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MK ALIGARIAN CRICKET ACADEMY</title>
  <link href="css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="SHORTCUT ICON" href="MK.png">
  <link rel='stylesheet prefetch' href='http:////netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
  <!--style>
.carousel
{
margin-bottom:0px;
padding:0 40px 30px 40px;
}
.carousel-control
{
left:-12px;
height:40px;
width:40px;
background: none repeat scroll 0 0 #222222;
border:4px solid #FFFFFF;
border-radius:23px 23px 23px 23px;
margin-top:90px;
}
.carousel-control .right
{
right:-12px;
}
.carousel-indicators
{
right:50%;
top:auto;
bottom:-10px;
margin-right:-19px;
}--><style>
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
	  document.getElementById("sp").setAttribute("style","position:relative;bottom:30px;left:150px");
	  document.getElementById("fp").setAttribute("style","position:relative;bottom:30px;left:80px");
	  document.getElementById("cc").innerHTML="";
	  }
  }
  </script>
  <div class="container">
	<div class="row">
		<div class="col-lg-2" style="float:left">
		<img src="MK.jpeg"/>
		</div>
		<div class=" col-lg-2">
		<div class="h3"><a style="text-decoration:none" href="#last"><span class="label label-primary">Centers</span></a></div>
		</div>
		<div class="col-lg-2">
		<div class="h3"><a style="text-decoration:none" href="#last"><span class="label label-primary">Contact Us</span></a></div>
		</div>
		<div class="col-lg-2" id="cc" style="float:right;position:relative;left:70px">
		<img src="MK.jpeg"/>
		</div>
		<div class=" col-xs-2"><br/>
		<!--<div class="h2"><span style="position:relative;right:50px;top:20px" class="label label-primary">Our Members</span></div>-->
		</div>
	</div><br/><br/>
	<div class="row">
		<div class="col-lg-offset-1 col-lg-10" >
			<!--<img src="1.jpg" id="imain" style="border-radius:10px;border-color:grey;border-style:solid;height:400px;width:100%" class="img-rounded img-responsive">
			<div class="h2" style="text-align:center"><div class="label label-success">MK ALIGARIAN CRICKET ACADEMY</div></div>-->
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
		</div>
		<!--<div class="col-lg-offset-1 col-lg-3">
			<img src="13.jpg" id="imain2" style="border-radius:10px;border-color:grey;border-style:solid;height:350px;width:100%" class="img-rounded img-responsive">
			<b id="carouselthumbnail" style="margin-top:5px;padding:10px;text-align:center" class="thumbnail">shoaib nusrat</b>
		</div>-->
	</div><br/><br/>
	<div class="row">
	<div class="col-lg-12">
	<ul style="background-color:lightblue;border-radius:5px" class="nav nav-pills nav-justified">
		<li class="active"><a style="color:white;font-weight:bold" href="#coach" data-toggle="tab">Coach</a></li>
		<li><a style="color:white;font-weight:bold" href="#academy" data-toggle="tab">Academy</a></li>
		<li><a style="color:white;font-weight:bold" href="#tournaments" data-toggle="tab">Tournaments</a></li>
		<li><a style="color:white;font-weight:bold" href="#login" data-toggle="tab">Login/Sign Up</a></li>
	</ul><br/>
	<div class="tab-content">
		<div id="coach" class="tab-pane active">
		<div class="h3"><div class="label label-success">Mohammad Mansur Ahamad (NSNIS Cricket Coach)</div></div>
		<img style="height:500px;width:100%" src="mansur.jpeg" class="img-responsive img-rounded"/><br/>
		It is the dream of coach Mohammad Mansur Ahamad to contribute in nourishing young cricket minds. It is his dedication and tough spirit for cricket that encourages him to devote himself for cricket.
			As a player he has a very inspiriing career. He is a right arm medium pace Bowler with the capability to move the bowl in both directions. Moreover his skills advances him to bowl in death overs as well.<br/>
			<div class="h3"><div class="label label-danger">Awards</div></div>
			<ul type="disc">
			<li>Best bowler in Vizzy trophy organized by BCCI (2013).</li>
			<li>Best bowler in North Zone Intervarsity (2008).</li>
			<li>Honored by the Registrar of the AMU Aligarh for bringing Laurels to the University and Facilitated in a Public Meeting on the Ocassion of the 61 <sup>st</sup> Republic Day (2010).</li>
			<li>Honored by the Registrar of the AMU Aligarh for bringing Laurels to the University and Facilitated in a Public Meeting on the Ocassion of the 60 <sup>th</sup> Republic Day (2009).</li>
			</ul>
			<div class="h3"><div class="label label-danger">Achievements</div></div>
			<ul type="disc">
			<li>Served as Captain AMU in University Cricket team in the session (2010-11).</li>
			<li>Member of Ranji Trophy T-20 Camp held at Kanpur during (2009-10).</li>
			<li>Member of Toyota UCC live telecasted worldwide by STAR Cricket (2013).</li>
			<li>Member of Vizzy Trophy North Zone team organized by BCCI (2012-13).</li>
			<li>Runner up in Vizzy Trophy organized by BCCI for two times in the year (2009 and 2013).</li>
			<li>Two times All India Intervarsity participant (2009 and 2013).</li>
			<li>Won North Zone Cricket Intervarsity Tournament in year (2009 and 2012).</li>
			<li>Under 22- Col. CK Naidu Trophy Camp from 26 <sup>th</sup> to 29 <sup>th</sup> Sept. at Kanpur (2007-08).</li>
			<li>Under 22- Col. CK Naidu Trophy Camp from 6 <sup>th</sup> to 9 <sup>th</sup> Oct. at Kanpur (2005-06).</li>
			<li>Under 17- Vijay Merchant Trophy Camp from 17 <sup>th</sup> to 20 <sup>th</sup> Oct. at Kanpur (2003-04).</li>
			<li>Under 17- Vijay Merchant Trophy Camp from 20 <sup>th</sup> to 24 <sup>th</sup> Oct. at Kanpur (2002-03).</li>
			<li>Under 16- Vijay Merchant Trophy Camp from 29 <sup>th</sup> to 22 <sup>th</sup> Oct. at Kanpur (2001-02).</li>
			</ul>
		</div>
		<div id="academy" class="tab-pane">
		<div class="h3"><div class="label label-success">MK Aligarian Cricket Academy</div></div>
		<div class="h4">
		The MK Aligarian Cricket Academy provides cricket coaching for cricketers of variuos ages and experience skills. The academy provides its services locally on both its centres. The coach has a vision of preparing the young talent for team india and excells his  vision during training session of the academy.</div>
		<div class="h3"><div class="label label-danger">Facilities</div></div>
		<br/>
				<table class="table table-hover">
					<tbody>
		<?php
		$con=mysqli_connect('localhost','root');
		mysqli_select_db($con,'mk_aligarian');
		$res=mysqli_query($con,"select * from academy_facility");
		$num=mysqli_num_rows($res);
		for($i=0;$i<$num;$i++)
		{
			$row=mysqli_fetch_array($res);
			?>

						<tr>
							<td><?php echo strtoupper($row['facility'])."." ?></td>
						</tr>
				<?php
		}
		
		mysqli_close($con);
		?>
		</tbody>
		</table>
		<div class="h3"><div class="label label-warning">Achievements</div></div>
		<br/>
		
				<table class="table table-hover">
					<tbody>
		<?php
		$con=mysqli_connect('localhost','root');
		mysqli_select_db($con,'mk_aligarian');
		$res=mysqli_query($con,"select * from achievement");
		$num=mysqli_num_rows($res);
		for($i=0;$i<$num;$i++)
		{
			$row=mysqli_fetch_array($res);
			?>
						<tr>

							<td><?php echo strtoupper($row['achievement']) ?></td>
						</tr>
			<?php
		}
		mysqli_close($con);
		?>
		</tbody>
				</table>
			
		</div>
		<div id="tournaments" class="tab-pane">
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
								?><div class="col-lg-2">
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
		<div id="login" class="tab-pane"><br/><br/><br/>
			<div style="background-color:#7FB3D5;border-radius:6px" class="col-lg-offset-4 col-lg-4">
				<div class="h3">Log in</div>
				<button id="sp" style="position:relative;bottom:40px;left:250px" data-target="#signup" data-toggle="modal" class="btn btn-primary">Sign Up <span class="glyphicon glyphicon-chevron-up"></span></button>
				<div class="modal" id="signup" tabindex="-1" data-keyboard="false" data-backdrop="static">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button class="close pull-right" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Sign Up</h4>
							</div>
							<div class="modal-body">
								<form action="register.php" onsubmit="return validate()" method="post" >
									<div class="form-group">
										<label for="name">NAME</label>
										<input type="text" required maxlength="30"  name="name" placeholder="Full Name" id="name" class="form-control"/>
									</div>
									<div class="form-group">
										<label for="email">EMAIL</label>
										<input type="email" name="email" required placeholder="example@something.com" id="email" class="form-control"/>
									</div>
									<div class="form-group">
										<label for="dob">DOB</label>
										<input type="date" name="dob" required placeholder="Date of Birth" id="dob" class="form-control"/>
									</div>
									<div class="form-group">
										<label for="password">PASSWORD</label>
										<input type="password" name="password" required placeholder="Password" id="password" class="form-control"/>
									</div>
									<div class="form-group">
										<label for="cpassword">CONFIRM PASSWORD</label>
										<input type="password" name="cpassword" required placeholder="Password" id="cpassword" class="form-control"/>
									</div>
									<button type="submit" name="register" class="btn btn-primary">Register</button>
								</form>
							</div>
						</div>
					</div>
				</div>
					<form method="post" action="login.php">
						<div class="form-group">
							<label for="select">Select</label>
							<select type="text" required name="select" class="form-control" id="select">
							<option value="coach">Coach</option>
							<option value="player">Player</option>
							</select>
						</div>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" required name="username" class="form-control" id="username"/>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" required name="password" class="form-control" id="password"/>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-lg-2">
									<button type="submit" name="login" class="btn btn-primary">Login <span class="glyphicon glyphicon-off"></span></button>
								</div>
								<div class="col-lg-offset-3 col-lg-2">
									<button data-target="#forgot" id="fp" data-toggle="modal" class="btn btn-info">Forgot Password <span class="glyphicon glyphicon-question-sign"></span></button>
								</div>
							</div>
						</div>
					</form>
							<div class="modal" id="forgot" tabindex="-1" data-keyboard="false" data-backdrop="static">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button class="close pull-right" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Forgot Password(Your Password will be sent on your email address)</h4>
							</div>
							<div class="modal-body">
								<form action="sendmail.php" method="post" >
									<div class="form-group">
										<label for="select">Select</label>
										<select type="text" required name="select" class="form-control" id="select">
											<option value="coach">Coach</option>
											<option value="player">Player</option>
										</select>
									</div>
									<div class="form-group">
										<label for="email">EMAIL</label>
										<input type="email" name="email" required placeholder="example@something.com" id="email" class="form-control"/>
									</div>
									<button type="submit" name="send" class="btn btn-primary">Send</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			
	</div>
	</div>
	</div>
	</div>
	</div>
	<?php
	include "members.php";
	?>
	<?php
	include "footer.php";
	?>
	<script src="jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="jquery.min.js"></script>
	<script src="Home.js"></script>
	<script>
	function validate()
{
	result=true;
	var pass=document.getElementById("password").value;
	var pl=pass.length;
	var passagain=document.getElementById("cpassword").value;
	if(!(pass===passagain))
	{
		result=false;
		alert("Passwords Mismatch");
	}
	if(pl<6 || pl>12)
	{
		alert("password should contain atleast 6-12 characters");
		result=false;
	}
	return result;
}
	</script>
  </body>
</html>