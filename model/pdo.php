<?php

function pdo_get_connection(){
    // Kết nối CSDL
    $dburl = "mysql:host=localhost;dbname=duanmau;charset=utf8";
    $username = "root";
    $password = "";

    $conn = new PDO($dburl, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}

function pdo_execute($sql){
    // Thực thi câu lẹnh sql thao tác dữ liệu (UPDATE , ...)
    // @param string $sql câu lệnh sql
    // @param array $args mảng giá trị cung cấp cho các tham số của $sql
    // @throws PDOException lỗi thực thi câu lệnh
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
    } catch (PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}

function pdo_query($sql){
    // Thực thi câu lẹnh sql truy vấn dữ liệu (SELECT)
    // @param string $sql câu lệnh sql
    // @param array $args mảng giá trị cung cấp cho các tham số của $sql
    // @param array mảng các bản ghi
    // @throws PDOException lỗi thực thi câu lệnh
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetchAll();
        return $row;
    } catch (PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}

function pdo_query_one($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    } catch (PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}

function pdo_query_value($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    } catch (PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}


?>