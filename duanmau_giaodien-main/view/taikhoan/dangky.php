<main class="catalog  mb ">
    <div class="boxleft">
        <div class="mb">
            <div class="box_title">Đăng ký thành viên</div>
            <div class="box_content form_account">
                <form action="index.php?act=dangky" method="post">
                    <div>
                        <p style="text-align:left;">Email</p>
                        <input type="email" name="email" placeholder="email">
                    </div>
                    <div>
                        <p style="text-align:left;">Tên đăng nhập</p>
                        <input type="text" name="user" placeholder="user">
                    </div>

                    <div>
                        <p style="text-align:left;">Mật khẩu</p>
                        <input type="password" name="pass" placeholder="pass">
                    </div>
                    <div style="text-align:left;">
                        <input type="submit" value="Đăng ký" name="dangky">
                        <input type="reset" value="Nhập lại">
                    </div>
                </form>
                <h3 class="thongbao" style="color: red; padding-top: 20px;" >
                <?php 
                 if(isset($thongbao)&&($thongbao!="")){
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