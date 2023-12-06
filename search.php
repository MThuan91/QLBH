<?php
	include('config.php');

	if(isset($_POST['btn'])) {
		$search = $_POST['search'];
	} else{
		echo $search = false;
	}
	echo "<ul class='product_list'  text-align: center;'>";
	$sql = "SELECT * FROM dothethao WHERE TenSanPham LIKE '%$search%' ";
	
	$result = mysqli_query($conn, $sql);

	while( $row = mysqli_fetch_array($result) ) { ?>
		
		<div class="container">
                    <div class="card">
                        <img  style="width: 248px; height: 170px" src="image/<?php echo $row['Anh']; ?>">
                        <br>
                        <?php echo $row['TenSanPham']; ?><br>
                        <?php echo number_format($row['GiaTien'], 0, ',', '.') . "vnđ"; ?> <br>
                        <a href="giohang.php" class="buy-btn" title="Mua hàng"> Mua hàng</a>
                    </div>
                </div>

		
	<?php } ?>