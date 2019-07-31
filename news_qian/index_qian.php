<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>新闻中心</title>
	
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"  type="text/css">
	
	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
	
	<!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
	 <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
	
	<!-- Custom Fonts -->
    <link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">
	
	<!-- jQuery and Modernizr-->
	<script src="js/jquery-2.1.1.js"></script>
	
	<!-- Core JavaScript Files -->  	 
    <script src="js/bootstrap.min.js"></script>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
	<style>
	c{
		letter-spacing:1px;
		font-family:"微软雅黑";
		font-size:15px;
		line-height:180%;
	}
	</style>
</head>

<body>
<header>
	<!--Top-->
<?php 
	include("php/header.php");
	include("php/roll_pic.php");  
	?>
</header>	
	<div class="featured container">
		<div class="row">
			<div class="col-sm-4" >
	<!--新闻板块-->		
	<?php
		include("php/connection.php");
        $shumu="SELECT count(*) count from news_item";
		$result2=mysqli_query($db,$shumu);
		$row2=mysqli_fetch_object($result2);
		$Count=$row2->count;		
		$s=$Count<15?$Count:15;
		
		$select=mysqli_query($db,"select * from news_item");	
		for($i=0;$i<$s;$i++){
		$row=mysqli_fetch_object($select);
		echo "<c><b color=red>&bull;</b><a href='new_item.php?id=".$row->id."'>".trim($row->title)."</a></c><br>";
		}
	?>		
			</div>		
			<div class="col-sm-8">
				<!-- Carousel -->
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>
					<!-- Wrapper for slides -->
					<div id="owl-demo-1" class="owl-carousel">
					
						
						<?php
						//roll_pic("select * from news_item where classify='时政'");
						    $xuanze="select * from news_item where classify='时政'";
							$result=mysqli_query($db,$xuanze);
							$row=mysqli_fetch_object($result);
							echo "<div class='item'>";
							echo "<a href='new_item.php?id=".$row->id."'><img src='../image/".$row->pictures."' alt='First slide'></a>";							
							echo "<div class='header-text hidden-xs'><div class='col-md-12 text-center'><h2>";
							echo $row->remarkes;
							echo "</h2><br><h3>";
							echo $row->title;
							echo "</h3><br></div></div></div>";		
						?>		
							<!-- /header-text -->
						
						<?php
							//roll_pic("select * from news_item where classify='社会'");
							$xuanze3="select * from news_item where classify='社会'";
							$result3=mysqli_query($db,$xuanze3);
							$row3=mysqli_fetch_object($result3);
							echo "<div class='item active'>";
							echo "<a href='new_item.php?id=".$row3->id."'><img src='../image/".$row3->pictures."' alt='Second slide'></a>";							
							echo "<div class='header-text hidden-xs'><div class='col-md-12 text-center'><h2>";
							echo $row3->remarkes;
							echo "</h2><br><h3>";
							echo $row3->title;
							echo "</h3><br></div></div></div>";			
						?>	
						<?php
							//roll_pic("select * from news_item where classify='娱乐'");
							$xuanze4="select * from news_item where classify='娱乐'";
							$result4=mysqli_query($db,$xuanze4);
							$row4=mysqli_fetch_object($result4);
							echo "<div class='item active'>";
							echo "<a href='new_item.php?id=".$row4->id."'><img src='../image/".$row4->pictures."' alt='Third slide'></a>";							
							echo "<div class='header-text hidden-xs'><div class='col-md-12 text-center'><h2>";
							echo $row4->remarkes;
							echo "</h2><br><h3>";
							echo $row4->title;
							echo "</h3><br></div></div></div>";			
						?>						
					</div>
					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div><!-- /carousel -->
			</div>
		</div>
	</div>
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="index-page container">
		<div class="row">
			<div id="main-content"><!-- background not working -->
				<div class="col-md-6">
					<div class="box wrap-vid">
						<div class="zoom-container">
							<div class="zoom-caption">
								<span class="youtube">优酷</span>
								<a href="video.php">
									<i class="fa fa-play icon-play" style="color: #fff"></i>
								</a>
								<p>视频名字</p>
							</div>
							<img src="images/4.jpg" />
						</div>
						<h3 class="vid-name"><a href="#">视频名字</a></h3>
					</div>
					<div class="box">
						<div class="box-header header-vimeo">
							<h2>时政</h2>

						</div>
							<?php
								$shizheng="SELECT * from news_item where classify='时政'";
								$result_shizheng=mysqli_query($db,$shizheng);
								$shizheng_count = mysqli_num_rows($result_shizheng);
								//$row_shziheng=mysqli_fetch_object($result_shizheng);
								for($i=0;$i<$shizheng_count;$i++){
								$row_shziheng=mysqli_fetch_object($result_shizheng);
								echo "<c>&bull;<a href='new_item.php?id=".$row_shziheng->id."'>".trim($row_shziheng->title)."</a></c><br>";
								}													
							?>						
					</div>
					<div class="box">
						<div class="box-header header-photo">
							<h2>科技</h2>
						</div>
						<div class="box-content">
							<div id="owl-demo-2" class="owl-carousel">
								<div class="item">
									<img src="images/1.jpg" />
									<img src="images/2.jpg" />
								</div>
								<div class="item">
									<img src="images/3.jpg" />
									<img src="images/5.jpg" />
								</div>
								<div class="item">
									<img src="images/8.jpg" />
									<img src="images/9.jpg" />
								</div>
								<div class="item">
									<img src="images/10.jpg" />
									<img src="images/11.jpg" />
								</div>
								<div class="item">
									<img src="images/12.jpg" />
									<img src="images/13.jpg" />
								</div>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="box-header header-natural">
							<h2>Natural</h2>
						</div>
					</div>
				</div>
			</div>
			<div id="sidebar">
				<div class="col-md-3">
					<!---- Start Widget 暂且注释
					<div class="widget wid-vid">
						<div class="heading">
							<h4>Videos</h4>
						</div>
						<div class="content">

						</div>
					</div>
					Start Widget ---->
					<div class="widget wid-gallery">
						<div class="heading"><h4>社会</h4></div>
						<div class="content">
							<?php
								$shehui="SELECT * from news_item where classify='社会'";
								$result_shehui=mysqli_query($db,$shehui);
								$shehui_count = mysqli_num_rows($result_shehui);
								//$row_shziheng=mysqli_fetch_object($result_shizheng);
								for($i=0;$i<$shehui_count;$i++){
								$row_shehui=mysqli_fetch_object($result_shehui);
								echo "<c>&bull;<a href='new_item.php?id=".$row_shehui->id."'>".trim($row_shehui->title)."</a></c><br>";
								}													
							?>
						</div>
					</div>
					<!---- Start Widget ---->
					<div class="widget wid-new-post">
						<div class="heading"><h4>旅游</h4></div>
						<div class="content">
							<?php
								$lvyou="SELECT * from news_item where classify='旅游'";
								$result_lvyou=mysqli_query($db,$lvyou);
								$lvyou_count = mysqli_num_rows($result_lvyou);
								//$row_shziheng=mysqli_fetch_object($result_shizheng);
								for($i=0;$i<$lvyou_count;$i++){
								$row_lvyou=mysqli_fetch_object($result_lvyou);
								echo "<c>&bull;<a href='new_item.php?id=".$row_lvyou->id."'>".trim($row_lvyou->title)."</a></c><br>";
								}													
							?>						
						</div>
					</div>
					<!---- Start Widget ---->
					<div class="widget wid-recent-post">
						<div class="heading"><h4>娱乐</h4></div>
						<div class="content">
							<?php
								$yule="SELECT * from news_item where classify='娱乐'";
								$result_yule=mysqli_query($db,$yule);
								$yule_count = mysqli_num_rows($result_yule);
								//$row_shziheng=mysqli_fetch_object($result_shizheng);
								for($i=0;$i<$yule_count;$i++){
								$row_yule=mysqli_fetch_object($result_yule);
								echo "<c>&bull;<a href='new_item.php?id=".$row_yule->id."'>".trim($row_yule->title)."</a></c><br>";
								}													
							?>
							
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<!---- Start Widget ---->
					<div class="widget wid-tags">
						<div class="heading"><h4>查找</h4></div>
						<div class="content">
							<form role="form" class="form-horizontal" method="post" action="search_result.php">
								<input type="text" placeholder="请输入关键字" value="" name="keyword" id="keyword" class="form-control">
							</form>
						</div>
					</div>
					<!---- Start Widget ---->
					<div class="widget wid-tags">
						<div class="heading"><h4>标签</h4></div>
						<div class="content">
							<a href="#">动物</a>
							<a href="#">吃饭</a>
							<a href="#">城市暴力</a>
							<a href="#">家庭</a>
							<a href="one_class_show.php?class=时政"><font color=blue>时政</font></a>
							<a href="#">直播</a>
							<a href="one_class_show.php?class=科技"><font color=blue>科技</font></a>
							<a href="#">视频</a>
							<a href="one_class_show.php?class=社会"><font color=blue>社会</font></a>
							<a href="#">相册</a>
							<a href="one_class_show.php?class=旅游"><font color=blue>旅游</font></a>
							<a href="#">爱心</a>	
							<a href="#">美妆</a>
							<a href="#">媒体</a>
							<a href="one_class_show.php?class=娱乐"><font color=blue>娱乐</font></a>							
							<a href="#">页码</a>
							<a href="#">番剧</a>
						</div>
					</div>
					<!---- Start Widget
					<div class="widget wid-comment">
						<div class="heading"><h4>Top Comments</h4></div>
					</div>
					Start Widget ---->
					<div class="widget wid-categoty">
						<div class="heading"><h4>目录</h4></div>
						<div class="content">
							<select class="col-md-12">
								<option> </option>
								<option>时政</option>
								<option>娱乐</option>
								<option>旅游</option>
								<option>社会</option>
							</select>
						</div>
					</div>
					<!---- Start Widget ---->
					<div class="widget wid-calendar">
						<div class="heading"><h4>日历</h4></div>
						<div class="content">
							<center><form action="" role="form">        
								<div class="">
									<div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">                </div>
									<input type="hidden" id="dtp_input2" value="" /><br/>
								</div>
							</form></center>
						</div>
					</div>
					<!---- Start Widget ---->
					<div class="widget wid-tweet">
						<div class="heading"><h4>更多</h4></div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<footer>
	<?php include ("php/footer.php");?>
	</footer>
	<!-- Footer -->
	
	<!-- JS -->
	<script src="owl-carousel/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
      $("#owl-demo-1").owlCarousel({
        autoPlay: 3000,
        items : 1,
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [400,1]
      });
	  $("#owl-demo-2").owlCarousel({
        autoPlay: 3000,
        items : 3,
        
      });
    });
    </script>
	
	
	<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
	<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
	<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>
</body>
</html>
