<?php
include('config.php');
session_start();

if(isset($_GET['MaDo'])){
$MaDo = $_GET['MaDo'];
}

$query = mysqli_query($conn,"SELECT * FROM dothethao WHERE MaDo = $MaDo");
if($query){
    $product = mysqli_fetch_assoc($query);
}
$item = [
    'MaDo'=>$product['MaDo'],
    'TenSanPham'=>$product['TenSanPham'],
    'Anh'=>$product['Anh'],
    'GiaTien'=>$product['GiaTien'],
    'quantity'=>1
];
$_SESSION['cart'][$MaDo] = $item;

echo "<pre>";
print_r($_SESSION['cart']);
?>


