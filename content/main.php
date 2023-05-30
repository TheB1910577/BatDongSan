

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
                    include("main/dang_bai_bds.php");    
                                     
                }else {
                    include("main/dang_bai_bds.php");
                }
                ?>
            </div>
</div>