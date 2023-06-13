<div class="timkiem">
    <div class="search-container">
        <form action="#">
            <input class="search" size="35%" type="text" placeholder="Search.." name="search">
            <button class="btn btn-secondary" type="submit">Submit</button>
            <div class="main">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-md-2 col-sm-4">
                          <select name="" id="tuychon">
                            <option selected>Mức giá</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                      </div>
                      <div class="col-md-2 col-sm-4">
                          <select name="" id="tuychon">
                            <option selected>Loại bất động sản</option>
                            <option value="nha">Nhà</option>
                            <option value="canho">Căn hộ</option>
                            <option value="datnen">Đất nền</option>
                            <option value="chungcu">Chung cư</option>
                            <option value="nhatro">Nhà trọ</option>
                            <option value="khochua">Kho chứa</option>
                            <option value="penthouse">Penthouse</option>
                          </select>
                      </div>
                      <div class="col-md-2 col-sm-4">
                        <select name="" id="tuychon">
                          <option value="">Chọn tỉnh thành</option>
                          <option value="An Giang">An Giang</option>
                          <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                          <option value="Bạc Liêu">Bạc Liêu</option>
                          <option value="Bắc Giang">Bắc Giang</option>
                          <option value="Bắc Kạn">Bắc Kạn</option>
                          <option value="Bắc Ninh">Bắc Ninh</option>
                          <option value="Bến Tre">Bến Tre</option>
                          <option value="Bình Định">Bình Định</option>
                          <option value="Bình Dương">Bình Dương</option>
                          <option value="Bình Phước">Bình Phước</option>
                          <option value="Bình Thuận">Bình Thuận</option>
                          <option value="Cà Mau">Cà Mau</option>
                          <option value="Cần Thơ">Cần Thơ</option>
                          <option value="Cao Bằng">Cao Bằng</option>
                          <option value="Đà Nẵng">Đà Nẵng</option>
                          <option value="Đắk Lắk">Đắk Lắk</option>
                          <option value="Đắk Nông">Đắk Nông</option>
                          <option value="Điện Biên">Điện Biên</option>
                          <option value="Đồng Nai">Đồng Nai</option>
                          <option value="Đồng Tháp">Đồng Tháp</option>
                          <option value="Gia Lai">Gia Lai</option>
                          <option value="Hà Giang">Hà Giang</option>
                          <option value="Hà Nam">Hà Nam</option>
                          <option value="Hà Nội">Hà Nội</option>
                          <option value="Hà Tĩnh">Hà Tĩnh</option>
                          <option value="Hải Dương">Hải Dương</option>
                          <option value="Hải Phòng">Hải Phòng</option>
                          <option value="Hậu Giang">Hậu Giang</option>
                          <option value="Hòa Bình">Hòa Bình</option>
                          <option value="Hưng Yên">Hưng Yên</option>
                          <option value="Khánh Hòa">Khánh Hòa</option>
                          <option value="Kiên Giang">Kiên Giang</option>
                          <option value="Kon Tum">Kon Tum</option>
                          <option value="Lai Châu">Lai Châu</option>
                          <option value="Lâm Đồng">Lâm Đồng</option>
                          <option value="Lạng Sơn">Lạng Sơn</option>
                          <option value="Lào Cai">Lào Cai</option>
                          <option value="Long An">Long An</option>
                          <option value="Nam Định">Nam Định</option>
                          <option value="Nghệ An">Nghệ An</option>
                          <option value="Ninh Bình">Ninh Bình</option>
                          <option value="Ninh Thuận">Ninh Thuận</option>
                          <option value="Phú Thọ">Phú Thọ</option>
                          <option value="Phú Yên">Phú Yên</option>
                          <option value="Quảng Bình">Quảng Bình</option>
                          <option value="Quảng Nam">Quảng Nam</option>
                          <option value="Quảng Ngãi">Quảng Ngãi</option>
                          <option value="Quảng Ninh">Quảng Ninh</option>
                          <option value="Quảng Trị">Quảng Trị</option>
                          <option value="Sóc Trăng">Sóc Trăng</option>
                          <option value="Sơn La">Sơn La</option>
                          <option value="Tây Ninh">Tây Ninh</option>
                          <option value="Thái Bình">Thái Bình</option>
                          <option value="Thái Nguyên">Thái Nguyên</option>
                          <option value="Thanh Hóa">Thanh Hóa</option>
                          <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                          <option value="Tiền Giang">Tiền Giang</option>
                          <option value="TP Hồ Chí Minh">TP Hồ Chí Minh</option>
                          <option value="Trà Vinh">Trà Vinh</option>
                          <option value="Tuyên Quang">Tuyên Quang</option>
                          <option value="Vĩnh Long">Vĩnh Long</option>
                          <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                          <option value="Yên Bái">Yên Bái</option>
                        </select>
                      </div>
                  </div>
              </div>
          </div>
        </form>
    </div>
</div>

<?php
  //echo $_SESSION['dangnhap'];
  $stmt = $pdo->prepare(
    "SELECT * FROM tin_dang as a, bat_dong_san as b WHERE
    a.ma_bds = b.ma_bds AND 
    trangthai = 1 
    ORDER BY loai_tin_dang DESC"
  );
  $stmt->execute();
?>
<div class="container">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php
      while($rows = $stmt->fetch()){
        $sql = $pdo->prepare("SELECT * FROM hinhanh WHERE ma_bds = :ma LIMIT 1");
        $sql->execute(['ma'=>$rows['ma_bds']]);
        $row = $sql->fetch();
        
    ?>
  
    <div class="col">
      <div class="card h-100">
        <a class="card1" href="index.php?quanly=chi_tiet_bds&ma_bds=<?php echo $rows['ma_bds']; ?>">
          <img src="uploads/bds/<?php echo $row['link_anh'] ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-title"><?php echo $rows['tieu_de'] ?></h4>
            <h6>Giá tiền: <?php echo number_format($rows['gia_bds'],0,',','.').' VND' ?></h6>
            <h6>Địa chỉ: <?php echo $rows['diachi'] ?></h6>
            <h6>Thông tin:</h6>
            <p class="card-text">
              <?php $rows['mo_ta']?>
            </p>
          </div>
        </a>
      </div>
    </div>
    <?php
      }
    ?>
  </div>
</div>
    