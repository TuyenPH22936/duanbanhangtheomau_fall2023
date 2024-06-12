<main class="catalog  mb ">
    <div class="boxleft">
        <div class="mb">
            <div class="box_title">Cập nhật tài khoan</div>
            <div class="box_content form_account">
                <?php
                if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);
                }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">

                    <div>
                        <p style="text-align:left;">Email</p>
                        <input type="email" name="email" value="<?=$email?>">
                    </div>
                    <div>
                        <p style="text-align:left;">Tên đăng nhập</p>
                        <input type="text" name="user" value="<?=$user?>">
                    </div>

                    <div>
                        <p style="text-align:left;">Mật khẩu</p>
                        <input type="password" name="pass" value="<?=$pass?>">
                    </div>
                    <div>
                        <p style="text-align:left;">Địa chỉ</p>
                        <input type="text" name="address" value="<?=$address ?>">
                    </div>
                    <div>
                        <p style="text-align:left;">Điện thoại</p>
                        <input type="text" name="tel" value="<?=$tel?>">
                    </div>
                    <div style="text-align:left;">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" value="Cập nhật" name="capnhat">
                        <input type="reset" value="Nhập lại">
                    </div>
                </form>
                <h3 class="thongbao" style="color: red; padding-top: 20px;">
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo "$thongbao";
                    }
                    ?>
                </h3>

            </div>
        </div>
    </div>
    <?php
    include "view/boxright.php";
    ?>

</main>