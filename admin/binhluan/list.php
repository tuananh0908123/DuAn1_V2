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
            <center><h1 class="text-center">Danh Sách Bình Luận</h1></center>
        </div>
        <div class="row formcontent">
            <div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th><input type="checkbox" id="selectAll"></th>
                            <th>ID</th>
                            <th>Nội dung bình luận</th>
                            <th>Id User</th>
                            <th>Id Pro</th>
                            <th>Ngày bình luận</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if (!isset($listBinhLuan) || !is_array($listBinhLuan)) {
                            $listBinhLuan = []; 
                        }
                        foreach($listBinhLuan as $binhLuan) {
                            extract($binhLuan);
                            $suabl = "index.php?act=suabl&id=".$id;
                            $xoabl = "index.php?act=xoabl&id=".$id;
                            ?>
                            <tr>
                            <td><input type="checkbox" name="select[]" value="<?= $id ?>"></td>
                            <td><?= htmlspecialchars($binhLuan['id']) ?></td>
                            <td><?= htmlspecialchars($binhLuan['noidung']) ?></td>
                            <td><?= htmlspecialchars($binhLuan['iduser']) ?></td>
                            <td><?= htmlspecialchars($binhLuan['idpro']) ?></td>
                            <td><?= htmlspecialchars($binhLuan['ngaybinhluan']) ?></td>
                            <td> 
                                <center><a href="<?= $xoabl ?>"><button class="btn btn-danger">Xóa</button></a></center>
                            </td>
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