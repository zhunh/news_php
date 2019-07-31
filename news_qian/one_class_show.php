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
</head>

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
					
					
		<?php
			include('php/connection.php');

			$class=$_GET['class'];	
			$sql1="SELECT count(*) count from news_item where classify='$class'";//2
			$result2=mysqli_query($db,$sql1);
			$row2=mysqli_fetch_object($result2);
			$recountCount=$row2->count;//得到总数
			//echo $recountCount;
			
			$show=3;
			$totalPage=ceil($recountCount/$show);
			$page=(isset($_GET['page'])&&$_GET['page']>=0)? $_GET['page']:0;
			$isLast=($page==($totalPage-1))? true:false;
			$hasNoPre=($page==0)? true:false;
			$hasNoNext=($page>=$totalPage-1)? true:false;
			$isFirst=($page==0)? true:false;
			$start=$page*$show;
			mysqli_free_result($result2);
		
			$sql2="select * from news_item where classify='$class' limit $start,$show";//1
			$result3=mysqli_query($db,$sql2);
						while($row3=mysqli_fetch_object($result3)){
						echo "<div class='box'><a href='#'><h2 class='vid-name'>";						
						echo "<a href='new_item.php?id=".$row3->id."'>";				
						echo $row3->title;	
						echo "</a>";
				  echo "</h2></a>
						<div class='info'>
							<h5>编辑 <a href='#'>".$row3->author."</a></h5>
						<span><i class='fa fa-calendar'></i>".$row3->time."</span> 							
						</div>
						<div class='wrap-vid'>
							<div class='zoom-container'>
								<div class='zoom-caption'>
								</div>
								<img src='../image/".$row3->pictures."' />
							</div>
							<p>".$row3->content."<a href='#'>更多...</a></p>
						</div>
						</div>
						<hr class='line'>";
						}
						mysqli_free_result($result3);
						
				echo "<hr class='line'>
					 <div class='box'>
						<center>
						<ul class='pagination'>";												
						$str="<li><a>共".$recountCount."条新闻</a></li>";
						$str.=$isFirst? "<li><a>首页</a></li>" :"<li><a href=\"?class=".$class."&page=0\">首页</a></li>";
						$str.=$hasNoPre? "<li><a>上一页</a></li>" :"<li><a href=\"?class=".$class."&page=".($page-1)."\">上一页</a></li>";
						$str.="<li><a>当前第".($page+1)."/".$totalPage."页</a></li>";
						$str.=$hasNoNext? "<li><a>下一页</a></li>" :"<li><a href=\"?class=".$class."&page=".($page+1)."\">下一页</a></li>";
						$str.=$isLast?"<li><a>尾页</a></li>":"<li><a href=\"?class=".$class."&page=".($totalPage-1)."\">尾页</a></li>";
						echo $str;	
						echo "</ul>
					</center>
					</div></div>";
				?>	


				<div id="sidebar" class="col-md-4">
					<!---- Start Widget ---->

					<!---- Start Widget ---->
					<div class="widget ">
						<div class="heading"><h4>Top News</h4></div>
						<div class="content">
							<div class="wrap-vid">
								<div class="zoom-container">
									<div class="zoom-caption">
										<span class="vimeo">Vimeo</span>
										<a href="single.html">
											<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
										</a>
										<p>Video's Name</p>
									</div>
									<img src="images/1.jpg" />
								</div>
								<h3 class="vid-name"><a href="#">Video's Name</a></h3>
								<div class="info">
									<h5>By <a href="#">Kelvin</a></h5>
									<span><i class="fa fa-calendar"></i>25/3/2015</span> 
									<span><i class="fa fa-heart"></i>1,200</span>
								</div>
							</div>
							<div class="wrap-vid">
								<div class="zoom-container">
									<div class="zoom-caption">
										<span class="vimeo">Vimeo</span>
										<a href="single.html">
											<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
										</a>
										<p>Video's Name</p>
									</div>
									<img src="images/2.jpg" />
								</div>
								<h3 class="vid-name"><a href="#">Video's Name</a></h3>
								<div class="info">
									<h5>By <a href="#">Kelvin</a></h5>
									<span><i class="fa fa-calendar"></i>25/3/2015</span> 
									<span><i class="fa fa-heart"></i>1,200</span>
								</div>
							</div>
							<div class="wrap-vid">
								<div class="zoom-container">
									<div class="zoom-caption">
										<span class="vimeo">Vimeo</span>
										<a href="single.html">
											<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
										</a>
										<p>Video's Name</p>
									</div>
									<img src="images/3.jpg" />
								</div>
								<h3 class="vid-name"><a href="#">Video's Name</a></h3>
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
