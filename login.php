<?php session_start(); ?>
<!DOCTYPE>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>login user account </title>
        <link rel="icon" href="./upload/logodulichht.png">
        <link rel="stylesheet" href="./include/fontawesome/css/all.css">
        <link rel="stylesheet" href="./include/style/bootstrap.css">
        <link rel="stylesheet" href="include/mystyle45646.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">
        
      
</head>
<body>

    <?php if(isset($_SESSION['email'])) {
        echo '<H1 style="color:#f22 ">Bạn đang đăng nhập</H1>';
        echo ' <script>
        var timer = setTimeout(function() {
            window.location="./"
        }, 3000);
    </script>';
        die();
    } ?>
    <?php require_once "./view/header.html" ?>
    <br><br>    
    <style>
        .from-dangky{
            border-radius: 15px;
            background: white;
            width: 350px;
            height: 400px;
        }
    </style>
    <div style="width: 100%; margin-bottom: 30px; margin-top: 30px; ">
        <form class="from-dangky" method="post" action="#">
            <div style="text-align: center"><H3 style="color: black;margin-top:10px">Đăng nhập</H3></div>
            <div class="form-group">
                <label style="color: black;margin-top:10px" for="">Nhập Email</label>
                <input type="text" class="form-control"  id="email" required="" placeholder="leducthu@gmail.com" name="email">
            </div>
            <div class="form-group">
                <label for="password" style="color: black;" > Nhập password</label>
                <input type="password" class="form-control"  id="password" required="" placeholder="Nhap mat khau" name="password">
            </div>
            <div style="text-align: center"><button style="margin-top: 10px; width: 100%;" class="btn btn-secondary">Login</button></div>
            <div style="text-align: right"><a href="./registration.php " class="btn-linklogin">Đăng ký</a></div>
        </form>
    </div>
    <br><br><br><br>
    <?php
    require_once "./view/footer.php"
    ?>
    <?php
      if(isset( $_POST['email'])){
        $email = $_POST['email'];
        $pass =  $_POST['password'];
          require_once "./model/Account.php";
        $acccout = new Account();
        $access = $acccout->login($email,$pass);
        if($access === 0)  echo '<script>alert("Tài khoản hoặc mật khẩu khong đúng")</script>';
        else{
            $_SESSION['email'] = $access;
            echo '<script>window.location="./";</script>';
        }
      }
    ?>
</body>
</html>


