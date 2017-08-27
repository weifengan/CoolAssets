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
 
 
 
   <form action="login.php" method="post">
            <div class="mycenter">
            <div class="mysign">
                <div class="col-lg-11 text-center text-info">
                    <h2>用户登录</h2>
                </div>
                <div class="col-lg-10">
                    <input type="text" class="form-control" name="username" placeholder="请输入账户名" required autofocus/>
                </div>
                <div class="col-lg-10"></div>
                <div class="col-lg-10">
                    <input type="password" class="form-control" name="password" placeholder="请输入密码" required autofocus/>
                </div>
                <div class="col-lg-10"></div>
                <div class="col-lg-10 mycheckbox checkbox">
                    <input type="checkbox" class="col-lg-12">记住密码</input>
                </div>
                <div class="pull-right"><a href="?m=Login&a=reg">立即注册</a></div>
                <div style="padding-left: 20px;">
                    <button type="button" class="btn btn-success col-lg-12">登录</button>
                </div>
            </div>
        </div>
        </form>

<br  />
<br />
 <br  />
<br />
 
 <br  />
<br />

<br  />
<br />
  <br  />
<br />


 
 
 




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