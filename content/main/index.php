<?php
  require("carbon/autoload.php");
  use Carbon\Carbon;
  use Carbon\CarbonInterval;
  $now = Carbon::now('Asia/Ho_Chi_Minh');
  //echo $now->addDays(10)->toDateString();
?>
<div class="timkiem m-4">
    <div class="backgroundsearch">
        <form action="index.php?quanly=timkiem" method="POST">
            <div class="main">
              <div class="container">
                  <div class="row white center-title mb-2">
                     
  <span><i class='fa fa-search'></i> Tìm kiếm Bất Động Sản</span> 
                  </div>
                  <div class="row justify-content-center">
                  <div class="col-md-2 mb-3">
                  <div class="white mb-3 medium-text"><i class='fa fa-search'></i> TỪ KHÓA</div>
                  <input class="search" type="text" placeholder="Nhà hai tầng..." name="tukhoa">
                   
                  </div>
                      <div class="col-md-3 col-sm-4">
                      <div class="white medium-text"><i class='fa-solid fa-filter-circle-dollar'></i> MỨC GIÁ</div>
                          <select class="form-select form-select-lg mt-3 mb-3" name="gia" id="tuychon">
                            <option value="" selected>Tất cả mức giá</option>
                            <option value=" and a.gia_bds >= 0 and a.gia_bds <= 100000000 ">Từ 100 triệu trở xuống</option>
                            <option value=" and a.gia_bds >= 100000000 and a.gia_bds <= 300000000 ">100 Triệu - 300 Triệu</option>
                            <option value=" and a.gia_bds >= 300000000 and a.gia_bds <= 500000000 ">300 Triệu - 500 Triệu</option>
                            <option value=" and a.gia_bds >= 500000000 and a.gia_bds <= 800000000 ">500 Triệu - 800 Triệu</option>
                            <option value=" and a.gia_bds >= 800000000 and a.gia_bds <= 1.000000000 ">800 Triệu - 1 Tỷ</option>
                            <option value=" and a.gia_bds >= 1000000000 and a.gia_bds <= 1500000000 ">1 Tỷ - 1,5 Tỷ</option>
                            <option value=" and a.gia_bds >= 1500000000 and a.gia_bds <= 2000000000 ">1 Tỷ - 2 Tỷ</option>
                            <option value=" and a.gia_bds >= 2000000000 and a.gia_bds <= 3000000000 ">2 Tỷ - 3 Tỷ</option>
                            <option value=" and a.gia_bds >= 3000000000 and a.gia_bds <= 5000000000 ">3 Tỷ - 5 Tỷ</option>
                            <option value=" and a.gia_bds >= 5000000000 and a.gia_bds <= 8000000000 ">5 Tỷ - 8 Tỷ</option>
                            <option value=" and a.gia_bds >= 8000000000 and a.gia_bds <= 10000000000 ">8 Tỷ - 10 Tỷ</option>
                            <option value=" and a.gia_bds >= 10000000000 and a.gia_bds <= 1000000000000 ">Trên 10 Tỷ</option>
                          </select>
                      </div>
                      <div class="col-md-3 col-sm-4">
                      <div class="white medium-text" ><i class='fa fa-home'></i> LOẠI BẤT ĐỘNG SẢN</div>
                          <select class="form-select form-select-lg mt-3 mb-3" name="loai" id="tuychon">
                            <option value="">Tất cả loại bất động sản</option>
                            <option value=" and b.id_loai = 1 ">Căn hộ</option>
                            <option value=" and b.id_loai = 2 ">Nhà</option>
                            <option value=" and b.id_loai = 3 ">Biệt thự liền kề</option>
                            <option value=" and b.id_loai = 4 ">Nhà mặt phố</option>
                            <option value=" and b.id_loai = 5 ">Shophouse</option>
                            <option value=" and b.id_loai = 6 ">Đất nền</option>
                            <option value=" and b.id_loai = 7 ">Đất</option>
                            <option value=" and b.id_loai = 8 ">Kho chứa</option>
                            <option value=" and b.id_loai = 9 ">Nhà trọ</option>
                            <option value=" and b.id_loai = 10 ">Khu nghỉ dưỡng</option>
                            
                          </select>
                      </div>
                      <div class="col-md-3 col-sm-4">
                      <div class="white medium-text" ><i class='fa-solid fa-magnifying-glass-location'></i> TỈNH THÀNH</div>
                        <select class="form-select form-select-lg mt-3 mb-3" name="tinh" id="tuychon">
                          <option value="">Trên cả nước</option>
                          <option value=" and b.id_tinh = 1 ">An Giang</option>
                          <option value=" and b.id_tinh = 2 ">Bắc Giang</option>  
                          <option value=" and b.id_tinh = 3 " >Bà Rịa - Vũng Tàu</option>
                          <option value=" and b.id_tinh = 4 ">Bạc Liêu</option>
                          <option value=" and b.id_tinh = 5 ">Bắc Kạn</option>
                          <option value=" and b.id_tinh = 6 ">Bắc Ninh</option>
                          <option value=" and b.id_tinh = 7 ">Bến Tre</option>
                          <option value=" and b.id_tinh = 8 ">Bình Dương</option>
                          <option value=" and b.id_tinh = 9 ">Bình Định</option>
                          <option value=" and b.id_tinh = 10 ">Bình Phước</option>
                          <option value=" and b.id_tinh = 11 ">Bình Thuận</option>
                          <option value=" and b.id_tinh = 12 ">Cà Mau</option>
                          <option value=" and b.id_tinh = 13 ">Cao Bằng</option>
                          <option value=" and b.id_tinh = 14 ">Cần Thơ</option>
                          <option value=" and b.id_tinh = 15 ">Đà Nẵng</option>
                          <option value=" and b.id_tinh = 16 ">Đắk Lắk</option>
                          <option value=" and b.id_tinh = 17 ">Đắk Nông</option>
                          <option value=" and b.id_tinh = 18 ">Điện Biên</option>c.
                          <option value=" and b.id_tinh = 19 ">Đồng Nai</option>
                          <option value=" and b.id_tinh = 20 ">Đồng Tháp</option>
                          <option value=" and b.id_tinh = 21 ">Gia Lai</option>
                          <option value=" and b.id_tinh = 22 ">Hà Giang</option>
                          <option value=" and b.id_tinh = 23 ">Hà Nam</option>
                          <option value=" and b.id_tinh = 24 ">Hà Nội</option>
                          <option value=" and b.id_tinh = 25 ">Hà Tĩnh</option>
                          <option value=" and b.id_tinh = 26 ">Hải Dương</option>
                          <option value=" and b.id_tinh = 27 ">Hải Phòng</option>
                          <option value=" and b.id_tinh = 28 ">Hậu Giang</option>
                          <option value=" and b.id_tinh = 29 ">Hòa Bình</option>
                          <option value=" and b.id_tinh = 30 ">Thành phố Hồ Chí Minh</option>
                          <option value=" and b.id_tinh = 31 ">Hưng Yên</option>
                          <option value=" and b.id_tinh = 32 ">Khánh Hòa</option>
                          <option value=" and b.id_tinh = 33 ">Kiên Giang</option>
                          <option value=" and b.id_tinh = 34 ">Kon Tum</option>
                          <option value=" and b.id_tinh = 35 ">Lai Châu</option>
                          <option value=" and b.id_tinh = 36 ">Lạng Sơn</option>
                          <option value=" and b.id_tinh = 37 ">Lào Cai</option>
                          <option value=" and b.id_tinh = 38 ">Lâm Đồng</option>
                          <option value=" and b.id_tinh = 39 ">Long An</option>
                          <option value=" and b.id_tinh = 40 ">Nam Định</option>
                          <option value=" and b.id_tinh = 41 ">Nghệ An</option>
                          <option value=" and b.id_tinh = 42 ">Ninh Bình</option>
                          <option value=" and b.id_tinh = 43 ">Ninh Thuận</option>
                          <option value=" and b.id_tinh = 44 ">Phú thọ</option>
                          <option value=" and b.id_tinh = 45 ">Phú Yên</option>
                          <option value=" and b.id_tinh = 46 ">Quảng Bình</option>
                          <option value=" and b.id_tinh = 47 ">Quảng Nam</option>
                          <option value=" and b.id_tinh = 48 ">Quảng Ngãi</option>
                          <option value=" and b.id_tinh = 49 ">Quảng Ninh</option>
                          <option value=" and b.id_tinh = 50 ">Quảng Trị</option>
                          <option value=" and b.id_tinh = 51 ">Sóc Trăng</option>
                          <option value=" and b.id_tinh = 52 ">Sơn La</option>
                          <option value="  and b.id_tinh = 53 ">Tây Ninh</option>
                          <option value=" and b.id_tinh = 54 ">Thái Bình</option>
                          <option value=" and b.id_tinh = 55 ">Thái Nguyên</option>
                          <option value=" and b.id_tinh = 56 ">Thanh Hóa</option>
                          <option value=" and b.id_tinh = 57 ">Thừa Thiên Huế</option>
                          <option value=" and b.id_tinh = 58 ">Tiền Giang</option>
                          <option value=" and b.id_tinh = 59 ">Trà Vinh</option>
                          <option value=" and b.id_tinh = 60 ">Tuyên Quang</option>
                          <option value=" and b.id_tinh = 61 ">Vĩnh Long</option>
                          <option value=" and b.id_tinh = 62 ">Vĩnh Phúc</option>
                          <option value=" and b.id_tinh = 63 ">Yên Bái</option>
                        </select>
                      </div>
                     
                  <div class="col-md-1   mt-3 mb-3 p-1">
                  <div class="white" ><br></div>
                    <button class="btn btn-success p-2" name="timkiem" type="submit">   Tìm kiếm   </button>
                  </div>
                     
                    </div><!-- end class row justify-content-center -->
              </div><!-- end class container -->
          </div><!-- end class main -->
        </form>
    </div>
</div>

<?php
  //echo $_SESSION['dangnhap'];
  $inpage = 12;
  if(isset($_GET['trang'])){
		$page = $_GET['trang'];
	}else{
		$page = 1;
	}
	if($page == '' || $page == 1){
		$begin = 0;
	}else{
		$begin = ($page*$inpage)-$inpage;
	}
  $stmt = $pdo->prepare(
    "SELECT * FROM tin_dang as a, bat_dong_san as b, taikhoan as c WHERE
    a.ma_bds = b.ma_bds AND 
    b.id_taikhoan = c.id_taikhoan AND 
    trangthai = 1
    AND ngay_het_han >= :ht 
    ORDER BY loai_tin_dang DESC LIMIT $begin, $inpage"
    
  );
  $stmt->execute(['ht'=>$now]);
?>
<div class="container">
  <div class="row row-cols-1 row-cols-md-4 g-4">
    <?php
      while($rows = $stmt->fetch()){
        $sql = $pdo->prepare("SELECT * FROM hinhanh WHERE ma_bds = :ma LIMIT 1");
        $sql->execute(['ma'=>$rows['ma_bds']]);
        $row = $sql->fetch();
      
        
    ?>
  
    <div class="col">
    <div class="card h-100">
        <a class="card1" href="index.php?quanly=chi_tiet_bds&ma_bds=<?php echo $rows['ma_bds']; ?>">
          <img src="uploads/bds/<?php echo $row['link_anh'] ?>" class="card-img-top cover object" alt="...">
          <div class="card-body">
            <div class="row">
            
            <h4 class="card-title gioihanvanban"><?php echo $rows['tieu_de'] ?></h4>
              <div class="col-md-8">
              <h6 class="green"><?php echo number_format($rows['gia_bds'],0,',','.').' VND' ?></h6>
              </div>
              <div class="col-md-4">
              <h6 class="orange"><?php echo ($rows['dien_tich']).' m2' ?></h6>
              </div>
            </div>
            
            
            
            <h5 class="gioihanvanban"><i class='fa-solid fa-location-dot'></i> <?php echo $rows['diachi'] ?></h5>
            <div class="row">
              <div class="col-lg-3 col-md-2">
              <img class="avatar" src="<?php if($rows['avata']!=0) echo 'uploads/'.$rows['avata']; else echo 'https://res.cloudinary.com/dm1dyamzb/image/upload/v1686010584/default_px3hi9.png' ?>" alt="">
              </div>
              <div class="col-lg-9 col-md-10 pt-2">
              <h5><?php echo $rows['ten_taikhoan'] ?></h5>
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
  <?php
        $sql_trang = $pdo->prepare(
            "SELECT * FROM tin_dang"
        );
        $sql_trang->execute();
        $row = $sql_trang->fetch();
        $dem_dong = 8;
        $trang = ceil($dem_dong/$inpage);
    ?>
    <!-- phan trang -->
    <nav aria-label="..." class="mb-3">
    <ul class="pagination pagination-sm">
        <?php
            for($i = 1; $i<=$trang; $i++){

            
        ?>
        <li class="page-item <?php if($i==$page) echo "disabled" ?>">
        <a class="page-link" href="index.php?trang=<?php echo $i ?>" tabindex="-1"><?php echo $i ?></a>
        </li>

        <?php
            }
        ?>
        
    </ul>
    </nav>
</div>
    