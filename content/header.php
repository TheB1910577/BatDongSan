<!-- <?php 
    if(isset($_GET['dangxuat'])){
        unset($_SESSION['dangnhap']);
        header("Location:index.php");
        echo '<script>alert("Bạn đã đăng xuất!");</script>';
    }
?>
<div class="header">
        <nav class="navbar navbar-expand-sm navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDropdown">
                    <span class="navbar-toggler-icon"></span>
                </button>
                  <div class="collapse navbar-collapse" id="navbarDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Trang chủ</a>
                        </li>
                        <?php if(isset($_SESSION['dangnhap'])) { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tài khoản</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="index.php?quanly=tindang&id=<?php echo $_SESSION['id_taikhoan'] ?>">Bài đăng của tôi</a>
                                <a class="dropdown-item" href="index.php?quanly=qltk">Quản lý tài khoản</a>
                                <a class="dropdown-item" href="#">Yêu thích</a>
                                <a class="dropdown-item" href="index.php?dangxuat">Đăng xuất</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?quanly=batdongsancuatoi">Bất động sản của tôi</a>
                        </li>
                        
                        <?php
                            }
                        ?>
                    
                        
                      
                    </ul>  
                                      
                </div>
            </div>
            <?php 
                if(isset($_SESSION['dangnhap'])) { 
                    $profile = $pdo->prepare(
                        "SELECT * FROM taikhoan WHERE email = :mail"
                    );
                    $profile->execute(['mail'=>$_SESSION['dangnhap']]);
                    $row = $profile->fetch();
            ?>
            <div>
              <ul class="nguoidung navbar-nav">
                <li class="nav-item">
                  <a href="">
                    <img class="avatar" src="<?php if($row['avata']!=0) echo 'uploads/'.$row['avata']; else echo 'https://res.cloudinary.com/dm1dyamzb/image/upload/v1686010584/default_px3hi9.png' ?>" alt="">
                    
                  </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""><?php echo $row['ten_taikhoan'] ?></a>
                </li>
              </ul> 
                <?php } else { ?>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?quanly=dang_ky">Đăng Ký</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?quanly=dang_nhap">Đăng Nhập</a>
                        </li>
                    </ul>  
                <?php } ?>          
            </div>
        </nav>
</div> -->

<?php 
    if(isset($_GET['dangxuat'])){
        unset($_SESSION['dangnhap']);
        header("Location:index.php");
        echo '<script>alert("Bạn đã đăng xuất!");</script>';
    }
?>


<div class="header medium-text">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
            <a class="navbar-brand" href="index.php"> <img src="asset\image\LOGO.PNG" height="87px" width="150px" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDropdown">
                    <span class="navbar-toggler-icon"></span>
                </button>
                  <div class="collapse navbar-collapse" id="navbarDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Trang chủ</a>
                        </li>
                        <?php if(isset($_SESSION['dangnhap'])) { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tài khoản</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="index.php?quanly=tindang&id=<?php echo $_SESSION['id_taikhoan'] ?>">Bài đăng của tôi</a>
                                <a class="dropdown-item" href="index.php?quanly=qltk">Quản lý tài khoản</a>
                                <a class="dropdown-item" href="#">Yêu thích</a>
                                <a class="dropdown-item" href="index.php?dangxuat">Đăng xuất</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?quanly=batdongsancuatoi">Bất động sản của tôi</a>
                        </li>

                    </ul>  
                        <?php
                            }
                        ?>
                    
                        
                      
             
                                      
                </div>
            </div>
            <?php 
                if(isset($_SESSION['dangnhap'])) { 
                    $profile = $pdo->prepare(
                        "SELECT * FROM taikhoan WHERE email = :mail"
                    );
                    $profile->execute(['mail'=>$_SESSION['dangnhap']]);
                    $row = $profile->fetch();
            ?>
            <div class="collapse navbar-collapse" id="navbarDropdown">
              <ul class="nguoidung navbar-nav" >
                <li class="nav-item">
                  <a href="">
                    <img class="avatar" src="<?php if($row['avata']!=0) echo 'uploads/'.$row['avata']; else echo 'https://res.cloudinary.com/dm1dyamzb/image/upload/v1686010584/default_px3hi9.png' ?>" alt="">
                    
                  </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""><?php echo $row['ten_taikhoan'] ?></a>
                </li>
              </ul> 
                <?php } else { ?>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?quanly=dang_ky">Đăng Ký</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?quanly=dang_nhap">Đăng Nhập</a>
                        </li>
                    </ul>  
                <?php } ?>          
            </div><!-- end nguoidung -->
        </nav>
</div><!-- end header -->
