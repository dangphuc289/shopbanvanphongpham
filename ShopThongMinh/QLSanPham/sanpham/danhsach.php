<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./font/themify-icons/themify-icons.css">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html {
            font-size: 62.5%;
            line-height: 1.6rem;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }
        
        .menu {
            display: flex;
            margin: 20px;
        }
        
        .menu-logo {
            width: 200px;
        }
        
        .logo {
            width: 100%;
        }
        
        .menu-list {
            margin: auto;
        }
        
        .list {
            display: flex;
            list-style: none;
            line-height: 20px;
        }
        
        .item>a {
            display: block;
            color: black;
            margin: 30px 30px;
            text-decoration: none;
            font-size: 600;
            font-size: 1.7rem;
        }
        
        .item:hover {
            background-color: rgb(131, 128, 126);
        }
        
        .main {
            display: flex;
            width: 80%;
            margin: auto;
        }
        
        .img {
            width: 400px;
            height: 400px;
        }
        
        .main-product {
            border: 1px solid black;
            margin: auto;
            text-align: center;
            height: 600px;
        }
        
        .product-number {
            font-size: 10rem;
            margin: 50px 0;
        }
        
        .product-titel {
            font-size: 2rem;
            margin: 20px;
        }
        
        .menu-search {
            margin-left: 45%;
            margin-bottom: 60px;           
        }
        
        .menu-search form {
            width: 300px;
            height: 40px;
        }     
        
        .menu-search form input {
            width: 100%;
            height: 100%;
            font-size: 15px;
            outline: none;
            padding-left: 5px;
        }

        .container-fluid {
            font-size:17px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="menu">
            <div class="menu-logo">
                <img src="../img/logo.jpg" alt="Ảnh" class="logo">
            </div>
            <div class="menu-list">
                <ul class="list">
                    <li class="item"><a href="../HomeBack-End/home.php">Tổng Quan</a></li>
                    <li class="item"><a href="">Sản Phẩm</a></li>
                    <li class="item"><a href="../QLKhachHang/index.php">Khách Hàng</a></li>
                    <li class="item"><a href="../QLNhaSX/index.php">Nhà Sản Xuất</a></li>
                    <li class="item"><a href="../QLTheLoai/index.php">Thể Loại</a></li>
                    <li class="item"><a href="../QLDonHang/index.php">Đơn Hàng</a></li>
                    <li class="item"><a href="../PageHome/Home.php">Trang Chủ</a></li>
                </ul>
            </div>
        </div>

        <div class="menu-search">
            <form action="index.php" method ="GET">
                <input name="search" type="text" placeholder="Tìm kiếm">
            </form>
        </div>
    </div>
</body>
</html>
<?php
    $sql = "SELECT * FROM sanpham inner join theloai on sanpham.maTL = theloai.maTL";
    $sql = "SELECT * FROM sanpham inner join nhasanxuat on sanpham.maNSX = nhasanxuat.maNSX";
    $query = mysqli_query($connect, $sql);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h1>DANH SÁCH SẢN PHẨM</h1>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>                        
                        <th>Tên Sản Phẩm</th>
                        <th>Ảnh Sản Phẩm</th>                        
                        <th>Giá</th>
                        <th>Ngày Tạo</th>
                        <th>Mô Tả</th>
                        <th>Số Lượng</th>
                        <th>Thể Loại</th>
                        <th>Nhà Sản Xuất</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>

                <tbody>
                    <?php                            
                         if(isset($_GET['search'])){
                            $search = $_GET['search'];
                            $querySearch = "SELECT * from sanpham inner join theloai on sanpham.maTL = theloai.maTL inner join nhasanxuat on sanpham.maNSX = nhasanxuat.maNSX where '$search' is not null and tenSP like CONCAT ('%$search%') or '$search' is null  ";
                            $dataSearch = mysqli_query($connect,$querySearch);
                         }
                         else{
                            $dataSearch = mysqli_query($connect,$sql);
                         }

                        $i = 1;
                        while($row = mysqli_fetch_assoc($dataSearch)) {?>
                            <tr>
                                <td><?php echo $i++; ?></td>   
                                <td><?php echo $row['tenSP']; ?></td>                             
                                <td>
                                    <img style="width: 100px;" src="img/<?php echo $row['image']; ?>" alt="">
                                </td>
                                <td><?php echo $row['gia']; ?></td>
                                <td><?php echo $row['ngay']; ?></td>
                                <td style="width: 300px;"><?php echo $row['moTa']; ?></td>
                                <td><?php echo $row['soLuongSP']; ?></td>
                                <td><?php echo $row['maTL']; ?></td>
                                <td><?php echo $row['tenNSX']; ?></td>
                                <td>
                                    <a style="text-decoration: none; margin-right: 20px;" href="index.php?page_layout=sua&id=<?php echo $row['maSP']; ?>">Sửa</a>

                                    <a onclick="return Del('<?php echo $row['tenSP']; ?>')" style="text-decoration: none;" href="index.php?page_layout=xoa&id=<?php echo $row['maSP']; ?>">Xóa</a>
                                </td>                               
                            </tr>
                        <?php } ?>
                </tbody>
            </table>
            <a style="font-size: 17px;" class="btn btn-primary" href="index.php?page_layout=them">Thêm Mới</a>
        </div>
    </div>
</div>

<script>
    function Del(name) {
        return confirm("Bạn có chắc muốn xóa sản phẩm: " + name + "?");
    }
</script>