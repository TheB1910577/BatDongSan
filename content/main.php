<div id="main">
            <div class="maincontent">
                <?php
                if(isset($_GET['quanly'])){
                $tam = $_GET['quanly'];
                }else {
                    $tam = "";
                }
                if($tam == 'chi_tiet_bds'){
                    include("main/chi_tiet_bds.php");

                }elseif($tam == 'dang_bai_bds'){
                    include("main/ql_bds/them.php");    

                }elseif($tam == 'dang_ky'){
                    include("main/dang_ky.php");  
                    
                }elseif($tam == 'dang_nhap'){
                    include("main/dang_nhap");
            
                    
                }
                else {
                    include("content/main/index.php");
                }
                ?>
            </div>
</div>