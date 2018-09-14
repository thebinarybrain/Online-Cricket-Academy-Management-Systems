<?php
session_start();
if(isset($_SESSION['usernamec']))
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
  <link rel="SHORTCUT ICON" href="MK.png">
  <link rel='stylesheet prefetch' href='http:////netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
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
  var h=window.innerHeight;
  if(h<500 || w<1000)
  {
	  x=document.getElementById("cp");
	  x.innerHTML="<br/><br/>";
	  document.getElementById("c").innerHTML="<br/>";
	  document.getElementById("cp2").setAttribute("style","position:relative;left:15px");
	  document.getElementById("hd").innerHTML="<div class='h4' style='center'><div class='label label-success'>MK ALIGARIAN CRICKET ACADEMY</div></div>";
	  y=document.getElementsByClassName("bt");
	  for(i=0;i<5;i++)
		  y[i].innerHTML="<br/>";
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
	</div><br/><br/>
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
			<div id="hd"><div class="h2" style="text-align:center"><div class="label label-success">MK ALIGARIAN CRICKET ACADEMY</div></div></div><div id="cp"></div>
			<button data-target="#changepass" id="cp2" data-toggle="modal" style="position:relative;right:20px;bottom:38px;" class="btn btn-success">Change Password <span class="glyphicon glyphicon-edit"></span></button>
		</div>
				<div class="modal" id="changepass" tabindex="-1" data-keyboard="false" data-backdrop="static">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button class="close pull-right" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Change Password</h4>
							</div>
							<div class="modal-body">
							<form method="post" action="changepass.php" onsubmit="return changepass()">
								<div class="form-group">
									<label for="pas1">New Password</label>
									<input type="password" required id="pas1" name="pass1" maxlength="20" class="form-control" />
								</div>
								<div class="form-group">
									<label for="pas2">Confirm Password</label>
									<input type="password" required id="pas2" name="pass2" maxlength="20" class="form-control" />
								</div>
								<button class="btn btn-success" name="changepas">Done <span class="glyphicon glyphicon-check"></span></button>
							</form>
							</div>
						</div>
					</div>
		</div>
		<!--<div class="col-md-offset-1 col-md-3">
			<img src="13.jpg" id="imain2" style="border-radius:10px;border-color:grey;border-style:solid;height:350px;width:100%" class="img-rounded img-responsive">
			<b id="carouselthumbnail" style="margin-top:5px;padding:10px;text-align:center" class="thumbnail">shoaib nusrat</b>
		</div>-->
	</div><br/><br/>
	<div class="row">
	<div class="col-md-12">
	<ul style="background-color:lightblue;border-radius:5px" class="nav nav-pills nav-justified">
		<li class="active"><a style="color:white;font-weight:bold" href="#notice" data-toggle="tab">Notices</a></li>
		<li><a style="color:white;font-weight:bold" href="#tournament" data-toggle="tab">Tournaments</a></li>
		<li><a style="color:white;font-weight:bold" href="#match" data-toggle="tab">Warm Up Matches</a></li>
		<li><a style="color:white;font-weight:bold" href="#player" data-toggle="tab">Players</a></li>
		<li><a style="color:white;font-weight:bold" href="#academy" data-toggle="tab">Academy</a></li>
		<li><a style="color:white;font-weight:bold" href="#feedback" data-toggle="tab">Feedback</a></li>
	</ul><br/><br/><br/><br/>
	<div class="tab-content">
		<div id="notice" class="tab-pane active">
			<form action="notice.php" onsubmit="return validateNotice()" method="post">
			
				<div onclick="notice()" class="form-group">
					<input type="radio" value="general" id="gen" name="type"/>General Notice
					<input style="position:relative;left:50px" value="team" id="tm" type="radio" name="type"/><span style="position:relative;left:50px">Create Team </span>
				</div>
				<div class="form-group">
					<label for="notice">Notice</label>
					<textarea name="notice" required class="form-control" id="notice" rows="5" cols="30"></textarea>
				</div>
				<div class="form-group">
					<label for="Expire">Expire (when this notice will get expired)</label>
					<input type="date" name="expire" required class="form-control" id="expire"/>
				</div>
				<div id="hand" style="display:none">
					<div class="form-group">
						<label for="p1">Player 1&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="captain" value="1c"/>C&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="keeper" value="1w"/>Wk</label>
						<input type="text" name="p1" required class="form-control" id="p1"/>
					</div>
					<div class="form-group">
						<label for="p2">Player 2&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="captain" value="2c"/>C&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="keeper" value="2w"/>Wk</label>
						<input type="text" name="p2" required class="form-control" id="p2"/>
					</div>
					<div class="form-group">
						<label for="p3">Player 3&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="captain" value="3c"/>C&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="keeper" value="3w"/>Wk</label>
						<input type="text" name="p3" required class="form-control" id="p3"/>
					</div>
					<div class="form-group">
						<label for="p4">Player 4&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="captain" value="4c"/>C&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="keeper" value="4w"/>Wk</label>
						<input type="text" name="p4" required class="form-control" id="p4"/>
					</div>
					<div class="form-group">
						<label for="p5">Player 5&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="captain" value="5c"/>C&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="keeper" value="5w"/>Wk</label>
						<input type="text" name="p5" required class="form-control" id="p5"/>
					</div>
					<div class="form-group">
						<label for="p6">Player 6&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="captain" value="6c"/>C&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="keeper" value="6w"/>Wk</label>
						<input type="text" name="p6" required class="form-control" id="p6"/>
					</div>
					<div class="form-group">
						<label for="p7">Player 7&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="captain" value="7c"/>C&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="keeper" value="7w"/>Wk</label>
						<input type="text" name="p7" required class="form-control" id="p7"/>
					</div>
					<div class="form-group">
						<label for="p8">Player 8&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="captain" value="8c"/>C&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="keeper" value="8w"/>Wk</label>
						<input type="text" name="p8" required class="form-control" id="p8"/>
					</div>
					<div class="form-group">
						<label for="p9">Player 9&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="captain" value="9c"/>C&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="keeper" value="9w"/>Wk</label>
						<input type="text" name="p9" required class="form-control" id="p9"/>
					</div>
					<div class="form-group">
						<label for="p10">Player 10&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="captain" value="10c"/>C&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="keeper" value="10w"/>Wk</label>
						<input type="text" name="p10" required class="form-control" id="p10"/>
					</div>
					<div class="form-group">
						<label for="p11">Player 11&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="captain" value="11c"/>C&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="keeper" value="11w"/>Wk</label>
						<input type="text" name="p11" required class="form-control" id="p11"/>
					</div>
					<div class="form-group">
						<label for="p12">Player 12</label>
						<input type="text" name="p12" required class="form-control" id="p12"/>
					</div>
				</div>
				<button class="btn btn-success" name="noticepost">Post <span class="glyphicon glyphicon-upload"></span></button>
			</form>
			<?php
			$con=mysqli_connect('localhost','root');
			mysqli_select_db($con,'mk_aligarian');
			$not=mysqli_query($con,"select * from notice where expire>=curdate()");
			$numnot=mysqli_num_rows($not);
			?>
			<button style="position:relative;left:200px;bottom:32px" data-target="#deletenotice" data-toggle="modal" class="btn btn-danger">Delete  Notice <span class="glyphicon glyphicon-trash"></span></button>
				<div class="modal" id="deletenotice" tabindex="-1" data-keyboard="false" data-backdrop="static">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button class="close pull-right" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Delete Notice</h4>
							</div>
							<div class="modal-body">
								<form action="deletenotice.php" onsubmit="return deleteConfirm()" method="post">
								<div class="form-group">
									<select name="notice" id="notdel" class="form-control">
									<?php
									for($i=0;$i<$numnot;$i++)
									{
										$rownot=mysqli_fetch_array($not);
										?><option value="<?php echo $rownot['n_id'] ?>"><?php echo $rownot['notice']." posted on ".$rownot['post_date'] ?></option>
										<?php
									}
									?>
									</select>
								</div>
								<button class="btn btn-danger" name="delnot">Delete</option>
								</form>
								<?php
								mysqli_close($con);
								?>
							</div>
						</div>
					</div>
				</div>
			<br/><br/>
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
			<form style="height:300px;overflow:auto" class="col-md-3 col-md-offset-1" action="editnotice.php" onsubmit="return validateNotice()" method="post">
				<input type="hidden" name="nid" value="<?php echo $row['n_id'] ?>"/>
				<input type="hidden" name="type" value="<?php echo $row['type'] ?>"/>
				<div class="form-group">
					<label for="notice">Notice</label>
					<textarea name="notice" required class="form-control" id="notice" rows="5" cols="30"><?php echo $row['notice'] ?></textarea>
				</div>
				<div class="form-group">
					<label for="Expire">Expire (when this notice will get expired)</label>
					<input type="date" name="expire" value="<?php echo $row['expire'] ?>" required class="form-control" id="expiree"/>
				</div>
				<div id="hand" style="display:block">
					<div class="form-group">
						<label for="p1">Player 1</label>
						<input type="text" name="p1" value="<?php echo $row['player_1'] ?>" required class="form-control" id="p1e"/>
					</div>
					<div class="form-group">
						<label for="p2">Player 2</label>
						<input type="text" name="p2" value="<?php echo $row['player_2'] ?>" required class="form-control" id="p2e"/>
					</div>
					<div class="form-group">
						<label for="p3">Player 3</label>
						<input type="text" name="p3" value="<?php echo $row['player_3'] ?>" required class="form-control" id="p3e"/>
					</div>
					<div class="form-group">
						<label for="p4">Player 4</label>
						<input type="text" name="p4" value="<?php echo $row['player_4'] ?>" required class="form-control" id="p4e"/>
					</div>
					<div class="form-group">
						<label for="p5">Player 5</label>
						<input type="text" name="p5" value="<?php echo $row['player_5'] ?>" required class="form-control" id="p5e"/>
					</div>
					<div class="form-group">
						<label for="p6">Player 6</label>
						<input type="text" name="p6" value="<?php echo $row['player_6'] ?>" required class="form-control" id="p6e"/>
					</div>
					<div class="form-group">
						<label for="p7">Player 7</label>
						<input type="text" name="p7" value="<?php echo $row['player_7'] ?>" required class="form-control" id="p7e"/>
					</div>
					<div class="form-group">
						<label for="p8">Player 8</label>
						<input type="text" name="p8" value="<?php echo $row['player_8'] ?>" required class="form-control" id="p8e"/>
					</div>
					<div class="form-group">
						<label for="p9">Player 9</label>
						<input type="text" name="p9" value="<?php echo $row['player_9'] ?>" required class="form-control" id="p9e"/>
					</div>
					<div class="form-group">
						<label for="p10">Player 10</label>
						<input type="text" name="p10" value="<?php echo $row['player_10'] ?>" required class="form-control" id="p10e"/>
					</div>
					<div class="form-group">
						<label for="p11">Player 11</label>
						<input type="text" name="p11" value="<?php echo $row['player_11'] ?>" required class="form-control" id="p11e"/>
					</div>
					<div class="form-group">
						<label for="p12">Player 12</label>
						<input type="text" name="p12" value="<?php echo $row['player_12'] ?>" required class="form-control" id="p12e"/>
					</div>
				</div>
				<button class="btn btn-success" style="position:relative;" name="noticepost">Edit <span class="glyphicon glyphicon-check"></span></button>
			</form>
			
			<?php
			}
		}
		$q="select * from notice where expire>=curdate()";
		$res=mysqli_query($con,$q);
		$num=mysqli_num_rows($res);
			for($i=0;$i<$num;$i++)
			{
			$row=mysqli_fetch_array($res);
			if($row['type']!='team')
			{ ?>
				<form class="col-md-3 col-md-offset-1" action="editnotice.php" onsubmit="return validateNotice()" method="post">
				<input type="hidden" name="nid" value="<?php echo $row['n_id'] ?>"/>
				<input type="hidden" name="type" value="<?php echo $row['type'] ?>"/>
				<div class="form-group">
					<label for="notice">Notice</label>
					<textarea name="notice" required class="form-control" id="noticee" rows="5" cols="30"><?php echo $row['notice'] ?></textarea>
				</div>
				<div class="form-group">
					<label for="Expire">Expire (when this notice will get expired)</label>
					<input type="date" name="expiree" value="<?php echo $row['expire'] ?>" required class="form-control" id="expiree"/>
				</div>
				<button class="btn btn-success" name="noticepost">Edit <span class="glyphicon glyphicon-check"></span></button>
			</form>
			<?php
			}
			}
		mysqli_close($con);
		?>
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
							if($check==0)
							{
							?>
							<form method="post" action="matchdetails.php">
							<input type="hidden" name="mid" value="<?php echo $ro['m_id'] ?>"/>
							<button class="btn btn-success" name="matchdetails">Enter Details</button>
							</form>
							<?php } 
							else
							{
								?> 
								<div class="col-md-2 col-md-offset-1">
							<form action="scoreboard.php" method="post">
							<input type="hidden" name="mid" value="<?php echo $ro['m_id'] ?>"/>
							<button class="btn btn-warning" name="scoreboard">Scoreboard</button>
							</form></div>
							<div class="col-md-2">
							<form method="post" action="matchdetailsdelete.php" onsubmit="return deleteConfirm()" >
							<input type="hidden" name="mid" value="<?php echo $ro['m_id'] ?>"/>
							<button class="btn btn-danger" name="matchdetailsdelete">Delete Details</button>
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
			<button data-target="#newtour" data-toggle="modal" class="btn btn-primary">Add Tournament <span class="glyphicon glyphicon-plus"></span></button>
				<div class="modal" id="newtour" tabindex="-1" data-keyboard="false" data-backdrop="static">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button class="close pull-right" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Add Tournament</h4>
							</div>
							<div class="modal-body">
								<form action="addtournament.php" onsubmit="return validateDate()" method="post" >
									<div class="form-group">
										<label for="name">Tournament Name</label>
										<input type="text" required  name="name" maxlength="30" placeholder="Tournament Name" id="name" class="form-control"/>
									</div>
									<div class="form-group">
										<label for="s_date">Starting Date</label>
										<input type="date" name="sdate" required id="s_date" class="form-control"/>
									</div>
									<div class="form-group">
										<label for="e_date">Ending Date</label>
										<input type="date" name="edate" required id="e_date" class="form-control"/>
									</div>
									<button type="submit" name="addtour" class="btn btn-primary">Register</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<?php 
							$con1=mysqli_connect('localhost','root');
							mysqli_select_db($con1,'mk_aligarian');
							$resque=mysqli_query($con1,"select * from tournament");
							$resnum=mysqli_num_rows($resque);
							?>
				<button data-target="#deletetour" data-toggle="modal" class="btn btn-danger">Delete Tournament <span class="glyphicon glyphicon-trash"></span></button>
				<div class="modal" id="deletetour" tabindex="-1" data-keyboard="false" data-backdrop="static">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button class="close pull-right" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Delete Tournament</h4>
							</div>
							<div class="modal-body">
								<form method="post" action="deletetournament.php" onsubmit="return deleteConfirm()" >
							<div class="form-group">
							<label for="tour">Select Tournament</label>
							<select name="tour" required class="form-control" id="tour"/>
							<?php 
							for($i=0;$i<$resnum;$i++)
							{
								$restour=mysqli_fetch_array($resque);
								?><option><?php echo $restour['name'] ?></option> <?php
							}
							mysqli_close($con1); ?>
							</select>
							</div>
							<button class="btn btn-danger" name="tourdelete">Delete Tournament</button>
							</form>
							</div>
						</div>
					</div>
				</div>
				<button data-target="#newmatch" data-toggle="modal" class="btn btn-primary">Add Match <span class="glyphicon glyphicon-plus"></span></button>
				<div class="modal" id="newmatch" tabindex="-1" data-keyboard="false" data-backdrop="static">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button class="close pull-right" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Add Match</h4>
							</div>
							<div onmouseover="toss()" class="modal-body">
								<form action="addmatch.php"  style="height:500px;overflow:auto" onsubmit="return validateForm()" method="post" >
									<div class="form-group">
										<label for="tour">Tournament</label>
										<select name="tour" required id="tour" class="form-control">
										<?php 
										$con=mysqli_connect('localhost','root');
										mysqli_select_db($con,'mk_aligarian');
										$q="select name from tournament";
										$res=mysqli_query($con,$q);
										$num=mysqli_num_rows($res);
										for($i=0;$i<$num;$i++)
										{
											$row=mysqli_fetch_array($res);
											?><option><?php echo $row['name'] ?></option> <?php
										}
										mysqli_close($con);
										?>
										</select>
									</div>
									<div class="form-group">
										<label for="m_date">Match Date</label>
										<input type="date" name="mdate" required id="m_date" class="form-control"/>
									</div>
									<div class="form-group" onclick="playerlist_2()">
										<label for="mom">Man of the Match</label>
										<input type="text" required  name="mom" maxlength="30" placeholder="Player Name" id="mom" class="form-control"/>
									</div>
									<div class="form-group">
										<label for="res">Result of the Match</label>
										<input type="text" required  name="result" placeholder="Result" id="res" class="form-control"/>
									</div>
									<div class="form-group">
										<label for="venue">Match Venue</label>
										<input type="text" required  name="venue" placeholder="Venue" id="venue" class="form-control"/>
									</div>
									<div class="form-group">
										<label for="um_1">Umpire 1:</label>
										<input type="text" required  name="um_1" placeholder="First Umpire" id="um_1" class="form-control"/>
									</div>
									<div class="form-group">
										<label for="um_2">Umpire 2:</label>
										<input type="text" required  name="um_2" placeholder="Second Umpire" id="um_2" class="form-control"/>
									</div>
									<div class="form-group" >
										<label for="team_1">Team 1:</label>
										<input type="text" onkeypress="playerlist_1()" maxlength="30" required class="form-control" id="team_1" name="team_1"/>
									</div>
									<div id="custom1"></div>
									<div id="teamplayer1">
									</div>
									<div class="form-group" >
										<label for="team_2">Team 2:</label>
										<input type="text" onkeypress="playerlist_2()" maxlength="30" required class="form-control" id="team_2" name="team_2"/>
									</div>
									<div id="custom2"></div>
									<div id="teamplayer2">
									</div>
									<div class="form-group">
										<label for="toss">Toss</label>
										<select name="toss" required id="toss" class="form-control">
										<option id="op1"></option>
										<option id="op2"></option>
										</select>
									</div>
									<button type="submit" name="addmatch" class="btn btn-primary">Register</button>
								</form>
							</div>
						</div>
					</div>
				</div>
								<?php 
							$con1=mysqli_connect('localhost','root');
							mysqli_select_db($con1,'mk_aligarian');
							$resque=mysqli_query($con1,"select * from tournament");
							$resnum=mysqli_num_rows($resque);
							?>
				<button data-target="#deletematch" data-toggle="modal" class="btn btn-danger">Delete  Match <span class="glyphicon glyphicon-trash"></span></button>
				<div class="modal" id="deletematch" tabindex="-1" data-keyboard="false" data-backdrop="static">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button class="close pull-right" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Delete Match</h4>
							</div>
							<div class="modal-body">
								<form method="post" action="matchdelete.php" onsubmit="return deleteConfirm()" >
							<div class="form-group">
							<label for="tour">Select Tournament</label>
							<select name="tour" class="form-control" required id="tour" onclick="aj(this.value)"/>
							<?php 
							for($i=0;$i<$resnum;$i++)
							{
								$restour=mysqli_fetch_array($resque);
								?><option><?php echo $restour['name'] ?></option> <?php
							}
							mysqli_close($con1); ?>
							</select>
							</div>
							<div class="form-group">
							<label for="matchdel">Select Match</label>
							<select required name="matchdel" class="form-control" id="matchdel"/>
							</select>
							</div>
							<button class="btn btn-danger" name="matchdelete">Delete Match</button>
							</form>
							</div>
						</div>
					</div>
				</div>
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
		if($check==0)
		{
		?>
		<form method="post" action="matchdetails.php">
		<input type="hidden" name="mid" value="<?php echo $row['m_id'] ?>"/>
		<button class="btn btn-success" name="matchdetails">Enter Details</button>
		</form>
		<?php } 
		else
		{
		?> <div class="col-md-2 col-md-offset-1">
		<form action="scoreboard.php" method="post">
		<input type="hidden" name="mid" value="<?php echo $row['m_id'] ?>"/>
		<button style="position:relative;right:110px" class="btn btn-warning" name="scoreboard">Scoreboard</button>
		</form>
		</div>
		<div class="col-md-2">
		<form method="post" action="matchdetailsdelete.php" onsubmit="return deleteConfirm()" >
		<input type="hidden" name="mid" value="<?php echo $row['m_id'] ?>"/>
		<button class="btn btn-danger" name="matchdetailsdelete">Delete Details</button>
		</form>
		</div>
		<?php
		}
		?></div>
		<form action="deletewarmmatch.php" method="post" onsubmit="return deleteConfirm()">
		<input type="hidden" name="mid" value="<?php echo $row['m_id'] ?>" />
		<button style="position:relative;bottom:33px;left:150px" name="deletewarmmatch" class="btn btn-danger">Delete  Match <span class="glyphicon glyphicon-trash"></span></button></form><?php
		}
		mysqli_close($con);
		?><br/><br/>
		<button data-target="#newwarmmatch" data-toggle="modal" class="btn btn-primary">Add Match <span class="glyphicon glyphicon-plus"></span></button>
				<div class="modal" id="newwarmmatch" tabindex="-1" data-keyboard="false" data-backdrop="static">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button class="close pull-right" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Add Match</h4>
							</div>
							<div onmouseover="wtoss()" class="modal-body">
								<form action="addwarmmatch.php"  style="height:500px;overflow:auto" onsubmit="return wvalidateForm()" method="post" >
									<div class="form-group">
										<label for="m_date">Match Date</label>
										<input type="date" name="mdate" required id="wm_date" class="form-control"/>
									</div>
									<div class="form-group" onclick="playerlist_2()">
										<label for="mom">Man of the Match</label>
										<input type="text" required  name="mom" maxlength="30" placeholder="Player Name" id="wmom" class="form-control"/>
									</div>
									<div class="form-group">
										<label for="res">Result of the Match</label>
										<input type="text" required  name="result" placeholder="Result" id="wres" class="form-control"/>
									</div>
									<div class="form-group">
										<label for="venue">Match Venue</label>
										<input type="text" required  name="venue" placeholder="Venue" id="wvenue" class="form-control"/>
									</div>
									<div class="form-group">
										<label for="um_1">Umpire 1:</label>
										<input type="text" required  name="um_1" placeholder="First Umpire" id="wum_1" class="form-control"/>
									</div>
									<div class="form-group">
										<label for="um_2">Umpire 2:</label>
										<input type="text" required  name="um_2" placeholder="Second Umpire" id="wum_2" class="form-control"/>
									</div>
									<div class="form-group" >
										<label for="team_1">Team 1:</label>
										<input type="text" onkeypress="wplayerlist_1()" maxlength="30" required class="form-control" id="wteam_1" name="team_1"/>
									</div>
									<div id="wcustom1"></div>
									<div id="wteamplayer1">
									</div>
									<div class="form-group" >
										<label for="team_2">Team 2:</label>
										<input type="text" onkeypress="wplayerlist_2()" maxlength="30" required class="form-control" id="wteam_2" name="team_2"/>
									</div>
									<div id="wcustom2"></div>
									<div id="wteamplayer2">
									</div>
									<div class="form-group">
										<label for="toss">Toss</label>
										<select name="toss" required id="wtoss" class="form-control">
										<option id="wop1"></option>
										<option id="wop2"></option>
										</select>
									</div>
									<button type="submit" name="addwarmmatch" class="btn btn-primary">Register</button>
								</form>
							</div>
						</div>
					</div>
				</div>
		</div>
		<div id="player" class="tab-pane">
		<div class="row">
		<?php
		$con=mysqli_connect('localhost','root');
		mysqli_select_db($con,'mk_aligarian');
		$q="select * from player";
		$result=mysqli_query($con,$q);
		$num=mysqli_num_rows($result);
		for($i=0;$i<$num;$i++)
		{
			$row=mysqli_fetch_array($result);
		?>
		<div class="col-md-4">
		<i><div style="background-color:#3498DB;text-align:center" class="h2"><?php echo strtoupper($row['name']); ?></div></i>
		<center><img style="height:230px;width:250px" class="img-responsive" src="profile/<?php echo $row['photo']; ?>" /></center>
		<div class="h4" style="margin:5px;">Age:<?php $dob=$row['DOB'];
			$q1="select (datediff(Curdate(),'$dob'))/365 as age";
			$res2=mysqli_query($con,$q1);
			$row2=mysqli_fetch_array($res2);
			$age=floor($row2['age']);
			?><span style="margin-left:5px"><?php echo $age; ?></span></div>
			<div class="h4" style="margin:5px">Skill:<span style="margin-left:5px"><?php echo $row['skill']; ?></span> </div>
			<div class="h4" style="margin:5px">Email:<span style="margin-left:5px"><?php echo $row['email']; ?></span> </div>
			<div class="h4" style="margin:5px">Mobile No:<span style="margin-left:5px"><?php echo $row['mobile_no']; ?></span> </div>
			<div class="h4" style="margin:5px">Address:<span style="margin-left:5px"><?php echo $row['address']; ?></span> </div>
			<div class="row">
			<?php 
			if($row['authentication']=='no')
			{	
				?> <div class="col-md-4"><form action="authenticate.php" method="post">
					<input type="hidden" value="<?php echo $row['id'] ?>" name="id"/>
					<button class="btn btn-info" name="authenticate">
					Authenticate <span class="glyphicon glyphicon-ok"></span>
					</button>
				</form></div>
			<?php }	
			?>
			<div class="col-md-4">
			<form action="delete.php" method="post" onsubmit="return deleteConfirm()">
			<input type="hidden" value="<?php echo $row['id'] ?>" name="id"/>
			<button class="btn btn-danger" name="delete">
			Delete <span class="glyphicon glyphicon-trash"></span>
			</button>
			</form>
			</div>
			<?php 
			if($row['authentication']=='yes')
			{	
				?> 
			<div class="col-md-4">
			<button data-target="#message" data-toggle="modal" class="btn btn-success">
			Message <span class="glyphicon glyphicon-comment"></span>
			</button></div>
			<?php }	
			?>
			<div class="modal" id="message" tabindex="-1" data-keyboard="false" data-backdrop="static">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button class="close pull-right" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Message</h4>
						</div>
						<div class="modal-body">
							<form action="message.php" method="post">
								<div class="form-group">
									<textarea name="message" id="message" rows="5" cols="80"></textarea>
								</div>
								<select name="select" class="form-control">
								<?php 
								$q1="select * from player where authentication='yes'";
								$res1=mysqli_query($con,$q1);
								$num1=mysqli_num_rows($res1);
								for($j=0;$j<$num1;$j++)
								{
									$row1=mysqli_fetch_array($res1);
									?><option value="<?php echo $row1['name'] ?>"><?php echo $row1['name'];?></option><?php
								}
								?>
								</select><br/><br/>
								<button type="submit" name="sendm" class="btn btn-primary">Send</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		</div>
		<?php
		} mysqli_close($con);
		?>
		</div>
		</div>
		<div id="academy" class="tab-pane">
		<?php
		$con=mysqli_connect('localhost','root');
		mysqli_select_db($con,'mk_aligarian');
		$sche=mysqli_fetch_array(mysqli_query($con,"select * from schedule"));
		mysqli_close($con);
		?>
		<div class="row">
		<div class="col-md-2">
			<button data-target="#facility" data-toggle="modal" class="btn btn-success"> Add Facility <span class="glyphicon glyphicon-plus"></span></button>
			</div><div class="bt"></div>
		<div class="col-md-2">
			<button data-target="#delfacility" data-toggle="modal" class="btn btn-danger"> Delete Facility <span class="glyphicon glyphicon-trash"></span></button>
			</div><div class="bt"></div>
			<div class="col-md-2">
			<button data-target="#addachievement" data-toggle="modal" class="btn btn-success"> Add Achievement <span class="glyphicon glyphicon-plus"></span></button>
			</div><div class="bt"></div>
			<div class="col-md-2">
			<button data-target="#delachievement" data-toggle="modal" class="btn btn-danger"> Delete Achievement <span class="glyphicon glyphicon-trash"></span></button>
			</div><div class="bt"></div>
			<div class="col-md-2">
			<button data-target="#addmember" data-toggle="modal" class="btn btn-success"> Add Member <span class="glyphicon glyphicon-plus"></span></button>
			</div><div class="bt"></div>
			<div class="col-md-2">
			<button data-target="#delmember" data-toggle="modal" class="btn btn-danger"> Delete Member <span class="glyphicon glyphicon-trash"></span></button>
			</div>
			<div class="modal" id="delfacility" tabindex="-1" data-keyboard="false" data-backdrop="static">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button class="close pull-right" data-dismiss="modal">&times;</button>
								<h4 class="modal-title"><div class="label label-success">Select Facility</div></h4>
							</div>
							<div class="modal-body">
								<form action="deletefacility.php" method="post" onsubmit="return deleteConfirm()">
								<div class="form-group">
			<div class="h4">Facility to be deleted</div>
			<select name="delfacility" required class="form-control" >
			<?php
		$con=mysqli_connect('localhost','root');
		mysqli_select_db($con,'mk_aligarian');
		$res=mysqli_query($con,"select * from academy_facility");
		$num=mysqli_num_rows($res);
		for($i=0;$i<$num;$i++)
		{
			$row=mysqli_fetch_array($res);
			?><option><?php echo $row['facility'] ?></option><?php
		}
		
		mysqli_close($con);
		?>
			</select>
			</div>
			<button class="btn btn-danger" name="deletefacility">Delete Facility <span class="glyphicon glyphicon-trash"></span></button>
			</form>		</div>
						</div>
					</div>
				</div>
			<div class="modal" id="addachievement" tabindex="-1" data-keyboard="false" data-backdrop="static">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button class="close pull-right" data-dismiss="modal">&times;</button>
								<h4 class="modal-title"><div class="label label-success">Achievement</div></h4>
							</div>
							<div class="modal-body">
								<form action="acheivement.php" method="post">
				<div class="form-group">
				<div class="h4">Achievement</div>
					<textarea name="achievement" required rows="5" cols="80"></textarea>
				</div>
				
				<button class="btn btn-success" name="submitachievement">Add</button>
			</form>
							</div>
						</div>
					</div>
				</div>
				<div class="modal" id="delachievement" tabindex="-1" data-keyboard="false" data-backdrop="static">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button class="close pull-right" data-dismiss="modal">&times;</button>
								<h4 class="modal-title"><div class="label label-success">Achievement</div></h4>
							</div>
							<div class="modal-body">
								<form action="delacheivement.php" onsubmit="return deleteConfirm()" method="post">
				<div class="form-group">
				<div class="h4">Achievement</div>
				<?php
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'mk_aligarian');
				$res=mysqli_query($con,"select * from achievement");
				$num=mysqli_num_rows($res);
				?>
					<select name="achievement" required class="form-control">
					<?php
					for($i=0;$i<$num;$i++)
					{
						$row=mysqli_fetch_array($res);
						?><option><?php echo $row['achievement'] ?></option><?php
					}
					?>
					</select>
				</div>
				
				<button class="btn btn-danger" name="submitachievement">Delete</button>
			</form>
							</div>
						</div>
					</div>
				</div>
				<div class="modal" id="facility" tabindex="-1" data-keyboard="false" data-backdrop="static">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button class="close pull-right" data-dismiss="modal">&times;</button>
								<h4 class="modal-title"><div class="label label-success">Facility</div></h4>
							</div>
							<div class="modal-body">
								<form action="facility.php" method="post">
				<div class="form-group">
				<div class="h4">Facility</div>
					<textarea name="facility" required rows="5" cols="80" name="facility" id="facility"></textarea>
				</div>
				
				<button class="btn btn-success" name="submitfacility">Add</button>
			</form>
							</div>
						</div>
					</div>
				</div>
				<div class="modal" id="addmember" tabindex="-1" data-keyboard="false" data-backdrop="static">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button class="close pull-right" data-dismiss="modal">&times;</button>
								<h4 class="modal-title"><div class="label label-success">Add Member</div></h4>
							</div>
							<div class="modal-body">
								<form action="addmember.php" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label for="name">Name</label>
										<input type="text" name="name" required id="name" class="form-control"/>
									</div>
									<div class="form-group">
										<label for="image">Photo</label>
										<input type="file" name="photo" required class="form-control"/>
									</div>
									<button class="btn btn-success" name="submitmember">Add</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="modal" id="delmember" tabindex="-1" data-keyboard="false" data-backdrop="static">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button class="close pull-right" data-dismiss="modal">&times;</button>
								<h4 class="modal-title"><div class="label label-success">Delete Member</div></h4>
							</div>
							<div class="modal-body">
								<form action="delmember.php" onsubmit="return deleteConfirm()" method="post">
				<div class="form-group">
				<div class="h4">Member</div>
				<?php
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'mk_aligarian');
				$res=mysqli_query($con,"select * from member");
				$num=mysqli_num_rows($res);
				?>
					<select name="member" required class="form-control">
					<?php
					for($i=0;$i<$num;$i++)
					{
						$row=mysqli_fetch_array($res);
						?><option><?php echo $row['name'] ?></option><?php
					}
					?>
					</select>
				</div>
				
				<button class="btn btn-danger" name="submitmemberdel">Delete</button>
			</form>
							</div>
						</div>
					</div>
				</div><br/><br/><br/>
		<div class="h3"><div class="label label-info">Change Sliding Image</div></div><br/>
		<form action="changeslide.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
			<input type="file" name="change" required class="form-control"/>
			</div>
	<button class="btn btn-success" name="file">Change Slide</button>
	</form>
	<div style="position:relative;left:200px;bottom:33px">
		<button data-target="#schedule" data-toggle="modal" class="btn btn-primary">Edit Schedule <span class="glyphicon glyphicon-edit"></span></button>
		</div>
				<div class="modal" id="schedule" tabindex="-1" data-keyboard="false" data-backdrop="static">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button class="close pull-right" data-dismiss="modal">&times;</button>
								<h4 class="modal-title"><div class="label label-success">Edit Schedule</div></h4>
							</div>
							<div class="modal-body">
								<form action="schedule.php" method="post">
				<div class="form-group">
					<label for="monday">Monday</label>
					<input type="text" name="monday" value="<?php echo $sche['monday'] ?>" id="monday" required class="form-control" />
				</div>
				<div class="form-group">
					<label for="tuesday">Tuesday</label>
					<input type="text" name="tuesday" value="<?php echo $sche['tuesday'] ?>" id="tuesday" required class="form-control" />
				</div>
				<div class="form-group">
					<label for="wednesday">Wednesday</label>
					<input type="text" name="wednesday" value="<?php echo $sche['wednesday'] ?>" id="wednesday" required class="form-control" />
				</div>
				<div class="form-group">
					<label for="thursday">Thursday</label>
					<input type="text" name="thursday" value="<?php echo $sche['thursday'] ?>" id="thursday" required class="form-control" />
				</div>
				<div class="form-group">
					<label for="friday">Friday</label>
					<input type="text" name="friday" value="<?php echo $sche['friday'] ?>" id="friday" required class="form-control" />
				</div>
				<div class="form-group">
					<label for="saturday">Saturday</label>
					<input type="text" name="saturday" value="<?php echo $sche['saturday'] ?>" id="saturday" required class="form-control" />
				</div>
				<div class="form-group">
					<label for="sunday">Sunday</label>
					<input type="text" name="sunday" value="<?php echo $sche['sunday'] ?>" id="sunday" required class="form-control" />
				</div>
				<button class="btn btn-success" name="schedule">Edit</button>
			</form>
							</div>
						</div>
					</div>
				</div>
		</div>
		</div>
		<div id="feedback" class="tab-pane">
		<?php
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mk_aligarian');
	$res=mysqli_query($con,"select * from feedback");
	$num=mysqli_num_rows($res);
	for($i=0;$i<$num;$i++)
	{
		?><div class="col-md-offset-1 col-md-4">
		<div style="background-color:#e9967a;padding:10px;color:white;border-radius:6px">
		<div class='h4'>
		<?php
		$row=mysqli_fetch_array($res);
			$id=$row['p_id'];
			if($row['rating']==1)
				$rating="Very Bad";
			else if($row['rating']==2)
				$rating="Bad";
			else if($row['rating']==3)
				$rating="Good";
			else if($row['rating']==4)
				$rating="Very Good";
			else if($row['rating']==5)
				$rating="Awesome";
			$row2=mysqli_fetch_array(mysqli_query($con,"select * from player where id =$id"));
			echo "Player--  <b><i>".strtoupper($row2['name'])."</b></i> having email address <b><i>".$row2['email']."</b></i> says <b><i> ".$row['feedback']."</b></i> about our site and gave us <b><i> ".$rating." </b></i> rating";
		?>
		</div>
		</div>
		</div>
		<?php
	}
	mysqli_close($con);
	?>
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
	<!--<br/><br/>
	<div class="container-fluid" style="width:100%;background-color:#34495E;">
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
	<script src="coach.js"></script>
	<script>
	function aj(tour)
{
	var req=new XMLHttpRequest();
req.open("get","http://localhost/Bootstrap/Major_project/aj.php?s="+tour,true);
req.send();
req.onreadystatechange=function(){
	if(req.status==200 && req.readyState==4)
		document.getElementById("matchdel").innerHTML=req.responseText;
};
}
	</script>
  </body>
</html> 
<?php
}
else
	header('location:home.php');
?>