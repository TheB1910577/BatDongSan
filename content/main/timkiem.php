<?php
if(isset($_POST['timkiem'])){
     $tukhoa = $_POST['tukhoa'];
     $loai = $_POST['loai'];
     $tinh = $_POST['tinh'];
     $gia = $_POST['gia'];
  //echo $_SESSION['dangnhap'];
  $stmt = $pdo->prepare(
    "SELECT * FROM tin_dang as a, bat_dong_san as b, taikhoan as c
    WHERE 
    a.ma_bds = b.ma_bds AND
    b.id_taikhoan = c.id_taikhoan and
    trangthai = 1 ".$tinh."".$loai."".$gia." and
    tieu_de LIKE :tieude 
    ORDER BY loai_tin_dang DESC"
  );  
  $stmt->execute(['tieude'=> '%'.$tukhoa.'%']);
?>
<div class="container">
<p class="mt-3">kết quả tìm kiếm: <?php echo $_POST['tukhoa'] ?></p>
<div class="row row-cols-1 row-cols-md-3 g-4">

  <?php
while($rows=$stmt->fetch()){
    $sql = $pdo->prepare("SELECT * FROM hinhanh WHERE ma_bds = :ma LIMIT 1");
    $sql->execute(['ma'=>$rows['ma_bds']]);
    $row = $sql->fetch();
  ?>
  <div class="col">
  <div class="card h-100">
        <a class="card1" href="index.php?quanly=chi_tiet_bds&ma_bds=<?php echo $rows['ma_bds']; ?>">
          <img src="uploads/bds/<?php echo $row['link_anh'] ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="row">
            <h3 class="card-title"><?php echo $rows['tieu_de'] ?></h3>
              <div class="col-md-8">
              <h4 class="green"><?php echo number_format($rows['gia_bds'],0,',','.').' VND' ?></h4>
              </div>
              <div class="col-md-4">
              <h4 class="orange"><?php echo ($rows['dien_tich']).' m2' ?></h4>
              </div>
            </div>
            
            
            
            <h5><i class='fa-solid fa-location-dot'></i> <?php echo $rows['diachi'] ?></h5>
            <div class="row">
              <div class="col-md-2">
              <img class="avatar" src="<?php if($rows['avata']!=0) echo 'uploads/'.$rows['avata']; else echo 'https://res.cloudinary.com/dm1dyamzb/image/upload/v1686010584/default_px3hi9.png' ?>" alt="">
              </div>
              <div class="col-md-10 pt-2">
              <h5><?php echo $rows['ten_taikhoan'] ?></h5>
              </div>
            </div>
          
          </div>
        </a>
      </div>
</div>

<?php 
}
}
?>

</div>
</div>
