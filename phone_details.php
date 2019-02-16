<?php 
	$id = $_REQUEST['id'];
 ?>
<?php include('server/display_details.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="phone_details.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php include('header_custom.php'); ?>

	<div class="container">
		<br>
		<div class="name_phone">
			<?php 
				$res = mysqli_query($connect, $sql1);
		  		if($res->num_rows > 0){
		  			while($row = mysqli_fetch_array($res)){
		  				$r = number_format($row['phone_price_init'],0,'.','.');
		  				echo "<h1>$row[phone_name]</h1>";
		  				echo "<div class='row'>";
							echo "<div class='phone_detail_img' style='height: 600px;'>";
								echo "<div class='col-sm-12'>";
									echo "<div class='col-sm-5' style='height: 600px;padding: 0'>";
										echo "<div class='phone_img' style='padding: 2%;'>";
											echo "<a href='#''>";
												echo '<img src="data:image/jpeg;base64,'.base64_encode( $row["phone_img_full"] ).'" class="img-responsive" style="width:100%" alt="Image"/>';
											echo "</a>";
										echo "</div>";
										echo "<br>";
										echo "<div class='list_phone_img' style='height: 100px;padding: 0 10px;''>";
											echo "<div class='img_box' style='border: 0.5px solid #d9d9d9;width: 17%;height: 75%;display: inline-block;margin-left: 2%;padding: 2%;'>";
												echo "<a href='#'>";
													echo "<img src='img/img_phone/ss_galaxy_note9.png' class='img-responsive' style='width:100%' alt='Image'>";
												echo "</a>";
											echo "</div>";
											echo "<div class='img_box' style='border: 0.5px solid #d9d9d9;width: 17%;height: 75%;display: inline-block;margin-left: 2%;padding: 2%;'>";
												echo "<a href='#'>";
													echo "<img src='img/img_phone/ss_galaxy_note9.png' class='img-responsive' style='width:100%' alt='Image'>";
												echo "</a>";
											echo "</div>";
											echo "<div class='img_box' style='border: 0.5px solid #d9d9d9;width: 17%;height: 75%;display: inline-block;margin-left: 2%;padding: 2%;'>";
												echo "<a href='#'>";
													echo "<img src='img/img_phone/ss_galaxy_note9.png' class='img-responsive' style='width:100%' alt='Image'>";
												echo "</a>";
											echo "</div>";
											echo "<div class='img_box' style='border: 0.5px solid #d9d9d9;width: 17%;height: 75%;display: inline-block;margin-left: 2%;padding: 2%;'>";
												echo "<a href='#'>";
													echo "<img src='img/img_phone/ss_galaxy_note9.png' class='img-responsive' style='width:100%' alt='Image'>";
												echo "</a>";
											echo "</div>";
											echo "<div class='img_box' style='border: 0.5px solid #d9d9d9;width: 17%;height: 75%;display: inline-block;margin-left: 2%;padding: 2%;'>";
												echo "<a href='#'>";
													echo "<img src='img/img_phone/ss_galaxy_note9.png' class='img-responsive' style='width:100%' alt='Image'>";
												echo "</a>";
											echo "</div>";
										echo "</div>";
									echo "</div>";
									echo "<div class='col-sm-7' style='height: 600px;'>";
										echo "<div class='col-sm-7' style='height: 600px;padding: 50px 10px;'>";
											echo "<div class='price' style='color: #e60000;font-size:25px;text-align:bottom;'>";
												echo "<p style='display: inline-block;height: 25px;'>";
													echo "<b>$r<sup>đ</sup></b></p>";
												echo "<div class='btn' style='margin-left: 10%;height: 30px;width: 30%;'>";
												echo "</div>";
											echo "</div>";
											echo "<br>";
											echo "<div class='box_buy_tutorial' style='border: 0.5px solid  #d9d9d9;height: 200px;'>";
												echo "<h4><b>ĐẶC ĐIỂM NỔI BẬT</b></h4>";
												echo "<div>";
													echo"<i class='material-icons'></i>";
												echo "</div>";
											echo "</div>";
											echo "<br>";
											echo "<div class='button_buy' style='height: 70px;'>";
												echo "<div class='btn' style='border: 0.5px solid  #d9d9d9;height: 50px;width: 47%;padding: 15px;font-size: 15px;'>";
													echo "MUA NGAY";
												echo "</div>";
												echo "<div class='btn' style='border: 0.5px solid  #d9d9d9;height: 50px;width: 47%;padding: 15px;font-size: 15px;float: right;'>";
													echo "MUA TRẢ GÓP";
												echo "</div>";
											echo "</div>";
											echo "<div>;Gọi đặt mua hàng: 
												<a href='' style='text-decoration:none;color: blue;'>1800 1962</a></div>";
										echo "</div>";
										echo "<div class='col-sm-5' style='height: 600px;'>";
											echo "<br>";
											echo "<div style='border: 0.5px solid  #d9d9d9;height: 200px;'>";echo "</div>";
										echo "</div>";
									echo "</div>";
								echo "</div>";
							echo "</div>";
					echo "</div>";
		  	echo "</div>";	
		  	echo "<hr>";	
		  	echo "<br>";
		  	echo "<div class='row'>";
			echo "<div class='col-sm-12' style='height: 400px'>";
				echo "<div>";
					echo "<h3>Ưu đãi khi mua PHỤ KIỆN cùng $row[phone_name] </h3>";
				echo "</div>";
				echo "<div class='' style='border: 1px solid black;height: 300px;padding: 20px 10px;'>";
					echo "<div class='box_with text-center' style='border: 0.5px solid #d9d9d9;height: 250px;width: 20%;display: inline-block;'>";
						echo "<div class='img_with' style='height: 80%;padding:10px;
						background-size: cover;overflow: hidden;'>";
							echo "<a href='#'>";
								echo "<img src='img/img_phone/ss_galaxy_note9.png' class='img-responsive' style='width:100%;height: 100%;' alt='Image'>";
							echo "</a>";
						echo "</div>";
						echo "<div class='name' style='height: 19%;'>";
							echo "<p><b>Samsung Galaxy Note 9</b></p>";
						echo "</div>";
					echo "</div>";
					echo "<div class='box_with text-center' style='border: 0.5px solid #d9d9d9;height: 250px;width: 20%;display: inline-block;'>";
						echo "<div class='img_with' style='height: 80%;padding:10px;
						background-size: cover;overflow: hidden;'>";
							echo "<a href='#'>";
								echo "<img src='img/img_phone/ss_galaxy_note9.png' class='img-responsive' style='width:100%;height: 100%;' alt='Image'>";
							echo "</a>";
						echo "</div>";
						echo "<div class='name' style='height: 19%;'>";
							echo "<p><b>Samsung Galaxy Note 9</b></p>";
						echo "</div>";
					echo "</div>";
					echo "<div class='box_with text-center' style='border: 0.5px solid #d9d9d9;height: 250px;width: 20%;display: inline-block;'>";
						echo "<div class='img_with' style='height: 80%;padding:10px;
						background-size: cover;overflow: hidden;'>";
							echo "<a href='#'>";
								echo "<img src='img/img_phone/ss_galaxy_note9.png' class='img-responsive' style='width:100%;height: 100%;' alt='Image'>";
							echo "</a>";
						echo "</div>";
						echo "<div class='name' style='height: 19%;'>";
							echo "<p><b>Samsung Galaxy Note 9</b></p>";
						echo "</div>";
					echo "</div>";
					echo "<div class='box_with text-center' style='border: 0.5px solid #d9d9d9;height: 250px;width: 20%;display: inline-block;'>";
						echo "<div class='img_with' style='height: 80%;padding:10px;
						background-size: cover;overflow: hidden;'>";
							echo "<a href='#'>";
								echo "<img src='img/img_phone/ss_galaxy_note9.png' class='img-responsive' style='width:100%;height: 100%;' alt='Image'>";
							echo "</a>";
						echo "</div>";
						echo "<div class='name' style='height: 19%;'>";
							echo "<p><b>Samsung Galaxy Note 9</b></p>";
						echo "</div>";
					echo "</div>";
				echo "</div>";
			echo "</div>";
		echo "</div>";
		echo "<div class='row'>";
			echo "<div class='col-sm-12' style='height: 1100px;padding: 0'>";
				echo "<div class='col-sm-8' style='height: 1000px;padding: 0 20px 0 0'>";
					echo "<div>";
						echo "<h3>Thông tin sản phẩm</h3>";
					echo "</div>";
					echo "<br>";
					echo "<div id='myCarousel' class='carousel slide' data-ride='carousel' style='height: 430px;width: 95%;'>";
	      				echo "<ol class='carousel-indicators'>";
					        echo "<li data-target='#myCarousel' data-slide-to='0' class='active'></li>";
					        echo "<li data-target='#myCarousel' data-slide-to='1'></li>";
					        echo "<li data-target='#myCarousel' data-slide-to='2'></li>";
					        echo "<li data-target='#myCarousel' data-slide-to='3'></li>";
					    echo "</ol>";
					    echo "<div class='carousel-inner' role='listbox'  style='height:430px;'>";
					        echo "<div class='item active'  style='height:430px;'>";
					          	echo "<img src='img/img_slideshow/slide1.jpg' alt='Image' style='height:430px;'>";   
					        echo "</div>";
							echo "<div class='item'  style='height:430px;'>";
					          	echo "<img src='img/img_slideshow/slide1.jpg' alt='Image' style='height:430px;'>";   
					        echo "</div>";
					        echo "<div class='item'  style='height:430px;'>";
					          	echo "<img src='img/img_slideshow/slide1.jpg' alt='Image' style='height:430px;'>";   
					        echo "</div>";
					        echo "<div class='item'  style='height:430px;'>";
					          	echo "<img src='img/img_slideshow/slide1.jpg' alt='Image' style='height:430px;'>";   
					        echo "</div>";
					    echo "</div>";
	    			echo "</div>";
	    			echo "<br>";
	    			echo "<div class='content_product' style='border: 1px solid #d9d9d9d9;height: 500px;width: 95%;'>";
	    				
	    			echo "</div>";
	    			echo "<br>";
	    			echo "<div class='comments_product' style='border: 1px solid #d9d9d9d9;height: 500px;width: 95%;'>";
	    				
	    			echo "</div>";
				echo "</div>";
				echo "<div class='col-sm-4' style='height: 1000px;padding: 0;'>";
					echo "<div>";
						echo "<h3>Thông số kĩ thuật</h3>";
					echo "</div>";
					echo "<br>";
					echo "<div>";
						echo "<ul style='list-style-type: none;height: 500px;padding: 0;'>";
							echo "<li style='border-top: 1px solid #d9d9d9d9;height: 10%;display: table;width: 100%;'>";
								
								echo "<span style='display: table-cell;width:30%;    vertical-align: top;padding: 3% 15px;'>";
									echo "Màn hình:";
								echo "</span>";
								echo "<div style='height: 100%;padding: 3%; word-break: keep-all;display: table-cell;width: auto;vertical-align: top;'>";
									echo "<span style='float: right;height: auto;'>";
										echo "$row[screen_tech], $row[screen_size], $row[screen_resolution]";
									echo "</span>";
								echo "</div>";
							echo "</li>";
							echo "<li style='border-top: 1px solid #d9d9d9d9;height: 10%;display: table;width: 100%;'>";
								
								echo "<span style='display: table-cell;width:30%;    vertical-align: top;padding: 3% 15px;'>";
									echo "Hệ điều hành:";
								echo "</span>";
								echo "<div style='height: 100%;padding: 3%; word-break: keep-all;display: table-cell;width: auto;vertical-align: top;'>";
									echo "<span style='float: right;height: auto;'>";
										echo "$row[cpu_system]";
									echo "</span>";
								echo "</div>";
							echo "</li>";
							echo "<li style='border-top: 1px solid #d9d9d9d9;height: 10%;display: table;width: 100%;'>";
								
								echo "<span style='display: table-cell;width:30%;    vertical-align: top;padding: 3% 15px;'>";
									echo "Camera sau:";
								echo "</span>";
								echo "<div style='height: 100%;padding: 3%; word-break: keep-all;display: table-cell;width: auto;vertical-align: top;'>";
									echo "<span style='float: right;height: auto;'>";
										echo "$row[camera_resolution]";
									echo "</span>";
								echo "</div>";
							echo "</li>";
							echo "<li style='border-top: 1px solid #d9d9d9d9;height: 10%;display: table;width: 100%;'>";
								
								echo "<span style='display: table-cell;width:30%;    vertical-align: top;padding: 3% 15px;'>";
									echo "Camera trước:";
								echo "</span>";
								echo "<div style='height: 100%;padding: 3%; word-break: keep-all;display: table-cell;width: auto;vertical-align: top;'>";
									echo "<span style='float: right;height: auto;'>";
										echo "$row[camera_resolution]";
									echo "</span>";
								echo "</div>";
							echo "</li>";
							echo "<li style='border-top: 1px solid #d9d9d9d9;height: 10%;display: table;width: 100%;'>";
								
								echo "<span style='display: table-cell;width:30%;    vertical-align: top;padding: 3% 15px;'>";
									echo "CPU:";
								echo "</span>";
								echo "<div style='height: 100%;padding: 3%; word-break: keep-all;display: table-cell;width: auto;vertical-align: top;'>";
									echo "<span style='float: right;height: auto;'>";
										echo "$row[cpu_chip]";
									echo "</span>";
								echo "</div>";
							echo "</li>";
							echo "<li style='border-top: 1px solid #d9d9d9d9;height: 10%;display: table;width: 100%;'>";
								
								echo "<span style='display: table-cell;width:30%;    vertical-align: top;padding: 3% 15px;'>";
									echo "Bộ nhớ trong:";
								echo "</span>";
								echo "<div style='height: 100%;padding: 3%; word-break: keep-all;display: table-cell;width: auto;vertical-align: top;'>";
									echo "<span style='float: right;height: auto;'>";
										echo "$row[ram_memory]";
									echo "</span>";
								echo "</div>";
							echo "</li>";
							echo "<li style='border-top: 1px solid #d9d9d9d9;height: 10%;display: table;width: 100%;'>";
								
								echo "<span style='display: table-cell;width:30%;    vertical-align: top;padding: 3% 15px;'>";
									echo "Thẻ nhớ:";
								echo "</span>";
								echo "<div style='height: 100%;padding: 3%; word-break: keep-all;display: table-cell;width: auto;vertical-align: top;'>";
									echo "<span style='float: right;height: auto;'>";
										echo "$row[ram_memory_card]";
									echo "</span>";
								echo "</div>";
							echo "</li>";
							echo "<li style='border-top: 1px solid #d9d9d9d9;height: 10%;display: table;width: 100%;'>";
								
								echo "<span style='display: table-cell;width:30%;    vertical-align: top;padding: 3% 15px;'>";
									echo "Thẻ sim:";
								echo "</span>";
								echo "<div style='height: 100%;padding: 3%; word-break: keep-all;display: table-cell;width: auto;vertical-align: top;'>";
									echo "<span style='float: right;height: auto;'>";
										echo "$row[connect_sim]";
									echo "</span>";
								echo "</div>";
							echo "</li>";
							echo "<li style='border-top: 1px solid #d9d9d9d9;height: 10%;display: table;width: 100%;'>";
								
								echo "<span style='display: table-cell;width:30%;    vertical-align: top;padding: 3% 15px;'>";
									echo "Dung lượng pin:";
								echo "</span>";
								echo "<div style='height: 100%;padding: 3%; word-break: keep-all;display: table-cell;width: auto;vertical-align: top;'>";
									echo "<span style='float: right;height: auto;'>";
										echo "$row[battery_capacity] mAh";
									echo "</span>";
								echo "</div>";
							echo "</li>";
						echo "</ul>";
					echo "</div>";
					echo "<div class='btn' style='background-color: black;color: white;width: 100%;'>";
						echo "<p><a href='#'>"; echo "Xem chi tiết"; echo "</a></p>";
					echo "</div>";
					echo "<br>";
					echo "<br>";
					echo "<div class='news_phone' style='height: 300px;'>";
						echo "<div>";
							echo "<h4>Tin tức liên quan về Samsung Galaxy Note 9</h4>";
						echo "</div>";
						echo "<ul style='list-style-type: none;height: 400px;padding: 0;'>";
							echo "<li style='height:25%;width: 100%;'>";
								echo "<div style='border:1px solid #d9d9d9;width:35%;height:70%;overflow: hidden;float: left;'>";
									echo "<img src='img/img_phone/ss_galaxy_note9.png' class='img-responsive' style='width:100%;height: 100%;' alt='Image'>";
								echo "</div>";
								echo "<div style='height: 100%;padding: 3%; word-break: keep-all;width:64%;vertical-align: top;float: right;'>";
									echo "<span style='float: right;height: auto;'>";
										echo "Super AMOLED, 6.4'', Quad HD+ (2K+):";
									echo "</span>";
								echo "</div>";
							echo "</li>";
							echo "<li style='height:25%;width: 100%;'>";
								echo "<div style='border:1px solid #d9d9d9;width:35%;height:70%;overflow: hidden;float: left;'>";
									echo "<img src='img/img_phone/ss_galaxy_note9.png' class='img-responsive' style='width:100%;height: 100%;' alt='Image'>";
								echo "</div>";
								echo "<div style='height: 100%;padding: 3%; word-break: keep-all;width:64%;vertical-align: top;float: right;'>";
									echo "<span style='float: right;height: auto;'>";
										echo "Super AMOLED, 6.4'', Quad HD+ (2K+):";
									echo "</span>";
								echo "</div>";
							echo "</li>";
							echo "<li style='height:25%;width: 100%;'>";
								echo "<div style='border:1px solid #d9d9d9;width:35%;height:70%;overflow: hidden;float: left;'>";
									echo "<img src='img/img_phone/ss_galaxy_note9.png' class='img-responsive' style='width:100%;height: 100%;' alt='Image'>";
								echo "</div>";
								echo "<div style='height: 100%;padding: 3%; word-break: keep-all;width:64%;vertical-align: top;float: right;'>";
									echo "<span style='float: right;height: auto;'>";
										echo "Super AMOLED, 6.4'', Quad HD+ (2K+):";
									echo "</span>";
								echo "</div>";
							echo "</li>";
						echo "</ul>";
					echo "</div>";
				echo "</div>";
			echo "</div>";
		echo "</div>";	
		  				}
		  			}
		  		else{
		  			echo "0 result";
		  		}
			?>
<!-- 		<div class="row">
			<div class="phone_detail_img" style="height: 600px;">
				<div class="col-sm-12">
					<div class="col-sm-5" style="bheight: 600px;padding: 0">
						<div class="phone_img" style="padding: 2%;">
							<a href="#"><img src="img/img_phone/ss_galaxy_note9.png" class="img-responsive" style="width:100%" alt="Image"></a>
						</div>
						<br>
						<div class="list_phone_img" style="height: 100px;padding: 0 10px;">
							<div class="img_box" style="border: 0.5px solid #d9d9d9;width: 17%;height: 75%;display: inline-block;margin-left: 2%;padding: 2%;">
								<a href="#"><img src="img/img_phone/ss_galaxy_note9.png" class="img-responsive" style="width:100%" alt="Image"></a>
							</div>
							<div class="img_box" style="border: 0.5px solid #d9d9d9;width: 17%;height: 75%;display: inline-block;margin-left: 2%;padding: 2%;">
								<a href="#"><img src="img/img_phone/ss_galaxy_note9.png" class="img-responsive" style="width:100%" alt="Image"></a>
							</div>
							<div class="img_box" style="border: 0.5px solid #d9d9d9;width: 17%;height: 75%;display: inline-block;margin-left: 2%;padding: 2%;">
								<a href="#"><img src="img/img_phone/ss_galaxy_note9.png" class="img-responsive" style="width:100%" alt="Image"></a>
							</div>
							<div class="img_box" style="border: 0.5px solid #d9d9d9;width: 17%;height: 75%;display: inline-block;margin-left: 2%;padding: 2%;">
								<a href="#"><img src="img/img_phone/ss_galaxy_note9.png" class="img-responsive" style="width:100%" alt="Image"></a>
							</div>
							<div class="img_box" style="border: 0.5px solid #d9d9d9;width: 17%;height: 75%;display: inline-block;margin-left: 2%;padding: 2%;">
								<a href="#"><img src="img/img_phone/ss_galaxy_note9.png" class="img-responsive" style="width:100%" alt="Image"></a>
							</div>
						</div>
					</div>
					<div class="col-sm-7" style="height: 600px;">
						<div class="col-sm-7" style="height: 600px;padding: 50px 10px;">
							<div class="price" style="color: #e60000;font-size:25px;text-align:bottom;">
								<p style="display: inline-block;height: 25px;"><b>22.990.000<sup>đ</sup></b></p>
								<div class="btn" style="margin-left: 10%;height: 30px;width: 30%;"></div>
							</div>
							<br>
							<div class="box_buy_tutorial" style="border: 0.5px solid  #d9d9d9;height: 200px;">
								<h4><b>ĐẶC ĐIỂM NỔI BẬT</b></h4>
								<div>
									<i class="material-icons"></i>
								</div>
							</div>
							<br>
							<div class="button_buy" style="height: 70px;">
								<div class="btn" style="border: 0.5px solid  #d9d9d9;height: 50px;width: 47%;padding: 15px;font-size: 15px;">
									MUA NGAY
								</div>
								<div class="btn" style="border: 0.5px solid  #d9d9d9;height: 50px;width: 47%;padding: 15px;font-size: 15px;float: right;">
									MUA TRẢ GÓP
								</div>
							</div>
							<div>Gọi đặt mua hàng: <a href="" style="text-decoration:none;color: blue;">1800 1962</a></div>
						</div>
						<div class="col-sm-5" style="height: 600px;">
							<br>
							<div style="border: 0.5px solid  #d9d9d9;height: 200px;"></div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- <div class="row">
			<div class="col-sm-12" style="height: 400px">
				<div>
					<h3>Ưu đãi khi mua PHỤ KIỆN cùng Samsung Galaxy Note 9 </h3>
				</div>
				<div class="" style="border: 1px solid black;height: 300px;padding: 20px 10px;">
					<div class="box_with text-center" style="border: 0.5px solid #d9d9d9;height: 250px;width: 20%;display: inline-block;">
						<div class="img_with" style="height: 80%;padding:10px;
						background-size: cover;overflow: hidden;">
							<a href="#">
								<img src="img/img_phone/ss_galaxy_note9.png" class="img-responsive" style="width:100%;height: 100%;" alt="Image">
							</a>
						</div>
						<div class="name" style="height: 19%;">
							<p><b>Samsung Galaxy Note 9</b></p>
						</div>
					</div>
					<div class="box_with text-center" style="border: 0.5px solid #d9d9d9;height: 250px;width: 20%;display: inline-block;margin-left: 5%;">
						<div class="img_with" style="height: 80%;padding:10px;
						background-size: cover;overflow: hidden;">
							<a href="#">
								<img src="img/img_phone/ss_galaxy_note9.png" class="img-responsive" style="width:100%;height: 100%;" alt="Image">
							</a>
						</div>
						<div class="name" style="height: 19%;">
							<p><b>Samsung Galaxy Note 9</b></p>
						</div>
					</div>
					<div class="box_with text-center" style="border: 0.5px solid #d9d9d9;height: 250px;width: 20%;display: inline-block;margin-left: 5%;">
						<div class="img_with" style="height: 80%;padding:10px;
						background-size: cover;overflow: hidden;">
							<a href="#">
								<img src="img/img_phone/ss_galaxy_note9.png" class="img-responsive" style="width:100%;height: 100%;" alt="Image">
							</a>
						</div>
						<div class="name" style="height: 19%;">
							<p><b>Samsung Galaxy Note 9</b></p>
						</div>
					</div>
					<div class="box_with text-center" style="border: 0.5px solid #d9d9d9;height: 250px;width: 20%;display: inline-block;margin-left: 5%;">
						<div class="img_with" style="height: 80%;padding:10px;
						background-size: cover;overflow: hidden;">
							<a href="#">
								<img src="img/img_phone/ss_galaxy_note9.png" class="img-responsive" style="width:100%;height: 100%;" alt="Image">
							</a>
						</div>
						<div class="name" style="height: 19%;">
							<p><b>Samsung Galaxy Note 9</b></p>
						</div>
					</div>
				</div>
			</div>
		</div> -->
<!-- 		<div class="row">
			<div class="col-sm-12" style="height: 1100px;padding: 0">
				<div class="col-sm-8" style="height: 1000px;padding: 0 20px 0 0">
					<div>
						<h3>Thông tin sản phẩm</h3>
					</div>
					<br>
					<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 430px;width: 95%;">
	      				<ol class="carousel-indicators">
					        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					        <li data-target="#myCarousel" data-slide-to="1"></li>
					        <li data-target="#myCarousel" data-slide-to="2"></li>
					        <li data-target="#myCarousel" data-slide-to="3"></li>
					    </ol>

					    <div class="carousel-inner" role="listbox"  style="height:430px;">
					        <div class="item active"  style="height:430px;">
					          	<img src="img/img_slideshow/slide1.jpg" alt="Image" style="height:430px;">   
					        </div>
							<div class="item"  style="height:430px">
					        	<img src="img/img_slideshow/slide2.jpg" alt="Image"  style="height:430px">
					        </div>
					        <div class="item"  style="height:430px;">
					        	<img src="img/img_slideshow/slide3.jpg" alt="Image"  style="height:430px">
					        </div>
					        <div class="item"  style="height:430px;">
					        	<img src="img/img_slideshow/slide4.jpg" alt="Image"  style="height:430px">      
					        </div>
					    </div>
	    			</div>
	    			<br>
	    			<div class="content_product" style="border: 1px solid #d9d9d9d9;height: 500px;width: 95%;">
	    				
	    			</div>
	    			<br>
	    			<div class="comments_product" style="border: 1px solid #d9d9d9d9;height: 500px;width: 95%;">
	    				
	    			</div>
				</div>
				<div class="col-sm-4" style="height: 1000px;padding: 0;">
					<div>
						<h3>Thông số kĩ thuật</h3>
					</div>
					<br>
					<div>
						<ul style="list-style-type: none;height: 500px;padding: 0;">
							<li style="border-top: 1px solid #d9d9d9d9;height: 10%;display: table;width: 100%;">
								
								<span style="display: table-cell;width:30%;    vertical-align: top;padding: 3% 15px;">Màn hình:</span>
								<div style="height: 100%;padding: 3%; word-break: keep-all;display: table-cell;width: auto;vertical-align: top;">
									<span style="float: right;height: auto;">Super AMOLED, 6.4'', Quad HD+ (2K+)</span>
								</div>
							</li>
							<li style="border-top: 1px solid #d9d9d9d9;height: 10%;display: table;width: 100%;">
								<span style="display: table-cell;width:30%;    vertical-align: top;padding: 3% 15px;">Màn hình:</span>
								<div style="height: 100%;padding: 3%; word-break: keep-all;display: table-cell;width: auto;vertical-align: top;">
									<span style="float: right;height: auto;">Super AMOLED, 6.4'', Quad HD+ (2K+)</span>
								</div>
							</li>
							<li style="border-top: 1px solid #d9d9d9d9;height: 10%;display: table;width: 100%;">
								<span style="display: table-cell;width:30%;    vertical-align: top;padding: 3% 15px;">Màn hình:</span>
								<div style="height: 100%;padding: 3%; word-break: keep-all;display: table-cell;width: auto;vertical-align: top;">
									<span style="float: right;height: auto;">Super AMOLED, 6.4'', Quad HD+ (2K+)</span>
								</div>
							</li>
							<li style="border-top: 1px solid #d9d9d9d9;height: 10%;display: table;width: 100%;">
								<span style="display: table-cell;width:30%;    vertical-align: top;padding: 3% 15px;">Màn hình:</span>
								<div style="height: 100%;padding: 3%; word-break: keep-all;display: table-cell;width: auto;vertical-align: top;">
									<span style="float: right;height: auto;">Super AMOLED, 6.4'', Quad HD+ (2K+)</span>
								</div>
							</li>
							<li style="border-top: 1px solid #d9d9d9d9;height: 10%;display: table;width: 100%;">
								<span style="display: table-cell;width:30%;    vertical-align: top;padding: 3% 15px;">Màn hình:</span>
								<div style="height: 100%;padding: 3%; word-break: keep-all;display: table-cell;width: auto;vertical-align: top;">
									<span style="float: right;height: auto;">Super AMOLED, 6.4'', Quad HD+ (2K+)</span>
								</div>
							</li>
							<li style="border-top: 1px solid #d9d9d9d9;height: 10%;display: table;width: 100%;">
								<span style="display: table-cell;width:30%;    vertical-align: top;padding: 3% 15px;">Màn hình:</span>
								<div style="height: 100%;padding: 3%; word-break: keep-all;display: table-cell;width: auto;vertical-align: top;">
									<span style="float: right;height: auto;">Super AMOLED, 6.4'', Quad HD+ (2K+)</span>
								</div>
							</li>
							<li style="border-top: 1px solid #d9d9d9d9;height: 10%;display: table;width: 100%;">
								<span style="display: table-cell;width:30%;    vertical-align: top;padding: 3% 15px;">Màn hình:</span>
								<div style="height: 100%;padding: 3%; word-break: keep-all;display: table-cell;width: auto;vertical-align: top;">
									<span style="float: right;height: auto;">Super AMOLED, 6.4'', Quad HD+ (2K+)</span>
								</div>
							</li>
							<li style="border-top: 1px solid #d9d9d9d9;height: 10%;display: table;width: 100%;">
								<span style="display: table-cell;width:30%;    vertical-align: top;padding: 3% 15px;">Màn hình:</span>
								<div style="height: 100%;padding: 3%; word-break: keep-all;display: table-cell;width: auto;vertical-align: top;">
									<span style="float: right;height: auto;">Super AMOLED, 6.4'', Quad HD+ (2K+)</span>
								</div>
							</li>
							<li style="border-top: 1px solid #d9d9d9d9;height: 10%;display: table;width: 100%;border-bottom: 1px solid #d9d9d9d9">
								<span style="display: table-cell;width:30%;    vertical-align: top;padding: 3% 15px;">Màn hình:</span>
								<div style="height: 100%;padding: 3%; word-break: keep-all;display: table-cell;width: auto;vertical-align: top;">
									<span style="float: right;height: auto;">Super AMOLED, 6.4'', Quad HD+ (2K+)</span>
								</div>
							</li>
						</ul>
					</div>
					<div class="btn" style="background-color: black;color: white;width: 100%;">
						<p><a href="#">Xem chi tiết</a></p>
					</div>
					<br>
					<br>
					<div class="news_phone" style="height: 300px;">
						<div>
							<h4>Tin tức liên quan về Samsung Galaxy Note 9</h4>
						</div>
						<ul style="list-style-type: none;height: 400px;padding: 0;">
							<li style="height:25%;width: 100%;">
								<div style="border:1px solid #d9d9d9;width:35%;height:70%;overflow: hidden;float: left;">
									<img src="img/img_phone/ss_galaxy_note9.png" class="img-responsive" style="width:100%;height: 100%;" alt="Image">
								</div>
								<div style="height: 100%;padding: 3%; word-break: keep-all;width:64%;vertical-align: top;float: right;">
									<span style="float: right;height: auto;">Super AMOLED, 6.4'', Quad HD+ (2K+)</span>
								</div>
							</li>
							<li style="height: 25%;width: 100%;">
								<div style="border:1px solid #d9d9d9;width:35%;height:70%;overflow: hidden;float: left;">
									<img src="img/img_phone/ss_galaxy_note9.png" class="img-responsive" style="width:100%;height: 100%;" alt="Image">
								</div>
								<div style="height: 100%;padding: 3%; word-break: keep-all;width:64%;vertical-align: top;float: right;">
									<span style="float: right;height: auto;">Super AMOLED, 6.4'', Quad HD+ (2K+)</span>
								</div>
							</li>
							<li style="height: 25%;width: 100%;">
								<div style="border:1px solid #d9d9d9;width:35%;height:70%;overflow: hidden;float: left;">
									<img src="img/img_phone/ss_galaxy_note9.png" class="img-responsive" style="width:100%;height: 100%;" alt="Image">
								</div>
								<div style="height: 100%;padding: 3%; word-break: keep-all;width:64%;vertical-align: top;float: right;">
									<span style="float: right;height: auto;">Super AMOLED, 6.4'', Quad HD+ (2K+)</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div> -->
	</div>
</body>
</html>