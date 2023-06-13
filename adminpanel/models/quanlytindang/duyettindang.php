<?php
    include("config\config.php");
        $sql = $pdo->prepare(
          "SELECT * FROM bat_dong_san as a, tin_dang as b, taikhoan as c, tinh as d
          WHERE a.ma_bds = b.ma_bds AND a.id_taikhoan = c.id_taikhoan AND a.id_tinh =d.id_tinh
          AND b.trangthai = 0
         Order by loai_tin_dang desc
         ");
        $sql->execute();
        
        while($row = $sql->fetch()){
          $img = $pdo->prepare("SELECT * FROM hinhanh WHERE ma_bds = '".$row['ma_bds']."'");
          $img->execute();
    ?>



<div class="bang">
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Mã bất động sản</th>
        <th>Tên bất động sản</th>
        <th>Hình ảnh</th>
        <th>Địa chỉ</th>
        <th>Người đăng</th>
        <th>Tùy chọn</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $row['ma_bds'] ?></td>
        <td><?php echo $row['ten_bds'] ?></td>
        <td>
          <?php
            while($pic = $img->fetch()){
          ?>
          <img class="anh anh1" id="<?php echo $pic['id_anh'] ?>" width="100px" src="../uploads/bds/<?php echo $pic['link_anh'] ?>" alt="">
          
          
        
          <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
          </div> 
          <script>
 
            // Get the modal
            var modal = document.getElementById('myModal');
                
            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img= document.getElementById('<?php echo $pic['id_anh'] ?>');
            // var img2 = document.getElementById('img2');
            // var img3 = document.getElementById('img3');
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");
            function openModal(img) {
              modal.style.display = "block";
              modalImg.src = img.src;
              captionText.innerHTML = img.alt;
            }

            // Add click event listeners to the images
            img.onclick = function() {
              openModal(this);
            };

            // img2.onclick = function() {
            //   openModal(this);
            // };

            // img3.onclick = function() {
            //   openModal(this);
            // };

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() { 
              modal.style.display = "none";
            }
          </script>     
          <?php
            }
          ?>
      </td>
        <td><?php echo $row['ten_tinh'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><a href="index.php?quanly=chitiettindang&ma_bds=<?php echo $row['ma_bds'] ?>">Xem chi tiết!</a></td>
      </tr>
     
    </tbody>
    </table>
</div>


<?php
        }
?>