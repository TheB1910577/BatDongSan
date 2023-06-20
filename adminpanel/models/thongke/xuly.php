<?php
    require("../../../carbon/autoload.php");
    include("../../config/config.php");

    use Carbon\Carbon;
    $now = Carbon::now("Asia/Ho_Chi_Minh")->toDateString();

    if(isset($_POST['thoigian'])){
        $thoigian = $_POST['thoigian'];
    }else{
        $thoigian = "";
        $subday = Carbon::now("Asia/Ho_Chi_Minh")->subDays(7)->toDateString();
    }

    if($thoigian == '7'){
        $subday = Carbon::now("Asia/Ho_Chi_Minh")->subDays(7)->toDateString();
    }elseif($thoigian == '15'){
        $subday = Carbon::now("Asia/Ho_Chi_Minh")->subDays(15)->toDateString();
    }elseif($thoigian == '30'){
        $subday = Carbon::now("Asia/Ho_Chi_Minh")->subDays(30)->toDateString();
    }elseif($thoigian =='90'){
        $subday = Carbon::now("Asia/Ho_Chi_Minh")->subDays(90)->toDateString();
    }elseif($thoigian == '365'){
        $subday = Carbon::now("Asia/Ho_Chi_Minh")->subDays(365)->toDateString();
    }

    //echo $subday;

    $stmt = $pdo->prepare("SELECT * FROM thong_ke WHERE ngay BETWEEN :sub AND :ht ORDER BY ngay ASC");
    $stmt->execute([
        'sub'=>$subday,
        'ht'=>$now
    ]);

    while($row = $stmt->fetch()){
        $chart_data[] = array(
            'y'=>$row['ngay'],
            'a'=>$row['doanh_so'],
        );
    }
    echo $data = json_encode($chart_data);
?>