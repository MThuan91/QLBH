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
  <title>Sen Đá SG</title>
</head>

<header>
  <img src="./image/Screenshot_2023-03-10_122646-removebg-preview.png" alt="">
  <h1>Shop Sen Đá</h1>
  <div class="topnav">
    <a class="active" href="SenDaSG.php">Trang chủ</a>
    <a href="SanPham.php">Sản Phẩm</a>
    <a href="giohang.php">Giỏ Hàng</a>
    <a href="#footer">Hỗ Trợ</a>
    <a href="register_form.php">Đăng Ký</a>
    <div class="search-form">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><ion-icon name="search-outline"></ion-icon></button>
    </div>
  </div>
</header>


<body>

  <div class="nen"><img src="" alt="" srcset=""></div>

  <div class="connect">
    <?php
    if (empty(session_id()) && !headers_sent()) {
      session_start();
    }
    include("search.php");
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