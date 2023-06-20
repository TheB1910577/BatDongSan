<?php
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM bat_dong_san as a, tin_dang as b, taikhoan as c
        WHERE c.id_taikhoan = :id
        AND b.ma_bds = a.ma_bds
        AND a.id_taikhoan = c.id_taikhoan"
    );
    $stmt->execute(['id'=>$id]);
    
    $count = $stmt->rowCount();

?>
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php
        if($count < 1){
            echo 'Không có bất động sản nào khác';
        }else{
            while($row = $stmt->fetch()){
            $img = $pdo->prepare(
                "SELECT * FROM hinhanh WHERE ma_bds = :ma"
            );
            $img -> execute(['ma'=>$row['ma_bds']]);
            $pic=$img->fetch();
    ?>
    
        <div class="col">
            <div class="card h-100">
                <a class="card1" href="index.php?quanly=chi_tiet_bds&ma_bds=<?php echo $row['ma_bds']; ?>">
                <img src="uploads/bds/<?php echo $pic['link_anh'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $row['tieu_de'] ?></h4>
                    <h6>Giá tiền: <?php echo number_format($row['gia_bds'],0,',','.').' VND' ?></h6>
                    <h6>Địa chỉ: <?php echo $row['diachi'] ?></h6>
                    <h6>Thông tin: </h6>
                    <p class="card-text">
                    <?php echo $row['mo_ta'] ?>
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