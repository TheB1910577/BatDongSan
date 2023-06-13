<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/5644bf12f0.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
 
      /* Set display to none for image*/
      body{
        font-family: 'Roboto', sans-serif;
      }
      
      #image {
          display: none;  
        
      }
  </style>

</head>
<body>
<div class="container-fluid">

    <?php
      session_start();
      ob_start();
      if(isset($_SESSION['dangky'])){
        echo '<script>alert("Đăng Ký thành công");</script>';
        unset($_SESSION['dangky']);
      }
      //session_destroy();
      include("adminpanel/config/config.php");
      include("content/header.php");
      include("content/main.php");
      include("content/footer.php");
    ?>
    
    </div><!--end container-->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    
    <script>
        $(document).ready(function(){
            $('#dangbds').validate({
                rules:{
                    tieude:{required: true},
                    diachi:{required: true},
                    'files[]':{required:true},
                    maps:{required: true},
                    dientich:{required: true},
                    sophong:{required: true},
                    sotang:{required: true},
                    loaibds:{required: true},
                    'tinh': {required: true},
                    'sohong':{required: true},
                    'agree':{required:true}
                },
                messages:{
                    tieude:{required: "BẠN CHƯA NHẬP TIÊU ĐỀ"},
                    diachi:{required: "BẠN CHƯA NHẬP ĐỊA CHỈ CỦA BẤT ĐỘNG SẢN"},
                    'files[]':{required:"BẠN CHƯA CÓ HÌNH ẢNH CỦA BẤT ĐỘNG SẢN"},
                    maps:{required: "BẠN CHƯA NHẬP LINK MAPS"},
                    dientich:{required: "BẠN CHƯA NHẬP DIỆN TÍCH"},
                    sophong:{required: "BẠN CHƯA NHẬP SỐ PHÒNG"},
                    sotang:{required: "BẠN CHƯA NHẬP SỐ TẦNG"},
                    loaibds:{required: "BẠN CHƯA CHỌN LOẠI BẤT ĐỘNG SẢN"},
                    'tinh': {required: "BẠN PHẢI CHỌN TỈNH THÀNH CỦA MÌNH"},
                    'sohong':{required: "BẠN PHẢI ĐẢM BẢO ĐẦY ĐỦ PHÁP LÝ"},
                    'agree':{required:"BẠN PHẢI ĐỌC KỸ CÁC ĐIỀU KHOẢN CỦA CHÚNG TỐI, VÀ PHẢI XÁC NHẬN"}
                }
            })
        })
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>
