<?php
  require("carbon/autoload.php");
  use Carbon\Carbon;
  use Carbon\CarbonInterval;
  $now = Carbon::now('Asia/Ho_Chi_Minh');
  //echo $now->addDays(10)->toDateString();
?>
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
                                <img src="uploads/bds/<?php echo $img['link_anh'] ?>" class="d-block w-100 cover1 object1" alt="...">
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
                    <h1><?php echo $row['tieu_de'] ?></h1>
                </div>
                <!--end title-->
<br>

<div class="row">
                    <!--open title-->
                    <h5><i class='fa-solid fa-location-dot'></i>  <?php echo $row['diachi'] ?></h5>
                </div>
                <!--end title-->
<br>
               <h5> <div class="row">
                    <!--open info row-->
                    <div class="col-md-3 col-6 white nenxanh rounded ">
                        <div class="row"><p><span><i class='fa-solid fa-money-bill-1'></i></span> Mức Giá </p>  </div>  
                        <div class="row white"><p><?php echo number_format($row['gia_bds'],0,',','.').' VND' ?></p> </div>
                    </div>
                    <div class="col-md-3 col-6 white nenvang rounded ">
                        <div class="row"><p><span><i class='fas fa-ruler-combined'></i></span> Diện Tích </p> </div>
                        <div class="row white"><p><?php echo $row['dien_tich'] ?>m2</p> </div>
                    </div>
                    <div class="col-md-3  col-6 white nenblue rounded">
                        <div class="row"><p><span><i class='fas fa-door-open'></i></span> Số Phòng</p></div>
                        <div class="row white"><p><?php echo $row['so_phong'] ?></p></div>
                    </div>
                    <div class="col-md-3 col-6 white nencam rounded">
                        <div class="row"><p><span><i class='fas fa-layer-group'></i></span> Số Tầng</p>  </div>
                        <div class="row white"><p><?php echo $row['so_tang'] ?></p> </div>
                    </div>
                </div></h5>
        
                <!--close info row-->
                <br>
                <div class="row">
                    <h4><span><i class='fa-solid fa-message'></i></span> Thông tin mô tả</h4>
                </div>

                <div class="row">
                    <blockquote class="blockquote nenxam">
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
                    <h4><span><i class='fa fa-bath'></i></span>Tiện nghi và nội thất</h4>
                </div>
                <div class="row nenxam">
                    <?php
                        while($rows = $tiennghi->fetch()){
                            echo '<h5> - '.$rows['ten_tienich'].'</h5>';
                        }
                    ?>
                    
                </div>

                <br>

                <div class="row">
                    <h4>Vị trí bất động sản trên bản đồ</h4>
                </div>

                <div class="row">
                    <?php echo $row['maplink'] ?>
                </div>
                <br>
                

                        

                <!-- <div>
                    <div class="container">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <?php
                                $stmt = $pdo->prepare(
                                    "SELECT * FROM tin_dang as a, bat_dong_san as b
                                    WHERE a.ma_bds = b.ma_bds ORDER BY loai_tin_dang DESC LIMIT 3"
                                );
                                $stmt->execute();
                                while($nearing = $stmt->fetch()){
                            ?>
                            <div class="col">
                                <div class="card h-100">
                                    
                                    <div class="card-body">
                                    <img src="uploads/bds/<?php echo $nearing['link_anh'] ?>" class="card-img-top" alt="...">
                                        <h4 class="card-title"><?php echo $nearing['tieu_de'] ?></h4>
                                        <h6>Giá tiền: <?php echo number_format($nearing['gia_bds'],0,',','.').' VND'?></h6>
                                        <h6>Địa chỉ: <?php echo $nearing['diachi'] ?></h6>
                                        <h6>Thông tin:</h6>
                                        <p class="card-text">
                                            <?php echo $row['mo_ta'] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            ?>

                        </div>
                    </div>
                </div> -->
            </div>
            
            <div class="col-lg-4 col-md-3 col-sm-12">
                <div class="col"><h4>Được đăng bởi</h4></div>
            <div class="row nenxamcard">
                <!-- <div class="row">
                    <br>
                </div> -->
                
                <div class="row ">
                    <div class="col-md-12 d-flex justify-content-center mt-2">
                        <img src="<?php if($row['avata']!='') echo 'uploads/'.$row['avata']; else echo 'https://res.cloudinary.com/dm1dyamzb/image/upload/v1686010584/default_px3hi9.png' ?>" alt="Avatar" class="avatarto">
                    </div>
                    <div class="col-md-12 d-flex justify-content-center ">
                       <h4><?php echo $row['ten_taikhoan'] ?></h4></div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <h4 class="green"><i class='fas fa-phone-alt' style='color:#35f37e'></i> <?php echo $row['sdt'] ?></h4>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <h4 class="orange"><i class='fas fa-mail-bulk'></i> <?php echo $row['email'] ?></h4>
                    </div> 
                      
                       
                    
                </div> 
                <div class="cols d-flex justify-content-center mb-2     ">
                    <a href="index.php?quanly=tindang&id=<?php echo $row['id_taikhoan']; ?>" class="btn btn-success"> Tất cả bất động sản khác của <?php echo $row['ten_taikhoan'] ?></a>
                    <br>
                </div>
                <br>
            </div>
         
            </div>

            

        </div>

        <?php
  //echo $_SESSION['dangnhap'];
  $stmt = $pdo->prepare(
    "SELECT * FROM tin_dang as a, bat_dong_san as b, taikhoan as c, loai_bds as d WHERE
    a.ma_bds = b.ma_bds AND 
    b.id_taikhoan = c.id_taikhoan AND 
    b.id_loai = d.id_loai AND
    trangthai = 1
    AND ngay_het_han >= :ht 
    ORDER BY loai_tin_dang DESC"
    
  );
  $stmt->execute(['ht'=>$now]);
?>
<br>
<h4>Được quan tâm nhiều</h4>
<br>
<div class="container">
  <div class="slick">
    <?php
     while($rows = $stmt->fetch()){
      $sql = $pdo->prepare("SELECT * FROM hinhanh WHERE ma_bds = :ma LIMIT 1");
      $sql->execute(['ma'=>$rows['ma_bds']]);
      $row = $sql->fetch();
        
    ?>
  
  <div class="col">
        
        <div class="card h-100 ">
          <a class="card1" href="index.php?quanly=chi_tiet_bds&ma_bds=<?php echo $rows['ma_bds']; ?>">
            <img src="uploads/bds/<?php echo $row['link_anh'] ?>" class="card-img-top cover object" alt="...">
            <div class="top-left nentrong text-white"><?php
         echo  ($rows['ten_loai'])
              ?></div>
          
          <div class="top-left-bottom"><?php
              if ($rows['loai_tin_dang'] == 1) {
                echo'<div class="silver text-white">
                Silver
          </div>' ;
              }
              else if ($rows['loai_tin_dang'] == 2){
                echo' <div class="gold text-white">
                Gold
          </div>' ;
              } else {
                echo'<div class="platinum text-white">
                Platinum
          </div>';
              }
              ?></div>
            <div class="card-body">
              <div class="row">
              <h4 class="card-title gioihanvanban1"><?php echo $rows['tieu_de'] ?></h4>
                <div class="col-md-8">
                <h6 class="green gioihanvanban1"><?php echo number_format($rows['gia_bds'],0,',','.').' VND' ?></h6>
                </div>
                <div class="col-md-4">
                <h6 class="orange gioihanvanban1"><?php echo ($rows['dien_tich']).' m2' ?></h6>
                </div>
              </div>
              
              
              
              <h6 class="gioihanvanban1"><i class='fa-solid fa-location-dot'></i> <?php echo $rows['diachi'] ?></h6>
              <div class="row">
                <div class="col-md-3">
                <img class="avatar" src="<?php if($rows['avata']!=0) echo 'uploads/'.$rows['avata']; else echo 'https://res.cloudinary.com/dm1dyamzb/image/upload/v1686010584/default_px3hi9.png' ?>" alt="">
                </div>
                <div class="col-md-9 pt-2">
                <h5 class="gioihanvanban1"><?php echo $rows['ten_taikhoan'] ?></h5>
                </div>
              </div>
            
            </div>
          </a>
        </div>
      </div>
    <?php
      }
    ?>
  </div>
</div>
        <!--end row lv1-->
    </div>

<script>
    // Lấy thẻ biểu tượng
    var icon = document.getElementById("myIcon");

    // Gán sự kiện nhấp chuột
    icon.addEventListener("click", function() {
        // Thay đổi lớp (class) hoặc nội dung của biểu tượng
        icon.className = 'fa fa-heart'; // Thay đổi lớp
        // icon.innerHTML = "new_icon"; // Thay đổi nội dung

        // Các đoạn mã khác để thực hiện hành động khác (nếu cần)
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

