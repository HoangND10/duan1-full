<?php
include "header.php";
include "../model/pdo.php";
include "../model/taikhoan.php";
include "../model/thongke.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/donhang.php";
include "../model/binhluan.php";




if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'addtk':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $hoten = $_POST['hoten'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $diachi = $_POST['diachi'];
                $taikhoan = $_POST['taikhoan'];
                $matkhau = $_POST['matkhau'];
                insert_taikhoan($hoten, $email, $sdt, $diachi, $taikhoan, $matkhau);
                $thongbao = "Thêm thành công";
            }
            include "taikhoan/add.php";
            break;
        case 'dskh':
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'thongke':
            $listthongke = loadall_thongke();
            include "thongke/list.php";
            break;
        case 'bieudo':
            $listbieudo = loadall_thongke();
            include "thongke/bieudo.php";
            break;
        case 'xoatk':
            if (isset($_GET['iduser']) && ($_GET['iduser'] > 0)) {
                delete_taikhoan($_GET['iduser']);
            }
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'suatk':
            if (isset($_GET['iduser']) && $_GET['iduser'] > 0) {
                $user = loadone_taikhoan($_GET['iduser']);
            }
            include "taikhoan/update.php";
            break;
        case 'updatetk':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                // if (isset($_POST['id']) && ($_POST['id'])) { 
                // var_dump($_POST);
                // print_r($iduser, $hoten, $email, $sdt, $diachi, $taikhoan, $matkhau);
                $iduser = $_POST['iduser'];
                $hoten = $_POST['hoten'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $diachi = $_POST['diachi'];
                $taikhoan = $_POST['taikhoan'];
                $matkhau = $_POST['matkhau'];
                update_taikhoan($iduser, $hoten, $email, $sdt, $diachi, $taikhoan, $matkhau);
                $_SESSION['user'] = checkuser($user, $pass);
                header('location: index.php?act=dskh');
            }
            include "taikhoan/update.php";
            break;

            //danhmuc    
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc("", 0);
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $dm = loadone_danhmuc($_GET['id']);
            }

            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $iddm = $_POST['iddm'];
                update_danhmuc($tenloai, $iddm);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'addsp':
            //Ktra xem người dùng có click vào nút add hay k
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $soluong = $_POST['soluong'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                insert_sanpham($tensp, $mota, $hinh, $giasp, $soluong, $iddm);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "sanpham/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $idsp = $_POST['idsp'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $soluong = $_POST['soluong'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($idsp, $iddm, $tensp, $giasp, $soluong, $mota, $hinh);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;
        case 'bill':
            $listbill = loadall_bill();
            $listtt = loadall_tt();
            include "bill/listbill.php";
            break;
        case "ctdh":
            if (isset($_GET['iddh'])) {
                $iddh = $_GET['iddh'];
                $donhangct = loadall_ctdh($iddh);
            }
            include "bill/ctdh.php";
            break;
        case "updateStatus":
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['iddh']) && isset($_POST['trangthai'])) {
                    $id = $_POST['iddh'];
                    $trangthai = $_POST['trangthai'];
                    updateStatus($id, $trangthai);
                }
            }
            // Chuyển hướng trở lại trang list.php sau khi cập nhật trạng thái
            header('Location: index.php?act=bill');

            break;
        case 'dsbl':
            $listsanpham = loadall_sanpham();
            $listtaikhoan = loadall_taikhoan();
            $listbinhluan = loadall_binhluan(0);
            include "binhluan/list.php";
            break;
        case 'xoabl':
            if (isset($_GET['idbl']) && ($_GET['idbl'] > 0)) {
                delete_binhluan($_GET['idbl']);
            }
            $listbinhluan = loadall_binhluan(0);
            include "binhluan/list.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
