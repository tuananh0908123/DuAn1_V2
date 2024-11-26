<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Hỏi Đáp</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var question = document.getElementById("question").value;

            if (name == "" || email == "" || question == "") {
                alert("Tất cả các trường phải được điền đầy đủ.");
                return false;
            }

            document.getElementById("successMessage").style.display = "block";
            return false;
        }
    </script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .success-message {
            display: none;
        }

        .form-control {
            height: calc(2.5em + 0.75rem + 2px);
        }

        .div input {
            width: 220px;
        }
    </style>
</head>
<link rel="stylesheet" href="styles.css">
<script>
    function validateForm() {
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var question = document.getElementById("question").value;

        if (name == "" || email == "" || question == "") {
            alert("Tất cả các trường phải được điền đầy đủ.");
            return false;
        }

        document.getElementById("successMessage").style.display = "block";
        return false;
    }
</script>
</head>

<body>
    <div class="container">
        <h1>Form Hỏi Đáp</h1>
        <form id="questionForm" action="index.php?act=hoidap" method="POST" onsubmit="return validateForm()">
            <div class="mb-3">
                <label for="name" class="form-label d-block">Tên của bạn:</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Nhập tên của bạn" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label d-block">Email:</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Nhập email của bạn" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label d-block">Số điện thoại:</label>
                <input type="tel" id="phone" name="phone" class="form-control" placeholder="Nhập số điện thoại của bạn" required>
            </div>

            <div class="mb-3">
                <label for="topic" class="form-label d-block">Chủ đề:</label>
                <select id="topic" name="topic" class="form-select" required>
                    <option value="" selected>Chọn chủ đề</option>
                    <option value="general">Câu hỏi chung</option>
                    <option value="technical">Hỗ trợ kỹ thuật</option>
                    <option value="feedback">Phản hồi</option>
                    <option value="others">Khác</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="question" class="form-label d-block">Câu hỏi chi tiết:</label>
                <textarea id="question" name="question" class="form-control" placeholder="Nhập câu hỏi của bạn..." rows="5" required></textarea>
            </div>

            <div class="mb-3">
                <label for="priority" class="form-label d-block">Mức độ ưu tiên:</label>
                <select id="priority" name="priority" class="form-select">
                    <option value="low">Thấp</option>
                    <option value="medium">Trung bình</option>
                    <option value="high">Cao</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="attachment" class="form-label d-block">Tải tệp đính kèm (nếu có):</label>
                <input type="file" id="attachment" name="attachment" class="form-control" accept=".jpg,.jpeg,.png,.pdf,.doc,.docx">
            </div>

            <button type="submit" class="btn btn-success w-100">Gửi Câu Hỏi</button>
        </form>

        <div id="successMessage" class="success-message" style="display:none; color:green">
            <?= "Cảm ơn bạn, câu hỏi của bạn đã được gửi thành công." ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>