<?php
function insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm){
    $sql = "INSERT INTO sanpham(NAME, price, img, mota, iddm)
VALUES(
    '$tensp',
    $giasp,
    '$hinh',
    '$mota',
    '".$iddm."'
)";
    pdo_execute($sql);
}

function delete_sanpham($id){
    $sql = "DELETE from sanpham where id = $id";
    pdo_execute($sql);
}

function loadAll_sanpham($kyw,$iddm){
    $sql = "SELECT * from sanpham where 1";
    if($kyw != ""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($iddm > 0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.= " order by id desc";
    $listSanPham = pdo_query($sql);
    return $listSanPham;
}

function loadAll_sanpham_home(){
    $sql = "SELECT * from sanpham where 1 order by id desc limit 0,9";
    $listSanPham = pdo_query($sql);
    return $listSanPham;
}

function loadAll_sanpham_top6(){
    $sql = "SELECT * from sanpham where 1 order by luotxem desc limit 0,6";
    $listSanPham = pdo_query($sql);
    return $listSanPham;
}

function load_ten_dm($iddm){
    if($iddm > 0){
    $sql = "SELECT * from danhmuc WHERE id = $iddm";
    $dm = pdo_query_one($sql);
    extract($dm);
    return $name;
    } else {
        return "";
    }
}

function loadOne_sanpham($id){
    $sql = "SELECT * from sanpham WHERE id = $id";
    $sp = pdo_query_one($sql);
    return $sp;
}

function load_sanpham_cungloai($id , $iddm){
    $sql = "SELECT * from sanpham WHERE iddm = ".$iddm." AND id <> $id";
    $listSanPham = pdo_query($sql);
    return $listSanPham;
}

function update_sanpham($id , $iddm , $tensp , $giasp , $mota , $hinh){
    if($hinh !=""){
        $sql = "UPDATE sanpham set iddm = '".$iddm."', name = '".$tensp."', price = '".$giasp."', mota = '".$mota."',img = '".$hinh."' WHERE id = $id";
    }
    else {
        $sql = "UPDATE sanpham set iddm = '".$iddm."', name = '".$tensp."', price = '".$giasp."', mota = '".$mota."' WHERE id = $id";
    }
    pdo_execute($sql);
}
?>