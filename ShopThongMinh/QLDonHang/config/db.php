<?php
    $connect = mysqli_connect('localhost', 'root', '', 'nhasach');
    if($connect) {
        mysqli_query($connect, "SET NAMES 'UTF8'");
    }else {
        echo "Ket noi that bai";
    }
?>