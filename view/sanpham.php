<div class="row mb">
    <center><div style="margin-bottom: auto; width :1472px;" class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle"><strong><?= $tendm; ?></strong></div>
            <div class="row boxcontent">
                <?php
                $i = 0;
                foreach ($dssp as $sanPham) {
                    if ($i == 2 || $i == 5 || $i == 8 || $i == 11) {
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
                                <form method="POST" action="index.php?act=addtocart">
                                    <input type="hidden" value="<?= $sanPham['id'] ?>" name="id">
                                    <input type="hidden" value="<?= $sanPham['name'] ?>" name="name">
                                    <input type="hidden" value="<?= $sanPham['img'] ?>" name="img">
                                    <input type="hidden" value="<?= $sanPham['price'] ?>" name="price">
                                    <center style="margin-left:140px"><input type="number" name="sl" value="1" min="1" style="width: 80px;">
                                    <input type="submit" value="🛒" name="addtocart">
                            </center>
                        </form>
                            </center>
                            
                        </tr>
                    </div>
                <?php } ?>
            </div></center>
        </div>
</div>
