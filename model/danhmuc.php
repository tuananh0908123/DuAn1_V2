<?php
function insert_danhmuc($tenLoai){
    $sql = "INSERT INTO danhmuc(name) 
            VALUES('$tenLoai')";
    pdo_execute($sql);
}

function delete_danhmuc($id){
    $sql = "DELETE from danhmuc where id =".$id;
    pdo_execute($sql);
}

function loadAll_danhmuc(){
    $sql = "SELECT * from danhmuc order by id desc";
    $listDanhMuc = pdo_query($sql);
    return $listDanhMuc;
}

function loadOne_danhmuc($id){
    $sql = "SELECT * from danhmuc WHERE id =".$id;
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_danhmuc($id , $tenLoai){
    $sql = "UPDATE danhmuc set name = '$tenLoai' WHERE id =".$id;
    pdo_execute($sql);
}
?>