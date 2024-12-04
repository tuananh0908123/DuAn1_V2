<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Đặt Hàng</title>
    <style>

    </style>
</head>
<body>
    <div class="">
        <div class="">
            <div class="">
                <h2 class="">ĐẶT HÀNG</h2>
            </div>
        </div>

        <form action="index.php?act=billconfirm" method="post">
            <!-- Thông Tin Đặt Hàng -->
            <div class="row mb-4">
                <div class="col">
                    <h4 class="boxtitle">THÔNG TIN ĐẶT HÀNG</h4>
                    <div class="boxcontent billform">
                        <?php
                        if (isset($_SESSION['user'])) {
                            $name = $_SESSION['user']['user'];
                            $address = $_SESSION['user']['address'];
                            $email = $_SESSION['user']['email'];
                            $tel = $_SESSION['user']['tel'];
                        } else {
                            $name = "";
                            $address = "";
                            $email = "";
                            $tel = "";
                        }
                        ?>
                        <table class="table">
                            <tr>
                                <td>NGƯỜI ĐẶT HÀNG</td>
                                <td><input type="text" class="form-control" name="name" value="<?= htmlspecialchars($name) ?>"></td>
                            </tr>
                            <tr>
                                <td>ĐỊA CHỈ</td>
                                <td><input type="text" class="form-control" name="address" value="<?= htmlspecialchars($address) ?>"></td>
                            </tr>
                            <tr>
                                <td>EMAIL</td>
                                <td><input type="email" class="form-control" name="email" value="<?= htmlspecialchars($email) ?>"></td>
                            </tr>
                            <tr>
                                <td>ĐIỆN THOẠI</td>
                                <td><input type="text" class="form-control" name="tel" value="<?= htmlspecialchars($tel) ?>"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Phương Thức Thanh Toán -->
            <div class="row mb-4">
                <div class="col">
                    <h4 class="boxtitle">PHƯƠNG THỨC THANH TOÁN</h4>
                    <div class="boxcontent pttt">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pttt" value="0" checked>
                            <label class="form-check-label">Thanh toán trực tiếp</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pttt" value="1">
                            <label class="form-check-label">Chuyển khoản</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pttt" value="2">
                            <label class="form-check-label">Thanh toán online</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pttt" value="3">
                            <label class="form-check-label">Ví điện tử</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Giỏ Hàng -->
            <div class="row mb-4">
                <div class="col">
                    <h4 class="boxtitle">GIỎ HÀNG</h4>
                    <div class="boxcontent cart">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Giá</th>
                                        <th>Tổng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    viewcart(0);
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Nút Xác Nhận Đặt Hàng -->
            <div class="row mb-4">
                <div class="col text-right">
                    <input type="submit" class="btn" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
                </div>
            </div>
        </form>
    </div>

    <!-- Thư viện JavaScript cần thiết cho Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>