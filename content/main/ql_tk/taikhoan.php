<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['suathongtin'])){
            if(!empty($_FILES['avt']['name'])){
                //del old imgs
                $del = $pdo->prepare("SELECT * FROM taikhoan WHERE id_taikhoan = :id");
                $del->execute(['id'=>$_SESSION['id_taikhoan']]);
                $process = $del->fetch();
                unlink('uploads/'.$process['avata']);

                $atv = time().$_FILES['avt']['name'];
                $avt_tmp = $_FILES['avt']['tmp_name'];
                $hoten = $_POST['hoten'];
                $sdt = $_POST['sdt'];
                $cccd = $_POST['cccd'];
                $ngaysinh =$_POST['ngaysinh'];
                $diachi = $_POST['diachi'];


                $file_extension = pathinfo($atv, PATHINFO_EXTENSION);
                $file_extension = strtolower($file_extension);
                $valid_extension = array("png","jpeg","jpg");
                if(in_array($file_extension, $valid_extension)){
                    move_uploaded_file($avt_tmp,'uploads/'.$atv);
                    $stmt = $pdo->prepare(
                        "UPDATE taikhoan SET ten_taikhoan = :ten, avata = :avt ,sdt = :dt, cccd = :cccd, birthday = :sn, diachi_tk=:dc
                        WHERE id_taikhoan = :id"
                    );
                    $stmt->execute([
                        'ten'=>$hoten,
                        'avt'=>$atv,
                        'dt'=>$sdt,
                        'cccd'=>$cccd,
                        'sn'=>$ngaysinh,
                        'dc'=>$diachi,
                        'id'=>$_SESSION['id_taikhoan']
                    ]);
                    echo '<script>alert("ĐÃ CẬP NHẬT");</script>'; 
                    header("Refresh: 0; url=index.php?quanly=qltk");
                }else echo '<script>alert("Đã có lỗi xảy ra");</script>'; 
                
                
            }else{
                $hoten = $_POST['hoten'];
                $sdt = $_POST['sdt'];
                $cccd = $_POST['cccd'];
                $ngaysinh =$_POST['ngaysinh'];
                $diachi = $_POST['diachi'];
                
                $stmt = $pdo->prepare(
                    "UPDATE taikhoan SET ten_taikhoan = :ten, sdt = :dt, cccd = :cccd, birthday = :sn, diachi_tk=:dc
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
        }
        if(isset($_POST['doimk'])){
            echo 'doimk';
        }
        
    }
    $sql = $pdo->prepare("SELECT * FROM taikhoan WHERE id_taikhoan = :id");
    $sql->execute(['id'=>$_SESSION['id_taikhoan']]);
?>
<div class="container">
    <h3 style="text-align: center; padding-top: 15px;">Tài Khoản của tôi</h3>
    <form method="POST" enctype="multipart/form-data" id="taikhoan">
    <div style="text-align: center;">
           
           <img id="myImg" class="avatar1" src="<?php if($row['avata']!=0) echo 'uploads/'.$row['avata']; 
               else echo 'https://res.cloudinary.com/dm1dyamzb/image/upload/v1686010584/default_px3hi9.png' ?>" alt="">
                
      
           <!-- The Modal -->
           <div id="myModal" class="modal">
           <span class="close">&times;</span>
           <img class="modal-content" id="img01">
           <div id="caption"></div>
           </div>

           <script>
           // Get the modal
           var modal = document.getElementById("myModal");

           // Get the image and insert it inside the modal - use its "alt" text as a caption
           var img = document.getElementById("myImg");
           var modalImg = document.getElementById("img01");
           var captionText = document.getElementById("caption");
           img.onclick = function(){
           modal.style.display = "block";
           modalImg.src = this.src;
           captionText.innerHTML = this.alt;
           }

           // Get the <span> element that closes the modal
           var span = document.getElementsByClassName("close")[0];

           // When the user clicks on <span> (x), close the modal
           span.onclick = function() { 
           modal.style.display = "none";
           }
           </script>
           
       <label for="image-upload" class="image-container">          
       <input type="file" id="image-upload" name="avt">
   </div>

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
                <input type="text" class="form-control" id="diachi" name="diachi" value="<?php echo $row['diachi_tk'] ?>">
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

<script>
    $(document).ready(function(){
        $("#taikhoan").validate({
            rules:{
                'hoten': {required: true},
                'sdt': {required:true, number:true},
                'cccd': {required: true, number:true},
                'ngaysinh': {required:true},
                'diachi':{required: true}            
            },
            messages:{
                'hoten': {required: "không được bỏ trống thông tin"},
                'sdt': {required: "không được bỏ trống thông tin", number:"chỉ được nhập số"},
                'cccd': {required: "không được bỏ trống thông tin", number:"chỉ được nhập số"},
                'ngaysinh': {required: "không được bỏ trống thông tin"},
                'diachi':{required: "không được bỏ trống thông tin"}
            }
        })
    })
</script>