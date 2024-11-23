<?php
    function loadall_bill(){
    $sql = "SELECT donhang.id, donhang.user, donhang.address, donhang.tel, donhang.email, donhang.sanpham_id, sanpham.name, donhang.order_date, donhang.total_amount,donhang.trangthai
            FROM donhang
            INNER JOIN sanpham ON donhang.sanpham_id = sanpham.id
            ORDER BY donhang.id DESC;";
    
    $listbill = pdo_query($sql);
    return $listbill;
}

?>