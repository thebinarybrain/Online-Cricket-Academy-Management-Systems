<?php
session_start();
if(isset($_POST['matchdetails']))
{
	$mid=$_POST['mid'];
	$_SESSION['mid']=$mid;
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
		<div class="h2"><span style="position:relative;right:50px;top:20px" class="label label-primary">Our Members</span></div>
		</div>
	</div>
	</div><br/><br/>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form action="details.php" onsubmit="return presubmit()" method="post">
			<div class="h3"></div>
				<div class="table-responsive">
				<?php
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'mk_aligarian');
				$team1=mysqli_fetch_array(mysqli_query($con,"select * from teams where t_id in(select toss from team_match where m_id=$mid)"));
				?><div class="h3"><div class="label label-success"><?php echo 'Batting:  '.strtoupper($team1['name']) ?></div></div>
				<?php mysqli_close($con); ?>
				<input type="hidden" name="bat_team" value="<?php echo $team1['t_id'] ?>"/>
					<table class="table table-hover">
						<thead>
							<th>Player</th>
							<th>Did not bat</th>
							<th>Runs</th>
							<th>Balls</th>
							<th>4's</th>
							<th>6's</th>
							<th>Mode Out</th>
							<th>Bowler</th>
							<th>Fielder</th>
						</thead>
						<tbody>
							<?php
							$con=mysqli_connect('localhost','root');
							mysqli_select_db($con,'mk_aligarian');
							$q1="select * from teams where t_id in (select toss from team_match where m_id=$mid)";
							$res1=mysqli_query($con,$q1);
							$row1=mysqli_fetch_array($res1);
							$mix=mysqli_fetch_array(mysqli_query($con,"select * from team_match where m_id=$mid"));
							if($mix['toss']==$mix['t_1'])
							$show=$mix['t_2'];
					        else if($mix['toss']==$mix['t_2'])
							$show=$mix['t_1'];
							$row2=mysqli_fetch_array(mysqli_query($con,"select * from teams where t_id=$show"));
							mysqli_close($con);
							for($i=1;$i<=11;$i++)
							{ ?>
							<tr>
								<td>
									<?php echo strtoupper($row1['player_'.$i]) ?>
								</td>
								<td>
									<div class="form-group">
									<input onclick="rad(this.id)" onmouseover="fun(this.id)" type="radio" id="dnba_<?php echo $i ?>" name="dnba_<?php echo $i ?>"/>
									</div>
								</td>
								<td>
									<div class="form-group">
									<input type="number" class="form-control" id="r_<?php echo $i ?>" name="r_<?php echo $i ?>" required />
									</div>
								</td>
								<td>
									<div class="form-group">
									<input type="number" class="form-control" id="b_<?php echo $i ?>" name="b_<?php echo $i ?>" required />
									</div>
								</td>
								<td>
									<div class="form-group">
									<input type="number" class="form-control" id="f_<?php echo $i ?>" name="f_<?php echo $i ?>" required />
									</div>
								</td>
								<td>
									<div class="form-group">
									<input type="number" class="form-control" id="s_<?php echo $i ?>" name="s_<?php echo $i ?>" required />
									</div>
								</td>
								<td>
									<div class="form-group">
									<select class="form-control" id="m_<?php echo $i ?>" name="m_<?php echo $i ?>" required >
									<option>Not Out</option>
									<option>Bowled</option>
									<option>Caught Out</option>
									<option>Run Out</option>
									<option>LBW</option>
									<option>Stump Out</option>
									<option>Hit Wicket</option>
									<option>Obstructing Field</option>
									<option>Time Out</option>
									</select>
									</div>
								</td>
								<td>
									<div class="form-group">
									<select class="form-control" id="bo_<?php echo $i ?>" name="bo_<?php echo $i ?>">
									<option>--select bowler--</option>
										<?php 
										for($j=1;$j<=11;$j++)
										{
											?><option><?php echo strtoupper($row2['player_'.$j]) ?></option>
						<?php			}
										?>
									</select>
									</div>
								</td>
								<td>
									<div class="form-group">
									<select class="form-control" id="fi_<?php echo $i ?>" name="fi_<?php echo $i ?>">
									<option>--select fielder--</option>
										<?php 
										for($j=1;$j<=11;$j++)
										{
											?><option><?php echo strtoupper($row2['player_'.$j]) ?></option>
						<?php			}
										?>
									</select>
									</div>
								</td>
							</tr>
				<?php			} ?>
						</tbody>
					</table>
				</div>
				<div class="form-group">
					<label for="extras">Extra Runs</label>
					<input type="number" name="extra" required id="extras" class="form-control"/>
				</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="h3"></div>
				<div class="table-responsive">
				<div class="h3"><div class="label label-success"><?php echo 'Bowling:  '.strtoupper($row2['name']) ?></div></div>
				<input type="hidden" name="bowl_team" value="<?php echo $row2['t_id'] ?>"/>
					<table class="table table-hover">
						<thead>
							<th>Player</th>
							<th>Did not bowl</th>
							<th>Overs</th>
							<th>Maidens</th>
							<th>Runs Given</th>
							<th>Wickets Taken</th>
						</thead>
						<tbody>
							<?php
							for($i=1;$i<=11;$i++)
							{ ?>
							<tr>
								<td>
									<?php echo strtoupper($row2['player_'.$i]) ?>
								</td>
								<td>
									<div class="form-group">
									<input onclick="rad2(this.id)" onmouseover="fun2(this.id)" type="radio" id="dnbo_<?php echo $i ?>" name="dnbo_<?php echo $i ?>"/>
									</div>
								</td>
								<td>
									<div class="form-group">
									<input type="number" class="form-control" id="o_<?php echo $i ?>" name="o_<?php echo $i ?>" required step="0.1" />
									</div>
								</td>
								<td>
									<div class="form-group">
									<input type="number" class="form-control" id="ma_<?php echo $i ?>" name="ma_<?php echo $i ?>" required />
									</div>
								</td>
								<td>
									<div class="form-group">
									<input type="number" class="form-control" id="rg_<?php echo $i ?>" name="rg_<?php echo $i ?>" required />
									</div>
								</td>
								<td>
									<div class="form-group">
									<input type="number" class="form-control" id="w_<?php echo $i ?>" name="w_<?php echo $i ?>" required />
									</div>
								</td>
							</tr>
				<?php			} ?>
						</tbody>
					</table>
				</div>
				<button class="btn btn-danger" name="fdetail">Done</button><br/><br/>
			</form>
		</div>
	</div>
</div>
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
  </div>
  <script src="matchdetails.js">
  </script>
  </body>
  </html>
  <?php
}
  ?>