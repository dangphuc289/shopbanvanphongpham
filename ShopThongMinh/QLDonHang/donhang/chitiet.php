<?php
    $id = $_GET['id'];

    $sql_SP = "SELECT * FROM sanpham where maSP = $id";
    $query_SP = mysqli_query($connect, $sql_SP);
    $row_SP = mysqli_fetch_assoc($query_SP);

    $sql_KH = "SELECT * FROM khachhang";
    $query_KH = mysqli_query($connect, $sql_KH);
    $row_KH = mysqli_fetch_assoc($query_KH);

    $sql = "SELECT * FROM donhang inner join khachhang on donhang.maKH = khachhang.maKH where maSP = $id";
    $query = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($query);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>CHI TIẾT SẢN PHẨM</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="">Tên Sản Phẩm</label>
                    <input type="text" name="tenSP" class="form-control" required value="<?php echo $row_SP['tenSP']; ?>">
                </div>
                
                <div class="form-group">
                    <label>Ảnh Sản Phẩm</label>
                    <img style="width: 100px;" src="img/<?php echo $row_SP['image']; ?>" alt="">
                </div>

                <div class="form-group">
                    <label for="">Giá</label>
                    <input type="number" name="gia" class="form-control" required value="<?php echo $row_SP['gia']; ?>">
                </div>

                <div class="form-group">
                    <label for="">Ngày Mua</label>
                    <input type="date" name="ngay" class="form-control" required value="<?php echo $row['ngay']; ?>">
                </div>

                <div class="form-group">
                    <label for="">Mô Tả</label>
                    <input type="text" name="moTa" class="form-control" required value="<?php echo $row_SP['moTa']; ?>">
                </div>

                <div class="form-group">
                    <label for="">Số Lượng Mua</label>
                    <input type="number" name="soLuong" class="form-control" required value="<?php echo $row['soLuong']; ?>">
                </div>

                <div class="form-group">
                    <label for="">Tổng giá tiền</label>
                    <input type="text"class="form-control" required value="<?php 
                                    $thanhGia = $row_SP['gia'] * $row['soLuong'];
                                    echo number_format($thanhGia,0,' ',',');
                                 ?>">
                </div>
                <div class="form-group">
                    <label for="">Người Mua</label>
                    <input type="text"class="form-control" required value="<?php echo $row_KH['tenKH']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text"class="form-control" required value="<?php echo $row_KH['mail']; ?>">
                </div>

                <button name="sbm" class="btn btn-success" type="submit">
                    <a href="index.php?page_layout=danhsach">
                        Quay Lại
                    </a>
                </button>
            </form>
        </div>
    </div>
</div>

