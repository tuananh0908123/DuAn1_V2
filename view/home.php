<div class="row mb">
    <div style="margin-bottom: auto;" class="boxtrai mr">
        <div class="row">
            <div class="banner mb">
            <div class="slideshow-container">

                <div class="mySlides fade">
                <img src="view/images/slide1.jpg" style="width:100%">
                
                </div>

                <div class="mySlides fade">
                <img src="view/images/slide2.jpg" style="width:100%">
                
                </div>

                <div class="mySlides fade">
                <img src="view/images/slide3.jpg" style="width:100%">
                
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
                foreach($spNew as $sanPham){
                    if($i == 2 || $i == 5 || $i == 8)
                    {
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
                            <a style="text-decoration: none; color :black" href="index.php?act=sanphamct&idsp=<?= $sanPham['id'] ?>"><p class="words"><?= $sanPham['name'] ?></p></a>
                            <center><td style="font-size: 5px;"><?= $sanPham['price'] ?>$</td></center>
                        </tr>
                    </div>
                <?php } ?>
            </div>
    </div>
    <div class="boxphai">
        <?php include "boxright.php"; ?>
    </div>
</div>
