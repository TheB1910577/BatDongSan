<?php
    //thêm dòng conect vào đây
    include("../../../adminpanel/config/config.php");

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        echo $tieude = $_POST['tieude'];
        echo $gia = $_POST['gia'];
        echo $diachi = $_POST['diachi'];
        echo $mota = $_POST['mota'];
        echo $maps = $_POST['maps'];
        echo $dientich =  $_POST['dientich'];
        echo $sophong = $_POST['sophong'];
        echo $sotang = $_POST['sotang'];
        echo $ngayhethan = $_POST['ngayhethan'];
        echo $loaibds = $_POST['loaibds'];
        echo $sohong = $_POST['sohong'];
        echo $gpxd = isset($_POST['gpxd']) ? $_POST['gpxd']: null;
        echo $ntm = isset($_POST['ntm']) ? $_POST['ntm']: null;
        echo $nganhang = isset($_POST['nganhang']) ? $_POST['nganhang']: null;
        echo $chuachay = isset($_POST['chuachay']) ? $_POST['chuachay']: null;
        echo $thue = isset($_POST['thue']) ? $_POST['thue']: null;
        echo $maylanh = isset($_POST['maylanh']) ? $_POST['maylanh']: null;
        echo $tulanh = isset($_POST['tulanh']) ? $_POST['tulanh']: null;
        echo $hoboi = isset($_POST['hoboi']) ? $_POST['hoboi']: null;
        echo $sanvuon = isset($_POST['sanvuon']) ? $_POST['sanvuon']: null;
        echo $hangrao = isset($_POST['hangrao']) ? $_POST['hangrao']: null;
        echo $phongtam = isset($_POST['phongtam']) ? $_POST['phongtam']: null;
        echo $maygiat = isset($_POST['maygiat']) ? $_POST['maygiat']: null;
        echo $tubep = isset($_POST['tubep']) ? $_POST['tubep']: null;
        echo $losuoi = isset($_POST['losuoi']) ? $_POST['losuoi']: null;
        echo $nhawc = isset($_POST['nhawc']) ? $_POST['nhawc']: null;
        echo $pack = $_POST['pack'];
        
        //thêm
        if(isset($_POST['them'])){
            //xu ly anh
            // echo $countfiles = count($_FILES['files']['name']);
            // for($i = 0; $i < $countfiles; $i++) {
            //     echo $hinhanh = $_FILES['files']['name'][$i];
            // }
            //upload cơ sở dữ liệu

            $stmt = $pdo -> prepare(
                "INSERT INTO bat_dong_san 
                VALUES(
                  :ma, :tieu_de, :diachi, :gia_bds, :maplink
                , :mo_ta, :dien_tich, :so_phong,:so_tang
                , :loai_bds, :phap_ly, :loai_tin_dang
                , :so_ngay_hien_thi, :may_lanh
                , :tu_lanh, :lo_suoi, :ho_boi, :san_vuon, :hang_rao
                , :phong_tam, :nha_ve_sinh, :may_giat, :tinh_thanh
                , :id_taikhoan, :trangthai)"
            );

            $stmt->execute([
                'ma' => null, //tự tăng
                'tieu_de' => $tieude,
                'diachi' => $diachi,
                'gia_bds' => $gia,
                'maplink' => $maps,
                'mo_ta' => $mota,
                'dien_tich' => $dientich,
                'so_phong' => $sohong,
                'so_tang' => $sotang,
                'loai_bds' => $loaibds,
                'phap_ly' => $sohong,
                'loai_tin_dang' => $pack,
                'so_ngay_hien_thi' => $ngayhethan,
                'may_lanh' => $maylanh,
                'tu_lanh' => $tulanh,
                'lo_suoi' => $losuoi,
                'ho_boi' => $hoboi,
                'san_vuon' => $sanvuon,
                'hang_rao' => $hangrao,
                'phong_tam' => $phongtam,
                'nha_ve_sinh' => $nhawc,
                'may_giat' => $maygiat,
                'tinh_thanh' => null, // chỉnh sửa lại
                'id_taikhoan' => null, //chỉnh sửa lại
                'trang_thai' => 0,
            ]);
            echo 'them';
        }
        //sửa
        elseif(isset($_POST['sua'])){

        }
        //xóa
        else{

        }

        
    }
?>