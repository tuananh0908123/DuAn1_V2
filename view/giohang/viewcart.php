<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Giỏ Hàng</title>
</head>
<body>
    <div class="container mt-4">
        <!-- Tiêu đề Giỏ Hàng -->
        <div class="row mb-4">
            <div class="col">
                <h2 class="boxtitle">GIỎ HÀNG</h2>
            </div>
        </div>

        <?php
        // Kiểm tra xem người dùng đã đăng nhập hay chưa
        if (!isset($_SESSION['user'])) {
            // Nếu người dùng chưa đăng nhập, điều hướng đến trang đăng nhập
            header("Location: index.php?act=dangnhap");
            exit();
        } else {
        ?>
            <!-- Bảng Giỏ Hàng -->
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        
                    </thead>
                    <tbody>
                        <?php
                        // Gọi hàm để hiển thị nội dung giỏ hàng
                        viewcart(1);
                        ?>
                    </tbody>
                </table>
            </div>

            <!-- Nút Điều Hướng -->
            <div class="row mb-4">
                <div class="col text-right">
                    <a href="index.php?act=bill" class="btn btn-primary">TIẾP TỤC ĐẶT HÀNG</a>
                    <a href="index.php?act=delcart" class="btn btn-danger">XÓA GIỎ HÀNG</a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start mt-4">
        <div class="container p-4">
            <h5 class="text-uppercase">CÔNG TY CỔ PHẦN ĐẦU TƯ THƯƠNG MẠI VÀ DỊCH VỤ TECHSHOP VIỆT NAM</h5>
            
            </div>
        </div>
    </footer>

    <!-- Thư viện JavaScript cần thiết cho Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>