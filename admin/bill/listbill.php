<?php
session_start();
include "model/pdo.php"; // Kết nối CSDL

function loadAllBills() {
    global $pdo;
    $sql = "SELECT * FROM donhang ORDER BY id DESC";
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

$bills = loadAllBills();

echo "<h2>Danh sách đơn hàng</h2>";
if (count($bills) > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Người nhận</th><th>Địa chỉ</th><th>SĐT</th><th>Email</th><th>Sản phẩm</th><th>Ngày mua</th><th>Tổng tiền</th></tr>";

    foreach ($bills as $bill) {
        echo "<tr>";
        echo "<td>{$bill['id']}</td>";
        echo "<td>{$bill['user']}</td>";
        echo "<td>{$bill['address']}</td>";
        echo "<td>{$bill['tel']}</td>";
        echo "<td>{$bill['email']}</td>";
        echo "<td>{$bill['sanpham_id']}</td>"; // Cần thêm logic để lấy tên sản phẩm
        echo "<td>{$bill['oder_date']}</td>";
        echo "<td>{$bill['total_amout']}</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>Chưa có đơn hàng nào.</p>";
}
?>