<?php 
function insert_binhluan($noiDung , $iduser , $idpro , $ngayBinhLuan){
    $sql = "INSERT INTO binhluan (noidung , iduser , idpro , ngaybinhluan) 
            VALUES('$noiDung' , '$iduser' , '$idpro' , '$ngayBinhLuan')";
    pdo_execute($sql);
}

function loadAll_binhluan($idpro) {
    $sql = "SELECT * FROM binhluan WHERE 1";
    $params = [];

    if ($idpro > 0) {
        $sql .= " AND idpro = :idpro";
        $params[':idpro'] = $idpro;   
    }

    $sql .= " ORDER BY id DESC"; 
    return pdo_query($sql, $params); 
}
 
?>