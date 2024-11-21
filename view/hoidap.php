<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Hỏi Đáp</title>
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
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    height: 100vh;
    flex-direction: row; 
}

.container {
    width: 60%;
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    flex: 1; 
}

h1 {
    text-align: center;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 5px;
    color: #555;
}

input, textarea {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

button {
    padding: 10px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #218838;
}

.success-message {
    margin-top: 20px;
    padding: 10px;
    background-color: #28a745;
    color: white;
    text-align: center;
    border-radius: 4px;
}


    </style>
</head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Hỏi Đáp</title>
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
            <label for="name">Tên:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="question">Câu Hỏi:</label>
            <textarea id="question" name="question" required></textarea>

            <button type="submit">Gửi Câu Hỏi</button>
        </form>
        <div id="successMessage" class="success-message" style="display:none;">
            <?= "Cảm ơn bạn, câu hỏi của bạn đã được gửi thành công." ?>
        </div>
    </div>

    
</body>
</html>
