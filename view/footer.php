
    <div>
        <footer style="color: #ffffff; padding: 20px 0; text-align: center;">
    <div style="max-width: 1200px; margin: auto; padding: 0 20px;">
        <!-- Thông tin liên hệ -->
        
        <div style="margin-bottom: 20px;">
        
            <h3 style="margin-bottom: 10px; color: #00d4ff;">Tech Shop</h3>
            <p style="color: black;">Email: support@techshop.com</p>
            <p style="color: black;">Hotline: +84 123 456 789</p>
            
        </div>
        <div style="background-color: black;">

        <!-- Liên kết nhanh -->
        
        <div style="margin-bottom: 20px;">
            <ul style="list-style: none; padding: 0; margin: 0;">
                <li style="display: inline; margin: 0 15px;"><a href="index.php" style="color: #00d4ff; text-decoration: none;">Trang chủ</a></li>
                <li style="display: inline; margin: 0 15px;"><a href="#" style="color: #00d4ff; text-decoration: none;">Sản phẩm</a></li>
                <li style="display: inline; margin: 0 15px;"><a href="#" style="color: #00d4ff; text-decoration: none;">Liên hệ</a></li>
                <li style="display: inline; margin: 0 15px;"><a href="#" style="color: #00d4ff; text-decoration: none;">Hỗ trợ</a></li>
            </ul>
        </div>

        <!-- Mạng xã hội -->
        <div style="margin-bottom: 20px;">
            <a href="#" style="margin: 0 10px; color: #00d4ff; text-decoration: none;">Facebook</a>
            <a href="#" style="margin: 0 10px; color: #00d4ff; text-decoration: none;">Twitter</a>
            <a href="#" style="margin: 0 10px; color: #00d4ff; text-decoration: none;">Instagram</a>
        </div>

        <!-- Bản quyền -->
        <div>
            <p style="font-size: 14px; color: #777;">&copy; 2024 Tech Shop. All rights reserved.</p>
        </div>
    </div>
</footer>
</div>
        
    </div>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        }
</script>
</body>
</html>