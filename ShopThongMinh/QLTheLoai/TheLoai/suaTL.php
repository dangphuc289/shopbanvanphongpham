<?php
    $id = $_GET['id'];
    $sql_up = "SELECT * FROM theloai where maTL = $id";
    $query_up = mysqli_query($conn, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);
    if (isset($_POST['sbm'])) {
        $tenTL = $_POST['tenTL'];
        $moTa = $_POST['moTa'];

        $sql = "UPDATE theloai SET tentl = '$tenTL',mota = '$moTa' where maTL = '$id'";
        $query = mysqli_query($conn, $sql);
        header('location: index.php?page_playout=danhsach');
    }
?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Sửa Thể Loại</h2>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên Thể Loại</label>
                    <input type="text" name="tenTL" class="form-control" require values="<?php echo $row_up['tenTL']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Mô Tả</label>
                    <input type="text" name="moTa" class="form-control" require values="<?php echo $row_up['moTa']; ?>">
                </div>
                <button name="sbm" class="btn">Sửa</button>
            </form>
        </div>
    </div>
</div>
</body>