<?php
    include("../../../adminpanel/config/config.php");
    echo $ma_bds = $_GET['id'];
    $tieu_de = $_POST['tieude'];
    $gia_bds = $_POST['gia'];
    $mo_ta = $_POST['mota'];
    $loai_tin_dang = $_POST['loai_tin_dang'];
    $thanh_toan = $_POST['thanhtoan'];

    if($loai_tin_dang == 1){
        $tienbaidang = 90000;
    }
    elseif($loai_tin_dang == 2){
        $tienbaidang = 150000;
    }elseif($loai_tin_dang == 3){
        $tienbaidang = 190000;
    }

    if($thanh_toan == 'chuyenkhoan'){
        $stmt = $pdo -> prepare(
            "INSERT INTO tin_dang(tieu_de, gia_bds, loai_tin_dang, ma_bds, mo_ta, trangthai, thanhtoan)
            VALUES(:td, :gia, :loaitin, :ma, :mota, :trangthai, :thanhtoan)"
        );
        $stmt->execute([
            'td'=>$tieu_de,
            'gia'=>$gia_bds,
            'loaitin'=>$loai_tin_dang,
            'ma'=>$ma_bds,
            'mota'=>$mo_ta,
            'trangthai'=>0,
            'thanhtoan'=>$thanh_toan,
        ]);
        echo 'thành công';
        echo 'bạn hãy chuyển khoảng theo thông tin đã được cung cấp';
    }elseif($thanh_toan == 'vnpay'){
        require_once("../../../adminpanel/config/config_vnpay.php");

        $vnp_TxnRef = rand(1,1000); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = 'billpayment test';
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = 10000 * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        //Add Params of 2.0.1 Version
        
        $vnp_ExpireDate = $expire;
    
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
            "vnp_ExpireDate"=>$vnp_ExpireDate,
    
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array('code' => '00'
            , 'message' => 'success'
            , 'data' => $vnp_Url);
            if (isset($_POST['redirect'])) {
                header('Location: ' . $vnp_Url);
                die();
            } else {
                echo json_encode($returnData);
            }
            // vui lòng tham khảo thêm tại code demo
    }elseif($thanh_toan == 'momo'){
        echo 'thanh toán qua momo';
    }
    
?>