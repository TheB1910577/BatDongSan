<?php 
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                  <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Trang chủ</a>
                        </li>
                        <?php if(isset($_SESSION['dangnhap'])) { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Tài khoản</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Bất động sản của tôi</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Yêu thích</a>
                                </li>
                                
                                    <li><a class="dropdown-item" href="index.php?dangxuat">Đăng xuất</a>
                               
                                </li>
                            </ul>
                        </li>
                        <?php
                                }
                                ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?quanly=dang_bai_bds">Đăng bán</a>
                        </li>
                      
                    </ul>  
                                      
                </div>
            </div>
            <?php if(isset($_SESSION['dangnhap'])) { ?>
            <div>
              <ul class="nguoidung navbar-nav">
                <li class="nav-item">
                  <a href="">
                    <img class="anhdaidien" src="https://i.pinimg.com/564x/76/80/76/7680768d2115009e96ad70bd57146e74.jpg" alt="">
                  </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""><?php echo $_SESSION['dangnhap'] ?></a>
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
</div>