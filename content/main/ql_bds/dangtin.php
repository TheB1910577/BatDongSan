<div class="container">
    <h1>Đăng tin bất động sản</h1>
    <form action="content/main/ql_bds/xulythanhtoan.php?id=<?php echo $_GET['id'] ?>" method="POST">
        <div class="form-group mb-3 row">
            <label class="col-lg-2 col-md-3 col-sm-12 col-12 offset-lg-2 mb-3" for="tieude">TIÊU ĐỀ: </label>
            <div class="col-lg-5 col-md-8 col-sm-12 col-12">
                <input class="form-control" name="tieude" id="tieude">
                <label class="error"></label>
            </div>
        </div>

        <div class="form-group mb-3 row">
            <label class="col-lg-2 col-md-3 col-sm-12 col-12 offset-lg-2 mb-3" for="gia">GIÁ BÁN: </label>
            <div class="col-lg-5 col-md-8 col-sm-12 col-12">
                <input class="form-control" name="gia" id="gia">
                <label class="error"></label>
            </div>
        </div>

        <div class="form-group mb-3 row">
            <label class="col-lg-2 col-md-3 col-sm-12 col-12 offset-lg-2 mb-3" for="mota">MÔ TẢ CHI TIẾT: </label>
            <div class="col-lg-5 col-md-8 col-sm-12 col-12">
                <textarea class="form-control" name="mota" id="mota"></textarea>
                <label class="error"></label>
            </div>
        </div>

        <div class="form-group mb-3 row">
            <label class="col-lg-2 col-md-3 col-sm-12 col-12 offset-lg-2 mb-3" for="">CHỌN GÓI ĐĂNG: </label>
            <div class="col-lg-5 col-md-8 col-sm-12 col-12">
                <select name="loai_tin_dang" id="" class="form-select">
                    <option value="1" selected>GÓI ĐĂNG BẠC</option>
                    <option value="2">GÓI ĐĂNG VÀNG</option>
                    <option value="3">GÓI ĐĂNG BẠCH KIM</option>
                </select>
            </div>
            <div class="col-1">
                
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fa-solid fa-question"></i>
                </button>

                <!-- Modal -->
                <div class="modal modal-xl fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">CÁC GÓI ĐĂNG CỦA HỆ THỐNG</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-3 col-md-5 col-sm-10 col-11">
                                    
                                        <div class="card mb-3" style="width: 18rem;" id="c_com">
                                            
                                            <div class="card-body ">
                                            <h5 class="card-title" id="t_com">Silver</h5>
                                            <P class="card-text">
                                                ĐĂNG BÀI CĂN BẢN <br>
                                                90.000 VND <br>
                                                <i class="fa-solid fa-check" style="color: #51e2f5;"></i> Gấp 3 lần lượt xem <br>
                                                <i class="fa-solid fa-check" style="color: #51e2f5;"></i> Đẩy bài trong 3 ngày <br>
                                                <i class="fa-solid fa-x" style="color: #ff0000;"></i> Làm mới hàng ngày <br>
                                                <i class="fa-solid fa-x" style="color: #ff0000;"></i> Kết quả nổi bật
                                                
                                            </P>
                                           
                                            </div>
                                        </div>
                                    
                                </div>
                                <div class="col-lg-3 col-md-5 col-sm-11 col-10  offset-1 ">
                                    
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
                                            
                                            </div>
                                        </div>
                                    
                                </div>
        
                                <div class="col-lg-3 col-md-5 col-sm-11 col-10  offset-1">
                                    
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
                                            
                                            </div>
                                        </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group mb-3 row">
            <label class="col-lg-2 col-md-3 col-sm-12 col-12 offset-lg-2 mb-3" for="">PHƯƠNG THỨC THANH TOÁN: </label>
            <div class="col-lg-5 col-md-8 col-sm-12 col-12">
                <select name="thanhtoan" id="" class="form-select">
                    <option value="chuyenkhoan" selected>CHUYỂN KHOẢNG NGÂN HÀNG</option>
                    <option value="vnpay">VÍ VNPAY</option>
                    <option value="momo">MOMO</option>
                </select>
            </div>
        </div>

        <div class="form-group mb-3 row offset-lg-4">
            <p>Thông tin chuyển khoảng:</p>
            <p>Ngân hàng Sacombank</p>
            <p>Tên chủ tài khoảng: LƯ HÙNG CƯỜNG</p>
            <p>Số tài khoảng: 070108020601</p>
        </div>

        <button type="submit" class="btn btn-primary offset-lg-2" name="redirect">ĐĂNG BÀI</button>
    </form>
</div>