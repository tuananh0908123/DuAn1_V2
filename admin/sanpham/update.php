<?php 
    if(is_array($sp)){
        extract($sp);
    }

?>
<div class="row">
            <div class="row frmtitle">
                <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row frmcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                <div class="row mb10">
                    <select name="iddm">
                        <option value="0" selected>Tất cả</option>
                            <?php 
                                foreach($listDanhMuc as $danhMuc) {
                                    if($iddm == $danhMuc['id']){ ?>
                                        <option value=<?= $danhMuc['id'] ?> selected><?= $danhMuc['name'] ?></option>
                                <?php } else { ?>
                                        <option value=<?= $danhMuc['id'] ?>><?= $danhMuc['name'] ?></option>
                                <?php } }?>
                    </select>
                </div>
                    <div class="row mb10">
                        Tên sản phẩm<br>
                        <input type="text" name="tensp" value="<?= $name ?>">
                    </div>
                    <div class="row mb10">
                        Giá sản phẩm<br>
                        <input type="text" name="giasp" value="<?= $price ?>">
                    </div>
                    <div class="row mb10">
                        Hình sản phẩm<br>
                        <input type="file" name="hinh">
                        <td>
                            <div style="height: 120px; width : 120px">
                                <img style="max-width: 100%; max-width: 100%" src="<?= BASE_URL . $img ?>">
                            </div>
                        </td>
                    </div>
                    <div class="row mb10">
                        Mô tả sản phẩm<br>
                        <textarea name="mota" cols="30" rows="10"><?= $mota ?></textarea>
                    </div>
                    <div class="row mb10">
                        Lượt xem<br>
                        <input type="text" name="luotxem" value="<?= $luotxem ?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input type="submit" name="capnhat" value="Cập nhật" onclick="return confirm('Bạn có chắc chắn muốn thêm mới không?')">
                        <input type="reset" value="Nhập lại" onclick="return confirm('Bạn có chắc chắn muốn nhập lại không?')">
                        <a href="index.php?act=listsp" onclick="return confirm('Bạn có chắc chắn muốn vào trang danh sách mà không thêm mới không?')">
                            <input type="button" value="Danh sách"></a>
                    </div>
                    <div style="color: green;">
                        <?= $thongBaoThanhCong?>
                    </div>
                    <div style="color: red;">
                        <?= $thongBaoLoi?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>