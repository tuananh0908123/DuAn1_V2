<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Danh Sách Bình Luận</title>
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
        .table th, .table td {
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
            <center><h1>Danh sách thống kê</h1></center>
        </div>
        <div class="row formcontent">
            <div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th><input type="checkbox" id="selectAll"></th>
                            <th>Mã danh mục</th>
                            <th>Loại Hàng</th>
                            <th>Số lượng</th>
                            <th>Giá cao nhất</th>
                            <th>Giá thấp nhất</th>
                            <th>Giá trung bình</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                                               <?php
                        foreach($listthongke as $thongke){
                            extract($thongke);
                            ?>
                            <td><input type="checkbox" name="" id=""></td>
                            <td><?= $thongke['madm'] ?></td>
                            <td><?= $thongke['tendm'] ?></td>
                            <td><?= $thongke['countsp'] ?></td>
                            <td><?= $thongke['maxprice'] ?></td>
                            <td><?= $thongke['minprice'] ?></td>
                            <td><?= $thongke['avgprice'] ?></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
                <div class="row mb-3 mt-3">
                    <a href="index.php?act=bieudo" class="btn btn-primary">Biểu đồ</a>
                </div>
        </div>
    </div>

    <script>
        document.getElementById('selectAll').onclick = function() {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
        };
    </script>
</body>
</html>