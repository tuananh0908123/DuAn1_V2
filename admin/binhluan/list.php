<div class="row">
            <div class="row frmtitle">
            <h1 style="margin-top: 5px;">Danh sách bình luận</h1>
            </div>
            <div class="row frmcontent">
                <div class="row mb10 frmsloai">
                    <table border="1">
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Nội dung</th>
                            <th>ID User</th>
                            <th>ID Pro</th>
                            <th>Ngày bình luận</th>
                            <th></th>
                        </tr>
                        <?php 
                            foreach($listBinhLuan as $binhLuan){ ?>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><?= $binhLuan['id']?></td>
                                    <td><?= $binhLuan['noidung']?></td>
                                    <td><?= $binhLuan['iduser']?></td>
                                    <td><?= $binhLuan['idpro']?></td>
                                    <td><?= $binhLuan['ngaybinhluan']?></td>
                                    <td>
                                    
                                        <a href="index.php?act=suabl&id=<?= $taiKhoan['id']?>" onclick="return confirm('Bạn có chắc chắn muốn sửa không?')">
                                            <input type="button" value="Sửa"></a>
                                       
                                        <a href="index.php?act=xoabl&id=<?= $taiKhoan['id']?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">
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