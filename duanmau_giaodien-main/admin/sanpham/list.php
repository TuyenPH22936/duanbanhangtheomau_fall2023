<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH SẢN PHẨM</h1>
    </div>
    <form action="index.php?act=listsp" method="POST">
        <input type="text" name="kyw" >
        <select name="iddm" id="">
            <option value="0" selected>Tất cả</option>
          <?php foreach ($listdanhmuc as $danhmuc) {
            extract($danhmuc);
            echo '<option value="'.$id.'">'.$name.'</option>';
          } ?>
          
        </select>
        <input type="submit" value="Go" name="listok">
    </form>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ Sản Phẩm</th>
                        <th>TÊN Sản Phẩm</th>
                        <th>Gía Sản Phẩm</th>
                        <th>Hình Sản Phẩm</th>
                        <th>Mô tả Sản Phẩm</th>
                        <th>Lượt xem Sản Phẩm</th>
                    </tr>
                    <?php
                    foreach ($listsanpham as $sanpham) {
                        extract($sanpham);
                        $suasp = "index.php?act=suasp&id=" . $id;
                        $xoasp = "index.php?act=xoasp&id=" . $id;
                        $img_path ="../upload/".$img;
                        if(is_file($img_path)){
                            $hinh= "<img src='".$img_path."' height='80'>";
                        }else{
                            $hinh ="no photo";
                        }
                        echo '<tr>
                     <td><input type="checkbox" name="" id=""></td>
                     <td>' . $id . '</td>
                     <td>' . $name . '</td>
                     <td>' . $price . '</td>
                     <td>' . $hinh . '</td>
                     <td>' . $mota . '</td>
                     <td>' . $luotxem . '</td>
                     <td>
                     <a href="' . $suasp . '">
                     <input type="button" value="Sửa"></a>
                     <a href="' . $xoasp . '">
                     <input type="button" value="Xóa">
                     </a>
                     
                     </td>
                 </tr>';
                    }
                    ?>
                </table>
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
                <a href="index.php?act=addsp"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
            </div>
        </form>
    </div>
</div>




</div>