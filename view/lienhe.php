<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ - Techshop</title>
    <script>
        
        const form = document.getElementById('contact-form');
        const nameInput = document.getElementById('name');
        const emailInput = document.getElementById('email');
        const messageInput = document.getElementById('message');
        const nameError = document.getElementById('name-error');
        const emailError = document.getElementById('email-error');
        const messageError = document.getElementById('message-error');

        
        form.addEventListener('submit', function (e) {
         
            e.preventDefault();

            
            nameError.textContent = '';
            emailError.textContent = '';
            messageError.textContent = '';

          
            let isValid = true;

                
            if (nameInput.value.trim() === '') {
                nameError.textContent = 'Họ và Tên là bắt buộc.';
                isValid = false;
            }

            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (emailInput.value.trim() === '') {
                emailError.textContent = 'Email là bắt buộc.';
                isValid = false;
            } else if (!emailPattern.test(emailInput.value.trim())) {
                emailError.textContent = 'Vui lòng nhập email hợp lệ.';
                isValid = false;
            }

            if (messageInput.value.trim() === '') {
                messageError.textContent = 'Tin nhắn là bắt buộc.';
                isValid = false;
            }

            if (isValid) {
                alert('Tin nhắn đã được gửi thành công!');
                form.reset();  
            }
        });
    </script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #2E3B4E;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        main {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 2em;
            color: #2E3B4E;
            text-align: center;
            margin-bottom: 20px;
        }

        .contact-info,
        .contact-form {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
        }

        .contact-info div,
        .contact-form div {
            width: 48%;
        }

        .contact-info h3,
        .contact-form h3 {
            font-size: 1.8em;
            color: #2E3B4E;
            margin-bottom: 10px;
        }

        .contact-info p,
        .contact-form p {
            font-size: 1em;
            margin-bottom: 10px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1em;
        }

        .contact-form button {
            padding: 15px 25px;
            background-color: #2E3B4E;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.1em;
        }

        .contact-form button:hover {
            background-color: #1c2a38;
        }

        .map-container {
            position: relative;
            padding-bottom: 56.25%; 
            height: 0;
            overflow: hidden;
            max-width: 100%;
            margin-top: 30px;
        }

        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        footer {
            background-color: #2E3B4E;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>

<body>

    <header>
        <h1>Liên Hệ Với Chúng Tôi</h1>
    </header>

    <main>
        <h2>Chúng tôi luôn sẵn sàng hỗ trợ bạn!</h2>

        <div class="contact-info">
            <div>
                <h3>Thông Tin Liên Hệ</h3>
                <p><strong>Địa chỉ:</strong> Số 123, Đường Công Nghệ, Quận 1, TP. Hồ Chí Minh</p>
                <p><strong>Email:</strong> <a href="mailto:support@techshop.vn">support@techshop.vn</a></p>
                <p><strong>Số điện thoại:</strong> 0123-456-789</p>
                <p><strong>Giờ làm việc:</strong> Thứ 2 - Thứ 6, 8:00 AM - 6:00 PM</p>
            </div>
            <div>
                <h3>Gửi Tin Nhắn</h3>
                <form class="contact-form" id="contact-form" method="POST" action="#">
                    <div>
                        <label for="name">Họ và Tên:</label>
                        <input type="text" id="name" name="name" required placeholder="Nhập họ và tên của bạn">
                        <div class="error" id="name-error"></div>
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required placeholder="Nhập email của bạn">
                        <div class="error" id="email-error"></div>
                    </div>
                    <div>
                        <label for="message">Tin Nhắn:</label>
                        <textarea id="message" name="message" rows="5" required placeholder="Viết tin nhắn của bạn ở đây"></textarea>
                        <div class="error" id="message-error"></div>
                    </div>
                    <div>
                        <button type="submit">Gửi Tin Nhắn</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.464405341263!2d106.69063567485899!3d10.776897325179533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ee39be741e1%3A0xa5f58e5ebf088126!2zMTIzLCDEkOG6oW5nIFQ!5e0!3m2!1sen!2s!4v1610979828314!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>
        </div>

    </main>

</body>

</html>
