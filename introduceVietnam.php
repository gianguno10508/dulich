<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welecom to VietNam</title>
        <link rel="icon" href="./upload/logodulichht.png">
        <link rel="stylesheet" href="./include/fontawesome/css/all.css">
        <link rel="stylesheet" href="./include/style/bootstrap.css">
        <link rel="stylesheet" href="include/mystyle45646.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php session_start(); ?>
        <style>
            body{
                background-image: url('../upload/hinh-anh-du-lich-ha-long.jpg');
            }
        </style>
    </head>
    <body>
    <?php require_once "./view/header.html" ?>

    <style>
        img {
        opacity: 0.7;
        filter: alpha(opacity=20); 
    }

    img:hover {
        opacity: 1.0;
        filter: alpha(opacity=0);
    }
</style>

   <div class="article-composition" style="font-family: 'ZCOOL QingKe HuangYou', cursive">
        <div class="container" >
        <h2 style="font-size:34px;padding-top:20px">Giới thiệu những địa điểm du lịch Việt Nam</h2>
        <hr>
        <div class="gop" style="padding-top: 30px;">
        <div class="giaodien" style="width:500px;float:right; ">
            <h3 style="text-align: center">Hạ long</h3>
            <a href=""><img style="width: 500px ;height: 300px; border-radius: 20px; " src="./upload/vinhHaLong.jpg" ></a>
            <br>
        </div>
        <div class="giaodien" style="width :500px; ">
            <h3 style="text-align: center" >Nha trang</h3>
            <a href="./gioithieu.php"><img style="width: 500px ;height: 300px; border-radius: 20px; " src="./upload/nhatrang.jpg"></a>
            <br>
        </div>
        <div class="giaodien" style="width:500px;float:right ">
            <h3 style="text-align: center">Đà Nẵng</h3>
            <a href=""><img style="width: 500px; height: 300px;border-radius: 20px; " src="upload/Đà nẵng.jpg"> </a>
           <br>
        </div>
        <div class="giaodien" style="width:500px; ">
            <h3 style="text-align: center">Phú quốc</h3>
            <a href=""> <img style="width: 500px;height: 300px; border-radius: 20px; " src="upload/phú quốc.jpg"> </a>
           <br>
         </div>
         
        <div class="giaodien" style="width:500px;float:right ">
            <h3 style="text-align: center">Đà lạt</h3>
            <img style="width: 500px; height: 300px;border-radius: 20px; " src="upload/Đà lạt.jpg"> <br>
        </div>
        <div class="giaodien" style="width:500px; ">
            <h3 style="text-align: center">Sầm sơn</h3>
            <a href=""><img style="width: 500px; border-radius: 20px; " src="upload/sầm sơn.jpg"> </a>
            <br>
        </div>
        </div>
       
   </div>
   
   <div class="article-composition">
        <div class="container">

        </div>
    </div>

   <?php require_once "./view/footer.php"; ?>
            
</body>
</html>