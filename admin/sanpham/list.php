<div class="row">
            <div class="row frmtitle mb10">
            <h1 style="margin-top: 5px;">DANH SÁCH SẢN PHẨM</h1>
            </div>
            <div class="row option iddm">
            <form action="index.php?act=listsp" method="post">
                        <input type="text" name="kyw">
                        <select name="iddm">
                            <option value="0" selected>Tất cả</option>
                            <?php 
                                foreach($listDanhMuc as $danhMuc) {?>
                            <option value=<?= $danhMuc['id'] ?>><?= $danhMuc['name'] ?></option>
                            <?php } ?>
                        </select>
                        <input style="margin-right: 300px;" type="submit" name="listsp" value="Go">
            </form>
            </div>
            <div class="row frmcontent">
                    <div class="row mb10 frmsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình</th>
                            <th>Giá sản phẩm</th>
                            <th>Lượt xem</th>
                            <th></th>
                        </tr>
                        <?php 
                            foreach($listSanPham as $sanPham){ ?>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><?= $sanPham['id']?></td>
                                    <td><?= $sanPham['name']?></td>
                                    <td>
                                        <div style="height: 120px; width : 120px">
                                        <img style="max-width: 100%; max-width: 100%" src="<?= BASE_URL . $sanPham['img'] ?>">
                                        </div>
                                    </td>
                                    <td><?= $sanPham['price']?>$</td>
                                    <td><?= $sanPham['luotxem']?></td>
                                    <td>
                                    
                                        <a href="index.php?act=suasp&id=<?= $sanPham['id']?>" onclick="return confirm('Bạn có chắc chắn muốn sửa không?')">
                                            <input type="button" value="Sửa"></a>
                                       
                                        <a href="index.php?act=xoasp&id=<?= $sanPham['id']?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">
                                            <input type="button" value="Xóa"></a>
                                    </td>
                        </tr>
                            <?php } ?>
                        
                    </table>
                    <div class="row mb10">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn">
                        <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                    </div>
                </div>
            </div>
        </div>