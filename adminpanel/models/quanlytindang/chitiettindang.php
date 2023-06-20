<?php
    $bds = $pdo->prepare(
        "SELECT * FROM bat_dong_san as a, taikhoan as b, tin_dang as c
        WHERE a.ma_bds = c.ma_bds AND a.id_taikhoan = b.id_taikhoan
        AND a.ma_bds = :ma"
    );
    $bds->execute(['ma'=>$_GET['ma_bds']]);
    $row = $bds->fetch();
?>
    <div class="container">
        <div class="row">
            <!--row lv1-->
            <div class="col-lg-8 col-md-9 col-sm-12">
                <?php
                    $pic = $pdo->prepare(
                        "SELECT * FROM hinhanh WHERE ma_bds = '".$_GET['ma_bds']."'"
                    );
                    $pic->execute();
                    $count = $pic->rowCount();
                ?>
                <div class="row">
                    <!--slide show row-->
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <?php
                                $i = 0;
                                while($i < $count){
                                    
                                    
                            ?>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i ?>" <?php if($i==0) echo 'class="active"' ?> aria-current="true" aria-label="Slide <?php echo $i ?>"></button>
                            <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
                            <?php
                                $i++;
                                }
                            ?>
                        </div>
                        <div class="carousel-inner">
                            
                            <?php
                                $n = 0;
                                while($img = $pic->fetch()){
                                    
                            ?>
                            
                            <div class="carousel-item <?php if($n == 0) echo 'active'; ?>">
                                <img src="../uploads/bds/<?php echo $img['link_anh'] ?>" class="d-block w-100" alt="...">
                            </div>

                            <?php
                                $n++;
                                }
                            ?>
                            
                            <!-- <div class="carousel-item">
                                <img src="https://images2.thanhnien.vn/Uploaded/phongdt/2022_05_11/pokemon-4968.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
<img src="https://images2.thanhnien.vn/Uploaded/phongdt/2022_05_11/pokemon-4968.png" class="d-block w-100" alt="...">
                            </div> -->
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <!--end slide show row-->
                <br>
                <div class="row">
                    <!--open title-->
                    <h4><?php echo $row['tieu_de'] ?></h4>
                </div>
                <!--end title-->

                <div class="row">
                    <!--open info row-->
                    <div class="col">
                        <div class="row">Mức Giá</div>
                        <div class="row"><?php echo number_format($row['gia_bds'],0,',','.').' VND' ?></div>
                    </div>
                    <div class="col">
                        <div class="row">Diện Tích</div>
                        <div class="row"><?php echo $row['dien_tich'].'m2' ?></div>
                    </div>
                    <div class="col">
                        <div class="row">Số Phòng</div>
                        <div class="row"><?php echo $row['so_phong'] ?></div>
                    </div>
                    <div class="col">
                        <div class="row">Số Tầng</div>
                        <div class="row"><?php echo $row['so_tang'] ?></div>
                    </div>
                    
                </div>
                <!--close info row-->
                <br>
                <div class="row">
                    <h5>Thông tin mô tả</h5>
                </div>

                <div class="row">
                    <blockquote class="blockquote">
                        <p><?php echo $row['mo_ta'] ?></p>
                    </blockquote>
                </div>
                <?php 
                    $tiennghi = $pdo->prepare(
                        "SELECT * FROM co_tien_ich as a, tien_ich as b 
                        WHERE a.id_tienich = b.id_tienich AND ma_bds = :ma_bds"
                    );
$tiennghi->execute(['ma_bds'=>$_GET['ma_bds']]);
                ?>
                <div class="row">
                    <h5>Tiện nghi và nội thất</h5>
                </div>
                <div class="row">
                    <?php
                        while($rows = $tiennghi->fetch()){
                            echo '<h5> - '.$rows['ten_tienich'].'</h5>';
                        }
                    ?>
                    
                </div>

                <br>

                <div class="row">
                    <h5>Vị trí bất động sản trên bản đồ</h5>
                </div>

                <div class="row">
                    <?php echo $row['maplink'] ?>
                </div>
                <br>
               

               
            </div>
            
            <div class="col-lg-4 col-md-3 col-sm-12">
                <div class="row"><h3>Người đăng bán</h3></div>
                <div class="row">
                    <div class="col-md-2">
<img src="<?php if($row['avata']!='') echo '../uploads/'.$row['avata']; else echo 'https://res.cloudinary.com/dm1dyamzb/image/upload/v1686010584/default_px3hi9.png' ?>" alt="Avatar" class="avatar">
                    </div>
                    <div class="col-md-10">
                       <h4><?php echo $row['ten_taikhoan'] ?></h4>
                    </div>
                </div>

                <div class="row">
                    <h4>
                        <i class='fas fa-phone-alt' style='color:#35f37e'></i>: <?php echo $row['sdt'] ?></h4>
                </div>
                <div class="row">
                    <h4>
                        <i class='fas fa-mail-bulk'></i> (<?php echo $row['email'] ?>)</h4>
                </div>  
                <div class="row">
                    <div class="col-md-3"> <a href="models/quanlytindang/xuly.php?duyet&id=<?php echo $row['ma_bds'] ?>" class="btn btn-primary"> Duyệt</a></div>
                    <div class="col"><a href="models/quanlytindang/xuly.php?xoa&id=<?php echo $row['ma_bds'] ?>" class="btn btn-danger"> Xóa</a></div>
                    
                </div>
            </div>

            

        </div>
        <!--end row lv1-->
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
