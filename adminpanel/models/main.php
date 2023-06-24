<div id="main">
            <div class="maincontent">
                <?php
                if(isset($_GET['quanly'])){
                $tam = $_GET['quanly'];
                }else {
                    $tam = "";
                }
                if($tam == 'lietketindang'){
                    include("models/quanlytindang/lietke.php");
                }
                else if($tam == 'duyettindang'){
                    include("models/quanlytindang/duyettindang.php");
                }
                else if($tam == 'chitiettindang'){
                    include("models/quanlytindang/chitiettindang.php");
                }
                else if($tam == 'chitiettindangcuanguoidung'){
                    include("models/quanlytindang/chitiettindangcuanguoidung.php");
                }
                else if($tam == 'thongke'){
                    include("models/thongke/thongke.php");
                }
                else if($tam == 'tienich'){
                    include("models/ql_tienich/them.php");
                    include("models/ql_tienich/lietke.php");
                }
                else if($tam == 'suatienich'){
                    include("models/ql_tienich/sua.php");
                }
                else {
                    include("models/index.php");
                }
                ?>
            </div>
</div>