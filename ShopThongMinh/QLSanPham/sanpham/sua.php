<?php
    $id = $_GET['id'];

    $sql_TL = "SELECT * FROM theloai";
    $query_TL = mysqli_query($connect, $sql_TL);

    $sql_NSX = "SELECT * FROM nhasanxuat";
    $query_NSX = mysqli_query($connect, $sql_NSX);

    $sql_up = "SELECT * FROM sanpham where maSP = $id";
    $query_up = mysqli_query($connect, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);


    if(isset($_POST['sbm'])) {
        $tenSP = $_POST['tenSP'];
    
        if($_FILES['image']['name'] =='') {
            $image = $row_up['image'];
        }else{
            $image = $_FILES['image']['name'];
            $image_tmp = $_FILES['image']['name'];
            move_uploaded_file($image_tmp, 'img/'.$image);
        }

        $gia = $_POST['gia'];
        $ngay = $_POST['ngay'];
        $moTa = $_POST['moTa'];
        $soLuongSP = $_POST['soLuongSP'];

        $maTL = $_POST['maTL'];
        $maNSX = $_POST['maNSX'];

        $sql = "UPDATE sanpham SET tenSP = '$tenSP', image = '$image', gia = $gia, ngay = '$ngay', moTa = '$moTa', soLuongSP = $soLuongSP, maTL = $maTL, maNSX = $maNSX where maSP = $id";
        $query = mysqli_query($connect, $sql);
        header('location: index.php?page_layout=danhsach');
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>SỬA SẢN PHẨM</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="">Tên Sản Phẩm</label>
                    <input type="text" name="tenSP" class="form-control" required value="<?php echo $row_up['tenSP']; ?>">
                </div>
                
                <div class="form-group">
                    <label for="">Ảnh Sản Phẩm</label><br>
                    <input type="file" name="image">
                </div>

                <div class="form-group">
                    <label for="">Giá</label>
                    <input type="number" name="gia" class="form-control" required value="<?php echo $row_up['gia']; ?>">
                </div>

                <div class="form-group">
                    <label for="">Ngày</label>
                    <input type="date" name="ngay" class="form-control" required value="<?php echo $row_up['ngay']; ?>">
                </div>

                <div class="form-group">
                    <label for="">Mô Tả</label>
                    <input type="text" name="moTa" class="form-control" required value="<?php echo $row_up['moTa']; ?>">
                </div>

                <div class="form-group">
                    <label for="">Số Lượng Sản Phẩm</label>
                    <input type="number" name="soLuongSP" class="form-control" required value="<?php echo $row_up['soLuongSP']; ?>">
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

                <button name="sbm" class="btn btn-success" type="submit">Sửa</button>
            </form>
        </div>
    </div>
</div>