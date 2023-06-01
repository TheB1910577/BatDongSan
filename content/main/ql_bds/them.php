<?php
if(isset($_SESSION['dangnhap'])){
?>
<div class="container">
        <h1 id="tieude_post" class="mb-3">ĐĂNG BÀI BẤT ĐỘNG SẢN</h1>
        <form action="content/main/ql_bds/xuly.php" method="POST" id="dangbds" enctype='multipart/form-data'>
            <div class="form-group mb-3 row">
                <label class="col-lg-2 col-md-3 col-sm-12 col-12 offset-lg-2 mb-3" for="tieude">TIÊU ĐỀ: </label>
                <div class="col-lg-5 col-md-8 col-sm-12 col-12">
                    <textarea class="form-control" name="tieude" id="tieude"></textarea>
                    <label class="error"></label>
                </div>
            </div>
            
            <div class="form-group mb-3 row">
                <label class="col-lg-2 col-md-3 col-sm-12 col-12 offset-lg-2 mb-3" for="gia">GIÁ: </label>
                <div class="col-lg-5 col-md-8 col-sm-12 col-12">
                    <input class="form-control" type="text" name="gia" id="gia" placeholder="giá" >
                    <label class="error"></label>
                </div>
            </div>

            <div class="form-group mb-3 row">
                <label class="col-lg-2 col-md-3 col-sm-12 col-12 offset-lg-2 mb-3" for="diachi">ĐỊA CHỈ: </label>
                <div class="col-lg-5 col-md-8 col-sm-12 col-12">
                    <input class="form-control" type="text" name="diachi" id="diachi" placeholder="địa chỉ" >
                    <label class="error"></label>
                </div>
            </div>

            <div class="form-group mb-3 row">
                <label class="col-lg-2 col-md-3 col-sm-12 col-12 offset-lg-2 mb-3" for="mota">MÔ TẢ: </label>
                <div class="col-lg-5 col-md-8 col-sm-12 col-12">
                    <textarea class="form-control" name="mota" id="mota"></textarea>
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
                    <input class="form-control" type="text" name="maps" id="maps" multiple>
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
                        <iframe width="470" height="273" src="https://www.youtube.com/embed/2j7wu7CVeWM" title="Bài 95 : Lập trình Website PHP mô hình MVC  - Đánh giá sao 3" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
                    <input class="form-control" type="text" name="dientich" id="dientich" placeholder="diện tích (m2)" >
                    <label class="error"></label>
                </div>
            </div>

            <div class="form-group mb-3 row">
                <label class="col-lg-2 col-md-3 col-sm-12 col-12 offset-lg-2 mb-3" for="sophong">SỐ PHÒNG: </label>
                <div class="col-lg-5 col-md-8 col-sm-12 col-12">
                    <input class="form-control" type="text" name="sophong" id="sophong" placeholder="số phòng" >
                    <label class="error"></label>
                </div>
            </div>

            <div class="form-group mb-3 row">
                <label class="col-lg-2 col-md-3 col-sm-12 col-12 offset-lg-2 mb-3" for="sotang">SỐ TẦNG: </label>
                <div class="col-lg-5 col-md-8 col-sm-12 col-12">
                    <input class="form-control" type="text" name="sotang" id="sotang" placeholder="số tầng" >
                    <label class="error"></label>
                </div>
            </div>

            <div class="form-group mb-3 row">
                <label class="col-lg-2 col-md-3 col-sm-12 col-12 offset-lg-2 mb-3" for="ngayhethan">NGÀY HẾT HẠN </label>
                <div class="col-lg-5 col-md-8 col-sm-12 col-12">
                    <input class="form-control" type="date" name="ngayhethan" id="ngayhethan" placeholder="số tầng" >
                    <label class="error"></label>
                </div>
            </div>

            <div class="form-group mb-3 row">
                <label class="col-lg-2 col-md-3 col-sm-12 col-12 offset-lg-2 mb-3" for="loaibds">LOẠI BẤT ĐỘNG SẢN</label>
                <div class="col-lg-5 col-md-8 col-sm-12 col-12">
                    <select name="loaibds" id="" class="form-select">
                        <option disabled selected>---chọn---</option>
                        <option value="nharieng">Nhà</option>
                        <option value="cangho">Căng hộ</option>
                        <option value="datnen">Đất nền</option>
                        <option value="chungcu">Chung cư</option>
                        <option value="nhatro">Nhà trọ</option>
                        <option value="khochua">Kho chứa</option>
                        <option value="penthouse">Penthouse</option>
                    </select>
                </div>
            </div>

            <h2 class="offset-lg-2">PHÁP LÝ</h2>
            <div class="form-group mb-3 row">  
                <label for="" class="col-lg-4 col-md-8 col-sm-9 col-10 offset-lg-2">SỔ HỒNG</label>
                <input class="col-lg-1 col-md-4 col-sm-3 col-2" type="checkbox" id="" name="sohong" value="sohong">
                
            </div>

            <div class="form-group mb-3 row">  
                <label for="" class="col-lg-4 col-md-8 col-sm-9 col-10 offset-lg-2">GIẤY PHÉP XÂY DỰNG</label>
                <input class="col-lg-1 col-md-4 col-sm-3 col-2" type="checkbox" id="" name="gpxd" value="gpxd">
            </div>
            
            <div class="form-group mb-3 row">  
                <label for="" class="col-lg-4 col-md-8 col-sm-9 col-10 offset-lg-2">VĂN BẢNG NGHIỆM THU PHẦN MÓNG</label>
                <input class="col-lg-1 col-md-4 col-sm-3 col-2" type="checkbox" id="" name="ntm" value="ntm">
            </div>

            <div class="form-group mb-3 row">  
                <label for="" class="col-lg-4 col-md-8 col-sm-9 col-10 offset-lg-2">GIẤY TỜ BẢO LÃNH NGÂN HÀNG</label>
                <input class="col-lg-1 col-md-4 col-sm-3 col-2" type="checkbox" id="" name="nganhang" value="nganhang">
            </div>

            <div class="form-group mb-3 row">  
                <label for="" class="col-lg-4 col-md-8 col-sm-9 col-10 offset-lg-2">GIẤY PHÉP PHÒNG CHÁY CHỮA CHÁY</label>
                <input class="col-lg-1 col-md-4 col-sm-3 col-2" type="checkbox" id="" name="chuachay" value="chuachay">
            </div>

            <div class="form-group mb-3 row">  
                <label for="" class="col-lg-4 col-md-8 col-sm-9 col-10 offset-lg-2">GIẤY TỜ THUẾ LIÊN QUAN</label>
                <input class="col-lg-1 col-md-4 col-sm-3 col-2" type="checkbox" id="" name="thue" value="thue">
            </div>

            

            <h2 class="offset-lg-2">TIỆN NGHI</h2>
            <div class="form-group mb-3 row">  
                <label for="maylanh" class="col-lg-4 col-md-8 col-sm-6 col-6 offset-lg-2">MÁY LẠNH</label>
                <input class="col-lg-1 col-md-4 col-sm-5 col-6" type="checkbox" id="maylanh" name="maylanh" value="maylanh">
            </div>

            <div class="form-group mb-3 row">  
                <label for="tulanh" class="col-lg-4 col-md-8 col-sm-6 col-6 offset-lg-2">TỦ LẠNH</label>
                <input class="col-lg-1 col-md-4 col-sm-5 col-6" type="checkbox" id="tulanh" name="tulanh" value="tulanh">
            </div>

            <div class="form-group mb-3 row">  
                <label for="hoboi" class="col-lg-4 col-md-8 col-sm-6 col-6 offset-lg-2">HỒ BƠI</label>
                <input class="col-lg-1 col-md-4 col-sm-5 col-6" type="checkbox" id="hoboi" name="hoboi" value="hoboi">
            </div>

            <div class="form-group mb-3 row">  
                <label for="sanvuon" class="col-lg-4 col-md-8 col-sm-6 col-6 offset-lg-2">SÂN VƯỜN</label>
                <input class="col-lg-1 col-md-4 col-sm-5 col-6" type="checkbox" id="sanvuon" name="sanvuon" value="sanvuon">
            </div>

            <div class="form-group mb-3 row">  
                <label for="hangrao" class="col-lg-4 col-md-8 col-sm-6 col-6 offset-lg-2">HÀNG RÀO</label>
                <input class="col-lg-1 col-md-4 col-sm-5 col-6" type="checkbox" id="hangrao" name="hangrao" value="hangrao">
            </div>

            <div class="form-group mb-3 row">  
                <label for="phongtam" class="col-lg-4 col-md-8 col-sm-6 col-6 offset-lg-2">PHÒNG TẮM </label>
                <input class="col-lg-1 col-md-4 col-sm-5 col-6" type="checkbox" id="phongtam" name="phongtam" value="phongtam">
            </div>

            <div class="form-group mb-3 row">  
                <label for="maygiat" class="col-lg-4 col-md-8 col-sm-6 col-6 offset-lg-2">MÁY GIẶT</label>
                <input class="col-lg-1 col-md-4 col-sm-5 col-6" type="checkbox" id="maygiat" name="maygiat" value="maygiat">
            </div>

            <div class="form-group mb-3 row">  
                <label for="tubep" class="col-lg-4 col-md-8 col-sm-6 col-6 offset-lg-2">TỦ BẾP</label>
                <input class="col-lg-1 col-md-4 col-sm-5 col-6" type="checkbox" id="tubep" name="tubep" value="tubep">
            </div>

            <div class="form-group mb-3 row">  
                <label for="losuoi" class="col-lg-4 col-md-8 col-sm-6 col-6 offset-lg-2">LÒ SƯỞI</label>
                <input class="col-lg-1 col-md-4 col-sm-5 col-6" type="checkbox" id="losuoi" name="losuoi" value="losuoi">
            </div>

            <div class="form-group mb-3 row">  
                <label for="nhawc" class="col-lg-4 col-md-8 col-sm-6 col-6 offset-lg-2">NHÀ VỆ SINH</label>
                <input class="col-lg-1 col-md-4 col-sm-5 col-6" type="checkbox" id="nhawc" name="nhawc" value="nhawc">
            </div>



            <h2 class="offset-lg-1" style="text-align:center ;">GÓI ĐĂNG BÀI</h2>
            <div class="row">
                <div class="col-lg-3 col-md-5 col-sm-10 col-11 offset-lg-1 offset-sm-2 offset-1 form-check">
                    <label for="common">
                        <div class="card mb-3" style="width: 18rem;" id="c_com">
                            
                            <div class="card-body form-check">
                              <h5 class="card-title" id="t_com">Silver</h5>
                              <P class="card-text">
                                ĐĂNG BÀI CĂN BẢN <br>
                                90.000 VND <br>
                                <i class="fa-solid fa-check" style="color: #51e2f5;"></i> Gấp 3 lần lượt xem <br>
                                <i class="fa-solid fa-check" style="color: #51e2f5;"></i> Đẩy bài trong 3 ngày <br>
                                <i class="fa-solid fa-x" style="color: #ff0000;"></i> Làm mới hàng ngày <br>
                                <i class="fa-solid fa-x" style="color: #ff0000;"></i> Kết quả nổi bật
                                
                              </P>
                              <input type="radio" name="pack" id="common" class="d-flex justify-content-center" checked value="silver">
                            </div>
                          </div>
                    </label>
                </div>

                <div class="col-lg-3 col-md-5 col-sm-11 col-10 offset-lg-1 offset-sm-2 offset-1 form-check">
                    <label for="pro">
                        <div class="card mb-3" style="width: 18rem;" id="c_pro">
                            
                            <div class="card-body">
                              <h5 class="card-title" id="t_pro">Gold</h5>
                              <P class="card-text">
                                ĐĂNG BÀI CHUYÊN NGHIỆP <br>
                                140.000 VND <br>
                                <i class="fa-solid fa-check" style="color: #51e2f5;"></i> Gấp 10 lần lượt xem <br>
                                <i class="fa-solid fa-check" style="color: #51e2f5;"></i> Đẩy bài trong 5 ngày <br>
                                <i class="fa-solid fa-check" style="color: #51e2f5;"></i> Làm mới hàng ngày <br>
                                <i class="fa-solid fa-x" style="color: #ff0000;"></i>  Kết quả nổi bật
                              </P>
                              <input type="radio" name="pack" id="pro" value="pro">
                            </div>
                        </div>
                    </label>
                </div>

        
                <div class="col-lg-3 col-md-5 col-sm-11 col-10 offset-lg-1 offset-sm-2 offset-1 form-check">
                    <label for="premier">
                        <div class="card mb-3" style="width: 18rem;" id="c_pre">
                            
                            <div class="card-body">
                              <h5 class="card-title" id="t_pre">Platinum</h5>
                              <p class="card-text">
                                ĐĂNG BÀI SIÊU CẤP <br>
                                190.000 VND <br>
                                <i class="fa-solid fa-check" style="color: #51e2f5;"></i> Gấp 20 lần lượt xem <br>
                                <i class="fa-solid fa-check" style="color: #51e2f5;"></i> Đẩy bài trong 10 ngày <br>
                                <i class="fa-solid fa-check" style="color: #51e2f5;"></i> Làm mới hàng ngày <br>
                                <i class="fa-solid fa-check" style="color: #51e2f5;"></i> Kết quả nổi bật
                              </p>
                              <input type="radio" name="pack" id="premier" value="platinum">
                            </div>
                        </div>
                    </label>
                </div>
            </div>

            <input type="submit" class="btn btn-primary offset-lg-5 offset-md-4 offset-sm-3 mb-3" value="ĐĂNG BÀI" name="them"></input>

        </form> 
    </div>
    <?php
    }else{
    ?>
    <h1>Bạn phải đăng nhập để sử dụng chức năng này</h1>
    <?php
    }
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    
    <script>
        $(document).ready(function(){
            $('#dangbds').validate({
                rules:{
                    tieude:{required: true},
                    gia:{required: true},
                    diachi:{required: true},
                    mota:{required: true},
                    maps:{required: true},
                    dientich:{required: true},
                    sophong:{required: true},
                    sotang:{required: true},
                    ngayhethan:{required: true},
                    loaibds:{required: true},
                    'files[]':{required:true},
                    'sohong':{required: true}
                },
                messages:{
                    tieude:{required: "BẠN CHƯA NHẬP TIÊU ĐỀ"},
                    gia:{required: "BẠN CHƯA NHẬP GIÁ"},
                    diachi:{required: "BẠN CHƯA NHẬP ĐỊA CHỈ CỦA BẤT ĐỘNG SẢN"},
                    mota:{required: "BẠN CHƯA NHẬP MÔ TẢ CỦA BẤT ĐỘNG SẢN"},
                    maps:{required: "BẠN CHƯA NHẬP LINK MAPS"},
                    dientich:{required: "BẠN CHƯA NHẬP DIỆN TÍCH"},
                    sophong:{required: "BẠN CHƯA NHẬP SỐ PHÒNG"},
                    sotang:{required: "BẠN CHƯA NHẬP SỐ TẦNG"},
                    ngayhethan:{required: "BẠN CHƯA NHẬP NGÀY HẾT HẠN"},
                    loaibds:{required: "BẠN CHƯA CHỌN LOẠI BẤT ĐỘNG SẢN"},
                    'files[]':{required:"BẠN CHƯA CÓ HÌNH ẢNH CỦA BẤT ĐỘNG SẢN"},
                    'sohong':{required: "SỔ HÒNG LÀ BẮT BUỘC PHẢI CÓ"}
                }
            })
        })
    </script>