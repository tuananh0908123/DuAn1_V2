<?php 
function Insert_Cart($user_id, $sanpham_id, $bienthesanpham_id, $soluong){
    $sql = "INSERT INTO giohang (user_id, sanpham_id, bienthesanpham_id, soluong) 
    VALUES ($user_id, $sanpham_id, $bienthesanpham_id, $soluong)";
    pdo_execute($sql);
}

function loadAll_Cart($user_id) {
    $sql = "SELECT * FROM giohang WHERE user_id = :user_id";
    $params = [':user_id' => $user_id];
    
    return pdo_query($sql, $params); 
}

function delete_cart_item($user_id, $sanpham_id) {
    $sql = "DELETE FROM giohang WHERE user_id = :user_id AND sanpham_id = :sanpham_id";
    $params = [
        ':user_id' => $user_id,
        ':sanpham_id' => $sanpham_id
    ];

    return pdo_execute($sql, $params);
}
?>