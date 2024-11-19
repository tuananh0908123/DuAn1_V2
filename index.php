<?php 
    session_start();
    include "model/pdo.php";
    include "model/sanpham.php";
    include "view/header.php";

    define("BASE_URL", "http://localhost/duan11/");
    include "model/danhmuc.php";
    include "model/taikhoan.php";

    $spNew = loadAll_sanpham_home();
    $dsdm = loadAll_danhmuc();
    $dstop10 = loadAll_sanpham_top6();
    

    if(isset($_GET['act']) && $_GET['act']!=""){
        $act = $_GET['act'];
        switch($act) {
            case 'sanpham' :
                if(isset($_POST['kyw']) && $_POST['kyw'] != ""){
                    $kyw = $_POST['kyw'];
                }else {
                    $kyw = "";
                }
                if(isset($_GET['iddm']) && $_GET['iddm'] > 0){
                    $iddm = $_GET['iddm'];
                    
                } else {
                    $iddm = 0;
                }
                $dssp = loadAll_sanpham($kyw,$iddm);
                $tendm = load_ten_dm($iddm);
                include "view/sanpham.php";
                break;

                case 'sanphamct' :
                if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                    $id = $_GET['idsp'];
                    $onesp = loadOne_sanpham($id);
                    extract($onesp);
                    $sp_cung_loai = load_sanpham_cungloai($id , $iddm);
                    include "view/sanphamct.php";
                } else {
                    include "view/home.php";
                }
                break;
            case 'dangki' :
                $thongBaoThanhCong = "";
                $thongBaoLoi = "";
                if(isset($_POST['dangki']) && $_POST['dangki']){
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $dangki = insert_taikhoan($email , $user , $pass);
                    if (!$dangki) {
                        $thongBaoThanhCong = "Đăng kí thành công . Mời bạn chuyển sang đăng nhập";
                        // echo "<script>window.location.href='view/index.php'/script>";
                    } else {
                        $thongBaoLoi = "Đăng kí thất bại . Mời bạn đăng kí hoặc kiểm tra lại các thông tin";
                    }
                
                }
                include "view/taikhoan/dangki.php";
                break;
            case 'dangnhap' :
                $thongBaoThanhCong = "";
                $thongBaoLoi = "";
                if(isset($_POST['dangnhap']) && $_POST['dangnhap']){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $checkuser = checkuser($user , $pass);
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
            case 'edit_taikhoan' :
                $thongBaoThanhCong = "";
                $thongBaoLoi = "";
                if(isset($_POST['capnhat']) && $_POST['capnhat']){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $tel = $_POST['tel'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $id = $_POST['id'];
                    update_taikhoan($id , $user , $pass , $email , $address , $tel);
                    $_SESSION['user'] = checkuser($user , $pass);
                    $thongBaoThanhCong = "Cập nhật thành công";
                    echo "<script>window.location.href='index.php'</script>";
                }
                    include "view/taikhoan/edit_taikhoan.php";
                    break;
            
            case 'quenmk' :
                $thongBaoThanhCong = "";
                $thongBaoLoi = "";
                if(isset($_POST['guiemail']) && ($_POST['guiemail'])){
                    $email = $_POST['email'];
                    $checkemail = checkemail($email);
                    if(is_array($checkemail)){
                        $thongBaoThanhCong = "Tài khoản của bạn là : ".$checkemail['user']."<br>Mật khẩu của bạn là : ".$checkemail['pass'];
                    } else {
                        $thongBaoLoi = "Email không tồn tại . Vui lòng nhập lại email hoặc đăng kí";
                    }
                }
                    include "view/taikhoan/quenmk.php";
                    break;

            case 'gioithieu' :
                include "view/gioithieu.php";
                break;
            case 'thoat' :

                session_start();

                session_unset();

                session_destroy();

                echo '<script>alert("Đăng xuất thành công . Sẽ trở lại trang đăng nhập")</script>';

                echo '<script>window.location.href="index.php"</script>';
                break;

            case 'lienhe' :
                include "view/lienhe.php";
                break;
            
            default :
                include "view/home.php";
                break;
        }
    } else {
        include "view/home.php";
    }
    include "view/footer.php";
?>
