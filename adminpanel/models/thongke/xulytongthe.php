<?php
    require("../../../carbon/autoload.php");
    include("../../config/config.php");
    use Carbon\Carbon;
    $now = Carbon::now("Asia/Ho_Chi_Minh")->toDateString();

    $sotindang = $pdo->prepare("SELECT * FROM tin_dang");
    $sotindang->execute();
    $tong = $sotindang->rowCount();
    $chart_data[] = array(
        'y'=>'Tổng số tin đăng',
        'a'=>$tong,
    );

    $chuaduyet = $pdo->prepare("SELECT * FROM tin_dang WHERE trangthai = 0");
    $chuaduyet->execute();
    $tongchuaduyet = $chuaduyet->rowCount();
    $chart_data[] = array(
        'y'=>'Tin đăng chưa duyệt',
        'a'=>$tongchuaduyet,
    );

    $daduyet = $pdo->prepare("SELECT * FROM tin_dang WHERE trangthai = 1");
    $daduyet->execute();
    $tongdaduyet = $daduyet->rowCount();
    $chart_data[] = array(
        'y'=>'Tin đăng đã duyệt',
        'a'=>$tongdaduyet,
    );


    $homnay = $pdo->prepare("SELECT * FROM thong_ke WHERE ngay = :ht");
    $homnay ->execute([
        'ht'=>$now
    ]);
    $row = $homnay->fetch();
    $count = $homnay->rowCount();
    if($count > 0){
        $chart_data[] = array(
            'y'=>'Số Tin đăng thêm mới trong hôm nay',
            'a'=>$row['tong_don'],
        );
    }else{
        $chart_data[] = array(
            'y'=>'Số Tin đăng thêm mới trong hôm nay',
            'a'=>0,
        ); 
    }
   
    
    echo $data = json_encode($chart_data);
?>