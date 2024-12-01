<div class="row">
            <div class="row frmtitle">
            <h1 style="margin-top: 5px;">DANH SÁCH LOẠI HÀNG</h1>
            </div>
            <div class="row frmcontent">
                <div class="row mb10 frmsloai">
                    <table border="1">
                        <tr>
                            <th></th>
                            <th>MÃ LOẠI</th>
                            <th>TÊN LOẠI</th>
                            <th></th>
                        </tr>
                        <?php 
                            foreach($listDanhMuc as $danhMuc){ ?>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><?= $danhMuc['id']?></td>
                                    <td><?= $danhMuc['name']?></td>
                                    <td>
                                    
                                        <a href="index.php?act=suadm&id=<?= $danhMuc['id']?>" onclick="return confirm('Bạn có chắc chắn muốn sửa không?')">
                                            <input type="button" value="Sửa"></a>
                                       
                                        <a href="index.php?act=xoadm&id=<?= $danhMuc['id']?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">
                                            <input type="button" value="Xóa"></a>
                                    </td>
                        </tr>
                            <?php } ?>
                        
                    </table>
                    <div class="row mb10">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn">
                        <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
                    </div>
                </div>
            </div>
        </div>