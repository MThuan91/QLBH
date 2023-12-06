<?php 
// include'config.php';
include'connect/connect.php';
session_start();
if(isset($_GET['MaDo'])){
    $MaDo = $_GET['MaDo'];
}
$action = (isset($_GET['action']))?$_GET['action']:'add';
$sl = (isset($_GET['quantity']))?$_GET['quantity']:1;
// session_destroy();
// die();
// var_dump($action);
// die();
$query = mysqli_query($link,"SELECT * FROM dothethao WHERE MaDo = $MaDo ");
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

if($action=='add'){
    if(isset($_SESSION['cart'][$MaDo])){
        $_SESSION['cart'][$MaDo]['quantity'] +=1;
    
    } else{
        $_SESSION['cart'][$MaDo] = $item;
    }
}
if($action=='update'){
    $_SESSION['cart'][$MaDo]['quantity'];
}
if($action=='delete'){
    unset($_SESSION['cart'][$MaDo]);
}
header('location:view_cart.php');
// echo"<pre>";
// print_r($_SESSION['cart']);
?>