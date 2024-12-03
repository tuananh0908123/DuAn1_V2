<head>
    <style>
      /* Đặt nền cho toàn bộ trang */
body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 20px;
}

/* Tiêu đề danh sách đơn hàng */
.formtitle h1 {
    color: #333;
    text-align: center;
    margin-bottom: 20px;
}

/* Form tìm kiếm */
.search-form {
    display: flex;
    justify-content: center;
    margin-bottom: 20px; 
}

.search-form input[type="text"] {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-right: 10px;
    width: 200px;
}

.search-form input[type="submit"] {
    padding: 8px 12px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.search-form input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Bảng danh sách đơn hàng */
.table {
    width: 100%;
    border-collapse: collapse;
}

.table th, .table td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
}

.table th {
    background-color: #007bff;
    color: white;
}

.table tr:nth-child(even) {
    background-color: #f2f2f2;
}

.table tr:hover {
    background-color: #e9ecef;
}

/* Form cập nhật trạng thái */
.formdsloai form {
    display: inline-block;
}

.formdsloai select {
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<div class="row formtitle mb10">
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    </div>
    <div class="row formcontent">   
    <div class="row mb10 formdsloai">
        <table class="table table-striped">
            <tr>
                <th>MÃ ĐƠN HÀNG</th>
                <th>KHÁCH HÀNG</th>
                <th>SỐ LƯỢNG HÀNG</th>
                <th>GIÁ TRỊ ĐƠN HÀNG</th>
                <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                <th>NGÀY ĐẶT HÀNG</th>
                <th>CẬP NHẬT TRẠNG THÁI</th>
            </tr>
             
            <?php
            foreach ($listbill as $bill) {
                extract($bill);
                $kh = $bill["bill_name"] . '<br>' . $bill["bill_email"] . '<br>' . $bill["bill_address"] . '<br>' . $bill["bill_tel"];
                $ttdh = get_ttdh($bill["bill_status"]);
                $count = loadall_cart_count($bill["id"]);
            
                echo '<tr>
                       
                        <td>DAM-' . $bill['id'] . '</td>
                        <td>' . $kh . '</td>
                        <td>' . $count . '</td>
                        <td><strong>' . $bill['total'] . '</strong>$</td>
                        <td>' . $ttdh . '</td>
                        <td>' . $bill['ngaydathang'] . '</td>
                        <td>
                            <form action="index.php?act=updateBillStatus" method="post">
                                <input type="hidden" name="bill_id" value="' . $bill['id'] . '">
                                <select name="new_status" class="form-select form-select-sm">
                                    <option value="0"' . ($bill["bill_status"] == 0 ? "selected" : "") . '>Đang xử lý</option>
                                    <option value="1"' . ($bill["bill_status"] == 1 ? "selected" : "") . '>Chờ xác nhận</option>
                                    <option value="2"' . ($bill["bill_status"] == 2 ? "selected" : "") . '>Đang giao</option>
                                    <option value="3"' . ($bill["bill_status"] == 3 ? "selected" : "") . '>Đã giao</option>
                                </select>
                                <input type="submit" value="Cập nhật" class="btn btn-primary btn-sm">
                            </form>
                        </td>
                    </tr>';
            }            
            ?>
        </table>
        <div class="row text-center mt-4">
        <a href="index.php?act=doanhthu" class="btn btn-success">Xem Tính Doanh Thu Đơn Hàng</a>
    </div>
    </div>

