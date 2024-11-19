<?php 
    include "../model/pdo.php";
    include "header.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    define("BASE_URL", "http://localhost:8080/DUANMAU/");
    // controller

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act){
            case "adddm" :
                $thongBaoLoi = "";
                $thongBaoThanhCong = "";
                // Kiểm tra ng dùng có ấn vào add hay không
                if(isset($_POST['themmoi'])){
                $tenLoai = $_POST['tenloai'];
                insert_danhmuc($tenLoai);
                $thongBaoThanhCong = "Thêm mới thành công";

                }
                include "danhmuc/add.php";
                break;

            case "listdm" :
                $listDanhMuc = loadAll_danhmuc();
                include "danhmuc/list.php";
                break;

            case "xoadm" :
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    delete_danhmuc($_GET['id']);
                }
                $listDanhMuc = loadAll_danhmuc();
                include "danhmuc/list.php";
                break;
            
            case "suadm" :
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    $dm = loadOne_danhmuc($_GET['id']);
                }
                include "danhmuc/update.php";
                break;
            case "updatedm" :
                $thongBaoLoi = "";
                $thongBaoThanhCong = "";
                if(isset($_POST['capnhat'])){
                    $tenLoai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    update_danhmuc($id , $tenLoai);
                    $thongBaoThanhCong = "Cập nhật thành công";
    
                    }
                    $listDanhMuc = loadAll_danhmuc();
                include "danhmuc/list.php";
                break;
                // Controller danh mục

            case "addsp" :
                $thongBaoLoi = "";
                $thongBaoThanhCong = "";
                // Kiểm tra ng dùng có ấn vào add hay không
                if(isset($_POST['themmoi'])){
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if($_FILES["hinh"]["tmp_name"] !== ""){
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    $hinh = 'upload/' . basename($_FILES["hinh"]["name"]);
                } else {
                    $thongBaoLoi = "Upload file thất bại . Mời bạn kiểm tra lại";
                }
            }
                insert_sanpham($tensp , $giasp , $hinh , $mota , $iddm);
                $thongBaoThanhCong = "Thêm mới thành công";
                }
                $listDanhMuc = loadAll_danhmuc();
                include "sanpham/add.php";
                break;
    
            case "listsp" :
                if(isset($_POST['listsp'])){
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                } else {
                    $kyw = '';
                    $iddm =0;
                }
                $listDanhMuc = loadAll_danhmuc();
                $listSanPham = loadAll_sanpham($kyw,$iddm);
                include "sanpham/list.php";
                break;
    
            case "xoasp" :
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    delete_sanpham($_GET['id']);
                }
                $listSanPham = loadAll_sanpham("",0);
                include "sanpham/list.php";
                break;
                
            case "suasp" :
                $thongBaoLoi = "";
                $thongBaoThanhCong = "";
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    $sp = loadOne_sanpham($_GET['id']);
                }
                $listDanhMuc = loadAll_danhmuc();
                include "sanpham/update.php";
                break;
            case "updatesp" :
                $thongBaoLoi = "";
                $thongBaoThanhCong = "";
                if(isset($_POST['capnhat'])){
                    $id = $_POST['id'];
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if($_FILES["hinh"]["tmp_name"] !== ""){
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            $hinh = 'upload/' . basename($_FILES["hinh"]["name"]);
                    } else {
                            $thongBaoLoi = "Upload file thất bại . Mời bạn kiểm tra lại";
                        }
                    }
                    update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
                    $thongBaoThanhCong = "Cập nhật thành công";
                    }
                    $listDanhMuc = loadAll_danhmuc();
                    $listSanPham = loadAll_sanpham("",0);
                include "sanpham/list.php";
                break; 
                
            case "dskh" :
                $listTaiKhoan = loadAll_taikhoan();
                include "taikhoan/list.php";
                break;

            case "dsbl" :
                $listBinhLuan = loadAll_binhluan(0);
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
    
?>