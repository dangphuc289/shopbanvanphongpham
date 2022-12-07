<?php
function getTotal($propName,$tableName,$key)
{
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password ,'nhasach');

    $query="";
    switch ($key) {
        case 'count':
            $query=" SELECT COUNT($propName) as 'quality' FROM $tableName";
            break;
            case 'sum':
            $query=" SELECT SUM($propName) as 'quality' FROM $tableName";
            break;
        default:
           return 0;
    }
    $result=mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    $maSP=$row["quality"];
    return $maSP;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="home.css">
    <title>Back-End</title>
</head>

<body>
    <div class="header">
        <div class="menu">
            <div class="menu-logo">
                <img src="./img/278693747_1534799610269099_7311631016439999847_n.png" alt="Ảnh" class="logo">
            </div>
            <div class="menu-list">
                <ul class="list">
                    <li class="item"><a href="">Tổng Quan</a></li>
                    <li class="item"><a href="../QLSanPham/index.php">Sản Phẩm</a></li>
                    <li class="item"><a href="../QLKhachHang/index.php">Khách Hàng</a></li>
                    <li class="item"><a href="../QLNhaSX/index.php">Nhà Sản Xuất</a></li>
                    <li class="item"><a href="../QLTheLoai/index.php">Thể Loại</a></li>
                    <li class="item"><a href="../QLDonHang/index.php">Đơn Hàng</a></li>
                    <li class="item"><a href="../PageHome/Home.php">Trang Chủ</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="main-product">
            <div class="product-img">
            <a href="../QLSanPham/index.php">
                <img src="./img/Screenshot 2022-05-19 225352.png" alt="Anh" class="img">
            </a>          
            </div>
            <div class="product-number">
                <?php
                     echo  getTotal("soLuongSP","sanpham","sum");
                ?>
            </div>
            <a class="product-titel" href="../QLSanPham/index.php">Sản Phẩm</a>
        </div>

        <div class="main-product">
            <div class="product-img">
            <a href="../QLKhachHang/index.php">
                <img src="./img/Screenshot 2022-05-19 235434.png" alt="Anh" class="img">
            </a>                
            </div>
            <div class="product-number"><?php
                     echo  getTotal("maKH","khachhang","count");
                ?></div>
            <a class="product-titel" href="../QLKhachHang/index.php">Khách Hàng</a>
        </div>

        <div class="main-product">
            <div class="product-img">
            <a href="../QLNhaSX/index.php">
                <img src="./img/nhasx.jpg" alt="Anh" class="img">
            </a>               
            </div>
            <div class="product-number"><?php
                     echo  getTotal("maNSX","nhasanxuat","count");
                ?></div>
            <a class="product-titel" href="../QLNhaSX/index.php">Nhà Sản Xuất</a>
        </div>

        <div class="main-product">
            <div class="product-img">
            <a href="../QLTheLoai/index.php">
                <img src="./img/theloai.jpg" alt="Anh" class="img">
            </a>                
            </div>
            <div class="product-number"><?php
                     echo  getTotal("maTL","theloai","count");
                ?></div>
            <a class="product-titel" href="../QLTheLoai/index.php">Thể Loại</a>
        </div>

        <div class="main-product">
            <div class="product-img">
            <a href="../QLDonHang/index.php">
                <img src="./img/1737_tmdt.jpg" alt="Anh" class="img">
            </a>                
            </div>
            <div class="product-number"><?php
                     echo  getTotal("maDH","donhang","count");
                ?></div>
            <a class="product-titel" href="../QLDonHang/index.php">Đơn Hàng</a>
        </div>
    </div>
</body>
</html>