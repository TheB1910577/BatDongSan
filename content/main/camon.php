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
    <p>Cảm ơn bạn đã sử dụng dịch vụ đăng tin của chúng tôi</p><br>
    <p>Bạn đã thanh toán qua VNPAY thì bạn cứ yên tâm, chúng tôi sẽ xét duyệt nhanh chóng</p>
    <p>Trở về trang chủ <a href="index.php">tại đây</a></p>
    </div>

<?php
        }else{
?>
<div class="container">
    <p>Cảm ơn bạn đã sử dụng dịch vụ đăng tin của chúng tôi</p><br>
    <p>Bạn thanh toán chuyển khoản vui lòng chuyển khoảng theo thông tin sau:</p><br>
    <p>Ngân hàng sacombank</p><br>
    <p>Số tài khoản: 070108020601</p><br>
    <p>Tên chủ tài khoản: LU HUNG CUONG</p><br>
    <p>Nội dung chuyển khoản: #<?php echo $_GET['id']?></p><br>
    <p>Sau khi nhận được chuyển khoản, chúng tôi sẽ duyệt ngay lập tức, trường hợp chậm trể bạn có thể nhắn qua fanfage FB</p>
</div>
<?php
        }
    }
?>