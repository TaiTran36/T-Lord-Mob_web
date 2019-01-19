<?php include('server/server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="signup.css">
    <link rel="stylesheet" type="text/css" href="errors.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php include("header_custom.php"); ?>
	<div class="container">
		<div class="col-sm-12" style="height: 800px;">
			<div class="row">
				<div class="header_form" style="margin: 0 20%;text-align: center;">
					<h1>ĐĂNG KÍ TÀI KHOẢN</h1>
				</div>
				<div class="col-sm-12 signup_form" style="margin: 50px 0% 0% 0%;text-align: center;">
					<form action="signup.php" method="post">
						<?php include('errors/errors.php'); ?>
						<div class="col-1">
							<div class="form-group">
								<label>Tên tài khoản (*)</label>
								<input type="text" class="form-control" name="username" placeholder="Tên tài khoản">
							</div>
							<div class="form-group">
								<label>Giới tính</label>
								<select id="sex" name="select_sex" class="form-control">
					      			<option value="Nam">Nam</option>
					      			<option value="Nữ">Nữ</option>
					      		</select>	
							</div>
							<div class="form-group">
						      	<div class="col-sm-2" >
									<label>Ngày</label>
									<select id="day" name="select_day" class="form-control">
						      			<option value="day1">1</option>
						      			<option value="day2">2</option>
						      			<option value="day3">3</option>
						      			<option value="day4">4</option>
						      			<option value="day5">5</option>
						      			<option value="day6">6</option>
						      			<option value="day7">7</option>
						      			<option value="day8">8</option>
						      			<option value="day9">9</option>
						      			<option value="day10">10</option>
						      			<option value="day11">11</option>
						      			<option value="day12">12</option>
						      			<option value="day13">13</option>
						      			<option value="day14">14</option>
						      			<option value="day15">15</option>
						      			<option value="day16">16</option>
						      			<option value="day17">17</option>
						      			<option value="day18">18</option>
						      			<option value="day19">19</option>
						      			<option value="day20">20</option>
						      			<option value="day21">21</option>
						      			<option value="day22">22</option>
						      			<option value="day23">23</option>
						      			<option value="day24">24</option>
						      			<option value="day25">25</option>
						      			<option value="day26">26</option>
						      			<option value="day27">27</option>
						      			<option value="day28">28</option>
						      			<option value="day29">29</option>
						      			<option value="day30">30</option>
						      			<option value="day31">31</option>
							      	</select>
						      	</div>
						      	<div class="col-sm-2">
						      		<label>Tháng</label>
							      	<select id="month" name="select_month" class="form-control">
						      			<option value="month1">1</option>
						      			<option value="month2">2</option>
						      			<option value="month3">3</option>
						      			<option value="month4">4</option>
						      			<option value="month5">5</option>
						      			<option value="month6">6</option>
						      			<option value="month7">7</option>
						      			<option value="month8">8</option>
						      			<option value="month9">9</option>
						      			<option value="month10">10</option>
						      			<option value="month11">11</option>
						      			<option value="month12">12</option>
							      	</select>	
						      	</div>
						      	<div class="col-sm-2">
						      		<label>Năm</label>
							      	<select id="year" name="select_year" class="form-control">
						      			<option value="year1">1997</option>
						      			<option value="year2">1939</option>
						      			<option value="year3">1940</option>
						      			<option value="year4">1941</option>
						      			<option value="year5">1942</option>
						      			<option value="year6">1943</option>
						      			<option value="year7">1944</option>
						      			<option value="year8">1945</option>
						      			<option value="year9">1946</option>
						      			<option value="year10">1947</option>
						      			<option value="year11">1948</option>
						      			<option value="year12">1949</option>
						      			<option value="year13">1950</option>
						      			<option value="year14">1951</option>
						      			<option value="year15">1952</option>
						      			<option value="year16">1953</option>
						      			<option value="year17">1954</option>
						      			<option value="year18">1955</option>
						      			<option value="year19">1956</option>
						      			<option value="year20">1957</option>
						      			<option value="year21">1958</option>
						      			<option value="year22">1959</option>
						      			<option value="year23">1960</option>
						      			<option value="year24">1961</option>
						      			<option value="year25">1962</option>
						      			<option value="year26">1963</option>
						      			<option value="year27">1964</option>
						      			<option value="year28">1965</option>
						      			<option value="year29">1966</option>
						      			<option value="year30">1967</option>
						      			<option value="year31">1968</option>
						      			<option value="year1">1969</option>
						      			<option value="year2">1970</option>
						      			<option value="year3">1971</option>
						      			<option value="year4">1972</option>
						      			<option value="year5">1973</option>
						      			<option value="year6">1974</option>
						      			<option value="year7">1975</option>
						      			<option value="year8">1976</option>
						      			<option value="year9">1977</option>
						      			<option value="year10">1978</option>
						      			<option value="year11">1979</option>
						      			<option value="year12">1980</option>
						      			<option value="year13">1981</option>
						      			<option value="year14">1982</option>
						      			<option value="year15">1983</option>
						      			<option value="year16">1984</option>
						      			<option value="year17">1985</option>
						      			<option value="year18">1986</option>
						      			<option value="year19">1987</option>
						      			<option value="year20">1988</option>
						      			<option value="year21">1989</option>
						      			<option value="year22">1990</option>
						      			<option value="year23">1991</option>
						      			<option value="year24">1992</option>
						      			<option value="year25">1993</option>
						      			<option value="year26">1994</option>
						      			<option value="year27">1995</option>
						      			<option value="year28">1996</option>
						      			<option value="year29">1997</option>
						      			<option value="year30">1998</option>
						      			<option value="year31">1999</option>
						      			<option value="year1">2000</option>
						      			<option value="year2">2001</option>
						      			<option value="year3">2002</option>
						      			<option value="year4">2003</option>
						      			<option value="year5">2004</option>
						      			<option value="year6">2005</option>
						      			<option value="year7">2006</option>
							      	</select>
						      	</div>
							</div>
							<div class="form-group">
								<label>Điên thoại</label>
								<input type="text" class="form-control" name="phone" placeholder="Nhập số điện thoại" id="phone">
							</div>
							<div class="form-group">
								<label>Email (*)</label>
								<input type="email" id="mail" class="form-control" name="mail" placeholder="Nhập mail">
							</div>
						</div>
						<div class="col-2">
							<div class="form-group">
								<label>Địa chỉ (*)</label>
								<input type="text" id="addr"class="form-control" name="addr" placeholder="Nhập địa chỉ">
							</div>
							<div class="form-group">
								<label>Số tài khoản (*)</label>
								<input type="text" class="form-control" id="acount" name="acount" placeholder="Nhập số tài khoản">
							</div>
							<div class="form-group">
								<label>Tên ngân hàng (*)</label>
								<input type="text" class="form-control" id="bank" name="bank" placeholder="Nhập tên ngân hàng">
							</div>
							<div class="form-group">
								<label>Mật khẩu (*)</label>
								<input type="password" id="pass" class="form-control" name="password">
							</div>
							<div class="form-group">
								<label>Nhập lại mật khẩu (*)</label>
								<input type="password" class="form-control" name="password_confirm">
							</div>
						</div>
						<div class="form-group">
            				<button type="submit" name="signup" class="btn btn-primary btn-lg">Đăng kí</button>
            				<p class="sign">Bạn đã có tài khoản. <a href="login.php" style="color: blue; text-decoration: none;">Đăng nhập</a> ngay</p>
            				<p class="sign">Hoặc đăng kí bằng </p>
        				</div>
					</form>
				</div>
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
	</div>
</body>
</html>