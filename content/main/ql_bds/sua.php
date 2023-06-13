<?php
    $sql = $pdo->prepare(
        "SELECT * FROM bat_dong_san as a, tinh as b 
        WHERE ma_bds = :ma
        AND a.id_tinh = b.id_tinh"
    );
    $sql->execute(['ma'=>$_GET['id']]);
    $row = $sql->fetch();
?>
<div class="container">
        <h1 id="tieude_post" class="mb-3">CHỈNH SỬA BẤT ĐỘNG SẢN</h1>
        <form action="content/main/ql_bds/xuly.php?id=<?php echo $row['ma_bds'] ?>" method="POST" id="dangbds" enctype='multipart/form-data'>
            <div class="form-group mb-3 row">
                <label class="col-lg-2 col-md-3 col-sm-12 col-12 offset-lg-2 mb-3" for="tieude">TIÊU ĐỀ: </label>
                <div class="col-lg-5 col-md-8 col-sm-12 col-12">
                    <textarea class="form-control" name="tieude" id="tieude"><?php echo $row['ten_bds'] ?></textarea>
                    <label class="error"></label>
                </div>
            </div>

            <div class="form-group mb-3 row">
                <label class="col-lg-2 col-md-3 col-sm-12 col-12 offset-lg-2 mb-3" for="diachi">ĐỊA CHỈ: </label>
                <div class="col-lg-5 col-md-8 col-sm-12 col-12">
                    <input class="form-control" type="text" name="diachi" id="diachi" placeholder="địa chỉ" value="<?php echo $row['diachi'] ?>">
                    <label class="error"></label>
                </div>
            </div>


            <div class="form-group mb-3 row">
                <label class="col-lg-2 col-md-3 col-sm-12 col-12 offset-lg-2 mb-3" for="hinhanh">HÌNH ẢNH: </label>
                <div class="col-lg-5 col-md-8 col-sm-12 col-12">
                    <input class="form-control" type="file" name="files[]" id="hinhanh" multiple>
                    <label class="error"></label>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-lg-2 col-md-3 col-sm-12 col-12 offset-lg-2 mb-3" for="maps">LINK MAPS: </label>
                <div class="col-lg-5 col-md-8 col-sm-12 col-12">
                    <input class="form-control" type="text" name="maps" id="maps" multiple value="<?php echo $row['maplink'] ?>">
                    <label class="error"></label>
                </div> 
            </div>
            <div class="row-8 offset-4 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal"><button type="button">HƯỚNG DẪN LẤY LINK MAPS</button></div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">HƯỚNG DẪN LẤY LINK MAPS</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        VIDEO HƯỚNG DẪN
                        <iframe width="470" height="273" src="https://www.youtube.com/watch?v=sI6aDjzEL-8" title="Bài 95 : Lập trình Website PHP mô hình MVC  - Đánh giá sao 3" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ĐÓNG</button>
                    </div>
                </div>
                </div>
            </div>

            <div class="form-group mb-3 row">
                <label class="col-lg-2 col-md-3 col-sm-12 col-12 offset-lg-2 mb-3" for="dientich">DIỆN TÍCH: </label>
                <div class="col-lg-5 col-md-8 col-sm-12 col-12">
                    <input class="form-control" type="text" name="dientich" id="dientich" placeholder="diện tích (m2)" value="<?php echo $row['dien_tich'] ?>">
                    <label class="error"></label>
                </div>
            </div>

            <div class="form-group mb-3 row">
                <label class="col-lg-2 col-md-3 col-sm-12 col-12 offset-lg-2 mb-3" for="sophong">SỐ PHÒNG: </label>
                <div class="col-lg-5 col-md-8 col-sm-12 col-12">
                    <input class="form-control" type="text" name="sophong" id="sophong" placeholder="số phòng" value="<?php echo $row['so_phong'] ?>">
                    <label class="error"></label>
                </div>
            </div>

            <div class="form-group mb-3 row">
                <label class="col-lg-2 col-md-3 col-sm-12 col-12 offset-lg-2 mb-3" for="sotang">SỐ TẦNG: </label>
                <div class="col-lg-5 col-md-8 col-sm-12 col-12">
                    <input class="form-control" type="text" name="sotang" id="sotang" placeholder="số tầng" value="<?php echo $row['so_tang'] ?>">
                    <label class="error"></label>
                </div>
            </div>

            <div class="form-group mb-3 row">
                <label class="col-lg-2 col-md-3 col-sm-12 col-12 offset-lg-2 mb-3" for="loaibds">LOẠI BẤT ĐỘNG SẢN</label>
                <div class="col-lg-5 col-md-8 col-sm-12 col-12">
                    <select name="loaibds" id="" class="form-select">
                        <option disabled>---chọn---</option>
                        <?php
                            $sql = $pdo->prepare("SELECT * FROM loai_bds");
                            $sql->execute();
                            
                            while($rows = $sql->fetch()){
                        ?>
                        <option value="<?php echo $rows['id_loai']; ?>" <?php if($row['id_loai']==$rows['id_loai']) echo 'selected'?>><?php echo $rows['ten_loai'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group mb-3 row">
                <label class="col-lg-2 col-md-3 col-sm-12 col-12 offset-lg-2 mb-3" for="loaibds">TỈNH: </label>
                <div class="col-lg-5 col-md-8 col-sm-12 col-12">
                    <select name="tinh" id="" class="form-select">
                        <option disabled selected>---chọn---</option>
                        <?php
                            $tinh = $pdo->prepare("SELECT * FROM tinh");
                            $tinh->execute();
                            
                            while($ten_tinh = $tinh->fetch()){
                        ?>
                        <option value="<?php echo $ten_tinh['id_tinh'] ?>" <?php if($row['id_tinh'] == $ten_tinh['id_tinh']) echo 'selected' ?>><?php echo $ten_tinh['ten_tinh'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group mb-3 row">  
                <input class="col-lg-1 col-md-1 col-sm-12 col-12 offset-lg-2" type="checkbox" id="sohong" name="sohong" value="đầy đủ pháp lý">
                <div class="col-lg-8 col-md-11 col-sm-9 col-10 "><label for="sohong" >Tôi cam kết là thông tin tôi cung cấp hoàn có đầy đủ pháp lý và giấy tờ cần thiết</label></div>
            </div>

            <div class="form-group mb-3 row">  
                <input class="col-lg-1 col-md-1 col-sm-12 col-12 offset-lg-2" type="checkbox" id="agree" name="agree" value="agree">
                <label for="agree" class="col-lg-8 col-md-11 col-sm-9 col-10 ">Bằng cách tích vào dấu này là bạn đã đọc và chắt chắn tuân thủ Điều khoảng và điều kiện của chúng tôi.</label>
            </div>

            <input type="submit" class="btn btn-primary offset-lg-5 offset-md-4 offset-sm-3 mb-3" value="ĐĂNG BÀI" name="sua"></input>

        </form> 
</div>