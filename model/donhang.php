<?php
    function insert_donhang($ten,$diachi,$sdt,$email,$idsp,$order_date,$tongdonhang,$trangthai){
        $sql="INSERT INTO donhang(user,address,tel,email,sanpham_id,order_date,total_amount,trangthai) VALUES('$ten','$diachi','$sdt','$email','$idsp','$order_date','$tongdonhang','$trangthai');";
        // echo $sql;
        // die();
        pdo_execute($sql);
    }
    function updateStatus($id, $trangthai) {
    // Thực hiện cập nhật trạng thái trong cơ sở dữ liệu
    // Ví dụ:
    $servername = "localhost";
    $username = "root";
    $password = "";
    $pdo = new PDO("mysql:host=$servername;dbname=duan1;port=3307", $username, $password);
    $sql = "UPDATE donhang SET trangthai = :trangthai WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':trangthai', $trangthai);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $pdo = null;
}
?>