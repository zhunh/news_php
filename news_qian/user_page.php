<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>Newspaper</title>
	
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"  type="text/css">
	
	<!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
	
	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
	
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
	p1{
		letter-spacing:2px;
		font-family:"微软雅黑";
		font-size:20px;
		line-height:150%;
	}
	</style>
</head>
	<?php
		include('php/connection.php');
		$user=$_GET['user'];
		$select_user="select * from user_qian where username='$user'";
		$personal_result=mysqli_query($db,$select_user);
		$personal_row=mysqli_fetch_object($personal_result);
		
		$select_comments="select * from comments where username='$user'";
		$comments_result=mysqli_query($db,$select_comments);
				
	?>
<body>
<header>
	<!--Top-->
<?php include("php/header.php");?>
</header>	
	<!-- Header -->
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="archive-page container">
		<div class="">
			<div class="row">
				<div id="main-content" class="col-md-8">
				<div class="box"><h2 class="vid-name">个人中心</h2></div>	
				<hr class="line">
				<div class="box"><font color="pink" size="5">基本信息</font></div>
				<hr class="line">
				<div class="box">
				<table>
				<tr>
					<td>账号:&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td><?php echo $personal_row->username;?></td>
				<tr>				
				<tr>
					<td>电话:</td>
					<td><?php echo $personal_row->tel;?></td>
				<tr>
				<tr>
					<td>邮箱:</td>
					<td><?php echo $personal_row->email;?></td>
				<tr>
				<tr>
					<td>性别:</td>
					<td><?php echo $personal_row->sex;?></td>
				<tr>
				<tr>
					<td>签名:</td>
					<td><?php echo $personal_row->tips;?></td>
				<tr>				
				</table>
				</div>
				<hr class="line">
				<div class="box">
				<font color="pink" size="5">我的评论</font>
				</div>
				<hr class="line">
				
				<div class="box">
				<?php 
					while($comments_row=mysqli_fetch_object($comments_result)){
						echo $comments_row->comment.$comments_row->time."<br>";
					}
				?>
				</div>
				<hr class="line">
				<div class="box">
				我的收藏
				</div>				
				</div>					
				<div id="sidebar" class="col-md-4">
					<!---- Start Widget ---->
					<div class="widget wid-follow">
						<div class="heading"><h4>Follow Us</h4></div>
						<div class="content">
							<ul class="list-inline">
								<li>
									<a href="facebook.com/">
										<div class="box-facebook">
											<span class="fa fa-facebook fa-2x icon"></span>
											<span>1250</span>
											<span>Fans</span>
										</div>
									</a>
								</li>
								<li>
									<a href="facebook.com/">
										<div class="box-twitter">
											<span class="fa fa-twitter fa-2x icon"></span>
											<span>1250</span>
											<span>Fans</span>
										</div>
									</a>
								</li>
								<li>
									<a href="facebook.com/">
										<div class="box-google">
											<span class="fa fa-google-plus fa-2x icon"></span>
											<span>1250</span>
											<span>Fans</span>
										</div>
									</a>
								</li>
							</ul>
							<img src="images/banner.jpg" />
						</div>
					</div>
					<!---- Start Widget ---->
					<div class="widget wid-post">
						<div class="heading"><h4>目录</h4></div>
						<div class="content">
							<div class="post wrap-vid">
								<div class="zoom-container">
									<div class="zoom-caption">
										<span class="youtube">Youtube</span>
										<a href="single.html">
											<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
										</a>
										<p>Video's Name</p>
									</div>
									<img src="images/1.jpg" />
								</div>
								<div class="wrapper">
									<h5 class="vid-name"><a href="#">Video's Name</a></h5>
									<div class="info">
										<h6>By <a href="#">Kelvin</a></h6>
										<span><i class="fa fa-calendar"></i>25/3/2015</span> 
										<span><i class="fa fa-heart"></i>1,200</span>
									</div>
								</div>
							</div>

						</div>
					</div>
					<!---- Start Widget ---->
					<div class="widget ">
						<div class="heading"><h4>今日要闻</h4></div>
						<div class="content">
							<div class="wrap-vid">
								<div class="zoom-container">
									<div class="zoom-caption">
										<span class="vimeo">优酷</span>
										<a href="single.html">
											<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
										</a>
										<p>Video's Name</p>
									</div>
									<img src="images/1.jpg" />
								</div>
								<h3 class="vid-name"><a href="#">视频名字</a></h3>
								<div class="info">
									<h5>By <a href="#">Kelvin</a></h5>
									<span><i class="fa fa-calendar"></i>25/3/2015</span> 
									<span><i class="fa fa-heart"></i>1,200</span>
								</div>
							</div>
						</div>
					</div>
				</div>				
			</div>			
		</div>		
	</div>
	<footer>
	<?php include("php/footer.php");?>
	</footer>
	<!-- Footer -->
	
	<!-- JS -->
	<script src="owl-carousel/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
        autoPlay: 3000,
        items : 5,
        itemsDesktop : [1199,4],
        itemsDesktopSmall : [979,4]
      });

    });
    </script>
	
</body>
</html>
