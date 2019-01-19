<?php include('server/server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<?php include("header_custom.php"); ?>
	<div class="container">
		<div class="col-sm-12" style="height: 800px;">
			<div class="row">
				<div class="header_form" style="margin: 0 20%;text-align: center;">
					<h1>ĐĂNG NHẬP</h1>
				</div>
				<div class="col-sm-12 login_form" style="margin: 50px 0%;text-align: center;">
					<form  action="login.php" method="post">
						<?php include("errors/errors.php"); ?>
						<div class="col-1">
							<div class="form-group">
								<label >Tên tài khoản (*)</label>
								<input type="text" class="form-control" id="name" name="username" placeholder="Tên tài khoản">
							</div>
							<div class="form-group">
								<label>Mật khẩu (*)</label>
								<input type="password" id="pass" class="form-control" name="password">
							</div>
						</div>
						<div class="col-2">
							<div class="form-group">
            				<p class="sign"><b>Đăng nhập bằng </b></p>
            				<div class="sign_with_soci">
								<button type="submit" name="face" class="btn btn-lg" id="face">
									<i class="fa fa-facebook"></i>
								 Facebook</button>
								 <button type="submit" name="gmail" class="btn btn-lg" id="gmail">
									<i class="fa fa-google-plus"></i>
								 Google</button>
							</div>
        				</div>
						</div>
						<div class="form-group" id="submit">
            				<button type="submit" name="login" class="btn btn-primary btn-lg">Đăng nhập</button>
            				<p id="sign">Bạn chưa có tài khoản. Đăng kí <a href="signup.php" style="color: blue; text-decoration: none;"> tại đây.</a></p>
        				</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>