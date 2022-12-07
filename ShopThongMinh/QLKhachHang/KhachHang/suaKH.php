<?php
    $id = $_GET['id'];
    $sql_up = "SELECT * FROM khachhang where maKH = $id";
    $query_up = mysqli_query($conn, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);
    if (isset($_POST['sbm'])) {
        $tenKH = $_POST['tenKH'];
        $diaChi = $_POST['diaChi'];
        $soDT = $_POST['soDT'];
        $mail = $_POST['mail'];
        $matKhau = $_POST['matKhau'];

        $sql = "UPDATE khachhang SET tenkh = '$tenKH',diaChi = '$diaChi',soDT = '$soDT',mail ='$mail',matKhau = '$matKhau' where maKH = '$id'";
        $query = mysqli_query($conn, $sql);
        header('location: index.php?page_playout=danhsach');
    }
?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Sửa Khách Hàng</h2>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên Khách Hàng</label>
                    <input type="text" name="tenKH" class="form-control" required value="<?php echo $row_up['tenKH']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="diaChi" class="form-control" required value="<?php echo $row_up['diaChi']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="number" name="soDT" class="form-control" required value="<?php echo $row_up['soDT']; ?>">
                </div>
                <div class="form-group">
                    <label for="">mail</label>
                    <input type="email" name="mail" class="form-control" required value="<?php echo $row_up['mail']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Mật Khẩu</label>
                    <input type="text" name="matKhau" class="form-control" required value="<?php echo $row_up['matKhau']; ?>">
                </div>
                <button name="sbm" class="btn">Sửa</button>
            </form>
        </div>
    </div>
</div>
</body>