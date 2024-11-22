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
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>
<div>
    <footer style="padding: 20px 0; text-align: center">




        <div style="margin-bottom: 20px;">


        </div>

        <div style="margin-bottom: 20px;">
        </div>


        <div>
            <p style="font-size: 20px; color: #777; text-align:center">2024 Tech Shop. All rights reserved.</p>
        </div>
</div>
</footer>
</div>

</div>
</body>

</html>
<link rel="icon" href="view/assets/img/icotittle.png" type="image/gif" sizes="16x16">
<link rel="stylesheet" href="view/assets/css/main.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="view/assets/js/script.js"></script>
<script src="view/assets/js/carousel.js"></script>
<link rel="stylesheet" href="view/assets/font/fontawesome-free-5.15.3-web/css/all.min.css">
<link href="http://fonts.cdnfonts.com/css/davida-bold" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<footer class="footer">
    <div class="footer-content">
        <div class="footer-content-inner">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-4 m-4 c-12">
                        <div class="footer__info" >
                            <div class="footer__info-brand">
                                <img src="view/images/logo1.png" alt="" class="footer__info-brand-logo">
                            </div>
                            <div class="footer__info-brand-desc">
                                CÔNG TY CỔ PHẦN ĐẦU TƯ THƯƠNG MẠI VÀ DỊCH VỤ TECHSHOP VIỆT NAM
                            </div>
                        </div>
                        <div class="footer_info-desc">
                            <p>TRỤ SỞ CHÍNH
                                <br>Tầng 2, Tòa nhà Tech Plaza,
                                <br>123 Nguyễn Văn Cừ, Quận 1, TP.HCM
                                <br>CHI NHÁNH
                                <br>45 Lê Duẩn, Phường Bến Nghé,
                                <br>Quận 1, TP.HCM
                                <br>LIÊN HỆ
                                <br>090 1234 567 hoặc 090 1234 568
                            </p>
                        </div>
                    </div>
                    <div class="col l-4 m-4 c-12">
                        <div class="row">
                            <div class="col l-6 m-6 c-6">

                            </div>
                            <div class="col l-6 m-6 c-6">
                                <div class="footer__info">
                                    <div class="footer__info-brand-desc">
                                        HỆ THỐNG CỬA HÀNG TECHSHOP
                                    </div>
                                </div>
                                <div class="footer_info-desc">
                                    <p>GIỜ MỞ CỬA
                                        <br>9:00 - 21:00
                                        <br>HOTLINE
                                        <br>1900 36 6650
                                        <br>hoặc
                                        <br>024 3902 8999
                                        <br>EMAIL
                                        <br>contact@techshop.com
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l-4 m-4 c-12">
                        <div class="footer__info">
                            <div class="footer__info-brand-desc">
                                FANPAGE FACEBOOK
                            </div>

                        </div>
                        <div class="footer_info-desc">
                            <p>
                                https://www.facebook.com/techshop/
                            </p>
                            <p class="footer_info-login-count">
                                Bạn đã truy cập: <span class="footer_info-number-count"></span> lần
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_info-desc" style="font-size: 40px; text-align: center;">
    <span>iOS</span>
    <img src="view/assets/img/appstore.png" alt="App Store" style="width: 150px; vertical-align: middle; margin: 0 5px;">
    <span>ANDROID</span>
    <img src="view/assets/img/chplay.png" alt="Google Play" style="width: 150px; vertical-align: middle; margin: 0 5px;">
</div>
</footer>
</div>
<div class="scrollTop">
    <i class="fas fa-chevron-up"></i>
</div>