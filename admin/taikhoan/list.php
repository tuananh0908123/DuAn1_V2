<div class="row">
            <div class="row frmtitle">
            <h1 style="margin-top: 5px;">Danh sách khách hàng</h1>
            </div>
            <div class="row frmcontent">
                <div class="row mb10 frmsloai">
                    <table border="1">
                        <tr>
                            <th></th>
                            <th>Mã tài khoản</th>
                            <th>Tên đăng nhập</th>
                            <th>Mật khẩu</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Điện thoại</th>
                            <th>Vai trò</th>
                            <th></th>
                        </tr>
                        <?php 
                            foreach($listTaiKhoan as $taiKhoan){ ?>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><?= $taiKhoan['id']?></td>
                                    <td><?= $taiKhoan['user']?></td>
                                    <td><?= $taiKhoan['pass']?></td>
                                    <td><?= $taiKhoan['email']?></td>
                                    <td><?= $taiKhoan['address']?></td>
                                    <td><?= $taiKhoan['tel']?></td>
                                    <td><?= $taiKhoan['role']?></td>
                                    <td>
                                    
                                        <a href="index.php?act=suatk&id=<?= $taiKhoan['id']?>" onclick="return confirm('Bạn có chắc chắn muốn sửa không?')">
                                            <input type="button" value="Sửa"></a>
                                       
                                        <a href="index.php?act=xoatk&id=<?= $taiKhoan['id']?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">
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