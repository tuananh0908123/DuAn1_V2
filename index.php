<?php
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "view/header.php";
define("BASE_URL", "http://localhost/duan11/");
include "model/danhmuc.php";
include "model/taikhoan.php";
include "model/cart.php";
include "model/bill.php";

$spNew = loadAll_sanpham_home();
$dsdm = loadAll_danhmuc();
$dstop10 = loadAll_sanpham_top6();


if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_POST['kyw']) && $_POST['kyw'] != "") {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadAll_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";
            break;

        case 'sanphamct':
            if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                $id = $_GET['idsp'];
                $onesp = loadOne_sanpham($id);
                extract($onesp);
                $sp_cung_loai = load_sanpham_cungloai($id, $iddm);
                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }

            break;
        case 'dangki':
            $thongBaoThanhCong = "";
            $thongBaoLoi = "";
            if (isset($_POST['dangki']) && $_POST['dangki']) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $dangki = insert_taikhoan($email, $user, $pass);
                if (!$dangki) {
                    $thongBaoThanhCong = "Đăng kí thành công . Mời bạn chuyển sang đăng nhập";
                    // echo "<script>window.location.href='view/index.php'/script>";
                } else {
                    $thongBaoLoi = "Đăng kí thất bại . Mời bạn đăng kí hoặc kiểm tra lại các thông tin";
                }
            }
            include "view/taikhoan/dangki.php";
            break;
        case 'dangnhap':
            $thongBaoThanhCong = "";
            $thongBaoLoi = "";
            if (isset($_POST['dangnhap']) && $_POST['dangnhap']) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    $thongBaoThanhCong = "Đăng nhập thành công";
                    echo "<script>window.location.href='index.php'</script>";
                } else {
                    $thongBaoLoi = "Tài khoản không tồn tại . Vui lòng kiểm tra hoặc đăng kí";
                }
            }
            include "view/taikhoan/dangki.php";
            break;
        case 'edit_taikhoan':
            $thongBaoThanhCong = "";
            $thongBaoLoi = "";
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $tel = $_POST['tel'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $id = $_POST['id'];
                update_taikhoan($id, $user, $pass, $email, $address, $tel);
                $_SESSION['user'] = checkuser($user, $pass);
                $thongBaoThanhCong = "Cập nhật thành công";
                echo "<script>window.location.href='index.php'</script>";
            }
            include "view/taikhoan/edit_taikhoan.php";
            break;

        case 'quenmk':
            $thongBaoThanhCong = "";
            $thongBaoLoi = "";
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongBaoThanhCong = "Tài khoản của bạn là : " . $checkemail['user'] . "<br>Mật khẩu của bạn là : " . $checkemail['pass'];
                } else {
                    $thongBaoLoi = "Email không tồn tại . Vui lòng nhập lại email hoặc đăng kí";
                }
            }
            include "view/taikhoan/quenmk.php";
            break;

        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'thoat':

            session_start();

            session_unset();

            session_destroy();

            echo '<script>alert("Đăng xuất thành công . Sẽ trở lại trang đăng nhập")</script>';

            echo '<script>window.location.href="index.php"</script>';
            break;

        case 'lienhe':
            include "view/lienhe.php";
            break;

        case 'viewcart':
            include "view/cart/viewcart.php";
            break;

            // Thêm sản phẩm
        case 'addtocart':
            if (isset($_POST['addtocart']) && $_POST['addtocart']) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = 1;
                $ttien = $soluong * (float)$price;
                $spadd = [$id, $name, $img, $price, $soluong, $ttien];

                // Thêm sản phẩm vào giỏ hàng
                $_SESSION['mycart'][] = $spadd;
            }
            include "view/giohang/viewcart.php";
            break;

            // Xóa sản phẩm khỏi giỏ hàng
        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('Location:' . $_SERVER['HTTP_REFERER']);
            break;

        case 'bill':
            include "view/giohang/bill.php";
            break;

            // Tạo bill
        case 'billconfirm':
            if (isset($_POST['dongydathang']) && $_POST['dongydathang']) {
                // Kiểm tra nếu người dùng đã đăng nhập
                if (isset($_SESSION['user'])) {
                    $iduser = $_SESSION['user']['id'];
                } else {
                    $iduser = 0;  // Nếu người dùng chưa đăng nhập
                }

                // Lấy thông tin người dùng từ form
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];

                $pttt = isset($_POST['pttt']) ? $_POST['pttt'] : 0; // Mặc định là "Trả tiền khi nhận hàng"

                // Lấy ngày giờ đặt hàng
                $ngaydathang = date("h:i:sa d/m/Y");

                // Tính tổng giá trị đơn hàng
                $tongdonhang = tongdonhang();  // Hàm tính tổng tiền đơn hàng

                // Gọi hàm insert_bill để lưu thông tin đơn hàng
                $idbill = insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang);

                // Insert thông tin các sản phẩm trong giỏ hàng vào bảng cart
                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $idbill);
                }

                // Reset giỏ hàng sau khi đặt đơn hàng thành công
                $_SESSION['mycart'] = [];  // Xóa giỏ hàng

                // Hiển thị thông tin đơn hàng vừa tạo
                $bill = loadone_bill($idbill);
                $billct = loadall_cart($idbill);

                // Hiển thị trang xác nhận đơn hàng
                include "view/giohang/billconfirm.php";
            }
            break;

            // Đơn hàng của tôi
        case 'mybill':
            $listbill = loadall_bill("", $_SESSION['user']['id']);
            include "view/cart/mybill.php";
            break;

        case 'thongke':
            $listthongke = loadall_thongke();
            include "thongke/list.php";
            break;
        case 'bieudo':
            $listbieudo = loadall_thongke();
            include "thongke/bieudo.php";
            break;
        case 'hoidap':
            include "view/hoidap.php";
            break;

        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
