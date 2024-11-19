<?php 
    if(is_array($dm)){
        extract($dm);
    }

?>
<div class="row">
            <div class="row frmtitle">
                <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row mb10">
                        Mã loại<br>
                        <input type="text" name="maloai" value="<?php if(isset($id) && ($id > 0)) { echo $id;} ?>" disabled>
                    </div>
                    <div class="row mb10">
                        Tên loại<br>
                        <input type="text" name="tenloai" value="<?php if(isset($name) && ($name != "")) { echo $name;} ?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?php if(isset($id) && ($id > 0)) { echo $id;} ?>">
                        <input type="submit" name="capnhat" value="Cập nhật" onclick="return confirm('Bạn có chắc chắn muốn cập nhật không?')">
                        <input type="reset" value="Nhập lại" onclick="return confirm('Bạn có chắc chắn muốn nhập lại không?')">
                        <a href="index.php?act=listdm" onclick="return confirm('Bạn có chắc chắn muốn vào trang danh sách mà không cập nhật không?')"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <div style="color: green;">
                        <?php
                        if(isset($thongBao) && ($thongBao != "")){
                            echo $thongBao;
                        }
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>