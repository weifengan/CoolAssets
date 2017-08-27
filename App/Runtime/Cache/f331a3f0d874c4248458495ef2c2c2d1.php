<?php if (!defined('THINK_PATH')) exit();?> 
	<title>酷源-最全的资源网站</title>

    <!-- Bootstrap -->
    <link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">
    <link href="__PUBLIC__/css/styles.css" rel="stylesheet">
     
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="__PUBLIC__/js/jquery.min.js"></script>
      
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="__PUBLIC__/js/bootstrap.min.js"></script>
  </head>
  <body background="./Public/img/body_bg.gif">
  	   <div class="header">
  		<!-- 顶部 导航栏-->
		<nav class="navbar navbar-inverse" >
			<div class="container ">	
				<div class="pull-left">
					<a href="index.php"><span class="header_nav_logo"><img src="./Public/img/logo.png" ></span></a>
				</div>
				<div class="container-fluid"> 
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse"
								data-target="#header-navbar-collapse">
							<span class="sr-only">切换导航</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>						
					</div>
					
					<div class="collapse navbar-collapse" id="header-navbar-collapse">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<span> 模型-Model<b class="caret"></b>
								</a>
								<ul class="dropdown-menu">
									<li><a href="?m=Search&a=search&key=role">角色-Charactor</a></li>
									<li><a href="?m=Search&a=search&key=scene">场景-Scene</a></li>
									<li class="divider"></li>
									<li><a href="?m=Search&a=search&key=weapon">武器</a></li>
									<li><a href="?m=Search&a=search&key=other">其他</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<span>  界面-UI</span><b class="caret"></b>
								</a>
								<ul class="dropdown-menu">
									<li><a href="?m=Search&a=search&key=role">套件</a></li>
									<li><a href="?m=Search&a=search&key=role">部件</a></li>
								</ul>
							</li>
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<span style="font-size:14px">  程序-Code</span><b class="caret"></b>
								</a>
								<ul class="dropdown-menu">
									<li><a href="?m=Search&a=search&key=role">功能</a></li>
									<li><a href="?m=Search&a=search&key=role">完整案例</a></li>
								</ul>
							</li>
						</ul>
						
						
						 <ul class="nav navbar-nav navbar-right">
						    	<li>
						    		<a href="?m=Login&a=reg">立即注册</a> </span> 
						    	</li>
						    	<li>
						    		<a href="?m=Login&a=login">登录</a>
						    	</li>
						 </ul>sousuo
					</div>
					
				</div>
				
			</div>
		</nav><!-- end  nav-->
	</div>
		
		
		<!--Slider image    -->
		<div>
	<div class="carousel slide" id="carousel-471440">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-471440">
					</li>
					<li data-slide-to="1" data-target="#carousel-471440">
					</li>
					<li data-slide-to="2" data-target="#carousel-471440">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<a href="http://www.baidu.com/"><img alt="" src="./Public/img/slider/default.jpg" /></a>
						<div class="carousel-caption">
							<h4>
								First Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, 
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="" src="./Public/img/slider/default1.jpg" />
						<div class="carousel-caption">
							<h4>
								Second Thumbnail label
							</h4>
							<p>
								 Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="" src="./Public/img/slider/default2.jpg" />
						<div class="carousel-caption">
							<h4>
								Third Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
				</div> <a class="left carousel-control" href="#carousel-471440" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-471440" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>
</div>
		
		
		
		<!--类别-->
		<div class="container" style="padding-top:10px; padding-bottom: 10px;">	 
 		  	<div>
				<ul id="myTab" class="nav nav-tabs">
							<li class="active">
								<a href="#lastest" data-toggle="tab" style="color:#000000;">
									 最新素材
								</a>
							</li>
							<li ><a href="#hot" data-toggle="tab" style="color:#000000;">人气资源</a></li>
							<li ><a href="#hotdownload" data-toggle="tab" style="color:#000000;">热门下载</a></li>
							<li class="pull-right" style="padding-right: 30px;">
								<form method="get" action="./?m=Search&a=search">
								<div>
									<span class="pull-left">
										<input type="search" id="key" name="key" class="form-control" placeholder="请输要搜索内容" >
										<input id="m" name="m" value="Search" hidden/>
										<input id="a" name="a" value="search" hidden/>
									</span>
							 		<button class="btn btn-primary" type="submit"><span class="glyphicon-search">搜索</span>
							 </div>
							 </form>
							</li>
							
						</ul>
						
				</div>
				<div id="myTabContent" class="tab-content">
					<div class="tab-pane fade in active" id="lastest">
					
								<div class="row" style="padding-top: 10px;">
								 
								  <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3" >
								    <div class="thumbnail">
								      <img src="./Public/img/noimg.png" alt="...">
								      <div class="caption">
								        <h3>Thumbnail label</h3>
								        <p>...</p>
								        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
								      </div>
								    </div>
								  </div>
					 
								  <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
								    <div class="thumbnail">
								      <img src="./Public/img/noimg.png" alt="...">
								      <div class="caption">
								        <h3>Thumbnail label</h3>
								        <p>...</p>
								        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
								      </div>
								    </div>
								  </div>
					 
								   <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
								    <div class="thumbnail">
								      <img src="./Public/img/noimg.png" alt="...">
								      <div class="caption">
								        <h3>Thumbnail label</h3>
								        <p>...</p>
								        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
								      </div>
								    </div>
								  </div>
			  
			  
			 						 <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3" >
								    <div class="thumbnail">
								      <img src="./Public/img/noimg.png" alt="...">
								      <div class="caption">
								        <h3>Thumbnail label</h3>
								        <p>...</p>
								        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
								      </div>
								    </div>
								  </div>
						
						
									<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3" >
								    <div class="thumbnail">
								      <img src="./Public/img/noimg.png" alt="...">
								      <div class="caption">
								        <h3>Thumbnail label</h3>
								        <p>...</p>
								        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
								      </div>
								    </div>
								  </div>		
								  
								  
								  
								  <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3" >
								    <div class="thumbnail">
								      <img src="./Public/img/noimg.png" alt="...">
								      <div class="caption">
								        <h3>Thumbnail label</h3>
								        <p>...</p>
								        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
								      </div>
								    </div>
								  </div>
						
								</div>
					
					
					
					</div>
					<div class="tab-pane fade" id="hot">
						
							<div class="row" style="padding-top: 10px;">
								 
								  <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3" >
								    <div class="thumbnail">
								      <img src="./Public/img/noimg.png" alt="...">
								      <div class="caption">
								        <h3>Thumbnail label</h3>
								        <p>...</p>
								        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
								      </div>
								    </div>
								  </div>
					 
								  <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
								    <div class="thumbnail">
								      <img src="./Public/img/noimg.png" alt="...">
								      <div class="caption">
								        <h3>Thumbnail label</h3>
								        <p>...</p>
								        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
								      </div>
								    </div>
								  </div>
					 
								   <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
								    <div class="thumbnail">
								      <img src="./Public/img/noimg.png" alt="...">
								      <div class="caption">
								        <h3>Thumbnail label</h3>
								        <p>...</p>
								        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
								      </div>
								    </div>
								  </div>
			  
			  
			 						 <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3" >
								    <div class="thumbnail">
								      <img src="./Public/img/noimg.png" alt="...">
								      <div class="caption">
								        <h3>Thumbnail label</h3>
								        <p>...</p>
								        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
								      </div>
								    </div>
								  </div>
						
						
									<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3" >
								    <div class="thumbnail">
								      <img src="./Public/img/noimg.png" alt="...">
								      <div class="caption">
								        <h3>Thumbnail label</h3>
								        <p>...</p>
								        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
								      </div>
								    </div>
								  </div>		
								  
								  
								  
								  <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3" >
								    <div class="thumbnail">
								      <img src="./Public/img/noimg.png" alt="...">
								      <div class="caption">
								        <h3>Thumbnail label</h3>
								        <p>...</p>
								        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
								      </div>
								    </div>
								  </div>
						
								</div>
						
					</div>
					<div class="tab-pane fade" id="hotdownload">
						
							<div class="row" style="padding-top: 10px;">
								 
								  <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3" >
								    <div class="thumbnail">
								      <img src="./Public/img/noimg.png" alt="...">
								      <div class="caption">
								        <h3>Thumbnail label</h3>
								        <p>...</p>
								        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
								      </div>
								    </div>
								  </div>
					 
								  <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
								    <div class="thumbnail">
								      <img src="./Public/img/noimg.png" alt="...">
								      <div class="caption">
								        <h3>Thumbnail label</h3>
								        <p>...</p>
								        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
								      </div>
								    </div>
								  </div>
					 
								   <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
								    <div class="thumbnail">
								      <img src="./Public/img/noimg.png" alt="...">
								      <div class="caption">
								        <h3>Thumbnail label</h3>
								        <p>...</p>
								        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
								      </div>
								    </div>
								  </div>
			  
			  
			 						 <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3" >
								    <div class="thumbnail">
								      <img src="./Public/img/noimg.png" alt="...">
								      <div class="caption">
								        <h3>Thumbnail label</h3>
								        <p>...</p>
								        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
								      </div>
								    </div>
								  </div>
						
						
									<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3" >
								    <div class="thumbnail">
								      <img src="./Public/img/noimg.png" alt="...">
								      <div class="caption">
								        <h3>Thumbnail label</h3>
								        <p>...</p>
								        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
								      </div>
								    </div>
								  </div>		
								  
								  
								  
								  <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3" >
								    <div class="thumbnail">
								      <img src="./Public/img/noimg.png" alt="...">
								      <div class="caption">
								        <h3>Thumbnail label</h3>
								        <p>...</p>
								        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
								      </div>
								    </div>
								  </div>
								  
								  <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3" >
								    <div class="thumbnail">
								      <img src="./Public/img/noimg.png" alt="...">
								      <div class="caption">
								        <h3>Thumbnail label</h3>
								        <p>...</p>
								        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
								      </div>
								    </div>
								  </div>
								  
								  <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3" >
								    <div class="thumbnail">
								      <img src="./Public/img/noimg.png" alt="...">
								      <div class="caption">
								        <h3>Thumbnail label</h3>
								        <p>...</p>
								        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
								      </div>
								    </div>
								  </div>
						
								</div>
						
					</div>
				</div>
		</div>
  
		
		 
 




<div class="footer">
	<div class="container">
	   <div style="color:#CCCCCC; float: left;">
	  		<img src="./Public/img/logo.png"/ style="width:60px;height:60px;padding: 10px; ">
	  	</div>
	  	<div style="">
	  		<ul style="list-style: none; padding-left: 20px;"> 
	  	   	 <li class="footeritem"><a href="">网站协议</a></li>
	  	   	 <li class="footeritem"><a href="">网站协议</a></li>
	  	   	  <li class="footeritem"><a href="">建议反馈</a></li>
	  	   	  <li class="footeritem"><a href="">关于我们</a></li>
	  	   	  <li class="footeritem"><a href="">合作洽谈</a></li>
	  	   </ul>
     	</div>
     	<span class="pull-right" style="font-size: 10px;padding-top: 10px;">京ICP 2343234号<br /></span>
  	
  	<div class="clearfix" style="border-bottom: 1px solid #666666; padding: 2px;"></div>
  	<div style="font-size: 10px; padding-top: 10px; padding-bottom: 10px;">Copyright © 2017-2020 www.coola.com</div>
</div>



</body>
</html>