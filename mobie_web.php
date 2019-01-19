<?php include('server/server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>pandala</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="mobie.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="background-color: #f5f5f5;">
	<?php include('header_custom.php'); ?>
	<div class="container" style="margin-top: 50px;">
			<div class="row">
				<div class="col-sm-4" style="width: 320px;padding: 0">
				  	<div class="list_product">
				  		<ul class="nav flex-column">
				  			<li class="list"><a href="#" style="padding: 15px;"><span class="glyphicon glyphicon-list-alt" style="font-size: 20px;"></span>	<b>DANH MỤC</b></a></li>
				  			<li  class="active"><a href="#">
				  				<span class="glyphicon glyphicon-phone"></span> ĐIỆN THOẠI <span class="glyphicon glyphicon-triangle-right"></span></a>
				  				<ul>
				  					<li>
				  						<!-- <div class="">
				  							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myListPro">
								        		<span class="icon-bar"></span>
										        <span class="icon-bar"></span>
										        <span class="icon-bar"></span>                        
				      						</button>
				  						</div>
				  						<div class="collapse navbar-collapse" id="myNavbar">
				      						<ul class="nav navbar-nav navbar-right">
									      		<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Giỏ hàng</a></li>
									      		<li><a href="#"><span class="glyphicon glyphicon-user"></span> Đăng kí</a></li>
									        	<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
									      	</ul>
									    </div> -->
				  					</li>
				  				</ul>
				  			</li>
				  			<li><a href="#"><span class="glyphicon glyphicon-headphones"></span> MÁY NGHE NHẠC <span class="glyphicon glyphicon-triangle-right"></span></a></li>
				  			<li><a href="#"><span class="glyphicon glyphicon-modal-window"></span> MÁY TÍNH BẢNG <span class="glyphicon glyphicon-triangle-right"></span></a></li>
				  			<li><a href="#"><span class="glyphicon glyphicon-blackboard"></span> LAPTOP <span class="glyphicon glyphicon-triangle-right"></span></a></li>
				  			<li><a href="#"><span class="glyphicon glyphicon-sound-dolby"></span> PHỤ KIỆN <span class="glyphicon glyphicon-triangle-right"></span></a></li>
				  		</ul>
				  	</div>
	  			</div>
	  			<div class="col-sm-8" style="height: 375px;padding: 0;margin-left: 15px;width: 830px;">
	    			<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 375px;">
	      			<!-- Indicators -->
	      				<ol class="carousel-indicators">
					        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					        <li data-target="#myCarousel" data-slide-to="1"></li>
					        <li data-target="#myCarousel" data-slide-to="2"></li>
					        <li data-target="#myCarousel" data-slide-to="3"></li>
					    </ol>
							<!-- Wrapper for slides -->
					    <div class="carousel-inner" role="listbox"  style="height:375px;">
					        <div class="item active"  style="height:375px;">
					          	<img src="img/img_slideshow/slide1.jpg" alt="Image" style="height:375px;">   
					        </div>
							<div class="item"  style="height:375px">
					        	<img src="img/img_slideshow/slide2.jpg" alt="Image"  style="height:375px">
					        </div>
					        <div class="item"  style="height:375px;">
					        	<img src="img/img_slideshow/slide3.jpg" alt="Image"  style="height:375px">
					        </div>
					        <div class="item"  style="height:375px;">
					        	<img src="img/img_slideshow/slide4.jpg" alt="Image"  style="height:375px">      
					        </div>
					    </div>
	    			</div>
	 			</div>
	 
			</div>
			<hr>
	</div>
	<div class="container">    
	  	<br>
	  	<div class="row">
	  		<div class="name_box">

	  			<div class="row" style="margin-bottom: 40px;/* #d9d9d9*/;position: relative;background-color: white;">
	  				<h3 style="color: white; margin:0px;padding: 8px;width:205px;background-color:/* #0099cc*//*#d74b33*/#d9563f;border-radius: 5px 0 0 0;">SALE MỖI TUẦN</h3>
	  				<div class="header_box" style="position: absolute;top: 100%;left: 0px;height: 35px;width: 205px;background:/*#0086b3*/ #d5442a;border-radius: 0 0 0 5px">
	  				</div>
	  				<div class="square" style="position: absolute;top:100%;left: 205px;width: 19px;height: 35px;overflow: hidden;">
	  					<div style="position:absolute;top:-18px;left:-13px;background-color:/*#00ace6*/ #dd6955;width: 25px;height: 50px;transform: rotate(-155deg);"></div>
	  				</div>
	  			</div>
	  		</div>
	  		<br>
		  	<div class="sale" style="background-color: white;height: 700px;width: auto;">
			  	<!-- <div class="row row1" style="background-color: white;" > -->
				    <div class="col-sm-2  text-center">
				    	<a href="#" style="text-decoration: none;">
					    	<div class="sale1">
					    		<div class="sale_img">
					      			<img src="img/img_lap/asus_sale.jpg" class="img-responsive" style="width:100%" alt="Image">
					      		</div>
					      		<p>Laptop Asus X453MA-WX268D</p>
					      		<div class="price">
					      			<div class="price_sale">11.070.000 <sup>đ</sup></div>
					      			<div class="price_old"><del>12.300.000</del><sup>đ</sup></div>
					      		</div>
					      		<div class="detail">
					      			<span class="glyphicon glyphicon-shopping-cart"></span>
					      			<div class="detail1">
					      				<span class="glyphicon glyphicon-shopping-cart"></span> MUA NGAY
					      			</div>
					      			MUA NGAY
					      		</div>
					      		
					      		<div class="like">
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
					      		</div>
					      		<!-- <span class="promotion">1%</span> -->
					      	</div>
					    </a>
				    </div>
				    <div class="col-sm-2 text-center"> 
				    	<a href="#"  style="text-decoration: none;">
					     	<div class="sale1">
					    		<div class="sale_img">
					      			<img src="img/img_lap/msi_sale.png" class="img-responsive" style="width:100%" alt="Image">
					      		</div>
					      		<p>Laptop Asus G55JK-CN208D</p>
					      		<div class="price">
					      			<div class="price_sale">12.001.500 <sup>đ</sup></div>
					      			<div class="price_old"><del>13.335.000</del><sup>đ</sup></div>
					      		</div>
					      		<div class="detail">
					      			<span class="glyphicon glyphicon-shopping-cart"></span><div class="detail1"><span class="glyphicon glyphicon-shopping-cart"></span> MUA NGAY</div>
					      			MUA NGAY
					      		</div>
					      		
					      		<div class="like">
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
					      		</div>
					      		<!-- <span class="promotion">1%</span> -->
					      	</div>
					    </a>   
				    </div>
				    <div class="col-sm-2 text-center">
				    	<a href="#"  style="text-decoration: none;">
					    	 <div class="sale1">
					    		<div class="sale_img">
					      			<img src="img/img_lap/asus_sale1.jpg" class="img-responsive" style="width:100%" alt="Image">
					      		</div>
					      		<p>Laptop Asus X435MA-WX268D</p>
					      		<div class="price">
					      			<div class="price_sale">10.050.000 <sup>đ</sup></div>
					      			<div class="price_old"><del>12.000.000</del><sup>đ</sup></div>
					      		</div>
					      		<div class="detail">
					      			<span class="glyphicon glyphicon-shopping-cart"></span><div class="detail1"><span class="glyphicon glyphicon-shopping-cart"></span> MUA NGAY</div>
					      			MUA NGAY
					      		</div>
					      		
					      		<div class="like">
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
					      		</div>
					      		<!-- <span class="promotion">1%</span> -->
					      	</div> 
					    </a>  
				    </div>
				    <div class="col-sm-2 text-center>
				    	<a href="#"  style="text-decoration: none;">
					      	<div class="sale1">
					    		<div class="sale_img">
					      			<img src="img/img_lap/macbook_sale.png" class="img-responsive" style="width:100%" alt="Image">
					      		</div>
					      		<p>Laptop Apple Macbook Air MVJE2</p>
					      		<div class="price">
					      			<div class="price_sale">15.300.000 <sup>đ</sup></div>
					      			<div class="price_old"><del>17.000.000</del><sup>đ</sup></div>
					      		</div>
					      		<div class="detail">
					      			<span class="glyphicon glyphicon-shopping-cart"></span><div class="detail1"><span class="glyphicon glyphicon-shopping-cart"></span> MUA NGAY</div>
					      			MUA NGAY
					      		</div>
					      		
					      		<div class="like">
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
					      		</div>
					      		<!-- <span class="promotion">1%</span> -->
					      	</div>   
						</a>
					</div>
					<div class="col-sm-2 text-center" style="margin: 0;">
				    	<a href="#"  style="text-decoration: none;">
					      	<div class="sale1">
					    		<div class="sale_img">
					      			<img src="img/img_lap/macbook_sale.png" class="img-responsive" style="width:100%" alt="Image">
					      		</div>
					      		<p>Laptop Apple Macbook Air MVJE2</p>
					      		<div class="price">
					      			<div class="price_sale">15.300.000 <sup>đ</sup></div>
					      			<div class="price_old"><del>17.000.000</del><sup>đ</sup></div>
					      		</div>
					      		<div class="detail">
					      			<span class="glyphicon glyphicon-shopping-cart"></span><div class="detail1"><span class="glyphicon glyphicon-shopping-cart"></span> MUA NGAY</div>
					      			MUA NGAY
					      		</div>
					      		
					      		<div class="like">
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
					      		</div>
					      		<!-- <span class="promotion">1%</span> -->
					      	</div>   
						</a>
					</div>
		  		<!-- </div> -->
		  		<!-- <div class="row row2" style="background-color: white;"> -->
		  			<div class="col-sm-2  text-center">
		  				<a href="#"  style="text-decoration: none;">
					    	<div class="sale1">
					    		<div class="sale_img">
					      			<img src="img/img_tablet/ipad_sale.png" class="img-responsive" style="width:100%" alt="Image">
					      		</div>
					      		<p>Apple Ipad Mini 3 Retina</p>
					      		<div class="price">
					      			<div class="price_sale">13.360.000 <sup>đ</sup></div>
					      			<div class="price_old"><del>16.700.000</del><sup>đ</sup></div>
					      		</div>
					      		<div class="detail">
					      			<span class="glyphicon glyphicon-shopping-cart"></span><div class="detail1"><span class="glyphicon glyphicon-shopping-cart"></span> MUA NGAY</div>
					      			MUA NGAY
					      		</div>
					      		
					      		<div class="like">
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
					      		</div>
					      		<!-- <span class="promotion">1%</span> -->
					      	</div>
					    </a>
		  			</div>
		  			<div class="col-sm-2  text-center">
		  				<a href="#"  style="text-decoration: none;">
					    	<div class="sale1">
					    		<div class="sale_img">
					      			<img src="img/img_phone/ss_galaxy_sale.png" class="img-responsive" style="width:100%" alt="Image">
					      		</div>
					      		<p>Samsung Galaxy Note 3 NEO</p>
					      		<div class="price">
					      			<div class="price_sale">7.410.000 <sup>đ</sup></div>
					      			<div class="price_old"><del>7.039.000</del><sup>đ</sup></div>
					      		</div>
					      		<div class="detail">
					      			<span class="glyphicon glyphicon-shopping-cart"></span><div class="detail1"><span class="glyphicon glyphicon-shopping-cart"></span> MUA NGAY</div>
					      			MUA NGAY
					      		</div>
					      		
					      		<div class="like">
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
					      		</div>
					      		<!-- <span class="promotion">1%</span> -->
					      	</div>
					    </a>
		  			</div>
		  			<div class="col-sm-2  text-center">
		  				<a href="#"  style="text-decoration: none;">
					    	<div class="sale1">
					    		<div class="sale_img">
					      			<img src="img/img_phone/lumia_sale.png" class="img-responsive" style="width:100%" alt="Image">
					      		</div>
					      		<p>Nokia Lumia 630</p>
					      		<div class="price">
					      			<div class="price_sale">4.390.000 <sup>đ</sup></div>
					      			<div class="price_old"><del>2.195.000</del><sup>đ</sup></div>
					      		</div>
					      		<div class="detail">
					      			<span class="glyphicon glyphicon-shopping-cart"></span><div class="detail1"><span class="glyphicon glyphicon-shopping-cart"></span> MUA NGAY</div>
					      			MUA NGAY
					      		</div>
					      		
					      		<div class="like">
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
					      		</div>
					      		<!-- <span class="promotion">1%</span> -->
					      	</div>
					    </a>
		  			</div>
		  			<div class="col-sm-2  text-center">
		  				<a href="#"  style="text-decoration: none;">
					    	<div class="sale1">
					    		<div class="sale_img">
					      			<img src="img/img_phone/sony_sale.png" class="img-responsive" style="width:100%" alt="Image">
					      		</div>
					      		<p>Sony Xperia ZR</p>
					      		<div class="price">
					      			<div class="price_sale">7.950.000 <sup>đ</sup></div>
					      			<div class="price_old"><del>7.552.000</del><sup>đ</sup></div>
					      		</div>
					      		<div class="detail">
					      			<span class="glyphicon glyphicon-shopping-cart"></span><div class="detail1"><span class="glyphicon glyphicon-shopping-cart"></span> MUA NGAY</div>
					      			MUA NGAY
					      		</div>
					      		
					      		<div class="like">
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
					      		</div>
					      		<!-- <span class="promotion">1%</span> -->
					      	</div>
					    </a>
		  			</div>
		  			<div class="col-sm-2  text-center" style="margin: 0;">
		  				<a href="#"  style="text-decoration: none;">
					    	<div class="sale1">
					    		<div class="sale_img">
					      			<img src="img/img_phone/sony_sale.png" class="img-responsive" style="width:100%" alt="Image">
					      		</div>
					      		<p>Sony Xperia ZR</p>
					      		<div class="price">
					      			<div class="price_sale">7.950.000 <sup>đ</sup></div>
					      			<div class="price_old"><del>7.552.000</del><sup>đ</sup></div>
					      		</div>
					      		<div class="detail">
					      			<span class="glyphicon glyphicon-shopping-cart"></span><div class="detail1"><span class="glyphicon glyphicon-shopping-cart"></span> MUA NGAY</div>
					      			MUA NGAY
					      		</div>
					      		
					      		<div class="like">
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
					      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
					      		</div>
					      		<!-- <span class="promotion">1%</span> -->
					      	</div>
					    </a>
		  			</div>
		  		<!-- </div> -->
		  	</div>
	  	<hr>
		</div>
	</div>
	<div class="container text-center phone_product">    
		<div class="row">
	  		<div class="name_box">
	  			<div class="row" style="margin-bottom: 40px;position: relative;background-color: white;">
	  				<h3 style="color: white; margin:0px;width: 205px;padding: 8px;background-color: #0099cc/*#d74b33*/;border-radius: 5px 5px 0 0;">ĐIỆN THOẠI</h3>
	  				<div class="header_box" style="position: absolute;top: 100%;left: 0px;height: 35px;width: 205px;background:#0086b3 /*#d5442a*/;border-radius: 0 0 0 5px">
	  				</div>
	  				<div class="square" style="position: absolute;top:100%;left: 205px;width: 19px;height: 35px;overflow: hidden;">
	  					<div style="position:absolute;top:-18px;left:-13px;background-color:#00ace6 /*#d9563f*/;width: 25px;height: 50px;transform: rotate(-155deg);"></div>
	  				</div>
	  			</div>
	  		</div>
	  	</div>
		<br>
		<div class="row">
		  	<div class="list_company_phone">
		  		<div class="row" style="height: 50px;">
		  			<div class="col-sm-2 well" style="padding-top: 3px;">
		  				<a href="#"><img src="img/img_logo/ss_logo.jpg" style="height: 40px;"></a>
		  			</div>
		  			<div class="col-sm-2 well" style="padding: 1px;">
		  				<a href="#"><img src="img/img_logo/iphone_logo.jpg" style="height: 40px;"></a>
		  			</div>
		  			<div class="col-sm-2 well" style="padding-top: 3px;">
		  				<a href="#"><img src="img/img_logo/xiaomi_logo.png"></a>
		  			</div>
		  			<div class="col-sm-2 well" style="padding-top: 2px;">
		  				<a href="#"><img src="img/img_logo/oppo_logo.jpg"></a>
		  			</div>
		  			<div class="col-sm-2 well" style="padding: 1px; margin-right: 0;">
		  				<a href="#"><img src="img/img_logo/nokia_logo.jpg"></a>
		  			</div>
		  		</div>
		  		<div class="row" style="height: 60px;">
		  			<div class="col-sm-2 well" style="padding-top: 3px;">
		  				<a href="#"><img src="img/img_logo/huawei_logo.jpg" style="height: 40px;"></a>
		  			</div>
		  			<div class="col-sm-2 well" style="padding: 1px;">
		  				<a href="#"><img src="img/img_logo/vivo_logo.jpg" style="height: 40px;"></a>
		  			</div>
		  			<div class="col-sm-2 well" style="padding-top: 3px;">
		  				<a href="#"><img src="img/img_logo/mobell.logo.jpg"></a>
		  			</div>
		  			<div class="col-sm-2 well" style="padding-top: 2px;">
		  				<a href="#"><img src="img/img_logo/htc_logo.jpg"></a>
		  			</div>
		  			<div class="col-sm-2 well" style="padding: 1px;margin-right: 0">
		  				<a href="#"><img src="img/img_logo/mobistar_logo.png"></a>
		  			</div>
		  		</div>
		  	</div>
		</div>
		<br>
		<div class="row" id="phone">
		  	<div class="phone_box">
		  		<div class="row">
				    <div class="col-sm-2 text-center">
				    	<div class="phone">
				    		<div class="phone_img">
				      			<img src="img/img_phone/ss_galaxy_note9.png" class="img-responsive" style="width:100%" alt="Image">
				      		</div>
				      		<p class="text-center"><b>Samsung Galaxy Note 9</b></p>
				      		<div class="price">
				      			<!-- <div class="price_sale"><b>15.300.000<sup>đ</sup></b></div> -->
				      			<div class="price_old" style="color: red; font-size: 17px;"><b>22.990.000<sup>đ</sup></b></div>
				      		</div>
				      		<div class="like">
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
				      		</div>
				      		<hr style="margin:8px 0 0 0;">
				      		<div class="cart">
				      			<span class="glyphicon glyphicon-shopping-cart"></span> 
				      			<p>THÊM VÀO GIỎ HÀNG</p>
				      		</div>
						</div>   
				    </div>

				    <div class="col-sm-2"> 
				    	<div class="phone">
				    		<div class="phone_img">
				      			<img src="img/img_phone/ss_galaxy_s9_plus.png" class="img-responsive" style="width:100%" alt="Image">
				      		</div>
				      		<p class="text-center"><b>Samsung Galaxy S9 Plus</b></p>
				      		<div class="price">
				      			<!-- <div class="price_sale"><b>15.300.000<sup>đ</sup></b></div>
				      			<div class="price_old"><del>17.000.000</del><sup>đ</sup></div> -->
				      			<div class="price_old" style="color: red; font-size: 17px;"><b>27.990.000<sup>đ</sup></b></div>
				      		</div>
				      		<div class="like">
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
				      		</div>
				      		<hr style="margin:8px 0 0 0;">
				      		<div class="cart">
				      			<span class="glyphicon glyphicon-shopping-cart"></span> 
				      			<p>THÊM VÀO GIỎ HÀNG</p>
				      		</div>
						</div>      
				    </div>
				    <div class="col-sm-2"> 
				     <div class="phone">
				    		<div class="phone_img">
				      			<img src="img/img_phone/iphone_xs.png" class="img-responsive" style="width:100%" alt="Image">
				      		</div>
				      		<p class="text-center"><b>Iphone XS</b></p>
				      		<div class="price">
				      			<!-- <div class="price_sale"><b>15.300.000<sup>đ</sup></b></div>
				      			<div class="price_old"><del>17.000.000</del><sup>đ</sup></div> -->
				      			<div class="price_old" style="color: red; font-size: 17px;"><b>33.990.000<sup>đ</sup></b></div>
				      		</div>
				      		<div class="like">
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
				      		</div>
				      		<hr style="margin:8px 0 0 0;">
				      		<div class="cart">
				      			<span class="glyphicon glyphicon-shopping-cart"></span> 
				      			<p>THÊM VÀO GIỎ HÀNG</p>
				      		</div>
						</div>   
				    </div>
				    <div class="col-sm-2"> 
				     <div class="phone">
				    		<div class="phone_img">
				      			<img src="img/img_phone/iphone_x.png" class="img-responsive" style="width:100%" alt="Image">
				      		</div>
				      		<p class="text-center"><b>Samsung Galaxy Note 9</b></p>
				      		<div class="price">
				      			<!-- <div class="price_sale"><b>15.300.000<sup>đ</sup></b></div>
				      			<div class="price_old"><del>17.000.000</del><sup>đ</sup></div> -->
				      			<div class="price_old" style="color: red; font-size: 17px;"><b>31.990.000<sup>đ</sup></b></div>
				      		</div>
				      		<div class="like">
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
				      		</div>
				      		<hr style="margin:8px 0 0 0;">
				      		<div class="cart">
				      			<span class="glyphicon glyphicon-shopping-cart"></span> 
				      			<p>THÊM VÀO GIỎ HÀNG</p>
				      		</div>
						</div>   
				    </div> 
				    <div class="col-sm-2" style="margin-right: 0;"> 
				      <div class="phone">
				    		<div class="phone_img">
				      			<img src="img/img_phone/oppo_a7.png" class="img-responsive" style="width:100%" alt="Image">
				      		</div>
				      		<p class="text-center"><b>Samsung Galaxy Note 9</b></p>
				      		<div class="price">
				      			<!-- <div class="price_sale"><b>15.300.000<sup>đ</sup></b></div>
				      			<div class="price_old"><del>17.000.000</del><sup>đ</sup></div> -->
				      			<div class="price_old" style="color: red; font-size: 17px;"><b>22.990.000<sup>đ</sup></b></div>
				      		</div>
				      		<div class="like">
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
				      		</div>
				      		<hr style="margin:8px 0 0 0;">
				      		<div class="cart">
				      			<span class="glyphicon glyphicon-shopping-cart"></span> 
				      			<p>THÊM VÀO GIỎ HÀNG</p>
				      		</div>
						</div>   
				    </div>      
				</div>
			</div> 
		</div>
	</div>
	<div class="container text-center megaphone_product">    
		<div class="row">
	  		<div class="name_box">
	  			<div class="row" style="margin-bottom: 40px;border-bottom:1px solid #d9d9d9;position: relative;">
	  				<h3 style="color: white; margin-bottom:0px;width: 205px;padding: 8px;background-color: #0099cc/*#d74b33*/;border-radius: 5px 5px 0 0;">LOA</h3>
	  				<div class="header_box" style="position: absolute;top: 100%;left: 0px;height: 35px;width: 205px;background:#0086b3 /*#d5442a*/;border-radius: 0 0 0 5px">
	  				</div>
	  				<div class="square" style="position: absolute;top:100%;left: 205px;width: 19px;height: 35px;overflow: hidden;">
	  					<div style="position:absolute;top:-18px;left:-13px;background-color:#00ace6 /*#d9563f*/;width: 25px;height: 50px;transform: rotate(-155deg);"></div>
	  				</div>
	  			</div>
	  		</div>
	  	</div>
		<br>
		<div class="row">
		  	<div class="list_company_megaphone">
		  		<div class="row">
		  			<div class="col-sm-2 well" style="padding-top: 3px;">
		  				<a href="#"><img src="img/img_logo/logi_logo.jpg" style="height: 40px;"></a>
		  			</div>
		  			<div class="col-sm-2 well" style="padding: 5px;">
		  				<a href="#"><img src="img/img_logo/soundmax_logo.jpg" style="height: 40px;"></a>
		  			</div>
		  			<div class="col-sm-2 well" style="padding-top: 8px;">
		  				<a href="#"><img src="img/img_logo/bonoboss_logo.jpg"></a>
		  			</div>
		  			<div class="col-sm-2 well" style="padding-top: 3px;">
		  				<a href="#"><img src="img/img_logo/ss_logo.jpg"></a>
		  			</div>
		  			<div class="col-sm-2 well" style="padding: 1px;margin-right: 0">
		  				<a href="#"><img src="img/img_logo/sony_logo.png"></a>
		  			</div>
		  		</div>
		  	</div>
		</div>
		<br>
		<div class="row" id="megaphone">
		  	<div class="megaphone_box">
		  		<div class="row">
				    <div class="col-sm-2 text-center">
				    	<div class="megaphone">
				    		<div class="megaphone_img">
				      			<img src="img/img_headphone/loa_bonoboss.png" class="img-responsive" style="width:100%" alt="Image">
				      		</div>
				      		<p class="text-center"><b>Loa vi tính Bonoboss BOS-BT500</b></p>
				      		<div class="price">
				      			<!-- <div class="price_sale"><b>15.300.000<sup>đ</sup></b></div> -->
				      			<div class="price_old" style="color: red; font-size: 17px;"><b>223.000<sup>đ</sup></b></div>
				      		</div>
				      		<div class="like">
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
				      		</div>
				      		<hr style="margin:8px 0 0 0;">
				      		<div class="cart">
				      			<span class="glyphicon glyphicon-shopping-cart"></span> 
				      			<p>THÊM VÀO GIỎ HÀNG</p>
				      		</div>
						</div>   
				    </div>

				    <div class="col-sm-2"> 
				    	<div class="megaphone">
				    		<div class="megaphone_img">
				      			<img src="img/img_headphone/loa_soundmax.png" class="img-responsive" style="width:100%" alt="Image">
				      		</div>
				      		<p class="text-center"><b>Loa vi tính Soundmax A-130</b></p>
				      		<div class="price">
				      			<!-- <div class="price_sale"><b>15.300.000<sup>đ</sup></b></div>
				      			<div class="price_old"><del>17.000.000</del><sup>đ</sup></div> -->
				      			<div class="price_old" style="color: red; font-size: 17px;"><b>245.000<sup>đ</sup></b></div>
				      		</div>
				      		<div class="like">
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
				      		</div>
				      		<hr style="margin:8px 0 0 0;">
				      		<div class="cart">
				      			<span class="glyphicon glyphicon-shopping-cart"></span> 
				      			<p>THÊM VÀO GIỎ HÀNG</p>
				      		</div>
						</div>      
				    </div>
				    <div class="col-sm-2"> 
				     <div class="megaphone">
				    		<div class="megaphone_img">
				      			<img src="img/img_headphone/loa_logi.png" class="img-responsive" style="width:100%" alt="Image">
				      		</div>
				      		<p class="text-center"><b>Loa Bluetooth Logitech G560 2.1</b></p>
				      		<div class="price">
				      			<!-- <div class="price_sale"><b>15.300.000<sup>đ</sup></b></div>
				      			<div class="price_old"><del>17.000.000</del><sup>đ</sup></div> -->
				      			<div class="price_old" style="color: red; font-size: 17px;"><b>5.499.000<sup>đ</sup></b></div>
				      		</div>
				      		<div class="like">
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
				      		</div>
				      		<hr style="margin:8px 0 0 0;">
				      		<div class="cart">
				      			<span class="glyphicon glyphicon-shopping-cart"></span> 
				      			<p>THÊM VÀO GIỎ HÀNG</p>
				      		</div>
						</div>   
				    </div>
				    <div class="col-sm-2"> 
				     <div class="megaphone">
				    		<div class="megaphone_img">
				      			<img src="img/img_headphone/loa_ss.png" class="img-responsive" style="width:100%" alt="Image">
				      		</div>
				      		<p class="text-center"><b>Loa không dây 360 Samsung WAM1500</b></p>
				      		<div class="price">
				      			<!-- <div class="price_sale"><b>15.300.000<sup>đ</sup></b></div>
				      			<div class="price_old"><del>17.000.000</del><sup>đ</sup></div> -->
				      			<div class="price_old" style="color: red; font-size: 17px;"><b>1.890.000<sup>đ</sup></b></div>
				      		</div>
				      		<div class="like">
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
				      		</div>
				      		<hr style="margin:8px 0 0 0;">
				      		<div class="cart">
				      			<span class="glyphicon glyphicon-shopping-cart"></span> 
				      			<p>THÊM VÀO GIỎ HÀNG</p>
				      		</div>
						</div>   
				    </div> 
				    <div class="col-sm-2" style="margin-right: 0;"> 
				      <div class="megaphone">
				    		<div class="megaphone_img">
				      			<img src="img/img_headphone/loa_sony.png" class="img-responsive" style="width:100%" alt="Image">
				      		</div>
				      		<p class="text-center"><b>Loa Bluetooth Super MS2025</b></p>
				      		<div class="price">
				      			<!-- <div class="price_sale"><b>15.300.000<sup>đ</sup></b></div>
				      			<div class="price_old"><del>17.000.000</del><sup>đ</sup></div> -->
				      			<div class="price_old" style="color: red; font-size: 17px;"><b>210.000<sup>đ</sup></b></div>
				      		</div>
				      		<div class="like">
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
				      		</div>
				      		<hr style="margin:8px 0 0 0;">
				      		<div class="cart">
				      			<span class="glyphicon glyphicon-shopping-cart"></span> 
				      			<p>THÊM VÀO GIỎ HÀNG</p>
				      		</div>
						</div>   
				    </div>      
				</div>
			</div> 
		</div>
	</div>
	<div class="container text-center tablet_product">    
		<div class="row">
	  		<div class="name_box">
	  			<div class="row" style="margin-bottom: 40px;border-bottom:1px solid #d9d9d9;position: relative;">
	  				<h3 style="color: white; margin-bottom:0px;width: 215px;padding: 8px;background-color: #0099cc/*#d74b33*/;border-radius: 5px 5px 0 0;">MÁY TÍNH BẢNG</h3>
	  				<div class="header_box" style="position: absolute;top: 100%;left: 0px;height: 35px;width: 215px;background:#0086b3 /*#d5442a*/;border-radius: 0 0 0 5px">
	  				</div>
	  				<div class="square" style="position: absolute;top:100%;left: 215px;width: 19px;height: 35px;overflow: hidden;">
	  					<div style="position:absolute;top:-18px;left:-13px;background-color:#00ace6 /*#d9563f*/;width: 25px;height: 50px;transform: rotate(-155deg);"></div>
	  				</div>
	  			</div>
	  		</div>
	  	</div>
		<br>
		<div class="row">
		  	<div class="list_company_tablet">
		  		<div class="row">
		  			<div class="col-sm-2 well" style="padding-top: 3px;">
		  				<a href="#"><img src="img/img_logo/iphone_logo.jpg" style="height: 40px;"></a>
		  			</div>
		  			<div class="col-sm-2 well" style="padding: 5px;">
		  				<a href="#"><img src="img/img_logo/ss_logo.jpg" style="height: 40px;"></a>
		  			</div>
		  			<div class="col-sm-2 well" style="padding-top: 4px;">
		  				<a href="#"><img src="img/img_logo/huawei_logo.jpg"></a>
		  			</div>
		  			<div class="col-sm-2 well" style="padding-top: 2px;">
		  				<a href="#"><img src="img/img_logo/lenovo_logo.jpg"></a>
		  			</div>
		  			<div class="col-sm-2 well" style="padding: 1px;margin-right: 0">
		  				<a href="#"><img src="img/img_logo/mobell.logo.jpg"></a>
		  			</div>
		  		</div>
		  	</div>
		</div>
		<br>
		<div class="row" id="tablet">
		  	<div class="tablet_box">
		  		<div class="row">
				    <div class="col-sm-2 text-center">
				    	<div class="tablet">
				    		<div class="tablet_img">
				      			<img src="img/img_tablet/lenovo_tablet.png" class="img-responsive" style="width:100%" alt="Image">
				      		</div>
				      		<p class="text-center"><b>Lenovo Tab TB-8504X</b></p>
				      		<div class="price">
				      			<!-- <div class="price_sale"><b>15.300.000<sup>đ</sup></b></div> -->
				      			<div class="price_old" style="color: red; font-size: 17px;"><b>3.690.000<sup>đ</sup></b></div>
				      		</div>
				      		<div class="like">
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
				      		</div>
				      		<hr style="margin:8px 0 0 0;">
				      		<div class="cart">
				      			<span class="glyphicon glyphicon-shopping-cart"></span> 
				      			<p>THÊM VÀO GIỎ HÀNG</p>
				      		</div>
						</div>   
				    </div>

				    <div class="col-sm-2"> 
				    	<div class="tablet">
				    		<div class="tablet_img">
				      			<img src="img/img_tablet/ipad.jpg" class="img-responsive" style="width:100%" alt="Image">
				      		</div>
				      		<p class="text-center"><b>Ipad Pro</b></p>
				      		<div class="price">
				      			<!-- <div class="price_sale"><b>15.300.000<sup>đ</sup></b></div>
				      			<div class="price_old"><del>17.000.000</del><sup>đ</sup></div> -->
				      			<div class="price_old" style="color: red; font-size: 17px;"><b>19.990.000<sup>đ</sup></b></div>
				      		</div>
				      		<div class="like">
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
				      		</div>
				      		<hr style="margin:8px 0 0 0;">
				      		<div class="cart">
				      			<span class="glyphicon glyphicon-shopping-cart"></span> 
				      			<p>THÊM VÀO GIỎ HÀNG</p>
				      		</div>
						</div>      
				    </div>
				    <div class="col-sm-2"> 
				     <div class="tablet">
				    		<div class="tablet_img">
				      			<img src="img/img_tablet/huawei_tablet.jpg" class="img-responsive" style="width:100%" alt="Image">
				      		</div>
				      		<p class="text-center"><b>Huawei MediaPad M3</b></p>
				      		<div class="price">
				      			<!-- <div class="price_sale"><b>15.300.000<sup>đ</sup></b></div>
				      			<div class="price_old"><del>17.000.000</del><sup>đ</sup></div> -->
				      			<div class="price_old" style="color: red; font-size: 17px;"><b>5.990.000<sup>đ</sup></b></div>
				      		</div>
				      		<div class="like">
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
				      		</div>
				      		<hr style="margin:8px 0 0 0;">
				      		<div class="cart">
				      			<span class="glyphicon glyphicon-shopping-cart"></span> 
				      			<p>THÊM VÀO GIỎ HÀNG</p>
				      		</div>
						</div>   
				    </div>
				    <div class="col-sm-2"> 
				     <div class="tablet">
				    		<div class="tablet_img">
				      			<img src="img/img_tablet/lenovo_tablet.jpg" class="img-responsive" style="width:100%" alt="Image">
				      		</div>
				      		<p class="text-center"><b>Lenovo Tab TB-8504X</b></p>
				      		<div class="price">
				      			<!-- <div class="price_sale"><b>15.300.000<sup>đ</sup></b></div>
				      			<div class="price_old"><del>17.000.000</del><sup>đ</sup></div> -->
				      			<div class="price_old" style="color: red; font-size: 17px;"><b>3.690.000<sup>đ</sup></b></div>
				      		</div>
				      		<div class="like">
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
				      		</div>
				      		<hr style="margin:8px 0 0 0;">
				      		<div class="cart">
				      			<span class="glyphicon glyphicon-shopping-cart"></span> 
				      			<p>THÊM VÀO GIỎ HÀNG</p>
				      		</div>
						</div>   
				    </div> 
				    <div class="col-sm-2" style="margin-right: 0;"> 
				      <div class="tablet">
				    		<div class="tablet_img">
				      			<img src="img/img_tablet/mobell_tablet.png" class="img-responsive" style="width:100%" alt="Image">
				      		</div>
				      		<p class="text-center"><b>Mobell Tab 10</b></p>
				      		<div class="price">
				      			<!-- <div class="price_sale"><b>15.300.000<sup>đ</sup></b></div>
				      			<div class="price_old"><del>17.000.000</del><sup>đ</sup></div> -->
				      			<div class="price_old" style="color: red; font-size: 17px;"><b>2.990.000<sup>đ</sup></b></div>
				      		</div>
				      		<div class="like">
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
				      		</div>
				      		<hr style="margin:8px 0 0 0;">
				      		<div class="cart">
				      			<span class="glyphicon glyphicon-shopping-cart"></span> 
				      			<p>THÊM VÀO GIỎ HÀNG</p>
				      		</div>
						</div>   
				    </div>      
				</div>
			</div> 
		</div>
	</div>
	<div class="container text-center laptop_product">    
		<div class="row">
	  		<div class="name_box">
	  			<div class="row" style="margin-bottom: 40px;border-bottom:1px solid #d9d9d9;position: relative;">
	  				<h3 style="color: white; margin-bottom:0px;width: 205px;padding: 8px;background-color: #0099cc/*#d74b33*/;border-radius: 5px 5px 0 0;">LAPTOP</h3>
	  				<div class="header_box" style="position: absolute;top: 100%;left: 0px;height: 35px;width: 205px;background:#0086b3 /*#d5442a*/;border-radius: 0 0 0 5px">
	  				</div>
	  				<div class="square" style="position: absolute;top:100%;left: 205px;width: 19px;height: 35px;overflow: hidden;">
	  					<div style="position:absolute;top:-18px;left:-13px;background-color:#00ace6 /*#d9563f*/;width: 25px;height: 50px;transform: rotate(-155deg);"></div>
	  				</div>
	  			</div>
	  		</div>
	  	</div>
		<br>
		<div class="row">
		  	<div class="list_company_laptop">
		  		<div class="row">
		  			<div class="col-sm-2 well" style="padding-top: 3px;">
		  				<a href="#"><img src="img/img_logo/macbook_logo.png" style="height: 40px;"></a>
		  			</div>
		  			<div class="col-sm-2 well" style="padding: 5px;">
		  				<a href="#"><img src="img/img_logo/dell_logo.png" style="height: 40px;"></a>
		  			</div>
		  			<div class="col-sm-2 well" style="padding-top: 4px;">
		  				<a href="#"><img src="img/img_logo/asus_logo.png"></a>
		  			</div>
		  			<div class="col-sm-2 well" style="padding-top: 2px;">
		  				<a href="#"><img src="img/img_logo/hp_logo.png"></a>
		  			</div>
		  			<div class="col-sm-2 well" style="padding: 1px;margin-right: 0">
		  				<a href="#"><img src="img/img_logo/acer_logo.png"></a>
		  			</div>
		  		</div>
		  	</div>
		</div>
		<br>
		<div class="row" id="laptop">
		  	<div class="laptop_box">
		  		<div class="row">
				    <div class="col-sm-2 text-center">
				    	<div class="laptop">
				    		<div class="laptop_img">
				      			<img src="img/img_lap/macbook.png" class="img-responsive" style="width:100%" alt="Image">
				      		</div>
				      		<p class="text-center"><b>Appple Macbook Pro Touch MPXV2SA/A</b></p>
				      		<div class="price">
				      			<!-- <div class="price_sale"><b>15.300.000<sup>đ</sup></b></div> -->
				      			<div class="price_old" style="color: red; font-size: 17px;"><b>44.990.000<sup>đ</sup></b></div>
				      		</div>
				      		<div class="like">
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
				      		</div>
				      		<hr style="margin:8px 0 0 0;">
				      		<div class="cart">
				      			<span class="glyphicon glyphicon-shopping-cart"></span> 
				      			<p>THÊM VÀO GIỎ HÀNG</p>
				      		</div>
						</div>   
				    </div>

				    <div class="col-sm-2"> 
				    	<div class="laptop">
				    		<div class="laptop_img">
				      			<img src="img/img_lap/dell_lap.png" class="img-responsive" style="width:100%" alt="Image">
				      		</div>
				      		<p class="text-center"><b>Dell Inspiron 7373 i5 8250U</b></p>
				      		<div class="price">
				      			<!-- <div class="price_sale"><b>15.300.000<sup>đ</sup></b></div>
				      			<div class="price_old"><del>17.000.000</del><sup>đ</sup></div> -->
				      			<div class="price_old" style="color: red; font-size: 17px;"><b>26.990.000<sup>đ</sup></b></div>
				      		</div>
				      		<div class="like">
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
				      		</div>
				      		<hr style="margin:8px 0 0 0;">
				      		<div class="cart">
				      			<span class="glyphicon glyphicon-shopping-cart"></span> 
				      			<p>THÊM VÀO GIỎ HÀNG</p>
				      		</div>
						</div>      
				    </div>
				    <div class="col-sm-2"> 
				     <div class="laptop">
				    		<div class="laptop_img">
				      			<img src="img/img_lap/asus_lap.png" class="img-responsive" style="width:100%" alt="Image">
				      		</div>
				      		<p class="text-center"><b>Asus Vivobook S15 S530UA</b></p>
				      		<div class="price">
				      			<!-- <div class="price_sale"><b>15.300.000<sup>đ</sup></b></div>
				      			<div class="price_old"><del>17.000.000</del><sup>đ</sup></div> -->
				      			<div class="price_old" style="color: red; font-size: 17px;"><b>17.390.000<sup>đ</sup></b></div>
				      		</div>
				      		<div class="like">
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
				      		</div>
				      		<hr style="margin:8px 0 0 0;">
				      		<div class="cart">
				      			<span class="glyphicon glyphicon-shopping-cart"></span> 
				      			<p>THÊM VÀO GIỎ HÀNG</p>
				      		</div>
						</div>   
				    </div>
				    <div class="col-sm-2"> 
				     <div class="laptop">
				    		<div class="laptop_img">
				      			<img src="img/img_lap/hp_lap.png" class="img-responsive" style="width:100%" alt="Image">
				      		</div>
				      		<p class="text-center"><b>HP Envy 13 ah0025TU i5 8250U</b></p>
				      		<div class="price">
				      			<!-- <div class="price_sale"><b>15.300.000<sup>đ</sup></b></div>
				      			<div class="price_old"><del>17.000.000</del><sup>đ</sup></div> -->
				      			<div class="price_old" style="color: red; font-size: 17px;"><b>20.990.000<sup>đ</sup></b></div>
				      		</div>
				      		<div class="like">
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
				      		</div>
				      		<hr style="margin:8px 0 0 0;">
				      		<div class="cart">
				      			<span class="glyphicon glyphicon-shopping-cart"></span> 
				      			<p>THÊM VÀO GIỎ HÀNG</p>
				      		</div>
						</div>   
				    </div> 
				    <div class="col-sm-2" style="margin-right: 0;"> 
				      <div class="laptop">
				    		<div class="laptop_img">
				      			<img src="img/img_lap/acer_lap.png" class="img-responsive" style="width:100%" alt="Image">
				      		</div>
				      		<p class="text-center"><b>Acer Aspire A715 54PC i5 8300H</b></p>
				      		<div class="price">
				      			<!-- <div class="price_sale"><b>15.300.000<sup>đ</sup></b></div>
				      			<div class="price_old"><del>17.000.000</del><sup>đ</sup></div> -->
				      			<div class="price_old" style="color: red; font-size: 17px;"><b>19.990.000<sup>đ</sup></b></div>
				      		</div>
				      		<div class="like">
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #ffdb4d;"></span>
				      			<span class="glyphicon glyphicon-star" style="color: #cccccc;"></span>
				      		</div>
				      		<hr style="margin:8px 0 0 0;">
				      		<div class="cart">
				      			<span class="glyphicon glyphicon-shopping-cart"></span> 
				      			<p>THÊM VÀO GIỎ HÀNG</p>
				      		</div>
						</div>   
				    </div>      
				</div>
			</div> 
		</div>
	</div>
	<div class="container text-center accessories_product">
		<div class="row">
	  		<div class="name_box">
	  			<div class="row" style="margin-bottom: 40px;border-bottom:1px solid #d9d9d9;position: relative;">
	  				<h3 style="color: white; margin-bottom:0px;width: 205px;padding: 8px;background-color: #0099cc/*#d74b33*/;border-radius: 5px 5px 0 0;">PHỤ KIỆN</h3>
	  				<div class="header_box" style="position: absolute;top: 100%;left: 0px;height: 35px;width: 205px;background:#0086b3 /*#d5442a*/;border-radius: 0 0 0 5px">
	  				</div>
	  				<div class="square" style="position: absolute;top:100%;left: 205px;width: 19px;height: 35px;overflow: hidden;">
	  					<div style="position:absolute;top:-18px;left:-13px;background-color:#00ace6 /*#d9563f*/;width: 25px;height: 50px;transform: rotate(-155deg);"></div>
	  				</div>
	  			</div>
	  		</div>
	  	</div>
		<br>
		<div class="row">
			<div class="accessories_box">
				<div class="row">
					<div class="col-sm-3 text-center">
						<div class="accessories_header">Pin sạc dự phòng</div>
						<br>
						<div class="detail">
							<img src="img/img_supp/pinsac.jpg" class="img-responsive">
						</div>
						<div class="detail" style="float:left;">
							<img src="img/img_supp/pinsac2.jpg" class="img-responsive">
						</div>
						<div class="detail" style="margin: 0;">
							<img src="img/img_supp/pinsac3.jpg" class="img-responsive">
						</div>
					</div>
					<div class="col-sm-3">
						<div class="accessories_header">Dây cáp sạc</div>
						<br>
						<div class="detail">
							<img src="img/img_supp/capsac.jpg" class="img-responsive">
						</div>
						<div class="detail" style="float:left;">
							<img src="img/img_supp/capsac2.jpg" class="img-responsive">
						</div>
						<div class="detail" style="margin: 0;">
							<img src="img/img_supp/capsac3.jpg" class="img-responsive">
						</div>
					</div>
					<div class="col-sm-3">
						<div class="accessories_header">Thẻ nhớ</div>
						<br>
						<div class="detail">
							<img src="img/img_supp/thenho.jpg" class="img-responsive">
						</div>
						<div class="detail" style="float:left;">
							<img src="img/img_supp/thenho2.jpg" class="img-responsive">
						</div>
						<div class="detail" style="margin: 0;">
							<img src="img/img_supp/thenho3.jpg" class="img-responsive">
						</div>
					</div>
					<div class="col-sm-3">
						<div class="accessories_header">Tai nghe nhạc</div>
						<br>
						<div class="detail">
							<img src="img/img_supp/tainghe.jpg" class="img-responsive">
						</div>
						<div class="detail" style="float:left;">
							<img src="img/img_supp/tainghe2.jpg" class="img-responsive">
						</div>
						<div class="detail" style="margin: 0;">
							<img src="img/img_supp/tainghe3.jpg" class="img-responsive">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3" style="border-top: 0.5px solid #d9d9d9;">
						<div class="accessories_header">USB</div>
						<br>
						<div class="detail">
							<img src="img/img_supp/usb.jpg" class="img-responsive">
						</div>
						<div class="detail" style="float:left;">
							<img src="img/img_supp/usb2.jpg" class="img-responsive">
						</div>
						<div class="detail" style="margin: 0;">
							<img src="img/img_supp/usb3.jpg" class="img-responsive">
						</div>
					</div>
					<div class="col-sm-3" style="border-top: 0.5px solid #d9d9d9;">
						<div class="accessories_header">Chuột máy tính, bàn phím</div>
						<br>
						<div class="detail">
							<img src="img/img_supp/chuot.jpg" class="img-responsive">
						</div>
						<div class="detail" style="float:left;">
							<img src="img/img_supp/banphim.jpg" class="img-responsive">
						</div>
						<div class="detail" style="margin: 0;">
							<img src="img/img_supp/banphim2.jpg" class="img-responsive">
						</div>
					</div>
					<div class="col-sm-3" style="border-top: 0.5px solid #d9d9d9;">
						<div class="accessories_header">Phụ kiện thông minh</div>
						<br>
						<div class="detail">
							<img src="img/img_supp/kinhtta.jpg" class="img-responsive">
						</div>
						<div class="detail" style="float:left;">
							<img src="img/img_supp/kinhtta2.png" class="img-responsive">
						</div>
						<div class="detail" style="margin: 0;">
							<img src="img/img_supp/butcu.jpg" class="img-responsive">
						</div>
					</div>
					<div class="col-sm-3" style="border-top: 0.5px solid #d9d9d9;">
						<div class="accessories_header">Ốp lưng điện thoại, máy tính bảng</div>
						<br>
						<div class="detail">
							<img src="img/img_supp/oplung.jpg" class="img-responsive">
						</div>
						<div class="detail" style="float:left;">
							<img src="img/img_supp/oplung2.jpg" class="img-responsive">
						</div>
						<div class="detail" style="margin: 0;">
							<img src="img/img_supp/oplung3.jpg" class="img-responsive">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="container-fluid text-center" style="margin-top:40px;height: 400px; background-color:black;position: relative;">
		<div class="row">
		  	<div class="cam_ket" style="height: 300px;width: 90%;position: absolute;left: 5%;">
		  		<div class="row">
		  			<div class="col-sm-4" style="background-color: white;height: 150px;border: 1px solid black;padding: 0;text-align:left;">
		  				<div class="icon_camket text-center" style="width: 45%;height: 100%;display: inline-block;">
		  					<div style="margin: 10px 0 10px 58px;width: 90px;">
		  						<img src="img/img_footer/icon-s1.png" class="img-responsive">
		  					</div>
		  					<div><b>GIÁ TRỊ LỚN</b></div>
		  				</div>
		  				<div class="content" style="float: right;width: 55%;height:100%;display: inline-block;padding: 15px;">
							Chúng tôi cung cấp giá cả cạnh tranh nhất trên từng sản phẩm, phù hợp với mọi túi tiền.
		  				</div>
		  			</div>
		  			<div class="col-sm-4" style="background-color: white;height: 150px;border: 1px solid black;padding: 0;text-align: left;">
		  				<div class="icon_camket text-center" style="width: 45%;height: 100%;display: inline-block;">
		  					<div style="margin: 10px 0 10px 58px;width: 90px;">
		  						<img src="img/img_footer/icon-s2.png" class="img-responsive">
		  					</div>
		  					<div><b>GIAO HÀNG</b></div>
		  				</div>
		  				<div class="content" style="float: right;width: 55%;height:100%;display: inline-block;padding: 15px;">
							Giao hàng tận nơi, sản phẩm sẽ có mặt tại nhà bạn từ 3 đến 5 ngày làm việc.
		  				</div>
		  			</div>
		  			<div class="col-sm-4" style="background-color: white;height: 150px;border: 1px solid black;padding: 0;text-align: left;">
		  				<div class="icon_camket text-center" style="width: 45%;height: 100%;display: inline-block;">
		  					<div style="margin: 10px 0 10px 58px;width: 90px;">
		  						<img src="img/img_footer/icon-s3.png" class="img-responsive">
		  					</div>
		  					<div><b>SẢN PHẨM</b></div>
		  				</div>
		  				<div class="content" style="float: right;width: 55%;height:100%;display: inline-block;padding: 15px;">
							Sản phẩm chính hãng, bảo hành trên toàn quốc.
		  				</div>
		  			</div>
		  		</div>
		  		<div class="row">
		  			<div class="col-sm-4" style="background-color: white;height: 150px;border: 1px solid black;padding: 0;text-align: left;">
		  				<div class="icon_camket text-center" style="width: 45%;height: 100%;display: inline-block;">
		  					<div style="margin: 10px 0 10px 58px;width: 90px;">
		  						<img src="img/img_footer/icon-s3.png" class="img-responsive">
		  					</div>
		  					<div><b>SẢN PHẨM</b></div>
		  				</div>
		  				<div class="content" style="float: right;width: 55%;height:100%;display: inline-block;padding: 15px;">
							Sản phẩm chính hãng, bảo hành trên toàn quốc.
		  				</div>
		  			</div>
		  			<div class="col-sm-4" style="background-color: white;height: 150px;border: 1px solid black;padding: 0;text-align: left;">
		  				<div class="icon_camket text-center" style="width: 45%;height: 100%;display: inline-block;">
		  					<div style="margin: 10px 0 10px 58px;width: 90px;">
		  						<img src="img/img_footer/icon-s3.png" class="img-responsive">
		  					</div>
		  					<div><b>HỖ TRỢ</b></div>
		  				</div>
		  				<div class="content" style="float: right;width: 55%;height:100%;display: inline-block;padding: 15px;">
							Hỗ trợ 24/7.
							Phone: +84 908 77 00 95.
							Emal: info@runtime.vn
		  				</div>
		  			</div>
		  			<div class="col-sm-4" style="background-color: white;height: 150px;border: 1px solid black;padding: 0;text-align: left;">
		  				<div class="icon_camket text-center" style="width: 45%;height: 100%;display: inline-block;">
		  					<div style="margin: 10px 0 10px 58px;width: 90px;">
		  						<img src="img/img_footer/icon-s3.png" class="img-responsive">
		  					</div>
		  					<div><b>THANH TOÁN</b></div>
		  				</div>
		  				<div class="content" style="float: right;width: 55%;height:100%;display: inline-block;padding: 15px;">
								Thanh toán khi nhận hàng. 
								Phương thức thanh toán đa dạng
		  				</div>
		  			</div>
		  		</div>
		  	</div>
	  	</div>
	  	<div class="contact" style="height: 300px;position: absolute;top: 340px;background-color: white;width: 100%;left: 0;">
	  		<div></div>
	  	</div>
	</footer>
</body>
</html>