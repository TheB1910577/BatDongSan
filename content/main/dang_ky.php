<?php
    $found_usn= false;
    $found_mail= false;
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $ten_tk = $_POST['ten_tk'];
        $email = $_POST['email'];
        $matkhau = md5($_POST['matkhau']);
        $sdt = $_POST['sdt'];
        $cccd = $_POST['cccd'];
        $birthday = $_POST['birthday'];
        $diachi = $_POST['diachi']; 

        //kiểm tra tồn tại email
        $mail_check = $pdo->prepare("SELECT * FROM taikhoan WHERE email = :email");
        $mail_check -> execute(['email'=>$email]);
        $num_mail = $mail_check->rowCount();
        if($num_mail > 0){
            $found_mail = true;
        }

        if($found_mail== false && $found_usn==false){ 
            try{
                $stmt = $pdo->prepare(
                    "INSERT INTO taikhoan(ten_taikhoan, email, sdt, cccd, diachi, matkhau, birthday) 
                    VALUES(:ten, :mail, :sdt, :cccd, :diachi, :mk, :sn)"
                );
                $stmt->execute([
                    'ten'=>$ten_tk,
                    'mail'=>$email,
                    'sdt'=>$sdt,
                    'cccd'=>$cccd,
                    'diachi'=>$diachi,
                    'mk'=>$matkhau,
                    'sn'=>$birthday
                ]);
                $_SESSION['dangky'] = 1;
                header('Location:index.php');
            }catch(Exception $e){
                echo 'đã có lỗi xãy ra';
            }
            
        }

        
        
        
    }
?>

<!-- --------------layout-------------- -->

<div id="wrapper">
    <div class="container">
        <div class="row justify-content-around">
            <form method="POST" class="col-md-6 bg-light p-3 my-3">
                <h1 class="text-center text-uppercase h3 py-3">ĐĂNG KÝ</h1>
                    
                <div class="mb-3">
                    <label for="inputUsername" class="form-label">Họ và tên: </label>
                    <input type="text" class="form-control" id="inputUsername" name="ten_tk">
                    <?php
                        if($found_usn==true){
                    ?>
                        <label class="error">username đã có người sử dụng</label>
                    <?php 
                    } 
                    ?>
                </div> 
                    
                <div class="mb-3">
                    <label for="inputEmail4"  class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email">
                    <?php
                        if($found_mail==true){
                    ?>
                        <label class="error">Email đã có người sử dụng</label>
                    <?php 
                        }
                    ?>
                </div>
  
                <div class="mb-1">
                    <label for="inputPassword4" class="form-label">Mật Khẩu</label>
                    <input type="password" class="form-control" id="inputPassword4" name="matkhau"><br>
                </div>    

                <!-- <div class="mb-4">
                    <label for="inputGroupFile04" class="form-lable">Ảnh đại diện nếu có</label>
                    <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                </div>     -->

                <div class="mb-3">
                    <label for="inputPhoneNumber" class="form-label">Điện thoại</label>
                    <input type="text" class="form-control" id="inputPhoneNumber" name="sdt">
                </div>    

                <div class="mb-4">
                    <label for="inputCI" class="form-label">CMND/CCCD</label>
                    <input type="text" class="form-control" id="inputCI" name="cccd">
                </div>    

                <div class="mb-4">
                    <label for="inputbirtday" class="form-label">Ngày sinh</label>
                    <input type="date" class="form-control" id="inputbirtday" name="birthday">
                </div>

                <div class="mb-4">
                    <label for="inputAddress" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Số nhà, Tên đường, xã/Phường/Thị trấn, Quận/Huyện/Thành Phố" name="diachi">
                </div>
                <div class="mb-4">
                    <button type="submit" class="btn btn-primary">Đăng Ký</button>
                </div>
            </form>  
        </div>
    </div>    
</div>