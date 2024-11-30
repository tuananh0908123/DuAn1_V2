<?php 
function loadAll_taikhoan(){
    $sql = "SELECT * from taikhoan order by id desc";
    $listTaiKhoan = pdo_query($sql);
    return $listTaiKhoan;
}

function insert_taikhoan($email , $user , $pass){
    $sql = "insert into taikhoan(email,user,pass) values('$email' , '$user' , '$pass')";
    pdo_execute($sql);
}

function checkuser($user , $pass) {
    $sql = "SELECT * from taikhoan where user = '".$user."' AND pass = '".$pass."'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function checkemail($email) {
    $sql = "SELECT * from taikhoan where email = '".$email."'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function update_taikhoan($id , $user , $pass , $email , $address , $tel){
    $sql = "UPDATE taikhoan set user = '".$user."', pass = '".$pass."', email = '".$email."', address = '".$address."',tel = '".$tel."' WHERE id = $id";
    pdo_execute($sql);
}

?>