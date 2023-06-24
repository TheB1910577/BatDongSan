<?php
    $sql = $pdo->prepare(
        "SELECT * FROM tien_ich"
    );
    $sql->execute();
?>
<div class="container">
<table class="table offset-2" style="width:50%;">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">TÊN TIỆN ÍCH</th>
      <th scope="col">QUẢN LÝ</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
        $i = 1;
        while($row = $sql->fetch()){

        
    ?>
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td><?php echo $row['ten_tienich'] ?></td>
      <td>
        <a href="index.php?quanly=suatienich&id=<?php echo $row['id_tienich'] ?>" class="btn btn-warning">SỬA</a>
        <a href="models/ql_tienich/xuly.php?quanly=xoa&id=<?php echo $row['id_tienich'] ?>" class="btn btn-danger">Xóa</a>
      </td>
    </tr>
    <?php
            $i++;
        }
    ?>
   
  </tbody>
</table>
</div>