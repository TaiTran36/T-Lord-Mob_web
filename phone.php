<?php include('server/display_phone_product.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="phone2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<?php include("header_custom.php"); ?>
	<?php include("list_products_slide.php"); ?>

	<div class="container text-center phone_product">    
		<br>
		<div class="row" id="phone">
		  	<div class="phone_box">
		  		<div class='row'>

		  			 <?php 
				  		$res = mysqli_query($connect, $sql);
				  		if($res->num_rows > 0){
				  			while($row = mysqli_fetch_array($res)){
				  				$r = number_format($row['phone_price_init'],0,'.','.');

						  			echo "<div class='col-sm-2 text-center' >";
									    echo "<div class='phone'>";
									    echo "<a href='phone_details.php?id=$row[phone_id]'>";
									    	echo "<div class='phone_img'>";
									      		echo '<img src="data:image/jpeg;base64,'.base64_encode( $row["phone_img_full"] ).'" class="img-responsive" style="width:100%" alt="Image"/>';
									      		echo "</div>";
									      		echo "<p class='text-center'><b>".$row['phone_name']."</b></p>";
									      		echo"<div class='price'>
									      			<!-- <div class='price_sale'><b>15.300.000<sup>đ</sup></b></div> -->
									      			<div class='price_old' style='color: red; font-size: 17px;''><b>".$r."<sup>đ</sup></b></div>";
									      		echo "</div>";
									      		echo "<div class='like'>";
									      			echo "<span class='glyphicon glyphicon-star' style='color: #ffdb4d;'></span>";
									      			echo "<span class='glyphicon glyphicon-star' style='color: #ffdb4d;'></span>";
									      			echo "<span class='glyphicon glyphicon-star' style='color: #ffdb4d;'></span>";
									      			echo "<span class='glyphicon glyphicon-star' style='color: #ffdb4d;'></span>";
									      			echo "<span class='glyphicon glyphicon-star' style='color: #cccccc;'></span>";
									      		echo "</div>";
									      		echo "</a>";
									      		echo "<hr style='margin:8px 0 0 0;'>";
									      		echo "<div class='cart'>";
									      			echo "<span class='glyphicon glyphicon-shopping-cart'></span>"; 
									      			echo "<p>THÊM VÀO GIỎ HÀNG</p>";
									      		echo "</div>";
											echo "</div>";   
									    echo "</div>";
				  			}
				  		}
				  		else{
				  			echo "0 result";
				  		}
					   ?>
				   </div>
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
</body>
</html>
