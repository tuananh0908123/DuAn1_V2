<div class="row">
            <div class="row frmtitle">
            <h1 style="margin-top: 5px;">THÊM MỚI SẢN PHẨM</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        Danh mục <br>
                        <select name="iddm">
                            <?php 
                                foreach($listDanhMuc as $danhMuc) {?>
                            <option value=<?= $danhMuc['id'] ?>><?= $danhMuc['name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="row mb10">
                        Tên sản phẩm<br>
                        <input type="text" name="tensp">
                    </div>
                    <div class="row mb10">
                        Giá sản phẩm<br>
                        <input type="text" name="giasp">
                    </div>
                    <div class="row mb10">
                        Hình sản phẩm<br>
                        <input type="file" name="hinh">
                    </div>
                    <div class="row mb10">
                        Mô tả sản phẩm<br>
                        <textarea name="mota" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="THÊM MỚI" onclick="return confirm('Bạn có chắc chắn muốn thêm mới không?')">
                        <input type="reset" value="NHẬP LẠI" onclick="return confirm('Bạn có chắc chắn muốn nhập lại không?')">
                        <a href="index.php?act=listsp" onclick="return confirm('Bạn có chắc chắn muốn vào trang danh sách mà không thêm mới không?')">
                            <input type="button" value="DANH SÁCH"></a>
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