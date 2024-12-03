<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Thêm Mới Sản Phẩm</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center">Thêm mới sản phẩm</h1>
        <div class="row frmcontent mt-3">
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="iddm" class="form-label">Danh mục</label>
                    <select name="iddm" id="iddm" class="form-select" style="height:40px">
                        <?php foreach($listDanhMuc as $danhMuc) { ?>
                            <option value="<?= $danhMuc['id'] ?>"><?= $danhMuc['name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tensp" class="form-label">Tên sản phẩm</label>
                    <input type="text" name="tensp" id="tensp" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="giasp" class="form-label">Giá sản phẩm</label>
                    <input type="text" name="giasp" id="giasp" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="hinh" class="form-label">Hình sản phẩm</label>
                    <input type="file" name="hinh" id="hinh" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="mota" class="form-label">Mô tả sản phẩm</label>
                    <textarea name="mota" id="mota" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="mt-4">
                    <button type="submit" name="themmoi" class="btn btn-primary" onclick="return confirm('Bạn có chắc chắn muốn thêm mới không?')">THÊM MỚI</button>
                    <button type="reset" class="btn btn-secondary" onclick="return confirm('Bạn có chắc chắn muốn nhập lại không?')">NHẬP LẠI</button>
                    <a href="index.php?act=listsp" class="btn btn-info" onclick="return confirm('Bạn có chắc chắn muốn vào trang danh sách mà không thêm mới không?')">DANH SÁCH</a>
                </div>
                <div style="color: green;">
                    <?= $thongBaoThanhCong ?>
                </div>
                <div style="color: red;">
                    <?= $thongBaoLoi ?>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>