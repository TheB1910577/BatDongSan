<?php
    require("carbon/autoload.php");
    use Carbon\Carbon;
    $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM bat_dong_san as a, tin_dang as b, taikhoan as c
        WHERE c.id_taikhoan = :id
        AND b.ma_bds = a.ma_bds
        AND a.id_taikhoan = c.id_taikhoan
        AND ngay_het_han > :ht
        AND trangthai = 1"
    );
    $stmt->execute([
        'id'=>$id,
        'ht'=>$now
    ]);
    
    $count = $stmt->rowCount();

?>
<br>
<div class="container">
   
    <div class="row row-cols-1 row-cols-md-4 g-4">
    <?php
        if($count < 1){
            echo 'bạn chưa có bất động sản';
        }else{
            while($row = $stmt->fetch()){
            $img = $pdo->prepare(
                "SELECT * FROM hinhanh WHERE ma_bds = :ma"
            );
            $img -> execute(['ma'=>$row['ma_bds']]);
            $pic=$img->fetch();

            $sql_loai = $pdo->prepare(
                "SELECT * FROM tin_dang as a, bat_dong_san as b, loai_bds as c
                WHERE a.ma_bds = :ma
                AND a.ma_bds = b.ma_bds
                AND b.id_loai = c.id_loai");
            $sql_loai->execute(['ma'=>$row['ma_bds']]);
            $loai = $sql_loai->fetch();
    ?>
        <div class="col">
            <div class="card h-100">
                <a class="card1" href="index.php?quanly=chi_tiet_bds&ma_bds=<?php echo $row['ma_bds']; ?>">
                <img src="uploads/bds/<?php echo $pic['link_anh'] ?>" class="card-img-top" alt="...">
                <div class="top-left nentrong text-white"><?php
         echo  ($loai['ten_loai'])
              ?></div>
          
          <div class="top-left-bottom"><?php
              if ($loai['loai_tin_dang'] == 1) {
                echo'<div class="silver text-white">
                Silver
          </div>' ;
              }
              else if ($loai['loai_tin_dang'] == 2){
                echo' <div class="gold text-white">
                Gold
          </div>' ;
              } else {
                echo'<div class="platinum text-white">
                Platinum
          </div>';
              }
              ?></div>
                <div class="card-body">
                    <h4 class="card-title gioihantieude"><?php echo $row['tieu_de']?></h4>
                    <h6>Giá tiền: <?php echo number_format($row['gia_bds'],0,',','.').' VND' ?></h6>
                    <h6>Địa chỉ: <?php echo $row['diachi'] ?></h6>
                    <h6>Thông tin: </h6>
                    <p class="card-text">
                    <?php echo substr($row['mo_ta'], 0, 100).'...' ?>
                    </p>
                </div>
                </a>
            </div>
        </div>
        <?php
        }}
    ?>
    </div>
    
</div>  