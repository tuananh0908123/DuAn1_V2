<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Thêm Mới Loại Hàng Hóa</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .mb10 {
            margin-bottom: 10px;
        }
        .btn {
            border: none; 
        }
        .btn:hover {
            box-shadow: none; 
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center">Thêm mới danh mục</h1>
        <div class="row frmcontent">
            <form action="index.php?act=adddm" method="post" class="col-12">
                <div class="mb-3">
                    <label for="maloai" class="form-label">Mã loại</label>
                    <input type="text" name="maloai" id="maloai" class="form-control" disabled>
                </div>
                <div class="mb-3">
                    <label for="tenloai" class="form-label">Tên loại</label>
                    <input type="text" name="tenloai" id="tenloai" class="form-control" required>
                </div>
                <div class="mt-4">
                    <button type="submit" name="themmoi" class="btn btn-primary" onclick="return confirm('Bạn có chắc chắn muốn thêm mới không?')">Thêm mới</button>
                    <button type="reset" class="btn btn-secondary" onclick="return confirm('Bạn có chắc chắn muốn nhập lại không?')">Nhập lại</button>
                    <a href="index.php?act=listdm" class="btn btn-info" onclick="return confirm('Bạn có chắc chắn muốn vào trang danh sách mà không thêm mới không?')">Danh sách</a>
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