<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH DANH MỤC </h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                       // nó sẽ lặp qua mảng $danhmuc và tạo ra các biến với tên là các khóa của mảng và giá trị tương ứng là giá trị của mảng.
                        extract($danhmuc);
                        $suadm = "index.php?act=suadm&id=" . $id;
                        $xoadm = "index.php?act=xoadm&id=" . $id;
                        echo '<tr>
                     <td><input type="checkbox" name="" id=""></td>
                     <td>' . $id . '</td>
                     <td>' . $name . '</td>
                     <td>
                     <a href="' . $suadm . '">
                     <input type="button" value="Sửa"></a>
                     <a href="' . $xoadm . '">
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
                <a href="index.php?act=adddm"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
            </div>
        </form>
    </div>
</div>




</div>