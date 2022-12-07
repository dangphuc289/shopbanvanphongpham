<?php
    if(isset($_POST['sbm'])){
    
        $tenNSX = $_POST['tenNSX'];
        $diaChi = $_POST['diaChi'];
        $soDT = $_POST['soDT'];

        $sql = "INSERT INTO nhasanxuat (maNSX,tenNSX,diaChi,soDT) VALUES(0,'$tenNSX','$diaChi','$soDT')";
        $query = mysqli_query($conn, $sql);
        header('location: index.php?page_playout=danhsach');
}    
?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Thêm Nhà Sản Xuất</h2>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên Nhà Sản Xuất</label>
                    <input type="text" name="tenNSX" class="form-control" require>
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="diaChi" class="form-control" require>
                </div>
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="number" name="soDT" class="form-control" require>
                </div>
                <button name="sbm" class="btn">Thêm</button>
            </form>
        </div>
    </div>
</div>
</body>