	<?php
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'mk_aligarian');
	$f=0;
	$res=mysqli_query($con,"select * from member");
	$num=mysqli_num_rows($res);
	$div=ceil(($num/4)-1);
	?>
	<br/><br/><center><div class="h2"><div class="label label-success">Our Members</div></div></center>
	<div class="row" style="margin-top:100px">
	<div class="col-md-12">
		<div id="Carousel" class="carousel slide" style="margin-bottom:0px;padding:0 40px 30px 40px;">
			<ol class="carousel-indicators" style="right:50%;top:auto;bottom:-10px;margin-right:-19px;">
				<li data-target="#Carousel" data-slide-to="0" class="active" ></li>
				<?php
				for($i=1;$i<=($div);$i++)
				{
				?>
				<li data-target="#Carousel" data-slide-to="<?php echo $i ?>" ></li>
				<?php
				}
				?>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<div class="row">
					<?php
					for($i=0;$f<$num && $i<4;$f++,$i++)
					{
						$row=mysqli_fetch_array($res);
					?>
						<div class="col-md-3"><a href="<?php echo 'members/'.$row['image'] ?>" ><img src="<?php echo 'members/'.$row['image'] ?>" style="height:250px;width:250px;margin-bottom:10px"/><b style="width:250px" class="thumbnail"><center><?php echo strtoupper($row['name']) ?></center></b></a></div>
						<?php
					}
						?>
					</div>
				</div>
				<?php
				for($j=0;$j<$div;$j++)
				{
				?>
				<div class="item">
					<div class="row">
					<?php
					for($i=0;$f<$num && $i<4;$f++,$i++)
					{
						$row=mysqli_fetch_array($res);
					?>
						<div class="col-md-3"><a href="<?php echo 'members/'.$row['image'] ?>"><img src="<?php echo 'members/'.$row['image'] ?>" style="height:250px;width:250px;margin-bottom:10px"/><b style="width:250px" class="thumbnail"><center><?php echo strtoupper($row['name']) ?></center></b></a></div>
						<?php
					}
						?>
					</div>
				</div>
				<?php
				}
				?>
				<!--<div class="item">
					<div class="row">
						<div class="col-md-3"><a href="members/9.jpg"><img src="members/9.jpg" style="height:250px;width:250px"/></a></div>
						<div class="col-md-3"><a href="members/10.jpg"><img src="members/10.jpg" style="height:250px;width:250px"/></a></div>
						<div class="col-md-3"><a href="members/11.jpg"><img src="members/11.jpg" style="height:250px;width:250px"/></a></div>
						<div class="col-md-3"><a href="members/12.jpg"><img src="members/12.jpg" style="height:250px;width:250px"/></a></div>
					</div>
				</div>-->
			</div>
			<a href="#Carousel" data-slide="prev" class="left carousel-control" style="left:-12px;height:40px;width:40px;background: none repeat scroll 0 0 #222222;border:4px solid #FFFFFF;border-radius:23px 23px 23px 23px;margin-top:90px;"><div class="icon-prev"></div></a>
			<a href="#Carousel" data-slide="next" style="right:-12px;height:40px;width:40px;background: none repeat scroll 0 0 #222222;border:4px solid #FFFFFF;border-radius:23px 23px 23px 23px;margin-top:90px;" class="right carousel-control"><div style="bottom:10px" class="icon-next"></div></a>
		</div>
	</div>
</div>