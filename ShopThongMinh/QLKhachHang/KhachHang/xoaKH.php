<?php
 
    $id = $_GET['id'];
    $sql = "DELETE FROM khachhang where maKH = $id";
    $query = mysqli_query($conn, $sql);
    header('location: index.php?page_layout=danhsach')
?>