<?php
$username = "root"; // Khai báo username
$password = "";      // Khai báo password
$server   = "localhost";   // Khai báo server
$dbname   = "qlbh";      // Khai báo database

// Kết nối database tintuc
$connect = mysqli_connect($server, $username, $password, $dbname);

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if (!$connect) {
  die("Không kết nối :" . mysqli_connect_error());
  exit();
}
echo "Khi kết nối thành công sẽ tiếp tục dòng code bên dưới đây."
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style5.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Sen Đá </title>
</head>

<header>
  <img src="./image/Screenshot_2023-03-10_122646-removebg-preview.png" alt="">
  <h1>Sen Đá SG</h1>
  <div class="topnav">
    <a class="active" href="SenDaSG.php">Trang chủ</a>
    <a href="SanPham.php">Sản Phẩm</a>
    <a href="view_cart.php">Giỏ Hàng</a>
    <a href="#footer">Hỗ Trợ</a>
    <form action="viewsearch.php" class="search-form" method="post">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit" name="btn"><ion-icon name="search-outline"></ion-icon></button>
    </form>
    <?php
    if (isset($_SESSION['user_name'])) { ?>
      <ul class="cart-buy">
        <a href="#"><ion-icon style="font-size:20px;" name="person-outline"></ion-icon><?php echo  $_SESSION['user_name'] ?>

        
        <a href="logout.php" style="width: 120px;">Đăng xuất</a>
      </ul>
    <?php } else { ?>
      <ul class="cart-buy" style="color: #000;">
        <a href="login_form.php"><ion-icon style="font-size:20px;" name="person-outline"></ion-icon>Đăng nhập</a>
        <a href="register_form.php"><ion-icon style="font-size:20px;" name="person-outline"></ion-icon>Đăng ký</a>
      </ul>
    <?php } ?>
  </div>
</header>

<body>
<div class="side">
  <?php  
  include("side.php");?>
  </div>
  <!-- <div class="nen"><img src="" alt="" srcset=""></div> -->

  <div class="connect">
  
    <?php
    if (empty(session_id()) && !headers_sent()) {
      session_start();
    }
    include("connectdb.php");
    ?>
  </div>


  <div class="clear"></div>
  <div class="advertisement">
    </br>
    <p>KIỂM TRA TRƯỚC KHI THANH TOÁN HOÀN TIỀN 100% NẾU SẢN PHẨM KHÔNG GIỐNG MẪU</p><br>
    <p>TOÀN BỘ SẢN PHẨM CÂY ĐỀU ĐƯỢC CHỤP THỰC TẾ TẠI VƯỜN, GIAO HÀNG ĐẢM BẢO, HƯ GẪY ĐƯỢC ĐỔI TRẢ HOẶC HOÀN TIỀN</p>
  </div>

  <div id="footer">
    <p>Hỗ Trợ: Nguyễn Minh Thuận<br>
    <p>236b Lê Văn Sỹ Phường 1 Quận Tân Bình Tp Hồ Chí Minh</p><br>
    <p>0950080141</p><br>
    <a href="mailto:nmt09012002@gmail.com">nmt09012002@gmail.com</a></p>
  </div>


  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>