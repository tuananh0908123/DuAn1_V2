<div class="row">

    <div class="row frmtitle mb" >
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    </div class="row frmcontent">
    <form action="index.php?act=listbill" method="post">
        <input type="text" name="kyw" placeholder="Nhập Mã Đơn Hàng">
        <input type="submit" name="listok" value="GO">
    </form>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table >
                <tr>
                    <th>STT</th>
                    <th>Người nhận</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Sản phẩm</th>
                    <th>Ngày mua</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th></th>
                </tr>
                <?php
                $i=0;
                foreach ($listbill as $bill){
                extract($bill);
                    echo '  
                    <tr>
                         <td>'.($i+1).'</td>
                         <td>'.$user.' </td>
                         <td>'.$address.' </td>
                         <td>'.$tel.' </td>
                         <td>'.$email.' </td>
                         <td>'.$name.' </td>
                         <td>'.$order_date.' </td>
                         <td>'.$total_amount.' </td>
                         <td>'.$trangthai.' </td>
                         <td>
                            <form method="post" action="index.php?act=updateStatus">
                                <input type="hidden" name="iddh" value="'.$id.'">
                                <select name="trangthai">
                                    <option value="Đang xử lý"'.($trangthai == "Đang xử lý" ? " selected" : "").'>Đang xử lý</option>
                                    <option value="Đã xử lý"'.($trangthai == "Đã xử lý" ? " selected" : "").'>Đã xử lý</option>
                                    <option value="Hủy"'.($trangthai == "Hủy" ? " selected" : "").'>Hủy</option>
                                    <option value="Đang giao"'.($trangthai == "Đang giao" ? " selected" : "").'>Đang giao</option>
                                    <option value="Đã giao"'.($trangthai == "Đã giao" ? " selected" : "").'>Đã giao</option>
                                </select>
                                <input type="submit" value="Cập nhật">
                            </form>
                        </td>
                    </tr>';
                    $i++;
                }
                ?>
                </table>

        </div>


    </div>
</div>