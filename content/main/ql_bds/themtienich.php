<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        
        //echo $count;
        
            $stmt = $pdo->prepare("INSERT INTO co_tien_ich(id_tienich, ma_bds) VALUES(:id, :ma)");
            //echo $_POST['3'];
            if(isset($_POST['1'])){
                $stmt->execute([
                    'id'=>$_POST['1'],
                    'ma'=>$_GET['id']
                ]);
            }
            if(isset($_POST['3'])){
                $stmt->execute([
                    'id'=>$_POST['3'],
                    'ma'=>$_GET['id']
                ]);
            }
            if(isset($_POST['4'])){
                $stmt->execute([
                    'id'=>$_POST['4'],
                    'ma'=>$_GET['id']
                ]);
            }
            if(isset($_POST['5'])){
                $stmt->execute([
                    'id'=>$_POST['5'],
                    'ma'=>$_GET['id']
                ]);
            }
        
        
    }
    $check = $pdo->prepare("SELECT * FROM co_tien_ich WHERE ma_bds = :ma");
        $check->execute(['ma'=>$_GET['id']]);
        $count = $check->rowCount();
    if($count < 1){
?>
<div class="container">
    <h2>Thêm tiện ích cho bất động sản</h2>
    <form method="POST">
        
        <div class="form-group mb-3 row">  
            <input class="col-lg-1 col-md-1 col-sm-12 col-12 offset-lg-2" type="checkbox" id="1" name="1" value="1">
            <label for="1" class="col-lg-8 col-md-11 col-sm-9 col-10 ">Gara xe hơi</label>
        </div>

        <div class="form-group mb-3 row">  
            <input class="col-lg-1 col-md-1 col-sm-12 col-12 offset-lg-2" type="checkbox" id="3" name="3" value="3">
            <label for="3" class="col-lg-8 col-md-11 col-sm-9 col-10 ">Máy lạnh</label>
        </div>

        <div class="form-group mb-3 row">  
            <input class="col-lg-1 col-md-1 col-sm-12 col-12 offset-lg-2" type="checkbox" id="4" name="4" value="4">
            <label for="4" class="col-lg-8 col-md-11 col-sm-9 col-10 ">Cách nhiệt</label>
        </div>

        <div class="form-group mb-3 row">  
            <input class="col-lg-1 col-md-1 col-sm-12 col-12 offset-lg-2" type="checkbox" id="5" name="5" value="5">
            <label for="5" class="col-lg-8 col-md-11 col-sm-9 col-10 ">Máy giặt</label>
        </div>
        
        

        <button class="btn btn-primary">Thêm</button>
    </form>
</div>
<?php
}else {echo 'Ban da them r';}
    
?>