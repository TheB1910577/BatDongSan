<div id="main">
            <div class="maincontent">
                <?php
                if(isset($_GET['quanly'])){
                $tam = $_GET['quanly'];
                }else {
                    $tam = "";
                }
                if($tam == 'chi_tiet_bds'){
                    include("content/main/chi_tiet_bds.php");

                }elseif($tam == 'dang_bai_bds'){
                    include("content/main/ql_bds/them.php");    

                }elseif($tam == 'dang_ky'){
                    include("content/main/dang_ky.php");  
                    
                }elseif($tam == 'dang_nhap'){
                    include("content/main/dang_nhap.php");
            
                }
                elseif($tam == 'tindang'){
                    include("content/main/tindangcuatoi.php");
                }
                elseif($tam == 'qltk'){
                    include("content/main/ql_tk/taikhoan.php");
                }

                elseif($tam == 'doimatkhau'){
                    include("content/main/ql_tk/doimatkhau.php");
                }
                
                else {
                    include("content/main/index.php");
                }
                ?>
            </div>
</div>