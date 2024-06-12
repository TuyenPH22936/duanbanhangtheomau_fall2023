<main class="catalog  mb ">
    <div class="boxleft">
        <div class="mb">
           
            <div class="box_title">San Pham <strong><?=$tendm?></strong></div>
            <div class="box_content">
                <?php
                $i = 0;
                foreach ($dssp as $sp) {
                   extract($sp);
                   $linksp ="index.php?act=sanphamct&idsp=".$id;
                   $hinh = $img_path.$img;
                   if (($i == 2 || ($i == 5) || ($i == 8)|| ($i == 11))) {
                      $mr = '';
                   } else {
                      $mr = 'mr';
                   }
                   echo '<div class="box_items"'.$mr.'>
                     <div class="box_items_img">
                     <a class="item_name" href="'. $linksp.'">
                        <img src="'.$hinh.'" alt="" style="width:380px "></a>
                        <div class="add" href="">ADD TO CART</div>
                     </div>
                      <a class="item_name" href="'. $linksp.'">'.$name.'</a>
                      <p class="price">'.$price.'</p>
                      </div>';
                } 
                ?>

            </div>
        </div>


       
    </div>
    <?php
    include "view/boxright.php";
    ?>

</main>