<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CuaHang.css">
    <link rel="stylesheet" href="/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer"/>
    <title>Cửa Hàng</title>
</head>
<?php
    require_once 'data/database.php';
    $sql = "SELECT * FROM sanpham inner join theloai on sanpham.maTL = theloai.maTL";
    $sql = "SELECT * FROM sanpham inner join nhasanxuat on sanpham.maNSX = nhasanxuat.maNSX WHERE maTL= 3";
    $query = mysqli_query($conn, $sql);
?>
<body>
    <header id="header">
        <div>
        <div class="header-infor">
                <div class="email">
                    <li class="list">
                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                    </li>
                    <li class="list list-item">
                        <a href="#">shopthongminh@gmail.com</a>
                    </li>
                    <li class="list">
                        <a href="#"><i class="fa-solid fa-phone"></i>1900 818 020</a>
                    </li>
                </div>
                <div class="languages"><span>Languages</span> <i class="fa-solid fa-chevron-down"></i></div>
            </div>
        </div>

        <div class="header-top">
            <div class="header-logo">
                <img src="../img/logo.jpg" alt="Lỗi hiển thị">
            </div>
            <div class="header-search">
                <div class="header-search-input">
                    <input type="text" class="search-input" placeholder="Nhập để tìm kiếm">

                    <button class="search-btn">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </div>
            <div class="header-top-nav">
                <li class="header-list"><a href="http://localhost/SHOPTHONGMINH/Login/DangNhap.php">Tài Khoản</a></li>
                <li class="header-list"><a href="#">Đơn hàng</a></li>
            </div>
        </div>
        <div class="header-nav">
            <li class="header-menu"><a href="http://localhost/ShopThongMinh/PageHome/Home.php">TRANG CHỦ</a></li>
            <li class="header-menu"><a href="http://localhost/ShopThongMinh/GioiThieu/GioiThieu.php">GIỚI THIỆU</a></li>
            <li class="header-menu"><a href="http://localhost/ShopThongMinh/CuaHang/CuaHang.php">CỬA HÀNG</a></li>
            <li class="header-menu"><a href="http://localhost/ShopThongMinh/LienHe/LienHe.php">LIÊN HỆ</a></li>
        </div>
    </header>
    
    <div class="image">
        <div class="name">
            <h1>CỬA HÀNG</h1>
        </div>
        <img src="../img/a13.jpg" alt="">
    </div>

    <div class="main-product">
        <div class="category">
            <h2 style="font-size: 40px; text-align: center; color: rgb(243, 73, 73);" class="category-heading">Danh Mục</h2>
            <ul class="category-list">
                <li class="category-item"><a href="./Dungcuvanphong.php">Dụng Cụ Văn Phòng</a></li>
                <li class="category-item"><a href="./but.php">Bút</a></li>
                <li class="category-item"><a href="">Tập Sổ</a></li>
                <li class="category-item"><a href="./dodientu.php">Đồ Điện Tử</a></li>
                <li class="category-item"><a href="./dungcuve.php">Dụng Cụ Vẽ</a></li>
            </ul>
        </div>
        <div class="product">
            <div class="product-colum">
            <?php
    
    while($row = mysqli_fetch_assoc($query)) {?>
                <div class="product-row">
                <a href="http://localhost/ShopThongMinh/SanPham/SanPham.php?id=<?php echo $row['maSP']?>">
                        <img src="../img/<?php echo $row['image']?> " alt="Lỗi ảnh" class="product-img">
                    </a>                   
                    <p class="product-introduce "><?php echo $row['tenSP']?></p>
                    <p class="product-price "><?php echo $row['gia']?> ₫</p>
                </div>

                <?php }  ?>    
    </div>
        </div>
    </div>

    <footer>
        <div class="footer-top">
            <div class="img-brand">
                <img src="../img/9-m_scene_default.png" alt="Ảnh">
            </div>
            <div class="img-brand">
                <img src="../img/10-m_scene_default.png" alt="Ảnh">
            </div>
            <div class="img-brand">
                <img src="../img/11-m_scene_default.png" alt="Ảnh">
            </div>
            <div class="img-brand">
                <img src="../img/12-m_scene_default.png" alt="Ảnh">
            </div>
            <div class="img-brand">
                <img src="../img/13-m_scene_default.png" alt="Ảnh">
            </div>

        </div>
        <div class="footer-center">
            <div class="center-address">
                <div class="header-logo">
                    <img src="../img/278693747_1534799610269099_7311631016439999847_n.png" alt="Lỗi hiển thị">
                </div>
                <div class="address">
                    <div class="contact-info">
                        <p> <i class="ti-location-pin"></i> 24 Cầu Giấy, Hà Nội</p>
                        <p><i class="ti-mobile"></i>
                            <a href="tel:1900 818 020"></a> 1900 818 020</p>
                        <p><i class="ti-email"></i>
                            <a href="mailto:shopthongminh@mail.com"></a> shopthongminh@mail.com</p>
                    </div>
                </div>
            </div>
            <div class="center-menu">
                <h4>Menu</h4>
                <ul class="menu-center">
                    <li class="menu-center-list"><a href="#">Trang chủ</a></li>
                    <li class="menu-center-list"><a href="../GioiThieu/GioiThieu.php">Giới thiệu</a></li>
                    <li class="menu-center-list"><a href="../CuaHang/CuaHang.php">Cửa hàng</a></li>
                    <li class="menu-center-list"><a href="../LienHe/LienHe.php">Liên hệ</a></li>
                </ul>
            </div>
            <div class="center-menu">
                <h4>DANH MỤC SẢN PHẨM</h4>
                <ul class="menu-center">
                    <li class="menu-center-list"><a href="../CuaHang/Dungcuvanphong.php">Dụng cụ văn phòng</a></li>
                    <li class="menu-center-list"><a href="../CuaHang/but.php">Bút</a></li>
                    <li class="menu-center-list"><a href="../CuaHang/dungcuve.php">Giấy</a></li>
                    <li class="menu-center-list"><a href="../CuaHang/dodientu.php">Thiết bị</a></li>
                    <li class="menu-center-list"><a href="">Khác</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <div>
        <div class="foot">Bản Quyền Thuộc Nhóm 18 - BTL</div>
    </div>
</body>
</html>