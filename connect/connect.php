<?php
  $link = mysqli_connect("localhost", "root", "", "qlbh");
 
  // Kểm tra kết nối
  if ($link === false) {
      die("ERROR: Không thể kết nối. " . mysqli_connect_error());
  }
  ?>