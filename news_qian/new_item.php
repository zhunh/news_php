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
					<div class="box">
					
				<?php
					function toHtmlcode($content)
								{
									return $content = str_replace("\n","<br>",str_replace(" ", "&nbsp;", $content));
								}		
					include('php/connection.php');
					$id=(int)$_GET['id'];
					$sql="select * from news_item where id='$id'";
					$result=mysqli_query($db,$sql);
					$row=mysqli_fetch_object($result);
				?>			
					
						<a href="#">
						<h2 class="vid-name">
						<?php echo $row->title;?>		
						</h2></a>
						<div class="info">
							<h5>编辑 <a href="#"><?php echo $row->author;?></a></h5>
						<span><i class="fa fa-calendar"></i><?php echo $row->time;?></span> 							
						</div>
						<div class="wrap-vid">
							<div class="zoom-container">
								<div class="zoom-caption">
								</div>
								<img src="../image/<?php echo $row->pictures;?>" />
							</div>
							<p1><?php echo toHtmlcode($row->content);?><a href="#">更多...</a></p1>
						</div>
					</div>
					
					
					<div class="box">
						<center>
						<ul class="pagination">
						<!-- JiaThis Button BEGIN -->
						<div class="jiathis_style_24x24">
							<a class="jiathis_button_qzone"></a>
							<a class="jiathis_button_tsina"></a>
							<a class="jiathis_button_tqq"></a>
							<a class="jiathis_button_weixin"></a>
							<a class="jiathis_button_renren"></a>
							<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
							<a class="jiathis_counter_style"></a>
						</div>
						<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
						<!-- JiaThis Button END -->
						</ul>
					</center>				
					</div>	
				<hr class="line">
					<div class="box">
						<div class="box-content">
							<div id="contact_form">
							
							<?php
								$param_array=array($row->id,$row->time);//将新闻id和新闻发布时间两个参数存入数组
								$param=implode('_',$param_array);//将新闻id和新闻发布时间两个参数合并为一个字符串
							?>
							
								<form name="comment" id="ff" method="post" action="php/add_comment.php?param=<?php echo $param;?>">
									<label>
									<span>发表评论:</span>
									<textarea name="comment" id="comment"></textarea>
									</label>
									<input class="sendButton" type="submit" name="Submit" value="Submit">
								</form>
							</div>
						</div>
					</div>	
				<hr class="line">

		<?php		
			include('php/connection.php');

			$news_time=$row->time;
			$sql1="SELECT count(*) count from comments where time='$news_time'";//2
			$result2=mysqli_query($db,$sql1);
			$row2=mysqli_fetch_object($result2);
			$recountCount=$row2->count;//得到总数|需要的第一个参数

			$show=3;//设置的单页评论条数
			$totalPage=ceil($recountCount/$show);//算出总页数
			$page=(isset($_GET['page'])&&$_GET['page']>=0)? $_GET['page']:0;//
			$isLast=($page>=($totalPage-1))? true:false;// 当查询结果为0时，$page将大于$totalPage-1,注意这一点。
			$hasNoPre=($page==0)? true:false;
			$hasNoNext=($page>=$totalPage-1)? true:false;
			$isFirst=($page==0)? true:false;
			$isnothing=($recountCount==0)? true:false;
			
			$start=$page*$show;
			mysqli_free_result($result2);

			//$news_time=$row->time;
			$sql2="select * from comments where time='$news_time' order by id desc limit $start,$show";//1
			$result3=mysqli_query($db,$sql2);
						while($row3=mysqli_fetch_object($result3)){

					echo "<div class='box'>";
										echo $row3->username.":&nbsp";
										//echo "<div class='box-content'>";
										echo $row3->comment;
										echo "<div style='text-align:right;'>";
										echo $row3->comment_time;
										echo "</div>";
										//echo "</div>";
										echo "</div><hr class='line'>";
						}
						mysqli_free_result($result3);
						
				echo "<hr class='line'>
					<div class='box'>
						<center>
						<ul class='pagination'>";						
						
			$str="<li><a>共".$recountCount."条评论</a></li>";
			$str.=$isFirst? "<li><a>首页</a></li>" :"<li><a href=\"?id=".$id."&page=0\">首页</a></li>";
			$str.=$hasNoPre? "<li><a>上一页</a></li>" :"<li><a href=\"?id=".$id."&page=".($page-1)."\">上一页</a></li>";
			$str.=$isnothing?"<li><a>当前第0/".$totalPage."页</a></li>":"<li><a>当前第".($page+1)."/".$totalPage."页</a></li>";
			$str.=$hasNoNext? "<li><a>下一页</a></li>" :"<li><a href=\"?id=".$id."&page=".($page+1)."\">下一页</a></li>";
			$str.=$isLast?"<li><a>尾页</a></li>":"<li><a href=\"?id=".$id."&page=".($totalPage-1)."\">尾页</a></li>";
			echo $str;	
			echo "			</ul>
					</center>
					</div>";
		?>
				
				</div>
				
	<?php include('php/siderbar.php');?>				
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
