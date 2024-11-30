<div class="row mb">
    <div style="margin-bottom: auto;" class="boxtrai mr">
        <div class="row">
            <div class="banner mb">
                <div class="slideshow-container">

                    <div class="mySlides fade">
                        <div style="color: black;" class="numbertext">1 / 3</div>
                        <img src="view/images/desk_header_beeb2af002.png" style="width:100%">

                    </div>

                    <div class="mySlides fade">
                        <div style="color: black;" class="numbertext">2 / 3</div>
                        <img src="view/images/T1_1240x285_08390f84a0.png" style="width:100%">

                    </div>

                    <div class="mySlides fade">
                        <div style="color: black;" class="numbertext">3 / 3</div>
                        <img src="view/images/desk_header_21e7913e62.png" style="width:100%">

                    </div>

                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>

                </div>
                <br>

                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $i = 0;
            foreach ($spNew as $sanPham) {
                if ($i == 2 || $i == 5 || $i == 8) {
                    $mr = "mr";
                } else {
                    $mr = "";
                }
            ?>

                <div class="boxsp<?= $mr ?>">
                    <tr>
                        <div class="row img">
                            <a href="index.php?act=sanphamct&idsp=<?= $sanPham['id'] ?>"><img style="max-width: 100%; max-width: 100%" src="<?= BASE_URL . $sanPham['img'] ?>" alt=""></a>
                        </div>
                        <a style="text-decoration: none; color :black" href="index.php?act=sanphamct&idsp=<?= $sanPham['id'] ?>">
                            <p class="words"><?= $sanPham['name'] ?></p>
                        </a>
                        <center>
                            <td style="font-size: 5px;"><?= $sanPham['price'] ?>$</td>
                        </center>
                        <?php
                        if (isset($_POST['name']) && isset($_POST['price'])) {
                            $name = $_POST['name'];
                            $price = $_POST['price'];
                        } else {
                            $name = '';
                            $price = 0;
                        }
                        ?>
                        <form method="POST" action="index.php?act=addtocart">
                            <input type="hidden" value="<?= $sanPham['id'] ?>" name="id">
                            <input type="hidden" value="<?= $sanPham['name'] ?>" name="name">
                            <input type="hidden" value="<?= $sanPham['img'] ?>" name="img">
                            <input type="hidden" value="<?= $sanPham['price'] ?>" name="price">
                            <center style="margin-left:140px"><input type="number" name="sl" value="1" min="1" style="width: 50px;">
                                <input type="submit" value="🛒" name="addtocart">
                            </center>
                        </form>

                    </tr>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="boxphai">
        <?php include "boxright.php"; ?>
    </div>
</div>