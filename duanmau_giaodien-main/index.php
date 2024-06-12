<?php
session_start();
include "view/header.php";
include "model/pdo.php";
include "model/Sanpham.php";
include "model/Danhmuc.php";
include "model/TaiKhoan.php";
include "global.php";


$spnew = loadAll_sanpham_home();
$dsdm = loadAll_danhmuc();
$dstop10 = loadAll_sanpham_top10();

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
            // case "":
            //     include "view/home.php";
            //     break;
        case "danhsach":
            include "view/danhsach.php";
            break;
        case "sanpham":
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm']) > 0) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadAll_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";
            break;
        case "binhluan":
            include "view/binhluan.php";
            break;
        case "sanphamct":

            if (isset($_GET['idsp']) && ($_GET['idsp']) > 0) {
                $id = $_GET['idsp'];
                $onesp = loadOne_sanpham($id);
                extract($onesp);
                $sp_cungloai = load_sanpham_cungloai($id, $iddm);
                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }
            break;
        case "dangky":
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                //goi ham
                insert_taikhoan($email, $user, $pass);
                $thongbao = "Đã đăng ký thành công . Vui lòng đăng nhập để thực hiện chức năng bình luận hoặc đặt hàng";
            }
            include "view/taikhoan/dangky.php";
            break;

            //dang nhap
        case "dangnhap":
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    // $thongbao = " Bạn đã đăng nhậpthành công!";
                    // lien kêt trang 
                    header('Location: index.php');
                } else {
                    $thongbao = " Tài khoản không tồn tại . Vui lòng kiểm tra hoặc đăng ký .";
                }
            }
            //chèn trang
            include "view/taikhoan/dangky.php";
            break;
        case "edit_taikhoan":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];
                update_taikhoan($id, $user, $pass, $email, $address, $tel);
                $_SESSION['user'] = checkuser($user, $pass);
                header('Location: index.php?act=edit_taikhoan');
            }
            //chèn trang
            include "view/taikhoan/edit_taikhoan.php";
            break;
        case "quenmk":
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu cua bạn la :" . $checkemail['pass'];
                } else {
                    $thongbao = "Email nay không tồn tại! ";
                }
            }
            //chèn trang
            include "view/taikhoan/quenmk.php";
            break;
        case "thoat":
            session_unset();
            header('Location: index.php');
            //chèn trang
            include "view/taikhoan/quenmk.php";
            break;
        // case "binhluanform":
        //     include "view/binhluanform.php";
        //     break;
        default:
            include "view/home.php";
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
