<?php

function pdo_get_connection() {
    // Kết nối CSDL
    $dburl = "mysql:host=localhost;dbname=duanmau   ;charset=utf8";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO($dburl, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        die("Kết nối cơ sở dữ liệu thất bại: " . $e->getMessage());
    }
}

// Hàm thực thi câu lệnh (INSERT, UPDATE, DELETE)
function pdo_execute($sql, ...$args) {
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($args); // Truyền các tham số
    } catch (PDOException $e) {
        die("Lỗi thực thi câu lệnh: " . $e->getMessage());
    } finally {
        unset($conn);
    }
}

// Hàm thực thi câu truy vấn (SELECT trả về nhiều dòng)
function pdo_query($sql,  $params = []) {
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($params); // Truyền các tham số
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Trả về mảng kết quả
    } catch (PDOException $e) {
        die("Lỗi thực thi truy vấn: " . $e->getMessage());
    } finally {
        unset($conn);
    }
}

// Hàm thực thi câu truy vấn (SELECT trả về một dòng)
function pdo_query_one($sql, ...$args) {
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($args); // Truyền các tham số
        return $stmt->fetch(PDO::FETCH_ASSOC); // Trả về một bản ghi
    } catch (PDOException $e) {
        die("Lỗi thực thi truy vấn một dòng: " . $e->getMessage());
    } finally {
        unset($conn);
    }
}

// Hàm thực thi câu truy vấn (SELECT trả về một giá trị)
function pdo_query_value($sql, ...$args) {
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($args); // Truyền các tham số
        return $stmt->fetchColumn(); // Trả về một giá trị
    } catch (PDOException $e) {
        die("Lỗi thực thi truy vấn giá trị: " . $e->getMessage());
    } finally {
        unset($conn);
    }
}

?>
