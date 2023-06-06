<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['suathongtin'])){
            $hoten = $_POST['hoten'];
            $sdt = $_POST['sdt'];
            $cccd = $_POST['cccd'];
            $ngaysinh =$_POST['ngaysinh'];
            $diachi = $_POST['diachi'];
            
            $stmt = $pdo->prepare(
                "UPDATE taikhoan SET ten_taikhoan = :ten, sdt = :dt, cccd = :cccd, birthday = :sn, diachi=:dc
                WHERE id_taikhoan = :id"
            );
            $stmt->execute([
                'ten'=>$hoten,
                'dt'=>$sdt,
                'cccd'=>$cccd,
                'sn'=>$ngaysinh,
                'dc'=>$diachi,
                'id'=>$_SESSION['id_taikhoan']
            ]);
            echo '<script>alert("ĐÃ CẬP NHẬT");</script>'; 
            header("Refresh: 0; url=index.php?quanly=qltk");
        }
        if(isset($_POST['doimk'])){
            echo 'doimk';
        }
        
    }
    $sql = $pdo->prepare("SELECT * FROM taikhoan WHERE id_taikhoan = :id");
    $sql->execute(['id'=>$_SESSION['id_taikhoan']]);
?>
<div class="container">
    <h3>Tài Khoản của tôi</h3>
    <form action="" method="post">
        <div class="form-group mb-3 mt-3 row">
            <label for="hoten" class="col-lg-2 col-md-2 col-sm-3 col-12 col offset-lg-1">Họ và tên:</label>
            <div class="col-lg-7 col-md-9 col-sm-8 col-12">
                <input type="text" class="form-control" id="hoten" name="hoten" value="<?php echo $row['ten_taikhoan'] ?>">
                <label class="error"></label>
            </div>
        </div>

        <div class="form-group mb-3 row">
            <label for="email" class="col-lg-2 col-md-2 col-sm-3 col-12 col offset-lg-1">Email:</label>
            <div class="col-lg-7 col-md-9 col-sm-8 col-12">
                <input type="text" class="form-control" id="email" value="<?php echo $row['email'] ?>" disabled>
                <label class="error"></label>
            </div>
        </div>

        <div class="form-group mb-3 row">
            <label for="sdt" class="col-lg-2 col-md-2 col-sm-3 col-12 col offset-lg-1">SĐT:</label>
            <div class="col-lg-7 col-md-9 col-sm-8 col-12">
                <input type="text" class="form-control" id="sdt" name="sdt" value="<?php echo $row['sdt'] ?>">
                <label class="error"></label>
            </div>
        </div>

        <div class="form-group mb-3 row">
            <label for="cccd" class="col-lg-2 col-md-2 col-sm-3 col-12 col offset-lg-1">CCCD/CMND:</label>
            <div class="col-lg-7 col-md-9 col-sm-8 col-12">
                <input type="text" class="form-control" id="cccd" name="cccd" value="<?php echo $row['cccd'] ?>">
                <label class="error"></label>
            </div>
        </div>

        <div class="form-group mb-3 row">
            <label for="ngaysinh" class="col-lg-2 col-md-2 col-sm-3 col-12 col offset-lg-1">Ngày sinh:</label>
            <div class="col-lg-7 col-md-9 col-sm-8 col-12">
                <input type="date" class="form-control" id="ngaysinh" name="ngaysinh" value="<?php echo $row['birthday'] ?>">
                <label class="error"></label>
            </div>
        </div>

        <div class="form-group mb-3 row">
            <label for="diachi" class="col-lg-2 col-md-2 col-sm-3 col-12 col offset-lg-1">Địa chỉ:</label>
            <div class="col-lg-7 col-md-9 col-sm-8 col-12">
                <input type="text" class="form-control" id="diachi" name="diachi" value="<?php echo $row['diachi'] ?>">
                <label class="error"></label>
            </div>
        </div>
        <button class="btn btn-primary offset-lg-3" name="suathongtin">Sửa</button>

        <!-- Button trigger modal -->
        <a href="index.php?quanly=doimatkhau" class="btn btn-primary">
        Đổi mật khẩu
        </a>
    </form>
</div>