<?php

// Xử lý thêm sản phẩm vào giỏ hàng
if (isset($_POST['addtocart'])) {
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $img = isset($_POST['img']) ? $_POST['img'] : null;
    $price = isset($_POST['gia']) ? $_POST['gia'] : 0;
    $quantity = isset($_POST['sl']) ? $_POST['sl'] : 1; // Mặc định là 1

    // Kiểm tra nếu $id hợp lệ
    if ($id !== null) {
        // Kiểm tra xem giỏ hàng đã tồn tại trong session chưa
        if (!isset($_SESSION['giohang'])) {
            $_SESSION['giohang'] = array(); // Khởi tạo giỏ hàng nếu chưa có
        }

        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
        $existingItem = null;
        foreach ($_SESSION['giohang'] as $key => $item) {
            if ($item['id'] === $id) {
                $existingItem = $key; // Lưu chỉ số của sản phẩm
                break;
            }
        }

        // Nếu sản phẩm đã tồn tại, cập nhật số lượng
        if ($existingItem !== null) {
            $_SESSION['giohang'][$existingItem]['sl'] += $quantity; // Cập nhật số lượng
        } else {
            // Nếu chưa tồn tại, thêm sản phẩm mới vào giỏ hàng
            $item = array(
                'id' => $id,
                'name' => $name,
                'img' => $img,
                'price' => $price,
                'sl' => $quantity
            );
            $_SESSION['giohang'][] = $item; // Thêm sản phẩm vào giỏ hàng

            // Thêm vào cơ sở dữ liệu
            $stmt = $pdo->prepare("INSERT INTO giohang (user_id, sanpham_id, name, img, price, soluong) VALUES (?, ?, ?, ?, ?, ?)");
            // Giả sử user_id là 1, thay đổi nếu cần
            $user_id = 1; 
            $stmt->execute([$user_id, $id, $name, $img, $price, $soluong]);
        }
    }
}
?>

<div class="col-lg-12">
    <input type="hidden" value="<?=$id?>" name="id">
    <input type="hidden" value="<?=$name?>" name="name">
    <input type="hidden" value="<?=$img?>" name="img">
    <input type="hidden" value="<?=$price?>" name="gia">
    <input type="number" name="sl" value="1" min="1" class="quantity-input">
    <input type="submit" value="Thêm vào giỏ hàng" name="addtocart">
</div>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        text-align: center;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    img {
        max-width: 100px;
        max-height: 100px;
    }

    .quantity-input {
        width: 50px;
        text-align: center;
    }

    .update-button, .remove-button {
        background-color: #4CAF50;
        color: white;
        padding: 6px 10px;
        border: none;
    }

    .remove-button {
        background-color: #f44336;
    }
</style>

<?php
// Hiển thị giỏ hàng
if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
    echo "<h1>Giỏ hàng</h1>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Ảnh</th>";
    echo "<th>Tên sản phẩm</th>";
    echo "<th>Giá</th>";
    echo "<th>Số lượng</th>";
    echo "<th>Thao tác</th>";
    echo "</tr>";

    foreach ($_SESSION['giohang'] as $key => $item) {
        echo "<tr>";
        echo "<td><img src='".htmlspecialchars($item['img'])."' alt='".htmlspecialchars($item['name'])."'></td>";
        echo "<td>".htmlspecialchars($item['name'])."</td>";
        echo "<td>".htmlspecialchars($item['price'])."</td>";
        echo "<td>
                <form method='POST' action='updatecart.php'>
                    <input type='hidden' name='index' value='".$key."'>
                    <input type='number' name='quantity' value='".$item['sl']."' min='1' class='quantity-input'>
                    <input type='submit' name='update' value='Cập nhật' class='update-button'>
                    <input type='submit' name='remove' value='Xóa' class='remove-button'>
                </form>
              </td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<button><a href='index.php?act=donhang'>Mua</a></button>";
} else {
    echo "<h1>Giỏ hàng trống</h1>";
}
?>