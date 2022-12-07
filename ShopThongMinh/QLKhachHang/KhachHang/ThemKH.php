<?php
    if(isset($_POST['sbm'])){
    
        $tenKH = $_POST['tenKH'];
        $diaChi = $_POST['diaChi'];
        $soDT = $_POST['soDT'];
        $mail = $_POST['mail'];
        $matKhau = $_POST['matKhau'];

        $sql = "INSERT INTO khachhang (maKH,tenKH,diaChi,soDT,mail,matKhau) VALUES(0,'$tenKH','$diaChi','$soDT','$mail','$matKhau')";
        $query = mysqli_query($conn, $sql);
        header('location: index.php?page_playout=danhsach');
}    
?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Thêm Khách Hàng</h2>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên Khách Hàng</label>
                    <input type="text" name="tenKH" class="form-control" require>
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="diaChi" class="form-control" require>
                </div>
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="number" name="soDT" class="form-control" require>
                </div>
                <div class="form-group">
                    <label for="">mail</label>
                    <input type="email" name="mail" class="form-control" require>
                </div>
                <div class="form-group">
                    <label for="">Mật Khẩu</label>
                    <input type="text" name="matKhau" class="form-control" require>
                </div>
                <button name="sbm" class="btn">Thêm</button>
            </form>
        </div>
    </div>
</div>
</body>