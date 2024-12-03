<?php
function totalBill() {
    // Truy vấn tổng doanh thu từ bảng bill
    $sql = "SELECT SUM(total) AS total_revenue FROM bill ";
    $result = pdo_query($sql); 
    return $result[0]['total_revenue']; 
}

$total = totalBill();
?>