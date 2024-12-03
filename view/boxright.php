<?php extract($dsdm); ?>

<div class="row mb-4">
    <div class="formtaikhoan">
    <div class="boxtitle">
        <?php if (isset($_SESSION['user'])) {
            extract($_SESSION['user']); ?>
            Xin chào, <?= $user ?>
        <?php } else { ?>
            <a href="index.php?act=dangnhap">👤 Đăng nhập</a> <!-- Hiển thị đường dẫn đăng nhập -->
        <?php } ?>
    </div>

    <?php if (isset($_SESSION['user'])) { ?>
        <div style="margin-left:20px;">
            <div class="row mb-3">
                <p class="col" style="margin-top:4px">Đã đăng nhập</p>
            </div>
            <div class="row mb-3">
                <ul>
                    <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                    <li><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>
                    <?php if ($role == 1) { ?>
                        <li><a href="admin/index.php">Đăng nhập admin</a></li>
                    <?php } ?>
                    <li><a href="index.php?act=thoat">Đăng xuất</a></li>
                </ul>
            </div>
        </div>
    <?php } ?>
</div>
</div>
<div class="row mb-4">
    <div class="boxtitle">Danh mục</div>
    <div class="boxcontent2 menudoc">
        <ul class="list-unstyled">
            <?php foreach ($dsdm as $dm) { ?>
                <li>
                    <a href="index.php?act=sanpham&iddm=<?= $dm['id'] ?>"><?= $dm['name'] ?></a>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>

<div class="row">
    <div class="boxtitle">Top sản phẩm yêu thích</div>
    <div class="row boxcontent">
        <?php foreach ($dstop10 as $sp) { ?>
            <div class="col-md-3 mb-4 top10">
                <div class="card">
                    <a href="index.php?act=sanphamct&idsp=<?= $sp['id'] ?>">
                        <img src="<?= $sp['img'] ?>" class="card-img-top" alt="<?= $sp['name'] ?>">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="index.php?act=sanphamct&idsp=<?= $sp['id'] ?>"><?= $sp['name'] ?></a>
                        </h5>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
