<?php
    require("carbon/autoload.php");
    use Carbon\Carbon;
    $now = Carbon::now('Asia/Ho_Chi_Minh');
    $stmt = $pdo->prepare(
        "SELECT * FROM bat_dong_san as a, taikhoan as b
        WHERE a.id_taikhoan = b.id_taikhoan
        AND a.id_taikhoan = :id
        AND hien_thi = 1"
    );
    $stmt->execute([
        'id'=>$_SESSION['id_taikhoan']
    ]);

    
?>

<div class="box">
    <div class="row mb-3">
        <h2 class="col">Bất động sản của tôi</h2>
        <a href="index.php?quanly=them_bds" class="btn btn-primary col-lg-1 col-2">Thêm mới</a>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Diện tích</th>
            <th scope="col">Số phòng</th>
            <th scope="col">Số tầng</th>
            <th scope="col">Pháp lý</th>
            <th scope="col">Quản lý</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i=1;
                while($row = $stmt->fetch()){
                    $sql = $pdo->prepare("SELECT * FROM tin_dang WHERE ma_bds = :ma AND ngay_het_han < :ht");
                    $sql->execute([
                        'ma'=>$row['ma_bds'],
                        'ht'=>$now
                    ]);
                    $count = $sql->rowCount();
            ?>
            <tr>
                <th scope="row"><?php echo $i ?></th>
                <td><?php echo $row['ten_bds'] ?></td>
                <td><?php echo $row['diachi'] ?></td>
                <td><?php echo $row['dien_tich'] ?></td>
                <td><?php echo $row['so_phong'] ?></td>
                <td><?php echo $row['so_tang'] ?></td>
                <td><?php echo $row['phap_ly'] ?></td>
                <td>
                    <?php 
                        if($count < 1) {
                    ?>
                    <a href="index.php?quanly=dangtin&id=<?php echo $row['ma_bds'] ?>" class="btn btn-primary">Đăng tin</a>
                    <?php 
                        }
                    ?>
                    <a href="index.php?quanly=themtienich&id=<?php echo $row['ma_bds'] ?>" class="btn btn-warning">Thêm tiện ích</a>
                    <a href="index.php?quanly=sua_bds&id=<?php echo $row['ma_bds'] ?>" class="btn btn-warning">Sửa</a>
                    <a href="content/main/ql_bds/xuly.php?xoa&id=<?php echo $row['ma_bds'] ?>" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
            <?php
                    $i++;
                }
            ?>
            
        </tbody>
    </table>
</div>