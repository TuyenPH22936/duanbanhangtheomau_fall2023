<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH THỐNG KÊ LOẠI DANH MỤC</h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th>Mã Danh Mục</th>
                        <th>Tên Danh Mục</th>
                        <th>Số Lượng</th>
                        <th>Gía Cao Nhất</th>
                        <th>Gía Thấp Nhất</th>
                        <th>Gía Trung Bình</th>
                    </tr>
                    <?php
                    foreach ($listthongke as $thongke) {
                        extract($thongke);
                        echo '<tr>
                     <td>' . $madm . '</td>
                     <td>' . $tendm . '</td>
                     <td>' . $countsp . '</td>
                     <td>' . $maxprice . '</td>
                     <td>' . $minprice . '</td>
                     <td>' . $avgprice . '</td>
                             </tr>';
                    }
                    ?>
                </table>
            </div>
            <div class="row mb10 ">
                <a href="index.php?act=bieudo"> <input type="button" value="Xem biểu đồ"></a>
            </div>
        </form>
    </div>
</div>




</div>