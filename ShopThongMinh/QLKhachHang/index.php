<?php
    require_once 'data/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Index</title>
</head>
<body>
    <?php
    
        if(isset($_GET['page_layout'])) {
            switch ($_GET['page_layout']) {
                case 'danhsach':
                    require_once 'KhachHang/danhsach.php';
                    break;

                case 'them':
                    require_once 'KhachHang/ThemKH.php';
                    break;

                case 'sua':
                    require_once 'KhachHang/suaKH.php';
                    break;

                case 'xoa':
                    require_once 'KhachHang/xoaKH.php';
                    break;
                
                default:
                    require_once 'KhachHang/danhsach.php';
                    break;
            }
        }else {
            require_once 'KhachHang/danhsach.php';
        }
    ?>
</body>
</html>