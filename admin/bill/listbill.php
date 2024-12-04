<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Danh Sách Đơn Hàng</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .formtitle {
            margin-bottom: 20px;
        }

        .table {
            border: none;
        }

        .table th,
        .table td {
            vertical-align: middle;
            border: none; /* Remove borders from table cells */
        }

        .table thead th {
            background-color: white; /* Set header background to white */
            color: black; /* Set header text color to black */
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <div class="row formtitle">
            <h1 class="text-center">Danh Sách Đơn Hàng</h1>
        </div>
        <div class="row formcontent">
            <div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Khách hàng</th>
                            <th>Số lượng hàng</th>
                            <th>Giá trị đơn hàng</th>
                            <th>Tình trạng đơn hàng</th>
                            <th>Ngày đặt hàng</th>
                            <th>Cập nhật đơn hàng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $kh = $bill["bill_name"] . '<br>' . $bill["bill_email"] . '<br>' . $bill["bill_address"] . '<br>' . $bill["bill_tel"];
                            $ttdh = get_ttdh($bill["bill_status"]);
                            $count = loadall_cart_count($bill["id"]);
                        ?>
                            <tr>
                                <td>DAM-<?= $bill['id'] ?></td>
                                <td><?= $kh ?></td>
                                <td><?= $count ?></td>
                                <td><strong><?= $bill['total'] ?></strong>$</td>
                                <td><?= $ttdh ?></td>
                                <td><?= $bill['ngaydathang'] ?></td>
                                <td>
                                    <form action="index.php?act=updateBillStatus" method="post">
                                        <input type="hidden" name="bill_id" value="<?= $bill['id'] ?>">
                                        <select name="new_status" class="form-select form-select-sm">
                                            <option value="0" <?= ($bill["bill_status"] == 0 ? "selected" : "") ?>>Đang xử lý</option>
                                            <option value="1" <?= ($bill["bill_status"] == 1 ? "selected" : "") ?>>Chờ xác nhận</option>
                                            <option value="2" <?= ($bill["bill_status"] == 2 ? "selected" : "") ?>>Đang giao</option>
                                            <option value="3" <?= ($bill["bill_status"] == 3 ? "selected" : "") ?>>Đã giao</option>
                                        </select>
                                        <input type="submit" value="Cập nhật" class="btn btn-primary btn-sm mt-2">
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="row text-center mt-4">
                    <a href="index.php?act=doanhthu" class="btn btn-success">Xem Tính Doanh Thu Đơn Hàng</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Select all checkboxes
        document.getElementById('selectAll').onclick = function() {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
        };
    </script>
</body>

</html>