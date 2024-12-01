
<div class="row mb">
    <div style="margin-bottom: auto;" class="boxtrai mr">
    <div class="row mb">                          
        <div class="boxtitle">Cập nhật tài khoản</div>
            <div class="row boxcontent formtaikhoan"> 
                <?php
                if(isset($_SESSION['user']) && is_array($_SESSION['user'])){
                    extract($_SESSION['user']);
                }
                ?>
                <form action="index.php?act=edit_taikhoan   " method="post">
                    <div class="row mb10">
                        Email
                    <input type="email" name="email" value="<?= $email ?>">
                    </div>
                    <div class="row mb10">
                        Tên đăng nhập
                    <input type="text" name="user" value="<?= $user ?>">
                    </div>
                    <div class="row mb10">
                        Mật khẩu
                    <input type="password" name="pass" value="<?= $pass ?>">
                    </div>
                    <div class="row mb10">
                        Địa chỉ
                    <input type="text" name="address" value="<?= $address ?>">
                    </div>
                    <div class="row mb10">
                        Số điện thoại
                    <input type="text" name="tel" value="<?= $tel ?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?= $id ?>">
                    <input type="submit" name="capnhat" value="Cập nhật">
                    <input style="margin-right :auto; margin-left : 5px;" type="reset" value="Nhập lại">
                    </div>
                    <div style="color: green;">
                        <?= $thongBaoThanhCong ?>
                    </div>
                    <div style="color: red;">
                        <?= $thongBaoLoi ?>
                    </div>
                </form>
            </div>            
        </div>                            
            </div>
    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>
