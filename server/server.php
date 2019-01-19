<?php 
	session_start();
	$custom_name = "";
	$email = "";
	$sex = "";
	$date = "";
	$phone = "";
	$addr = "";
	$acount = "";
	$bank = "";
	$errors = array();
	// $errors1 = array();
	$db = mysqli_connect('localhost', 'root', '', 'sell_web');
	if (!$db) {
    	die("Connection failed: " . mysqli_connect_error());
	}
	if( isset($_POST['signup'])){
		$custom_name = mysql_real_escape_string($_POST['username']);
		$sex = mysql_real_escape_string($_POST['select_sex']);
		// $date = mysql_real_escape_string($_POST['date']);
		$day = mysql_real_escape_string($_POST['select_day']);
		$month = mysql_real_escape_string($_POST['select_month']);
		$year = mysql_real_escape_string($_POST['select_year']);
		$phone = mysql_real_escape_string($_POST['phone']);
		$email = mysql_real_escape_string($_POST['mail']);
		$addr = mysql_real_escape_string($_POST['addr']);
		$acount = mysql_real_escape_string($_POST['acount']);
		$bank = mysql_real_escape_string($_POST['bank']);
		$pass = mysql_real_escape_string($_POST['password']);
		$confirm_password = mysql_real_escape_string($_POST['password_confirm']);
		if( empty($custom_name)){
			array_push($errors, "Không để trống tên tài khoản");
		}
		if(empty($phone)){
			array_push($errors, "Không để trống số điện thoại");
		}
		if(empty($email)){
			array_push($errors, "Không để trống email");
		}
		if(empty($day)){
			array_push($errors, "Không để trống ngày");
		}
		if(empty($month)){
			array_push($errors, "Không để trống tháng");
		}
		if(empty($year)){
			array_push($errors, "Không để trống năm");
		}
		if(empty($acount)){
			array_push($errors, "Không được để trống số tài khoản");
		}
		if(empty($bank)){
			array_push($errors, "Không để trống tên ngân hàng");
		}
		if(empty($pass)){
			array_push($errors, "Bạn cần nhập mật khẩu");
		}
		if(empty($confirm_password)){
			array_push($errors, "Bạn cần xác nhận mật khẩu");
		}
		if($pass != $confirm_password){
			array_push($errors, "Mật khẩu xác nhận không khớp");
		}
		if(count($errors) == 0){
			$pass1 = $pass;
			$d=mktime($month, $day, $year);
			$date = date("Y-m-d", $d);
			$sql1 = "INSERT INTO customer (cust_name, cust_sex, cust_date, cust_phone, cust_email, cust_addr, cust_account, cust_bank, cust_pass) VALUES ('$custom_name','$sex','$date','$phone','$email','$addr','$account', '$bank','$pass1')";
			mysqli_query($db, $sql1);
			header('location: mobie_web.php');
			$_SESSION['username'] = $custom_name;
		}
	}
	if( isset($_POST['login'])){
		$custom_name = mysql_real_escape_string($_POST['username']);
		$pass = mysql_real_escape_string($_POST['password']);
		if(empty($custom_name)){
			array_push($errors, "Bạn cần điền tên tài khoản");
		}
		if(empty($pass)){
			array_push($errors, "Bạn cần nhập mật khẩu");
		}
		if(count($errors) == 0){
			$pass2 = $pass;
			$sql2 = "SELECT * FROM customer WHERE cust_name = '$custom_name' AND cust_pass='$pass2'";
			$result = mysqli_query($db,$sql2);
			if(mysqli_num_rows($result) == 1){
				$_SESSION['username'] = $custom_name;
				header('location: mobie_web.php');
			}else{
				array_push($errors, "Tên đăng nhập hoặc mật khẩu không đúng");
				header('location: login.php');
			}
		}
	}
	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location: mobie_web.php');
	}
?>