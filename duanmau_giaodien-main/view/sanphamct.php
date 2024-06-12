<main class="catalog  mb ">
  <div class="boxleft">
    <div class="mb">
      <?php
      extract($onesp);
      ?>
      <div class="box_title"><?= $name ?></div>
      <div class="box_content">
        <?php
        $img = $img_path . $img;
        echo '<div class="spct">
               <img src="' . $img . '">
              </div>';
        // echo "<br>";
        echo $mota;
        ?>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script>
        $(document).ready(function() {
            $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
          });
      </script>
    <div class="mb" id="binhluan">
      
      
    </div>


    <div class=" mb">
      <div class="box_title">SẢN PHẨM CÙNG LOẠI</div>
      <div class="box_content">
        <?php
        foreach ($sp_cungloai as $sp_cung_loai) {
          extract($sp_cung_loai);
          $linksp = "index.php?act=sanphamct&idsp=" . $id;
          echo '<li><a href="' . $linksp . '">' . $name . '</a></li>';
        }
        ?>
      </div>
    </div>
  </div>
  <?php
  include "view/boxright.php";
  ?>

</main>