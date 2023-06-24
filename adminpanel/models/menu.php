<nav>
    <ul class="menu nav-menu">
        <li>
            <a href="index.php">Trang chủ</a>
        </li>
        <li>
            <a href="#">Quản lý tin đăng</a>
            <ul class="menu-item">
                <li>
                    <a href="index.php?quanly=lietketindang">Xem tin đăng người dùng</a>
                </li>              
            </ul>
        </li>
        <li><a href="index.php?quanly=duyettindang">Duyệt tin đăng</a></li>
        <li><a href="index.php?quanly=thongke">Thống kê</a></li>
        <li><a href="index.php?quanly=tienich">Quản lý tiện ích</a></li>
        <?php
            if(isset($_SESSION['admin'])){
        ?>
        <li><a href="index.php?dangxuat=1">Đăng xuất</a></li>
        <?php
            }
        ?>
        
    </ul>
</nav>