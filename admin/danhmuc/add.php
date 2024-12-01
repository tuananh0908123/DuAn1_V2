<div class="row">
            <div class="row frmtitle">
                <h1 style="margin-top: 5px;">THÊM MỚI LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb10">
                        Mã loại<br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb10">
                        Tên loại<br>
                        <input type="text" name="tenloai">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="THÊM MỚI" onclick="return confirm('Bạn có chắc chắn muốn thêm mới không?')">
                        <input type="reset" value="NHẬP LẠI" onclick="return confirm('Bạn có chắc chắn muốn nhập lại không?')">
                        <a href="index.php?act=listdm" onclick="return confirm('Bạn có chắc chắn muốn vào trang danh sách mà không thêm mới không?')">
                            <input type="button" value="DANH SÁCH" href="index.php?act=listdm"></a>
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