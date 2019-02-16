<?php
	$connect = mysqli_connect('localhost','root','','sell_web');

		$sql1 = "SELECT phone_product.phone_id,phone_product.phone_name, phone_product.phone_img_full, phone_product.phone_img_color1,phone_product.phone_price_init, screen_details.screen_tech, screen_details.screen_resolution,screen_details.screen_size, screen_details.screen_glass, screen_details.screen_touch, camera_details.camera_resolution, camera_details.camera_HD, camera_details.camera_flash, camera_details.camera_video, camera_details.camera_more, cpu_details.cpu_system, cpu_details.cpu_chip, cpu_details.cpu_GPU, cpu_details.cpu_speed, ram_details.ram_size, ram_details.ram_memory, ram_details.ram_memory_card, connect_details.connect_mobie_net, connect_details.connect_sim, connect_details.connect_sim, connect_details.connect_wifi, connect_details.connect_gps, connect_details.connect_bluetooth, connect_details.connect_portal, connect_details.connect_jack_headphone, connect_details.connect_more, design_details.design_form, design_details.design_stuff, design_details.design_size, design_details.design_weight, battery_details.battery_capacity, battery_details.battery_cate, battery_details.battery_tech, exten_details.exten_security, exten_details.exten_special, exten_details.exten_radio, exten_details.exten_video,exten_details.exten_music
		FROM phone_product, screen_details, camera_details, ram_details, cpu_details, connect_details, design_details, battery_details, exten_details
		WHERE phone_id = $_REQUEST[id] ";
	

?>