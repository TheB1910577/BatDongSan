<?php 
    ob_start(); // Bắt đầu bộ đệm đầu ra
    
?>

<?php 
    if(isset($_GET['dangxuat'])&& $_GET['dangxuat']==1){
        unset($_SESSION['dangnhap']);
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Tài khoản</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Bất động sản của tôi</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Yêu thích</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Đăng xuất</a>
                                </li>
                            </ul>
                        </li>
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
                    <a class="nav-link" href="">Tên tài khoản</a>
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