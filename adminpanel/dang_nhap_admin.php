<?php
  session_start();
    include("config/config.php");
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
      $stmt = $pdo->prepare("SELECT * FROM taikhoan WHERE email = :mail AND matkhau = :pass AND taikhoan.status = 1");
      $stmt->execute([
        'mail' => $_POST['email'],
        'pass' => md5($_POST['pass'])
      ]);
      $count = $stmt->rowCount();
      $row = $stmt->fetch();
      if($count == 1){ 
        
        
        $_SESSION['admin']=1;
        echo $_SESSION['admin'];
        header("location:index.php");
      }else{
        echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
      }
    }
?>

<div id="wrapper">
  <div class="container">
    <div class="row justify-content-around">
        <form class="col-md-6 bg-light p-3 my-3" method="POST">
          <h1 class="text-center text-uppercase h3 py-3">Login</h1>
                    
          <div class="mb-3">
            <label for="inputUsername" class="form-label" >Username</label>
            <input type="text" class="form-control" id="inputUsername" name="email">
          </div> 
  
          <div class="mb-1">
            <label for="inputPassword4" class="form-label" >Password</label>
            <input type="password" class="form-control" id="inputPassword4" name="pass"><br>
          </div>

          <div class="mb-4">
            <button type="submit" class="btn btn-dark">Log in</button>
          </div>
        </form>
    </div>
  </div>
</div>