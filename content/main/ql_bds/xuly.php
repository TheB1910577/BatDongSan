<?php
    //thêm dòng conect vào đây
    session_start();
    include("../../../adminpanel/config/config.php");

    if($_SERVER['REQUEST_METHOD'] === 'POST'){$ma_bds = time();
        $tieude = $_POST['tieude'];
        $diachi = $_POST['diachi'];
        $maps = $_POST['maps'];
        $dientich = $_POST['dientich'];
        $sophong = $_POST['sophong'];
        $sotang = $_POST['sotang'];
        $phaply = $_POST['sohong'];
        $id_loai = $_POST['loaibds'];
        $id_tinh = $_POST['tinh'];

        $countfiles = count($_FILES['files']['name']);

        //thêm
        if(isset($_POST['them'])){
            $add = $pdo->prepare(
                "INSERT INTO bat_dong_san(ma_bds, ten_bds, diachi, maplink, dien_tich, so_phong, so_tang, phap_ly, hien_thi, id_taikhoan, id_tinh, id_loai)
                VALUES(:ma, :ten, :dc, :map, :dt, :sp, :st, :pl, :ht, :tk, :tinh, :loai)
            ");
            $add->execute([
                'ma'=> $ma_bds,
                'ten'=>$tieude,
                'dc'=>$diachi,
                'map'=>$maps,
                'dt'=>$dientich,
                'sp'=>$sophong,
                'st'=>$sotang,
                'pl'=>$phaply,
                'ht'=>1,
                'tk'=>$_SESSION['id_taikhoan'],
                'tinh'=>$id_tinh,
                'loai'=>$id_loai
            ]);

            $sql = $pdo->prepare("INSERT INTO hinhanh(link_anh, ma_bds) VALUE(:link, :ma)");
            for($i = 0; $i < $countfiles; $i++) {
                $filename = $_FILES['files']['name'][$i];
                $target_file = '../../../uploads/bds/'.$filename;

                $file_extension = pathinfo(
                    $target_file, PATHINFO_EXTENSION);
                     
                $file_extension = strtolower($file_extension);
              
                // Valid image extension
                $valid_extension = array("png","jpeg","jpg");

                if(in_array($file_extension, $valid_extension)){
                    move_uploaded_file($_FILES['files']['tmp_name'][$i], $target_file);
                    $sql->execute([
                        'link'=>$filename,
                        'ma' => $ma_bds
                    ]);
                }
            }

            //echo '<script>alert("Thêm thành công");</script>';
            header("location:../../../index.php?quanly=batdongsancuatoi");
        }
        //sửa
        elseif(isset($_POST['sua'])){
            if($_FILES['files']['name'][0] != ''){
                // xóa ảnh cũ trên server
                $del = $pdo->prepare(
                    "SELECT * FROM hinhanh WHERE ma_bds = :ma"
                );
                $del->execute(['ma'=>$_GET['id']]);
                while($row = $del->fetch()){
                    unlink('../../../uploads/bds/'.$row['link_anh']);
                }

                // xóa ảnh của trên csdl
                $stmt = $pdo->prepare("DELETE FROM hinhanh WHERE ma_bds = '".$_GET['id']."'");
                $stmt->execute();

                //upload ảnh mới
                $sql = $pdo->prepare("INSERT INTO hinhanh(link_anh, ma_bds) VALUE(:link, :ma)");
                for($i = 0; $i < $countfiles; $i++) {
                    $filename = $_FILES['files']['name'][$i];
                    $target_file = '../../../uploads/bds/'.$filename;

                    $file_extension = pathinfo(
                        $target_file, PATHINFO_EXTENSION);
                        
                    $file_extension = strtolower($file_extension);
                
                    // Valid image extension
                    $valid_extension = array("png","jpeg","jpg");

                    if(in_array($file_extension, $valid_extension)){
                        move_uploaded_file($_FILES['files']['tmp_name'][$i], $target_file);
                        $sql->execute([
                            'link'=>$filename,
                            'ma' => $_GET['id']
                        ]);
                    }
                }

                
            }
            $sql = $pdo->prepare(
                "UPDATE bat_dong_san SET 
                    ten_bds = :ten, 
                    diachi = :dc, 
                    maplink = :maps, 
                    dien_tich = :dt, 
                    so_phong = :sp,
                    so_tang = :st,
                    id_loai = :id_loai,
                    id_tinh = :id_tinh
                WHERE ma_bds = :ma
                "
            );
            $sql->execute([
                'ten' => $tieude,
                'dc' => $diachi,
                'maps' => $maps,
                'dt' => $dientich,
                'sp' => $sophong,
                'st' => $sotang,
                'id_loai' => $id_loai,
                'id_tinh' => $id_tinh,
                'ma' => $_GET['id']
            ]);
        }  
    }
    if(isset($_GET['xoa'])){
        $del = $pdo->prepare("UPDATE bat_dong_san SET hien_thi = 0 WHERE ma_bds = '".$_GET['id']."'");
        $del->execute();
        header("location:../../../index.php?quanly=batdongsancuatoi");
    }
?>