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
        
        
        $_SESSION['admin']= $row['ten_taikhoan'];
        echo $_SESSION['admin'];
        header("location:index.php");
      }else{
        echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
      }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
  <div id="wrapper">
  <div class="container">
    <div class="row justify-content-around">
        <form class="col-md-6 bg-light p-3 my-3" method="POST">
          <h1 class="text-center text-uppercase h3 py-3">Login Admin</h1>
                    
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>



