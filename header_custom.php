<link rel="stylesheet" type="text/css" href="header_custom.css">
<div class="content_full">
	<div class="header">
		<nav class="navbar navbar-inverse" id="conect">
	  		<div class="container-fluid">
	    		<div class="navbar-header">
	      			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        		<span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>                        
			      	</button>
	      			<button class="btn hotline">
	      				<div class="reng">
		      				<span class="glyphicon glyphicon-earphone"></span>
		      			</div>
		      			<a href="#">HOTLINE : 19001989</a>
	      			</button>
	    		</div>
			    <div class="collapse navbar-collapse" id="myNavbar">
			      	<ul class="nav navbar-nav navbar-right">
			      		<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Giỏ hàng</a></li>
			      		<?php if(isset($_SESSION["username"])): ?>
			      			 
			      			<li class="dropdown ">
							  <a href="" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION["username"]; ?>
							  <span class="caret"></span></a>
							  <ul class="dropdown-menu">
							    <li><a href="#">Lịch sử đặt hàng</a></li>
							    <li><a href="#">Thông tin tài khoản</a></li>
							    <hr style="margin: 0">
							    <li><a href="mobie_web.php?logout='1'">Đăng xuất</a></li>
							  </ul>
						</li>
			      		<?php else: ?>
			      			<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Đăng kí</a></li>
			      			<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
			      		<?php endif; ?>
			        	
			      	</ul>
			    </div>
	  		</div>
		</nav>
		<nav class="navbar" id="menu">
	  		<div class="container-fluid">
	    		<div class="navbar-header">
	      			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myMenubar">
		        		<span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>                        
			      	</button>
	      				<a href="#">Mobie</a>
	    		</div>
			    <div class="collapse navbar-collapse" id="myMenubar">
			      	<ul class="nav navbar-nav">
			        	<li class="active"><a href="mobie_web.php">TRANG CHỦ</a></li>
			        	<li><a href="#">VỀ CHÚNG TÔI</a></li>
			        	<li><a href="#">SẢN PHẨM</a></li>
			        	<li><a href="#">TIN TỨC</a></li>
			        	<li><a href="#">LIÊN HỆ</a></li>
			      	</ul>
			      	<div class="sreach">
			     	 	<input type="text" placeholder="Search..">
			     	 	<div class="search_icon" style="display: inline-block; "><span class="glyphicon glyphicon-search" style="background-color: "></span></div>
			     	</div>
			    </div>
	  		</div>
		</nav>
	</div>
</div>