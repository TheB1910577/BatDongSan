<?php
    if(isset($_POST['dangnhap'])){
        $email = $_POST['email'];
        $matkhau = md5($_POST['matkhau']);
        $sql = "SELECT * FROM taikhoan WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
       
        if($count>0){
            $row_data = mysqli_fetch_array($row);
            $_SESSION['dangky'] = $row_data['ten_taikhoan'];
            $_SESSION['email'] = $row_data['email'];
            
             $_SESSION['idchu'] = $row_data['id_taikhoan'];
             header('Location:index.php');
            
        }else{
            echo '<script>alert("Tài khoản hoặc mật khẩu không đúng, vui lòng nhập lại.");</script>';

        }
    }
?>

<!-- --------------layout-------------- -->

<div id="wrapper">
    <div class="container">
        <div class="row justify-content-around">
            <form action="" class="col-md-6 bg-light p-3 my-3">
                <h1 class="text-center text-uppercase h3 py-3">Sign up</h1>                    
                    <div class="mb-3">
                      <label for="inputEmail4"  class="form-label">Email</label>
                      <input type="email" class="form-control" id="inputEmail4">
                    </div>
  
                    <div class="mb-1">
                      <label for="inputPassword4" class="form-label">Password</label>
                      <input type="password" class="form-control" id="inputPassword4"><br>
                    </div>

                    <div class="mb-4">
                      <button type="submit" class="btn btn-primary">Log in</button>
                    </div>
                  </form>
        </div>
    </div>
</div>