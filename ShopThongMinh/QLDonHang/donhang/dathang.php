<?php
session_start();
if(!isset($_SESSION["product_cart"]))
$_SESSION["product_cart"]=[];

//Kết nối csdl
$connect = mysqli_connect('localhost', 'root', '', 'nhasach');
if($connect) {
    mysqli_query($connect, "SET NAMES 'UTF8'");
}else {
    echo "Ket noi that bai";
}



if(isset($_POST["add-to-card"]) && $_POST["add-to-card"]){
    $customerId=$_SESSION["CustomerId"];
    $quantity=$_POST["quantity"];
    $id=$_POST["productId"];
    $date=date("Y-m-d");
    $status="Đang Giao";
    $sql ="INSERT into donhang values (0,'$id','$date','$status','$customerId','$quantity')";
    mysqli_query($connect,$sql);
    header("Location: /ShopThongMinh/CuaHang/but.php");
}
?>
