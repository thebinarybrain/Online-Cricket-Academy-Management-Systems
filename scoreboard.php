<?php
session_start();
if(isset($_POST['scoreboard']))
{
	$mid=$_POST['mid'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mk_aligarian');
	$r1=mysqli_fetch_array(mysqli_query($con,"select * from matches where m_id=$mid"));
	$t1=$r1['team_1'];
	$t2=$r1['team_2'];
	$r2=mysqli_fetch_array(mysqli_query($con,"select * from team_match where m_id=$mid"));
	$tos=$r2['toss'];
	if($r2['toss']==$t1)
		$f=1;
	elseif($r2['toss']==$t2)
	    $f=2;
	$r3=mysqli_fetch_array(mysqli_query($con,"select * from teams where t_id=$t1"));
	if($f==1)
		$toss=$r3['name'];
	$r4=mysqli_fetch_array(mysqli_query($con,"select * from teams where t_id=$t2"));
	if($f==2)
		$toss=$r3['name'];
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
  </head>
  <body>
  <a style="color:white;text-decoration:none" href="coach.php"><button class="btn btn-warning" style="position:relative;top:2px;left:10px">Back <span class="glyphicon glyphicon-chevron-left"></span></button></a>
  <div class="container">
	<div class="row">
		<div class="col-md-2">
		<img src="MK.jpeg"/>
		</div>
		<div style="position:relative;top:20px">
		<div class="col-md-offset-2 col-md-2">
		<div class="h3"><a style="text-decoration:none" href="#last"><span class="label label-primary">Centers</span></a></div>
		</div>
		<div class="col-md-2">
		<div class="h3"><a style="text-decoration:none" href="#last"><span class="label label-primary">Contact Us</span></a></div>
		</div>
		</div>
		<div class="col-md-offset-2 col-md-2">
		<!--<div class="h2"><span style="position:relative;right:50px;top:20px" class="label label-primary">Our Members</span></div>-->
		</div>
	</div>
	</div><br/><br/>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
	<ul style="border-radius:5px" class="nav nav-tabs nav-justified">
		<li class="active"><a style="font-weight:bold" href="#first" data-toggle="tab"><?php echo strtoupper($r3['name']) ?></a></li>
		<li><a style="font-weight:bold" href="#second" data-toggle="tab"><?php echo strtoupper($r4['name']) ?></a></li>
	</ul><br/><br/>
	<div class="tab-content">
		<div id="first" class="tab-pane active">
			<div class="h4">Match held at: <?php echo strtoupper($r1['match_venue']) ?> on <?php echo strtoupper($r1['match_date']) ?></div>
			<div class="h4">Toss Won by: <?php echo strtoupper($toss) ?></div>
			<div class="h4">Result: <?php echo strtoupper($r1['result']) ?> and Man of the Match was: <?php echo strtoupper($r1['mom']) ?></div>
			<div class="h4">Umpires: <?php echo strtoupper($r1['umpire_1']) ?> and <?php echo strtoupper($r1['umpire_2']) ?></div><br/>
			<div class="h3"><div class="label label-success">Batting: <?php echo strtoupper($r3['name']) ?></div></div>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<th> </th>
						<th> </th>
						<th>Runs(balls)</th>
						<th>4's</th>
						<th>6's</th> 
					</thead>
					<tbody>
					<?php 
					$f=0;
					for($i=1;$i<=11;$i++)
					{ ?>
						<tr>
							<td><?php echo strtoupper($r3['player_'.$i]) ?></td>
							<?php
							$r5=mysqli_fetch_array(mysqli_query($con,"select * from batting where t_id=$t1"));
							if(is_numeric($r5['r_s_'.$i]))
							{
							if($r5['m_out_'.$i]=='Not Out')
							{
								$show='not out';
							}
							else if($r5['m_out_'.$i]=='Bowled')
							{
								$f++;
								$show='b '.$r5['bowler_'.$i];
							}
							else if($r5['m_out_'.$i]=='Caught Out')
							{
								$f++;
								$show='c '.$r5['fielder_'.$i].' b '.$r5['bowler_'.$i];
							}
							else if($r5['m_out_'.$i]=='Run Out')
							{
								$f++;
								$show='run out '.$r5['fielder_'.$i];
							}
							else if($r5['m_out_'.$i]=='LBW')
							{
								$f++;
								$show='b '.$r5['bowler_'.$i];
							}
							else if($r5['m_out_'.$i]=='Stump Out')
							{
								$f++;
								$show='st '.$r5['fielder_'.$i].' b '.$r5['bowler_'.$i];
							}
							else if($r5['m_out_'.$i]=='Hit Wicket')
							{
								$f++;
								$show='hit wicket b '.$r5['bowler_'.$i];
							}
							else if($r5['m_out_'.$i]=='Obstructing Field')
							{
								$f++;
								$show='obstructing the field';
							}
							else if($r5['m_out_'.$i]=='Time Out')
							{
								$f++;
								$show='time out';
							}
							?>
							<td><?php echo $show ?></td>
							<td><?php echo $r5['r_s_'.$i]."(".$r5['b_f_'.$i].")" ?></td>
							<td><?php echo $r5['f_s_'.$i] ?></td>
							<td><?php echo $r5['s_s_'.$i] ?></td>
							<?php
							}
							else
							{
								?> <td>did not bat</td> <?php 
							}
							?>
						</tr>
						<?php } 
	
					$total=0;
					for($i=1;$i<=11;$i++)
					$total=$total+$r5['r_s_'.$i];
				$temp=mysqli_fetch_array(mysqli_query($con,"select * from bowling where t_id=$t2"));
				$over=0;
				for($i=1;$i<=11;$i++)
				{
					if(is_numeric($temp['o_b_'.$i]))
					{
						$over=$over+$temp['o_b_'.$i];
					}
				}
				?>
				<tr><td><div class="h4"><div class="label label-primary">Extras: </div><?php echo $r5['extra'] ?></div></td></tr>
				<tr><td><div class="h4"><div class="label label-primary">Total : </div><?php echo $total+$r5['extra'] ?> Runs scored in <?php echo $over ?> Overs with the loss of <?php echo $f ?> Wickets</div></td></tr>
					</tbody>
				</table>
			</div>
			<div class="h3"><div class="label label-success">Bowling: <?php echo strtoupper($r4['name']) ?></div></div>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<th>  </th>
						<th>Overs</th>
						<th>Maidens</th>
						<th>Runs Given</th>
						<th>Wickets</th>
						<th>Economy Rate</th>
					</thead>
					<tbody>
						<?php 
					for($i=1;$i<=11;$i++)
					{ ?>
						<tr>
							<?php
							$r5=mysqli_fetch_array(mysqli_query($con,"select * from bowling where t_id=$t2"));
							if(is_numeric($r5['o_b_'.$i]))
							{
							?><td><?php echo strtoupper($r4['player_'.$i]) ?></td>
							<td><?php echo $r5['o_b_'.$i] ?></td>
							<td><?php echo $r5['m_'.$i] ?></td>
							<td><?php echo $r5['r_g_'.$i] ?></td>
							<td><?php echo $r5['w_t_'.$i] ?></td>
							<td><?php echo $r5['r_g_'.$i]/$r5['o_b_'.$i] ?></td>
							<?php
							}
							?>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<div id="second" class="tab-pane">
		<div class="h4">Match held at: <?php echo strtoupper($r1['match_venue']) ?> on <?php echo strtoupper($r1['match_date']) ?></div>
			<div class="h4">Toss Won by: <?php echo strtoupper($toss) ?></div>
			<div class="h4">Result: <?php echo strtoupper($r1['result']) ?> and Man of the Match was: <?php echo strtoupper($r1['mom']) ?></div>
			<div class="h4">Umpires: <?php echo strtoupper($r1['umpire_1']) ?> and <?php echo strtoupper($r1['umpire_2']) ?></div><br/>
			<div class="h3"><div class="label label-success">Batting: <?php echo strtoupper($r4['name']) ?></div></div>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<th> </th>
						<th> </th>
						<th>Runs(balls)</th>
						<th>4's</th>
						<th>6's</th> 
					</thead>
					<tbody>
					<?php 
					$g=0;
					for($i=1;$i<=11;$i++)
					{ ?>
						<tr>
							<td><?php echo strtoupper($r4['player_'.$i]) ?></td>
							<?php
							$r5=mysqli_fetch_array(mysqli_query($con,"select * from batting where t_id=$t2"));
							if(is_numeric($r5['r_s_'.$i]))
							{
							if($r5['m_out_'.$i]=='Not Out')
							{
								$show='not out';
							}
							else if($r5['m_out_'.$i]=='Bowled')
							{
								$g++;
								$show='b '.$r5['bowler_'.$i];
							}
							else if($r5['m_out_'.$i]=='Caught Out')
							{
								$g++;
								$show='c '.$r5['fielder_'.$i].' b '.$r5['bowler_'.$i];
							}
							else if($r5['m_out_'.$i]=='Run Out')
							{
								$g++;
								$show='run out '.$r5['fielder_'.$i];
							}
							else if($r5['m_out_'.$i]=='LBW')
							{
								$g++;
								$show='b '.$r5['bowler_'.$i];
							}
							else if($r5['m_out_'.$i]=='Stump Out')
							{
								$g++;
								$show='st '.$r5['fielder_'.$i].' b '.$r5['bowler_'.$i];
							}
							else if($r5['m_out_'.$i]=='Hit Wicket')
							{
								$g++;
								$show='hit wicket b '.$r5['bowler_'.$i];
							}
							else if($r5['m_out_'.$i]=='Obstructing Field')
							{
								$g++;
								$show='obstructing the field';
							}
							else if($r5['m_out_'.$i]=='Time Out')
							{
								$g++;
								$show='time out';
							}
							?>
							<td><?php echo $show ?></td>
							<td><?php echo $r5['r_s_'.$i]."(".$r5['b_f_'.$i].")" ?></td>
							<td><?php echo $r5['f_s_'.$i] ?></td>
							<td><?php echo $r5['s_s_'.$i] ?></td>
							<?php
							}
							else
							{
								?> <td>did not bat</td> <?php 
							}
							?>
						</tr>
						<?php } 
	
					$total=0;
					for($i=1;$i<=11;$i++)
					$total=$total+$r5['r_s_'.$i];
				$temp=mysqli_fetch_array(mysqli_query($con,"select * from bowling where t_id=$t2"));
				$over=0;
				for($i=1;$i<=11;$i++)
				{
					if(is_numeric($temp['o_b_'.$i]))
					{
						$over=$over+$temp['o_b_'.$i];
					}
				}
				?>
				<tr><td><div class="h4"><div class="label label-primary">Extras: </div><?php echo $r5['extra'] ?></div></td></tr>
				<tr><td><div class="h4"><div class="label label-primary">Total : </div><?php echo $total+$r5['extra'] ?> Runs scored in <?php echo $over ?> Overs with the loss of <?php echo $g ?> Wickets</div></td></tr>
					</tbody>
				</table>
			</div>
			<div class="h3"><div class="label label-success">Bowling: <?php echo strtoupper($r3['name']) ?></div></div>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<th>  </th>
						<th>Overs</th>
						<th>Maidens</th>
						<th>Runs Given</th>
						<th>Wickets</th>
						<th>Economy Rate</th>
					</thead>
					<tbody>
						<?php 
					for($i=1;$i<=11;$i++)
					{ ?>
						<tr>
							<?php
							$r5=mysqli_fetch_array(mysqli_query($con,"select * from bowling where t_id=$t1"));
							if(is_numeric($r5['o_b_'.$i]))
							{
							?><td><?php echo strtoupper($r3['player_'.$i]) ?></td>
							<td><?php echo $r5['o_b_'.$i] ?></td>
							<td><?php echo $r5['m_'.$i] ?></td>
							<td><?php echo $r5['r_g_'.$i] ?></td>
							<td><?php echo $r5['w_t_'.$i] ?></td>
							<td><?php echo $r5['r_g_'.$i]/$r5['o_b_'.$i] ?></td>
							<?php
							}
							?>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	</div>
	</div>
</div>
<?php
	include "footer.php";
	?>
	<!--
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
  </body>
  </html>
<?php
mysqli_close($con);
}
else
	header('location:home.php');
?>