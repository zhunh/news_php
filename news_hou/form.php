<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>发布新闻</title>
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="assets/materialize/css/materialize.min.css" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
<script>
function validateForm()
{
var x=document.forms["form"]["biaoti"].value.trim();
if (x==null || x=="")
  {
  alert("请输入留言！");
  return false;
  }
  else if(x.length<6)
  {
	 alert("字数不能小于6！"); 
	 return false;//不提交
  }
  else{
	location.href="php/controller/insert_news.php";
  }
}
</script>	
<style type="text/css">
textarea{width:1300px;
		height:200px;}
</style>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand waves-effect waves-dark" href="index.html"><i class="large material-icons">insert_chart</i> <strong>NEWS</strong></a>
				
		<div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
            </div>

            <ul class="nav navbar-top-links navbar-right"> 
				<li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown4"><i class="fa fa-envelope fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a></li>				
				<li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown3"><i class="fa fa-tasks fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a></li>
				<li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown2"><i class="fa fa-bell fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a></li>
				  <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i> <b>
				  <?php 
						session_start();
						if(!empty($_SESSION['zhanghu'])){						
							echo $_SESSION['zhanghu'];
						}else
						{
							echo "<script>window.location.href='empty.html';</script>;";
						}
						//session_destroy();
				  ?>
				  </b> <i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </nav>
		<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
<li><a href="#"><i class="fa fa-user fa-fw"></i> My Profile</a>
</li>
<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
</li> 
<li><a href="php/controller/logout.php?id1=form"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
</li>
</ul>
<ul id="dropdown2" class="dropdown-content w250">
  <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
</ul>
<ul id="dropdown3" class="dropdown-content dropdown-tasks w250">
<li>
		<a href="#">
			<div>
				<p>
					<strong>Task 1</strong>
					<span class="pull-right text-muted">60% Complete</span>
				</p>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
						<span class="sr-only">60% Complete (success)</span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<li class="divider"></li>
	<li>
		<a href="#">
			<div>
				<p>
					<strong>Task 2</strong>
					<span class="pull-right text-muted">28% Complete</span>
				</p>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
						<span class="sr-only">28% Complete</span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<li class="divider"></li>
	<li>
		<a href="#">
			<div>
				<p>
					<strong>Task 3</strong>
					<span class="pull-right text-muted">60% Complete</span>
				</p>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
						<span class="sr-only">60% Complete (warning)</span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<li class="divider"></li>
	<li>
		<a href="#">
			<div>
				<p>
					<strong>Task 4</strong>
					<span class="pull-right text-muted">85% Complete</span>
				</p>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
						<span class="sr-only">85% Complete (danger)</span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<li class="divider"></li>
	<li>
</ul>   
<ul id="dropdown4" class="dropdown-content dropdown-tasks w250">
  <li>
                            <a href="#">
                                <div>
                                    <strong>John Doe</strong>
                                    <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
</ul>  
	   <!--/. NAV TOP  -->
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="index1.php" class="waves-effect waves-dark"><i class="fa fa-desktop"></i> 总览</a>
                    </li>
					<li>
                        <a href="chart.php" class="waves-effect waves-dark"><i class="fa fa-bar-chart-o"></i> 图表</a>
                    </li>
                    <li>
                        <a href="tab-panel.php" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i> 新闻目录</a>
                    </li>
                    
                    <li>
                        <a href="table.php" class="waves-effect waves-dark"><i class="fa fa-table"></i> 新闻预览</a>
                    </li>
                    <li>
                        <a href="form.php" class="active-menu waves-effect waves-dark"><i class="fa fa-edit"></i> 插入新闻 </a>
                    </li>


                    <li>
                        <a href="#" class="waves-effect waves-dark"><i class="fa fa-sitemap"></i> 编辑新闻<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">查询</a>
                            </li>
                            <li>
                                <a href="#">修改</a>
                            </li>
                            <li>
                                <a href="#" class="waves-effect waves-dark">删除<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                             发布新闻
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">主页</a></li>
					  <li><a href="#">发布新闻</a></li>
					  <li class="active">数据</li>
					</ol> 
									
		</div>
		
            <div id="page-inner"> 
			 <div class="row">
			 <form id="form" class="col s12"  method="post" enctype="multipart/form-data" action="php/controller/insert_news.php">
			 <div class="col-lg-12">
			 <div class="card">
                        <div class="card-action">
                            <font color="green"><h2>基本属性</font><h2>
                        </div>
                        <div class="card-content">

	
      <div class="row">
			<div class="input-field col s6" font-size="20">
			  <input id="biaoti" name="biaoti" type="text" class="validate" required="required">
			  <label for="biaoti"><h5>标题</h5></label>
			</div>
			<div class="input-field col s6">
			  <input id="zuozhe" name="zuozhe" type="text" class="validate" required="required">
			  <label for="zuozhe"><h5>作者</h5></label>
			</div>
      </div>
	  
      <div class="row">
        <div class="input-field col s6">
          <input id="shijian" name="shijian" type="text" class="validate" disabled="true">
          <label for="shijian"><h5><?php echo "时间:".date("Y-m-d H:i",time()+6*60*60);?></h5></label>
		  
        </div>

		<div class="input-field col s6">
			<label for=""><h5>类别</h5></label><br>&nbsp;&nbsp;&nbsp;&nbsp;
			<input name="leibie" type="radio" id="test1" value="科技"/>
			<label for="test1">科技</label>
			<input name="leibie" type="radio" id="test2" value="社会" checked="checked"/>
			<label for="test2">社会</label>
			<input name="leibie" type="radio" id="test3" value="旅游"/>
			<label for="test3">旅游</label>
			<input name="leibie" type="radio" id="test4" value="娱乐"/>
			<label for="test4">娱乐</label>
			<input name="leibie" type="radio" id="test5" value="时政"/>
			<label for="test5">时政</label>			
        </div> 

      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="beizhu" name="beizhu" type="text" class="validate">
          <label for="beizhu"><h5>备注</h5></label>
        </div>
		<div class="file-field input-field col s6">

			<input id="tupian" name="tupian[]" type="file" multiple>
			<label for="tupian"><h5>图片</h5></label>

		  <div class="file-path-wrapper">
			<input class="file-path validate" type="text" placeholder="     上传相关图片">
		  </div>
		</div>
      </div>
	<div class="clearBoth"></div>
	</div>
    </div>
	</div>	
	</div>	
	<div class="col-md-12">
		<div class="card">
			<div class="card-action">
				<h2><font color="green">内容：</font><h2>
			</div>
			<div class="card-content">
			   <div class="col">
				<center><textarea id="textarea1"  name="neirong" required="required"></textarea></center>
			   </div>
			</div>
		</div>
	</div>		
      <div class="row">
        <div class="col s12">
		<div style="margin:5px,auto;" align="center"><input type="submit" value="提交"></div>
        </div>
      </div>
    </form>	 	 
                <!-- /.col-lg-12 --> 
			<footer><p>Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="#">新闻发布系统</a></p></footer>
			</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
		
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
	
	<!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/materialize/js/materialize.min.js"></script>
	
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	 <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script> 

</body>

</html>
