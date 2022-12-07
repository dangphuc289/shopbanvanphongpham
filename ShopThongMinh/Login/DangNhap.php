<?php
    session_start();
    require_once 'data/database.php';
    if(isset($_POST['submit'])){
        $username = $_POST['email'];
        $password = $_POST['pass'];
        $sql ="SELECT * from khachhang where mail ='$username' and matKhau='$password'";
        $query = mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($query);
        $_SESSION["CustomerId"]=$row["maKH"];
        if($username == 'admin@gmail.com' && $password == '1111'){
            header('Location: ../HomeBack-End/home.php');
            die();
        }else if(mysqli_num_rows($query)){
		    header('Location: ../PageHome/Home.php');
        //  header("Location: ../font_end/index.php?name=<?php echo $query['tentk']; 
        }else{
            echo '<script>alert("Email hoặc mật khẩu sai !")</script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="DangNhap.css">
</head>
<body>
    <div class="container">
        <form class="form-login" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h1>Đăng Nhập</h1>
            <div class="form-text">
                <label>Username</label>
                <input type="email" name="email">
            </div>

            <div class="form-text">
                <label>Password</label>
                <input type="password" name="pass">
            </div>
            
            <input class="button" type="submit" name="submit" value="Đăng Nhập">
        </form>
    </div>
</body>
</html>