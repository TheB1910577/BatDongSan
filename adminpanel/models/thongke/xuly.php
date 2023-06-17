<?php
    require("../../../carbon/autoload.php");
    include("../../config/config.php");

    use Carbon\Carbon;
    $now = Carbon::now("Asia/Ho_Chi_Minh")->toDateString();
    $subday = Carbon::now("Asia/Ho_Chi_Minh")->subDays(15)->toDateString();

    $stmt = $pdo->prepare("SELECT * FROM thong_ke WHERE ngay >= :sub ORDER BY ngay ASC");
    $stmt->execute([
        'sub'=>$subday
    ]);

    while($row = $stmt->fetch()){
        $chart_data[] = array(
            'y'=>$row['ngay'],
            'a'=>$row['tong_don'],
            'b'=>$row['doanh_so'],
        );
    }
    echo $data = json_encode($chart_data);
?>