<?php
    $id = $_GET['id'];
    $sql_up = "SELECT * FROM nhasanxuat where maNSX = $id";
    $query_up = mysqli_query($conn, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);
    if (isset($_POST['sbm'])) {
        $tenNSX = $_POST['tenNSX'];
        $diaChi = $_POST['diaChi'];
        $soDT = $_POST['soDT'];

        $sql = "UPDATE nhasanxuat SET tennsx = '$tenNSX',diaChi = '$diaChi',soDT = '$soDT' where maNSX = '$id'";
        $query = mysqli_query($conn, $sql);
        header('location: index.php?page_playout=danhsach');
    }
?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Sửa Nhà Sản Xuất</h2>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên Nhà Sản Xuất</label>
                    <input type="text" name="tenNSX" class="form-control" require values="<?php echo $row_up['tenNSX']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="diaChi" class="form-control" require values="<?php echo $row_up['diaChi']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="number" name="soDT" class="form-control" require values="<?php echo $row_up['soDT']; ?>">
                </div>
                <button name="sbm" class="btn">Sửa</button>
            </form>
        </div>
    </div>
</div>
</body>