<?php 
				$connect = mysqli_connect('localhost','root','','sell_web');
				$sql = 'SELECT phone_id, phone_name, phone_company,phone_img_full, phone_price_init FROM phone_product';
				mysqli_set_charset($connect,'utf8');
 ?>