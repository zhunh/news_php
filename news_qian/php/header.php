<?php
		session_start();
		$session=empty($_SESSION['username'])?"未登录":$_SESSION['username'];
	$str= "	<nav id='top'>
		<div class='container'>
			<div class='row'>
				<div class='col-md-6'>
					<strong>欢迎走进我们!</strong>
				</div>
				<div class='col-md-6'>
					<ul class='list-inline top-link link'>
						<li><a href='index_qian.php'><i class='fa fa-home'></i> 主页</a></li>
						<li><a href='contact.html'><i class='fa fa-comments'></i> 联系</a></li>
						<li><a href='#'><i class='fa fa-question-circle'></i> 问答</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	
	<!--Navigation-->
    <nav id='menu' class='navbar container'>
		<div class='navbar-header'>
			<button type='button' class='btn btn-navbar navbar-toggle' data-toggle='collapse' data-target='.navbar-ex1-collapse'><i class='fa fa-bars'></i></button>
			<a class='navbar-brand' href='#'>
				<div class='logo'><span>新闻中心</span></div>
			</a>
		</div>
		<div class='collapse navbar-collapse navbar-ex1-collapse'>
			<ul class='nav navbar-nav'>
				<li><a href='index_qian.php'>主页</a></li>
				<li class='dropdown'><a href='#' class='dropdown-toggle' data-toggle='dropdown'>账户 <i class='fa fa-arrow-circle-o-down'></i></a>
					<div class='dropdown-menu'>
						<div class='dropdown-inner'>
							<ul class='list-unstyled'>
								<li><a href='login.html'>登录</a></li>
								<li><a href='register.html'>注册</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li class='dropdown'><a href='#' class='dropdown-toggle' data-toggle='dropdown'>分类 <i class='fa fa-arrow-circle-o-down'></i></a>
					<div class='dropdown-menu'>
						<div class='dropdown-inner'>
							<ul class='list-unstyled'>
								<li><a href='one_class_show.php?class=时政'>时政</a></li>
								<li><a href='one_class_show.php?class=娱乐'>娱乐</a></li>
								<li><a href='one_class_show.php?class=科技'>科技</a></li>
								<li><a href='one_class_show.php?class=社会'>社会</a></li>
								<li><a href='one_class_show.php?class=旅游'>旅游</a></li>
							</ul>
						</div> 
					</div>
				</li>
				<li><a href='#'><i class='fa fa-cubes'></i> 板块</a></li>
				<li><a href='contact.html'><i class='fa fa-envelope'></i> 联系我们</a></li>
				<li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown'>
".$session."
				</a>
					<div class='dropdown-menu'>
						<div class='dropdown-inner'>
							<ul class='list-unstyled'>";
							
						$str.=($session=="未登录")?"<li><a href='login.html'>请登录</a></li>":"<li><a href='user_page.php?user=$session'>个人中心</a></li>";
						$str.= "<li><a href='php/logout.php'>注销</a></li>
							</ul>
						</div> 
					</div>
				</li>								  
			</ul>


		</div>
	</nav>";
echo $str;
?>