<div class="timkiem">
    <div class="search-container">
        <form action="index.php?quanly=timkiem" method="post">
            <input class="search" size="35%" type="text" placeholder="Search.." name="tukhoa">
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
                          <option value="1">An Giang</option>
                          <option value="2">Bà Rịa - Vũng Tàu</option>
                          <option value="3">Bạc Liêu</option>
                          <option value="4">Bắc Giang</option>
                          <option value="5">Bắc Kạn</option>
                          <option value="6">Bắc Ninh</option>
                          <option value="7">Bến Tre</option>
                          <option value="8">Bình Định</option>
                          <option value="9">Bình Dương</option>
                          <option value="10">Bình Phước</option>
                          <option value="11">Bình Thuận</option>
                          <option value="12">Cà Mau</option>
                          <option value="13">Cần Thơ</option>
                          <option value="14">Cao Bằng</option>
                          <option value="15">Đà Nẵng</option>
                          <option value="16">Đắk Lắk</option>
                          <option value="17">Đắk Nông</option>
                          <option value="18">Điện Biên</option>
                          <option value="19">Đồng Nai</option>
                          <option value="20">Đồng Tháp</option>
                          <option value="21">Gia Lai</option>
                          <option value="22">Hà Giang</option>
                          <option value="23">Hà Nam</option>
                          <option value="24">Hà Nội</option>
                          <option value="25">Hà Tĩnh</option>
                          <option value="26">Hải Dương</option>
                          <option value="27">Hải Phòng</option>
                          <option value="28">Hậu Giang</option>
                          <option value="29">Hòa Bình</option>
                          <option value="30">Hưng Yên</option>
                          <option value="31">Khánh Hòa</option>
                          <option value="32">Kiên Giang</option>
                          <option value="33">Kon Tum</option>
                          <option value="34">Lai Châu</option>
                          <option value="35">Lâm Đồng</option>
                          <option value="36">Lạng Sơn</option>
                          <option value="37">Lào Cai</option>
                          <option value="38">Long An</option>
                          <option value="39">Nam Định</option>
                          <option value="40">Nghệ An</option>
                          <option value="41">Ninh Bình</option>
                          <option value="42">Ninh Thuận</option>
                          <option value="43">Phú Thọ</option>
                          <option value="44">Phú Yên</option>
                          <option value="45">Quảng Bình</option>
                          <option value="46">Quảng Nam</option>
                          <option value="47">Quảng Ngãi</option>
                          <option value="48">Quảng Ninh</option>
                          <option value="49">Quảng Trị</option>
                          <option value="50">Sóc Trăng</option>
                          <option value="51">Sơn La</option>
                          <option value="52">Tây Ninh</option>
                          <option value="53">Thái Bình</option>
                          <option value="54">Thái Nguyên</option>
                          <option value="55">Thanh Hóa</option>
                          <option value="56">Thừa Thiên Huế</option>
                          <option value="57">Tiền Giang</option>
                          <option value="58">TP Hồ Chí Minh</option>
                          <option value="59">Trà Vinh</option>
                          <option value="60">Tuyên Quang</option>
                          <option value="61">Vĩnh Long</option>
                          <option value="62">Vĩnh Phúc</option>
                          <option value="63">Yên Bái</option>
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
    "SELECT * FROM tin_dang as a, bat_dong_san as b
    WHERE 
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
    
