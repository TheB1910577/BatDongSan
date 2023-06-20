<div class="container">
    <h2>Thêm tiện ích cho bất động sản</h2>
    <form method="POST">
        <?php
            $stmt=$pdo->prepare("SELECT * FROM tien_ich");
            $stmt->execute();
            while($row = $stmt->fetch()){
                $sql = $pdo->prepare("SELECT * FROM ")
        ?>
        <div class="form-group mb-3 row">  
            <input class="col-lg-1 col-md-1 col-sm-12 col-12 offset-lg-2" type="checkbox" id="<?php echo $row['id_tienich']?>" name="<?php echo $row['id_tienich']?>">
            <label for="agree" class="col-lg-8 col-md-11 col-sm-9 col-10 "><?php echo $row['ten_tienich'] ?></label>
        </div>
        
        <?php
            }
        ?>

        <button class="btn btn-primary">Thêm</button>
    </form>
</div>