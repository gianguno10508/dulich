<div class="Container">
    <div class="box-menu">
        <div class="administrator-logo">
            <img style="width: 27px;  float: left; height: 100%;" src="../upload/image/iconadmin.jpg">
            <a href="./"><p style="color: #FF7610; float: left">Admin</p></a>
        </div>


        <form method="get" action="#">
            <input name = "select" value="travelviewing" style="display: none">
            <button class="btnkgvien">
                <div class="line-menu" style="color:#fff;">
                    <i class="fab fa-pied-piper-square"></i>
                    Thêm bài viết </div>
            </button>
        </form>

   
        <form method="get" action="#">
            <input name = "select" value="travelviewingMana" style="display: none">
            <button class="btnkgvien">
                <div class="line-menu" style="color:#fff;">
                    <i class="fas fa-location-arrow"></i>
                    Quản lý tour du lịch </div>
            </button>
        </form>
        <form method="get" action="#">
            <input name = "select" value="commentManagement" style="display: none">
            <button class="btnkgvien">
                <div class="line-menu" style="color:#fff;">
                    <i class="fas fa-comment-medical"></i>
                    Quản lý đặt tour</div>
            </button>
        </form>
        <form method="get" action="#">
            <input name = "select" value="UserManagement" style="display: none">
            <button class="btnkgvien">
                <div class="line-menu" style="color:#fff;">
                    <i class="fas fa-user-cog"></i>
                    Quản lý User</div>
            </button>
        </form>
        


        <form method="POST" action="#">
            <input name = "act" value="true" style="display: none">
            <button class="btnkgvien">
                <div class="line-menu" style="color:#ee1111;">
                    <i class="fas fa-sign-out-alt"></i>
                    Đăng xuất</div>
            </button>
        </form>

        



    </div>

    <div class="main-screen" >
        <div class="screen-menu">
            <div style="margin-right: 10px;float: right;"><a  class="link-home" href="../"><i style="padding-right: 5px;" class="fas fa-home">
                    </i>Vào trang web</a> </div>
        </div>
        <div class="screen-slides">
            <?php
            if(isset($_GET['select'])){
                $sl = $_GET['select'];
                 if($sl === 'travelviewing') require_once "./control/addTravel.php";
                else if($sl === 'postmanagement') require_once "./control/postmanagement-hide.php";
                else if($sl === 'travelviewingMana') require_once "./control/travelviewingManagement.php";
                else if($sl === 'commentManagement') require_once "./control/commentManagement.php";
                else if($sl === 'UserManagement') require_once "./control/UserManagement.php";
                else if($sl === 'edit') require_once "./control/EditPost-hide.php";
                else if($sl === 'edittravel') require_once "./control/EditTravelpost.php";
                else if($sl === 'edituser') require_once "./control/quanlyuser.php";


            }else{
                echo "<div style='color: #bb0000; width: 100%; height: 100%;'>
                            <div style='text-align: center; padding-top: 20%; font-weight: 500;font-size: 70px;'>
                            TRANG QUẢN TRỊ
                        </div>
                        </div>";
            }
            
        
            ?>
        </div>
    </div>
</div>

<script>
    function hienthiweb() {
        var getthe = document.getElementById('tuychonweb');
        if (getthe.style.display=='none') getthe.style.display = 'block';
        else getthe.style.display = 'none';

    }
</script>

