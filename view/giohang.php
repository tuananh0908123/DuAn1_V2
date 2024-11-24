<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
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

    .update-button,
    .remove-button {
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



if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
    echo "<h1>Giỏ hàng</h1>";

    echo "<table>";
    echo "<tr>";
    echo "<th>Ảnh</th>";
    echo "<th>Tên sản phẩm</th>";
    echo "<th>Giá</th>";
    echo "<th>Số lượng</th>";
    echo "<th></th>";
    echo "</tr>";

    foreach ($_SESSION['giohang'] as $key => $item) {
        // print_r($item);
        echo "<tr>";
        echo "<td><img src='" . $item['img'] . "' alt='" . $item['name'] . "'></td>";
        echo "<td>" . $item['name'] . "</td>";
        echo "<td>" . $item['price'] . "</td>";
        echo "<td>
              <form method='POST' action='updatecart.php'>
                  <input type='hidden' name='index' value='" . $key . "'>
                  <input type='number' name='quantity' value='" . $item['sl'] . "' min='1'>
              </form>
            </td>";
        echo "<td>
              <form method='POST' action='updatecart.php'>
                  <input type='hidden' name='index' value='" . $key . "'>
                  <input type='submit' name='update' value='Cập nhật'>
                  <input type='submit' name='remove' value='Xóa'>
              </form>
            </td>";
        echo "</tr>";
    }
    echo "<button><a href='index.php?act=donhang&idsp=$id'>Mua</a></button>";
    echo "</table>";
} else {
    echo "<h1>Giỏ hàng trống</h1>";
}
