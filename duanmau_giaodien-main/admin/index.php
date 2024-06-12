<?php
include "header.php";
include "../model/pdo.php";
include "../model/Danhmuc.php";
include "../model/Sanpham.php";
include "../model/TaiKhoan.php";
include "../model/Binhluan.php";
include "../model/Thongke.php";
include "../global.php";

//controller
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
            //Danh mục
        case "adddm":
            //kiem tra xem nguoi dung co click vap nut add hay ko
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['catname'];
                insert_danhmuc($tenloai);
                $thongbao = "THÊM THÀNH CÔNG";
            }
            include "danhmuc/add.php";
            break;

        case "listdm":
            $listdanhmuc = loadAll_danhmuc();
            include "danhmuc/list.php";
            break;

        case "xoadm":
            //kiem tra co ton tai hay ko
            // Lấy giá trị của tham số "id" từ URL
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            //xoa xong goi lam danh sach danh muc
            $listdanhmuc = loadAll_danhmuc();
            include "danhmuc/list.php";
            break;

        case "suadm":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadOne_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;

        case "updatedm":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id, $tenloai);
                $thongbaoUpdate = "CẬP NHẬT THÀNH CÔNG ";
            }
            $listdanhmuc = loadAll_danhmuc();
            include "danhmuc/list.php";
            break;

            // Sản phẩm
        case "addsp":
            //kiem tra xem nguoi dung co click vap nut add hay ko
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                } else {
                }
                insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                $thongbao = "THÊM THÀNH CÔNG ";
            }
            $listdanhmuc = loadAll_danhmuc();
            include "sanpham/add.php";
            break;

        case "listsp":
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadAll_danhmuc();
            $listsanpham = loadAll_sanpham($kyw, $iddm);
            include "sanpham/list.php";
            break;

        case "xoasp":
            //kiem tra co ton tai hay ko
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            //xoa xong goi lam danh sach sp
            $listsanpham = loadAll_sanpham("", 0);
            include "sanpham/list.php";
            break;

        case "suasp":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadOne_sanpham($_GET['id']);
            }
            $listdanhmuc = loadAll_danhmuc();
            include "sanpham/update.php";
            break;

        case "updatesp":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                } else {
                }
                update_sanpham($tensp, $iddm, $giasp, $hinh, $mota, $id);
                $thongbao = "CẬP NHẬT THÀNH CÔNG ";
            }
            $listdanhmuc = loadAll_danhmuc();
            $listsanpham = loadAll_sanpham("", 0);
            include "sanpham/list.php";
            break;

            // danh sách Khách hàng
        case "dskh":
            $listtaikhoan = loadAll_taikhoan();
            include "taikhoan/list.php";
            break;

            // danh sach BÌNH LUẬN
        case "dsbl":
            $listbinhluan = loadAll_binhluan("");
            include "binhluan/list.php";
            break;
        case "xoabl":
            //kiem tra co ton tai hay ko
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }
            //xoa xong goi lam danh sach danh muc
            $listbinhluan = loadAll_binhluan(0);
            include "binhluan/list.php";
            break;
        case "listtk":
            $listthongke = loadAll_thongke();
            include "thongke/list.php";
            break;
        case "bieudo":
            $listthongke = loadAll_thongke();
            include "thongke/bieudo.php";
            break;

        case "bieudo":
            include "bieudo.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
