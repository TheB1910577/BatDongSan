<?php
if(isset($_POST['timkiem'])){
     $tukhoa = $_POST['tukhoa'];
     
   
  //echo $_SESSION['dangnhap'];
  $stmt = $pdo->prepare(
    "SELECT * FROM tin_dang as a, bat_dong_san as b
    WHERE 
    a.ma_bds = b.ma_bds AND 
    trangthai = 1 and 
    tieu_de LIKE :tieude 
    ORDER BY loai_tin_dang DESC"
  );
  $stmt->execute(['tieude'=> '%'.$tukhoa.'%']);
?>
<div class="container">
<p class="mt-3"></p>kết quả tìm kiếm cho: <?php echo $_POST['tukhoa'] ?></p>
<div class="row row-cols-1 row-cols-md-3 g-4">
<?php echo $_POST['gia'] ?></p>
<?php echo $_POST['loai'] ?></p>
<?php echo $_POST['tinh'] ?></p>
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
        <h4 class="card-title"><?php echo $rows['tieu_de'] ?></h4>
        <h6>Giá tiền: <?php echo number_format($rows['gia_bds'],0,',','.').' VND' ?></h6>
        <h6>Địa chỉ: <?php echo $rows['diachi'] ?></h6>
        <h6>Thông tin:</h6>
        <p class="card-text">
          <?php $rows['mo_ta']?>
        </p>
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