<?php
    $sql_TL = "SELECT * FROM theloai";
    $query_TL = mysqli_query($connect, $sql_TL);

    $sql_NSX = "SELECT * FROM nhasanxuat";
    $query_NSX = mysqli_query($connect, $sql_NSX);


    if(isset($_POST['sbm'])) {
        $tenSP = $_POST['tenSP'];
    
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];

        $gia = $_POST['gia'];
        $ngay = $_POST['ngay'];
        $moTa = $_POST['moTa'];
        $soLuongSP = $_POST['soLuongSP'];

        $maTL = $_POST['maTL'];
        $maNSX = $_POST['maNSX'];

        $sql = "INSERT INTO sanpham (tenSP, image, gia, ngay, moTa, soLuongSP, maTL, maNSX)
        VALUES ('$tenSP', '$image', $gia, '$ngay', '$moTa', $soLuongSP, $maTL, $maNSX)";
        $query = mysqli_query($connect, $sql);
        move_uploaded_file($image_tmp, 'img/'.$image);
        header('location: index.php?page_layout=danhsach');
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>THÊM SẢN PHẨM</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="">Tên Sản Phẩm</label>
                    <input type="text" name="tenSP" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="">Ảnh Sản Phẩm</label><br>
                    <input type="file" name="image">
                </div>

                <div class="form-group">
                    <label for="">Giá</label>
                    <input type="number" name="gia" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Ngày</label>
                    <input type="date" name="ngay" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Mô Tả</label>
                    <input type="text" name="moTa" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Số Lượng Sản Phẩm</label>
                    <input type="number" name="soLuongSP" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Thể Loại</label>
                    <select class="form-control" name="maTL">
                        <?php
                            while($row_TL = mysqli_fetch_assoc($query_TL)){?>
                                <option value="<?php echo $row_TL['maTL']; ?>"><?php echo $row_TL['tenTL']; ?></option>
                            <?php } ?>
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Nhà Sản Xuất</label>
                    <select class="form-control" name="maNSX">
                        <?php
                            while($row_NSX = mysqli_fetch_assoc($query_NSX)){?>
                                <option value="<?php echo $row_NSX['maNSX']; ?>"><?php echo $row_NSX['tenNSX']; ?></option>
                            <?php } ?>
                        ?>
                    </select>
                </div>

                <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
            </form>
        </div>
    </div>
</div>