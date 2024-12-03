<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Danh Sách Sản Phẩm</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .formtitle {
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            vertical-align: middle;
            border: none;
        }

        .table thead th {
            background-color: white;
            color: black;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <div class="row mb-3">
            <h1 class="text-center">Danh sách sản phẩm</h1>
        </div>
        
        <div class="row mb-3">
            <form action="index.php?act=listsp" method="post" class="d-flex">
                <input type="text" name="kyw" class="form-control me-2" placeholder="Tìm kiếm...">
                <select name="iddm" class="form-select me-2" style="height:40px">
                    <option value="0" selected>Tất cả</option>
                    <?php foreach($listDanhMuc as $danhMuc) { ?>
                        <option value="<?= $danhMuc['id'] ?>"><?= $danhMuc['name'] ?></option>
                    <?php } ?>
                </select>
                <input type="submit" name="listsp" class="btn btn-primary mt-2" value="Go">
            </form>
        </div>

        <div class="row frmcontent">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th><input type="checkbox" id="selectAll"></th>
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình</th>
                            <th>Giá sản phẩm</th>
                            <th>Lượt xem</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($listSanPham as $sanPham) { ?>
                            <tr>
                                <td><input type="checkbox" name="product_ids[]" value="<?= $sanPham['id'] ?>"></td>
                                <td><?= $sanPham['id'] ?></td>
                                <td><?= $sanPham['name'] ?></td>
                                <td>
                                    <img src="<?= BASE_URL . $sanPham['img'] ?>" class="img-fluid" style="max-width: 120px; height: auto;">
                                </td>
                                <td><?= $sanPham['price'] ?>$</td>
                                <td><?= $sanPham['luotxem'] ?></td>
                                <td>
                                    <a href="index.php?act=suasp&id=<?= $sanPham['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn sửa không?')" class="btn btn-warning">Sửa</a>
                                    <a href="index.php?act=xoasp&id=<?= $sanPham['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" class="btn btn-danger">Xóa</a>
                                    <a href="index.php?act=addsp" class="btn btn-primary">Thêm</a>
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