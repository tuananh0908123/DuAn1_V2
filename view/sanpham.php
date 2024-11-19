
<div class="row mb">
    <div style="margin-bottom: auto; width :auto;" class="boxtrai mr">
    <div class="row mb">
        <div class="boxtitle"><strong><?= $tendm ;?></strong></div>
            <div class="row boxcontent">            
            <?php
            $i = 0;
                foreach($dssp as $sanPham){
                    if($i == 2 || $i == 5 || $i == 8 || $i == 11)
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
        <div class="row mb">
        <div class="boxtitle">Bình luận</div>
            <div class="row boxcontent">            
                            
            </div>            
        </div>                            
    </div>

</div>

