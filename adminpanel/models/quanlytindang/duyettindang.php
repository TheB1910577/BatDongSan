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
        <td>01</td>
        <td>Nhà đẹp</td>
        <td><img class="anh" id="img1" width="100px" src="https://thuthuatphanmem.vn/uploads/2018/05/23/wallpaper-4k-hinh-nen-4k-ky-quan-thien-nhien-dep_100009861.jpg" alt="">
        <img class="anh" id="img2" width="100px" src="https://thuthuatphanmem.vn/uploads/2018/05/23/wallpaper-4k-hinh-nen-4k-ky-quan-thien-nhien-dep_100009861.jpg" alt="">
        <img class="anh" id="img3" width="100px" src="https://thuthuatphanmem.vn/uploads/2018/05/23/wallpaper-4k-hinh-nen-4k-ky-quan-thien-nhien-dep_100009861.jpg" alt="">
          <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
          </div>      
      </td>
        <td>Cần Thơ</td>
        <td>the@gmail.com</td>
        <td><a href="index.php?quanly=chitiettindang">Xem chi tiết!</a></td>
      </tr>
     
    </tbody>
    </table>
</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img1 = document.getElementById('img1');
var img2 = document.getElementById('img2');
var img3 = document.getElementById('img3');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
function openModal(img) {
  modal.style.display = "block";
  modalImg.src = img.src;
  captionText.innerHTML = img.alt;
}

// Add click event listeners to the images
img1.onclick = function() {
  openModal(this);
};

img2.onclick = function() {
  openModal(this);
};

img3.onclick = function() {
  openModal(this);
};

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>

