<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="> 
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
            margin: auto;
        }
        
        .menu-search>input {
            width: 300px;
            line-height: 25px;
        }
        
        .menu-search>button {
            line-height: 25px;
            width: 30px;
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
                <img src="../img/logo.jpg" alt="???nh" class="logo">
            </div>
            <div class="menu-list">
                <ul class="list">
                    <li class="item"><a href="../HomeBack-End/home.php">T???ng quan</a></li>
                    <li class="item"><a href="../QLSanPham/index.php">S???n ph???m</a></li>
                    <li class="item"><a href="../QLKhachHang/index.php">Kh??ch h??ng</a></li>
                    <li class="item"><a href="../QLNhaSX/index.php">Nh?? S???n Xu???t</a></li>
                    <li class="item"><a href="../QLTheLoai/index.php">Th??? Lo???i</a></li>
                    <li class="item"><a href="../QLDonHang/index.php">????n h??ng</a></li>
                    <li class="item"><a href="../PageHome/Home.php">Trang ch???</a></li>
                </ul>
            </div>
           
        </div>
    </div>
</body>
</html>

<?php
    require_once 'config/db.php';

    $sql = "SELECT * FROM donhang inner join khachhang on donhang.maKH = khachhang.maKH inner join sanpham on donhang.maSP = sanpham.maSP";
    $query = mysqli_query($connect, $sql);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h1>DANH S??CH ????N H??NG</h1>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>                        
                        <th>T??n S???n Ph???m</th>
                        <th>???nh S???n Ph???m</th>                        
                        <th>Gi??</th>
                        <th>Ng??y </th>
                        <th>S??? L?????ng</th>
                        <th>Ng?????i ?????t</th>
                        <th>Th??nh Gi??</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $i = 1;
                        while($row = mysqli_fetch_assoc($query)) {?>
                            <tr>
                                <td><?php echo $i++; ?></td>   
                                <td><?php echo $row['tenSP']; ?></td>                            
                                <td>
                                    <img style="width: 100px;" src="img/<?php echo $row['image']; ?>" alt="">
                                </td>
                                <td><?php echo number_format($row['gia'],0,' ',',')  ?></td>
                                <td><?php echo $row['ngay']; ?></td>
                                <td><?php echo $row['soLuong']; ?></td>
                                <td><?php echo $row['tenKH']?></td>
                                <td><?php 
                                    $thanhGia = $row['gia'] * $row['soLuong'];
                                    echo number_format($thanhGia,0,' ',',');

                                 ?></td>
                                <td>
                                <a style="text-decoration: none; margin-right: 20px;" href="index.php?page_layout=chitiet&id=<?php echo $row['maSP']; ?>">Chi Ti???t</a>
                                </td>                               
                            </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
