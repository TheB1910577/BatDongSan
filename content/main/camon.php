<?php
    if(isset($_GET['vnp_BankTranNo']) && isset($_GET['vnp_TransactionStatus'])){
        if($_GET['vnp_TransactionStatus'] = '00' && $_GET['vnp_ResponseCode'] =='00'){
            $stmt = $pdo->prepare(
                "INSERT INTO vn_pay(
                    vnp_amount, 
                    vnp_bankcode, 
                    vnp_banktranno, 
                    vnp_cardtype, 
                    vnp_orderinfo, 
                    vnp_paydate, 
                    vnp_responsecode, 
                    vnp_tmncode, 
                    vnp_transactionno, 
                    vnp_transactionstatus, 
                    vnp_TxnRef)
                VALUES(
                    :amount,
                    :bc,
                    :bcn,
                    :ct,
                    :oi,
                    :pd,
                    :rsc,
                    :tmnc,
                    :tc,
                    :ts,
                    :tr
                )
                "
            );
            $stmt->execute([
                'amount'=>$_GET['vnp_Amount']/100,
                'bc'=>$_GET['vnp_BankCode'],
                'bcn'=>$_GET['vnp_BankTranNo'],
                'ct'=>$_GET['vnp_CardType'],
                'oi'=>$_GET['vnp_OrderInfo'],
                'pd'=>$_GET['vnp_PayDate'],
                'rsc'=>$_GET['vnp_ResponseCode'],
                'tmnc'=>$_GET['vnp_TmnCode'],
                'tc'=>$_GET['vnp_TransactionNo'],
                'ts'=>$_GET['vnp_TransactionStatus'],
                'tr'=>$_GET['vnp_TxnRef']
            ]);
           
?>

    <div class="container">
        <div class="camon">
            <p>Cảm ơn bạn đã sử dụng dịch vụ đăng tin của chúng tôi!</p>
            <p>Bạn đã thanh toán qua VNPAY thì bạn cứ yên tâm, chúng tôi sẽ xét duyệt nhanh chóng</p>
            <p>Trở về trang chủ <a href="index.php">tại đây</a></p>
            
        </div>
    </div>
    

<?php
    }
}if(isset($_GET['id'])){
?>
<div class="container">
    <div class="camon">
        <h1 class="camon1">Cảm ơn bạn đã sử dụng dịch vụ đăng tin của chúng tôi!</h1>
        <p>Bạn thanh toán chuyển khoản vui lòng chuyển khoản theo thông tin sau:</p>
        <p>Ngân hàng sacombank</p>
        <p>Số tài khoản: 070108020601</p>
        <p>Tên chủ tài khoản: LU HUNG CUONG</p>
        <p>Nội dung chuyển khoản: #<?php echo $_GET['id']?></p>
        <p>Sau khi nhận được chuyển khoản, chúng tôi sẽ duyệt ngay lập tức, trường hợp chậm trể bạn có thể nhắn qua fanfage FB</p>
    </div>
   
</div><?php
}
?>