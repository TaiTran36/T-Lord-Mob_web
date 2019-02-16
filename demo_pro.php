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
    <link rel="stylesheet" type="text/css" href="mobie.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">
    	table, td, th {  
		  border: 1px solid #ddd;
		  text-align: left;
		}

		table {
		  border-collapse: collapse;
		  width: 100%;
		}

		th, td {
		  padding: 15px;
		}
    </style>
</head>
<body>
	<?php include('header_custom.php'); ?>
	<?php include('server/server.php'); ?>
	<br>
	<div class="col-sm-12">
		<table>
		  <tr>
		  	<th>id</th>
		    <th>Name_product</th>
		    <th>Name_company</th>
		    <th>price_now</th>
		    <th>sale</th>
		    <th>price_old</th>
		    <th>price_now</th>
		  </tr>
		  <!-- <tr>
		    <td>Peter</td>
		    <td>Griffin</td>
		    <td>$100</td>
		  </tr>
		  <tr>
		    <td>Lois</td>
		    <td>Griffin</td>
		    <td>$150</td>
		  </tr>
		  <tr>
		    <td>Joe</td>
		    <td>Swanson</td>
		    <td>$300</td>
		  </tr>
		  <tr>
		    <td>Cleveland</td>
		    <td>Brown</td>
		    <td>$250</td>
		  </tr> -->
		  <?php 
		  		$res = mysqli_query($connect, $sql);
		  		if($res->num_rows > 0){
		  			$i = 1;
		  			while($row = mysqli_fetch_array($res)){
		  				echo "<tr>";
		  				echo "<td>".$i."</td>";
		  				echo "<td>".$row["phone_name"]."</td>";
		  				echo "<td>".$row["phone_company"]."</td>";
		  				echo "<td>".$row["phone_price_init"]."</td>";
		  				echo '<td> <img src="data:image/jpeg;base64,'.base64_encode( $row["phone_img_full"] ).'"/> </td>';
		  				echo "</tr>";
		  				$i++;
		  			}
		  		}
		  		else{
		  			echo "0 result";
		  		}
		   ?>
		</table>
	</div>
</body>
</html>

