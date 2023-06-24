<?php
    include("../../config/config.php");
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $ten_tienich = $_POST['ten'];
        if(isset($_POST['them'])){
            
            $stmt = $pdo->prepare(
                "INSERT INTO tien_ich(ten_tienich) VALUES(:ten)"
            );
            $stmt->execute(['ten'=>$ten_tienich]);
            header("location:../../index.php?quanly=tienich");
        }elseif(isset($_POST['sua'])){
            $stmt = $pdo->prepare("UPDATE tien_ich SET ten_tienich = :ten WHERE id_tienich = :id");
            $stmt->execute([
                'ten'=> $ten_tienich,
                'id'=>$_GET['id']
            ]);
            header("location:../../index.php?quanly=tienich");
        }
    }
   if($_GET['quanly']=='xoa'){
        $stmt = $pdo->prepare(
            "DELETE FROM tien_ich WHERE id_tienich = :id"
        );
        $stmt->execute(['id'=>$_GET['id']]);
        header("location:../../index.php?quanly=tienich");
   }
?>