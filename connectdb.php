<?php
    /*Kết nối máy chủ MySQL. Máy chủ có cài đặt mặc định (user là 'root' và không có mật khẩu)*/
    $link = mysqli_connect("localhost", "root", "", "qlbh");
 
    // Kểm tra kết nối
    if ($link === false) {
        die("ERROR: Không thể kết nối. " . mysqli_connect_error());
    }
 
    // Thực hiện câu lệnh SELECT
    $sql = "SELECT  TenSanPham,GiaTien,Anh,MaDo FROM dothethao";
    

    
    echo "<ul class='product_list'  text-align: center;'>";
    
    if ($result = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="container">
                    <div class="card">
                        <img  style="width: 248px; height: 170px" src="image/<?php echo $row['Anh']; ?>">
                        <br>
                        <?php echo $row['TenSanPham']; ?><br>
                        <?php echo number_format($row['GiaTien'], 0, ',', '.') . "vnđ"; ?> <br>
                        <a href="cart.php?MaDo=<?php echo $row ['MaDo'] ?>" class="buy-btn" title="Mua hàng"> Mua hàng</a>
                    </div>
                </div>
                <?php
            }
            // Giải phóng bộ nhớ của biến
            mysqli_free_result($result);
        } else {
            ?>
            <tr>
                <td colspan="5">No Records.</td>
            </tr>
            <?php
        }
    } else {
        echo "ERROR: Không thể thực thi câu lệnh $sql. " . mysqli_error($link);
    }

    
    // Đóng kết nối
    mysqli_close($link);
    
    ?>