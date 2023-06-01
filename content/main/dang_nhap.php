<?php
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
      $stmt = $pdo->prepare("SELECT * FROM tai_khoan WHERE email = :mail AND matkhau = :pass");
      $stmt->execute([
        'mail' => $_POST['email'],
        'pass' => md5($_POST['pass'])
      ]);
      $count = $stmt->rowCount();
      $row = $stmt->fetch();
      if($count == 1){
        $_SESSION['dangnhap'] = $row['ten_tk'];
        //echo $_SESSION['dangnhap'];
        header("location: index.php");
      }else{
        echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
      }
    }
?>

<!-- --------------layout-------------- -->

<div id="wrapper">
    <div class="container">
        <div class="row justify-content-around">
            <form class="col-md-6 bg-light p-3 my-3" method="post">
                <h1 class="text-center text-uppercase h3 py-3">Sign up</h1>                    
                    <div class="mb-3">
                      <label for="inputEmail4"  class="form-label">Email</label>
                      <input type="email" class="form-control" id="inputEmail4" name="email">
                    </div>
  
                    <div class="mb-1">
                      <label for="inputPassword4" class="form-label">Password</label>
                      <input type="password" class="form-control" id="inputPassword4" name="pass"><br>
                    </div>

                    <div class="mb-4">
                      <button type="submit" class="btn btn-primary">Log in</button>
                    </div>
              </form>
        </div>
    </div>
</div>