<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        
                        <th>MÃ Tài Khoản</th>
                        <th>Email</th>
                        <th>Tên tài khoản</th>
                        <th>Mật Khẩu</th>
                        <th>Địa chỉ</th>
                        <th>Điện thoại</th>
                        <th>Vai trò</th>
                    
                    </tr>
                    <?php
                    foreach ($listtaikhoan as $taikhoan) {
                        extract($taikhoan);
                        echo '<tr>
                     
                     <td>' . $id . '</td>
                     <td>' . $email . '</td>
                     <td>' . $user . '</td>
                     <td>' . $pass . '</td>
                     <td>' . $address . '</td>
                     <td>' . $tel . '</td>
                     <td>' . $role . '</td>
                     <td>
                    
                     </td>
                 </tr>';
                    }
                    ?>
                    
                </table>
            </div>
            
        </form>
    </div>
</div>
</div>