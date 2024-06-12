<div class="row2">
  <div class="row2 font_title">
    <h1>Cập nhật Sản Phẩm</h1>
  </div>
  <div class="row2 form_content ">
    <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
      <div class="row2 mb10 form_content_container">
        <select name="iddm" id="">
          <option value="0" selected>Tất cả</option>
          <?php foreach ($listdanhmuc as $danhmuc) {
            extract($danhmuc);
            if ($iddm == $id) $s = "selected";
            else $s = "";
            echo '<option value="' . $id . '"' . $s . '>' . $name . '</option>';
          } ?>
        </select>
      </div>
      <?php
      if (is_array($sanpham)) {
        extract($sanpham);
      }
      $img_path = "../upload/" . $img;
      if (is_file($img_path)) {
        $hinh = "<img src='" . $img_path . "' height='80'>";
      } else {
        $hinh = "no photo";
      }
      ?>
      <div class="row2 mb10">
        <label>Tên Sản Phẩm</label> <br>
        <input type="text" name="tensp" placeholder="nhập vào tên" value="<?= $name ?>">
      </div>
      <div class="row2 mb10">
        <label>Gía Sản Phẩm</label> <br>
        <input type="text" name="giasp" placeholder="nhập vào tên" value="<?= $price ?>">
      </div>
      <div class="row2 mb10">
        <label>Hình Sản Phẩm</label> <br>
        <input type="file" name="hinh" value=""><?= $hinh ?>
      </div>
      <div class="row2 mb10">
        <label>Mô tả Sản Phẩm</label> <br>
        <textarea name="mota" cols="30" rows="10" value=""><?= $mota ?></textarea>
      </div>
      <div class="row mb10 ">
        <input type="hidden" name="id" value="<?= $id ?>">
        <input class="mr20" type="submit" name="capnhap" value="Cập nhật">
        <input class="mr20" type="reset" value="NHẬP LẠI">
        <a href="index.php?act=listsp"><input class="mr20" type="button" value="DANH SÁCH"></a>

      </div>
      <?php
      if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
      ?>
    </form>
  </div>
</div>