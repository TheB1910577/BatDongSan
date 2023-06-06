<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $matkhaucu = md5($_POST['matkhaucu']);
        $matkhaumoi = md5($_POST['matkhaumoi']);

        $check = $pdo->prepare(
            "SELECT * FROM taikhoan WHERE id_taikhoan = :id"
        );
        $check->execute(['id'=>$_SESSION['id_taikhoan']]);
        $row = $check->fetch();
        if($row['matkhau'] != $matkhaucu){
            echo '<script>alert("đổi mật khẩu thất bại");</script>';
        }else{
            $sql = $pdo->prepare("UPDATE taikhoan SET matkhau = :mk WHERE id_taikhoan = :id");
            $sql->execute([
                'mk'=> $matkhaumoi,
                'id'=>$_SESSION['id_taikhoan']
            ]);
            echo '<script>alert("ok");</script>';
        }
    }
?>
<div class="container">
    <h3>đổi mật khẩu</h3>
    <form action="" method="post">
        <div class="form-group mb-3 row">
            <label for="matkhaucu" class="col-lg-2 col-md-2 col-sm-3 col-12 col offset-lg-1">Nhập mật khẩu cũ:</label>
            <div class="col-lg-7 col-md-9 col-sm-8 col-12">
                <input type="password" class="form-control" id="matkhaucu" name="matkhaucu">
            </div>
        </div>

        <div class="form-group mb-3 row">
            <label for="matkhaumoi" class="col-lg-2 col-md-2 col-sm-3 col-12 col offset-lg-1">Nhập mật khẩu mới:</label>
            <div class="col-lg-7 col-md-9 col-sm-8 col-12">
                <input type="password" class="form-control" id="matkhaumoi" name="matkhaumoi">
                <label class="error"></label>
            </div>
        </div>
        <button class="btn btn-primary offset-lg-3">Thay đổi</button>
    </form>
</div>