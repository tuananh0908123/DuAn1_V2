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
            <center><h1 class="text-center">Danh Sách Khách Hàng</h1></center>
        </div>
        <div class="row formcontent">
            <div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th><input type="checkbox" id="selectAll"></th>
                            <th>Mã tài khoản</th>
                            <th>Tên đăng nhập</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Điện thoại</th>
                            <th>Vai trò</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($listTaiKhoan as $taiKhoan){ ?>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><?= $taiKhoan['id']?></td>
                                    <td><?= $taiKhoan['user']?></td>
                                    <td><?= $taiKhoan['email']?></td>
                                    <td><?= $taiKhoan['address']?></td>
                                    <td><?= $taiKhoan['tel']?></td>
                                    <td><?= $taiKhoan['role']?></td>
                        </tr>
                            <?php } ?>
                    </tbody>
                </table>
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