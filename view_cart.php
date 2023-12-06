 <?php 
 session_start();
//	include "config.php";	

	$cart = (isset($_SESSION['cart']))?$_SESSION['cart']:[];		
	// echo"<pre>";
	// print_r($cart);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Php Cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  

<div class="container">

  <div class="row">
			<h1>Giỏ hàng</h1><hr>
			<a href='SenDaSG.php'>Home</a>
			<table class='table'>	
			<thead>
			<tr>
					<th>STT</th>
					<th>Ảnh sản phẩm</th>
					<th>Tên sản phẩm</th>
					<th>Số lượng</th>
					<th>Gía sản phẩm</th>
					<th>Thành tiền</th>
					<th>Remove</th>
				</tr>	
				</thead>
				 <tbody>		
					<?php $total_price=0; ?>
					<?php foreach($cart as $keys => $value):
					$total_price += ($value['GiaTien']*$value['quantity']);
						?>
					<tr>
						<td><?php echo $keys ++ ?></td>
						<td><img src="../QLBH/image/<?php echo $value['Anh']; ?>" width=100px></td>
						<td><?php echo $value['TenSanPham'] ?></td>
						<td>
						<form action="cart.php">
						<input type="hidden" name="action" value="update">
						<input type="hidden" name="MaDo" value="<?php echo $value['MaDo']?>">
						<input type="text" name="quantity" value="<?php echo $value['quantity'] ?>">
						<button type="submit">Cập nhật</button>				      
						</form>
						</td>
						<td><?php echo $value['GiaTien'] ?></td>
						<td><?php echo number_format($value['GiaTien']*$value['quantity'])?></td>
						<td><a href="cart.php?MaDo=<?php echo $value['MaDo']?>&action=delete" class="btn btn-danger">xóa</a></td>
				    </tr>	
					<?php endforeach?>
					<tr>
						<td>Tổng</td>
						<td colspan="6" class="text-center bg-info"><?php echo number_format($total_price)?>VNĐ</td>
					</tr>
				
				</tbody>			 
			</table>
			
  </div>
</div>

</body>
</html>
