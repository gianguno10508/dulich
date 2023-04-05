<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welecom to VietNam</title>
        <script src="include/script/ckeditorbasic/ckeditor.js"></script>
        <link rel="icon" href="./upload/logodulichht.png">
        <link rel="stylesheet" href="./include/style/bootstrap.css">
        <link rel="stylesheet" href="include/mystyle45646.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>


        <?php session_start(); ?>
        <style>
            body{
                background: #f8f8f8;
            }
            .box-posts{
                background: #EEE5DE;
                border:none;
                border-radius: 15px;
                box-shadow: 0px 0px 5px 5px #aaa;
            }
            .box-posts:hover{
                box-shadow: 0px 0px 5px 5px #789;
            }
            td, tr{
                padding-top: 15px;
            }
        </style>

    </head>
    <body style="background: #ddd;">
        
    <?php require_once "./view/header.html" ?>

    <div class="container" >
    <br>
    <h1 style="color: #DAA520;">	

    <?php
    require_once './model/travelPost.php';
         $getClass = new travelPost();
         $getidtravle = $_GET['id'];
         $getdata = $getClass->getTravelviewingByID($getidtravle);
         $getListcmt =  $getClass->getListcomment($getidtravle);
        $id = $_GET['id'];
         if(isset($_POST['book'])){
            $email = $_SESSION['email'];
            $post=$_GET['id'];
            $cmt = $_POST['cmt'];
            $access = $getClass->addcomment($email,$post,$cmt);
            unset($_POST['cmt']);
            //echo '<script>window.location="./travelviewing.php?id='.$id.'";</script>';
        }

        if ($getListcmt!=false) $getCount = sizeof($getListcmt);
        else $getCount=0;
        $getClass->dieconnect();

    ?>

<?php echo $getdata[4]; ?></h1>
<br><br>
<div class="row">
            <div class="col-8">

            <div id="mycarousel" class="carousel slide" data-ride="carousel">

<!--Cho hiện thị chỉ số nếu muốn-->
<ol class="carousel-indicators">
    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mycarousel" data-slide-to="1" class=""></li>
    <li data-target="#mycarousel" data-slide-to="2" class=""></li>
</ol>
<!--Hết tạo chỉ số-->

<!--Các slide bên trong carousel-inner-->
<div class="carousel-inner">

    <!--Slide 1 thiết lập hiện thị đầu tiên .active-->
    <div class="carousel-item active">
        <img class="d-block w-100" style="width: 100%; height:400px; "  src="<?php echo $getdata[1]; ?>">

    </div>

    <!--Slide 2-->
    <div class="carousel-item">
        <img  style="width: 100%; height:400px;" class="d-block w-100" src="<?php echo $getdata[2]; ?>">
    </div>
    <!--Slide 3-->
    <div class="carousel-item">
        <img  style="width: 100%; height:400px;" class="d-block w-100" src="<?php echo $getdata[3]; ?>">
    </div>

</div>



<!--Cho thêm khiển chuyển slide trước, sau nếu muốn-->
    <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span></a>
    <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
<!--Hết tạo điều khiển chuyển Slide-->

</div>

<!--Het-->
            </div>
            <div class="col-4"  style="background: #eee;">
                <h3 style="color: #CD5555;">About the traveling</h3>
                <table>
                <tr>
                <tr>
                                                        <td><i class="fas fa-barcode"></i></td>
                                                        <td style="padding-left: 10px;"><b>Mã tour: </b><span style="color:  #ff9900;"><?php echo $getdata[6]; ?></span></td>
                                                    </tr>
                                                    <tr>
                                                            <td><i class="fas fa-calendar-alt"></i></td>
                                                            <td style="padding-left: 10px;"><b>Ngày khởi hành: </b><span style="color:  #ff9900;"><?php echo $getdata[7]; ?></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="far fa-clock"></i></td>
                                                            <td style="padding-left: 10px;"><b>Thời gian: </b><span style="color:  #ff9900;"> <?php echo $getdata[8]; ?> day</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td> <i class="fas fa-plane-departure"></i></td>
                                                            <td style="padding-left: 10px;"><b>Điểm khởi hành: </b> <span style="color:  #ff9900;"><?php echo $getdata[9]; ?></span></td>
                                                        </tr>
                                                        <tr>
                                                                <td> <i class="fas fa-plane-arrival"></i></td>
                                                                <td style="padding-left: 10px;"><b>Điểm đến: </b><span style="color:  #ff9900;"><?php echo $getdata[10]; ?></span></td>
                                                            </tr>
                                                            <tr>
                                                                <td> <i class="fas fa-chair"></i></td>
                                                                <td style="padding-left: 10px;"><b>Số lượng vé: </b><span style="color: #ff9900;"> <?php echo $getdata[11]; ?></span></td>
                                                            </tr>
                </table>
                <div style="background: #eee; padding:15px">
                    <h2 style = "padding-left: 10px; font-size:16px; font-weight:bold">Số lượng đặt</h2>
                    <div style="width: 100%; border-radius: 3px; padding: 10px">
                       <?php if(isset($_SESSION['email'])) echo ' <form method="post">
                            <input type="text" name="cmt" id="cmt" class="form-control" style="width: 80px; height: 40px; margin-top:-45px; margin-left:110px">
                            <div style="text-align: right; margin-top:-40px; margin-left:200px">
                            <input type="submit" name="book" value="Đặt tour" class="btn btn-secondary"></input> </div>
                        </form>
                       ';

                        else {
                            echo '<span>Hãy <a href="./login.php">login</a> để đặt tour!</span>';
                        }
                       ?>

                    </div>

        </div>
            </div>
        </div>
        <br>

        <!--talk about-->
        <div style="background: #eee; padding:15px">
            <h3>Giới thiệu</h3>
            <p>
             <?php echo $getdata[5]; ?>
            </p>
        </div>
            <br>
       
    </div>
    <br><br>
    <?php require_once"./view/footer.php"; ?>
   <script>
      
   </script>
   </body>
   </html>
