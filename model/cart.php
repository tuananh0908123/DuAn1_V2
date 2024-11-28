<?php 

function insert_giohang($user_id, $sanpham_id, $name, $img, $price, $sl){
    $sql = "INSERT INTO giohang(user_id, sanpham_id, name, img, price, sl) 
            VALUES(?, ?, ?, ?, ?, ?)";
    pdo_execute($sql);
}
?>