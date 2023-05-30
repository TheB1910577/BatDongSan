<?php
    if(isset($_POST['taikhoan'])){
        $ten_taikhoan = $_POST['ten_taikhoan'];
        $email = $_POST['email'];
        $matkhau = md5($_POST['matkhau']);
        $avatar = $_FILES['avatar']['name'];
        $avatar_tmp = $_FILES['avatar']['tmp_name'];
        $avatar = time().'_'.$avatar;
        $sdt = $_POST['sdt'];
        $cccd = $_POST['cccd'];
        $birthday = $_POST['birthday'];
        $diachi = $_POST['diachi'];

        $allowTypes = array('jpg','png','jpeg','gif'); 

        $sql_them = "INSERT INTO taikhoan(ten_taikhoan,email,matkhau,avatar,sdt,cccd,birthday,diachi) 
        VALUE('".$ten_taikhoan."','".$email."','".$matkhau."','".$avatar."','".$sdt."','".$cccd."','".$birthday."','".$diachi."')";
        mysqli_query($mysqli,$sql_them);
        move_uploaded_file($avatar_tmp,'windows/main/uploads/'.$avatar);
        
        
        if($sql_them){
           echo '<script>alert("Bạn đã đăng ký thành công.");</script>';
            $_SESSION['taikhoan'] = $ten_taikhoan;
            $_SESSION['email'] = $email;
            $_SESSION['idchu'] = mysqli_insert_id($mysqli);
           header('Location:index.php?quanly=dangnhap');
          
        }
    }
?>

<!-- --------------layout-------------- -->

<div id="wrapper">
    <div class="container">
        <div class="row justify-content-around">
            <form action="" class="col-md-6 bg-light p-3 my-3">
                <h1 class="text-center text-uppercase h3 py-3">Sign up</h1>
                    
                <div class="mb-3">
                    <label for="inputUsername" class="form-label">Username</label>
                    <input type="text" class="form-control" id="inputUsername">
                </div> 
                    
                <div class="mb-3">
                    <label for="inputEmail4"  class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
  
                <div class="mb-1">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4"><br>
                </div>    

                <div class="input-group mb-4">
                    <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button>
                </div>    

                <div class="mb-3">
                    <label for="inputPhoneNumber" class="form-label">Phone number</label>
                    <input type="number" class="form-control" id="inputPhoneNumber">
                </div>    

                <div class="mb-4">
                    <label for="inputCI" class="form-label">Citizen Identification</label>
                    <input type="text" class="form-control" id="inputCI">
                </div>    

                <div class="row mb-3">
                    <label for="chooseBirthDay" class="form-label">Choose your birthday</label>
                        <div class="col">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Day</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>    
                            </select>
                        </div>
                        <div class="col">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Month</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="inputYear" placeholder="Year of birthday">
                        </div>
                    </div>    

                <div class="mb-4">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Apartment, studio, or floor">
                </div>
                <div class="mb-4">
                    <button type="submit" class="btn btn-primary">Sign up</button>
                </div>
            </form>  
        </div>
    </div>    
</div>