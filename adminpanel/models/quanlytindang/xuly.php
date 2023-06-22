<?php
    
    include("../../config/config.php");
    require("../../../carbon/autoload.php");
    use Carbon\Carbon;
    $now = Carbon::now("Asia/Ho_Chi_Minh")->toDateString();

    if(isset($_GET['duyet'])){
        $stmt = $pdo->prepare("UPDATE tin_dang SET trangthai = 1 WHERE ma_bds = :ma");
        $stmt -> execute(['ma'=>$_GET['id']]);

        $chek = $pdo->prepare("SELECT * FROM thong_ke WHERE ngay = :ht");
        $chek->execute(['ht'=>$now]);
        $row = $chek->fetch();
        $count = $chek->rowCount();
        if($count > 0){
            $doanhsocu = $row['doanh_so'];
            $tong_don = $row['tong_don']+1;

            $sql_gia = $pdo->prepare("SELECT * FROM tin_dang WHERE ma_bds = :ma");
            $sql_gia -> execute(['ma'=>$_GET['id']]);
            $gia = $sql_gia->fetch();
            if($gia['loai_tin_dang'] == '3'){
                $doanhso = $doanhsocu + 190000;
            }
            if($gia['loai_tin_dang'] == '2'){
                $doanhso = $doanhsocu + 150000;
            }
            if($gia['loai_tin_dang'] == '1'){
                $doanhso = $doanhsocu + 90000;
            }

            $sql = $pdo->prepare("UPDATE thong_ke SET doanh_so = :ds, tong_don = :td WHERE ngay = :ht");
            $sql->execute([
                'ds'=>$doanhso,
                'td'=>$tong_don,
                'ht'=>$now
            ]);

        }else{
            // lấy thông tin từ bất động sản cần duyệt
            $sql_gia = $pdo->prepare("SELECT * FROM tin_dang WHERE ma_bds = :ma");
            $sql_gia -> execute(['ma'=>$_GET['id']]);
            $gia = $sql_gia->fetch();
            if($gia['loai_tin_dang'] == '3'){
                $doanhso = 190000;
            }
            if($gia['loai_tin_dang'] == '2'){
                $doanhso = 150000;
            }
            if($gia['loai_tin_dang'] == '1'){
                $doanhso = 90000;
            }

            //chèn một dòng dữ liệu mới vào csdl
            $sql = $pdo->prepare(
                "INSERT INTO thong_ke(
                    doanh_so,
                    tong_don,
                    ngay
                ) 
                VALUES(
                    :ds,
                    :td,
                    :ngay
                )"
            );
            $sql->execute([
                'ds'=>$doanhso,
                'td'=>1,
                'ngay'=>$now
            ]);
        }
        header("location:../../index.php?quanly=duyettindang");
    }
    if(isset($_GET['xoa'])){
        $stmt = $pdo->prepare("UPDATE tin_dang SET trangthai = -1 WHERE ma_bds = :ma");
        $stmt -> execute(['ma'=>$_GET['id']]);
        header("location:../../index.php?quanly=duyettindang");
    }
?>