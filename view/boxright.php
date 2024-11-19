<?php extract($dsdm); ?>
<div class="row mb">
            <div class="boxtitle">Tài khoản</div>
            <div class="boxcontent formtaikhoan">
                <?php 
                    if(isset($_SESSION['user'])){
                        extract($_SESSION['user']);
                        ?>
                    <div class="row mb10">
                        Xin chào <br>
                        <?= $user ?>
                    </div>
                    <div class="row mb10">
                        <li>
                            <a href="index.php?act=quenmk">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                        </li>
                        <?php 
                        if($role == 1){
                        ?>
                        <li>
                            <a href="admin/index.php">Đăng nhập admin</a>
                        </li>
                        <?php } ?>
                        <li>
                            <a href="index.php?act=thoat">Đăng xuất</a>
                        </li>
                    </div>
                <?php 
                    }else {
                ?>
                <form action="index.php?act=dangnhap" method="post">
                    <div class="row mb10">
                        Tên đăng nhập <br>
                        <input type="text" name="user">
                    </div>
                    <div class="row mb10">
                        Mật khẩu <br>
                        <input type="password" name="pass">
                    </div>
                    <div class="row mb10">
                        <input type="submit" value="Đăng nhập" name="dangnhap">
                    </div>
                </form>
                <li>
                    <a href="#">Quên mật khẩu</a>
                </li>
                <li>
                    <a href="index.php?act=dangki">Đăng kí thành viên</a>
                </li>
                <?php } ?>
            </div>
        </div>
        <div class="row mb">
            <div class="boxtitle">Danh mục</div>
            <div class="boxcontent2 menudoc">
                <ul>
                <?php foreach($dsdm as $dm){
                    ?>
                        <li>
                            <a href="index.php?act=sanpham&iddm=<?= $dm['id'] ?>"><?= $dm['name']?></a>
                        </li>
                <?php } ?>
                </ul>
            </div>
            <div class="boxfooter searchbox">
                <form action="index.php?act=sanpham" method="post">
                    <input type="text" name="kyw">
                    <input type="submit" name="timkiem" value="Tìm kiếm">
                </form>
            </div>
        </div>
        <div class="row">
            <div class="boxtitle">Top sản phẩm yêu thích</div>
<div class="row boxcontent">
                <?php 
                    foreach($dstop10 as $sp){ 
                        ?>
                        <div class="row mb top10">
                        <a href="index.php?act=sanphamct&idsp=<?= $sp['id'] ?>"><img src="<?= $sp['img'] ?>" alt=""></a>
                        <a href="index.php?act=sanphamct&idsp=<?= $sp['id'] ?>"><?= $sp['name'] ?></a>
                </div>
                <?php }
                ?>
            </div>
        </div>