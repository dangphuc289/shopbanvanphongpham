<?php
    if(isset($_POST['sbm'])){
    
        $tenTL = $_POST['tenTL'];
        $moTa = $_POST['moTa'];

        $sql = "INSERT INTO theloai (maTL,tenTL,moTa) VALUES(0,'$tenTL','$moTa')";
        $query = mysqli_query($conn, $sql);
        header('location: index.php?page_playout=danhsach');
}    
?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Thêm Thể Loại</h2>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên Thể Loại</label>
                    <input type="text" name="tenTL" class="form-control" require>
                </div>
                <div class="form-group">
                    <label for="">Mô Tả</label>
                    <input type="text" name="moTa" class="form-control" require>
                </div>
                <button name="sbm" class="btn">Thêm</button>
            </form>
        </div>
    </div>
</div>
</body>