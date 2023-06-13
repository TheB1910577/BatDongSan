<?php
    
    include("../../config/config.php");
    if(isset($_GET['duyet'])){
        $stmt = $pdo->prepare("UPDATE tin_dang SET trangthai = 1 WHERE ma_bds = :ma");
        $stmt -> execute(['ma'=>$_GET['id']]);
        header("location:../../index.php?quanly=duyettindang");
    }
    if(isset($_GET['xoa'])){
        $stmt = $pdo->prepare("UPDATE tin_dang SET trangthai = -1 WHERE ma_bds = :ma");
        $stmt -> execute(['ma'=>$_GET['id']]);
        header("location:../../index.php?quanly=duyettindang");
    }
?>