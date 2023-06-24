<?php
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['admin']);
        header('Location:dang_nhap_admin.php');
    }
?>
