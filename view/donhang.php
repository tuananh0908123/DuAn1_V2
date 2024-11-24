 <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
     <div class="container">
         <div class="row">
             <div class="col-lg-12 text-center">
                 <div class="breadcrumb__text">
                     <h2>Thanh toán</h2>
                     <div class="breadcrumb__option">
                         <a href="./index.html">Trang chủ</a>
                         <span>Thanh toán</span>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Breadcrumb Section End -->

 <!-- Checkout Section Begin -->
 <section class="checkout spad">
     <div class="container">

         <div class="checkout__form">
             <h4>Đơn hàng</h4>
             <?php
                // $onesp = loadone_sanpham($id);
                // extract($onesp);
                $link = "";
                if (isset($_GET["idsp"])) {
                    $id = $_GET["idsp"];
                    $link = "index.php?act=donhang&idsp=$id";
                }
                ?>
             <form action="<?= $link ?>" method="post">
                 <div class="row">
                     <input type="hidden" value="<?= $id ?>" name="id">
                     <div class="col-lg-8 col-md-6">
                         <div class="checkout__input">
                             <p>Tên người nhận<span>*</span></p>
                             <input type="text" name="ten" required>
                         </div>
                         <div class="checkout__input">
                             <p>Địa chỉ người nhận<span>*</span></p>
                             <input type="text" placeholder="Street Address" class="checkout__input__add" name="diachi" required>
                         </div>
                         <div class="row">
                             <div class="col-lg-6">
                                 <div class="checkout__input">
                                     <p>SĐT<span>*</span></p>
                                     <input type="text" name="sdt" required>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="checkout__input">
                                     <p>Email<span>*</span></p>
                                     <input type="text" name="email" required>
                                 </div>
                             </div>
                         </div>
                         <div class="checkout__input__checkbox">
                             <label for="diff-acc">
                             </label>
                         </div>
                         <div class="checkout__input">
                         </div>
                     </div>

                     <?php
                        $hang = "";
                        // $tong = "";
                        foreach ($onesp as $sp) {
                            // $tt = $sp["price"];
                            // $tong += $tt;
                            $hang = "<ul><li>$name<span>$price</span></li></ul>";
                        }
                        ?>
                     <div class="col-lg-4 col-md-6">
                         <div class="checkout__order">
                             <h4>Đơn hàng của bạn</h4>
                             <div class="checkout__order__products">Sản phẩm<span>Giá</span></div>
                             <?= $hang ?>
                             <div class="checkout__order__subtotal">Tổng tiền<span name="tongdonhang"><?= $price ?></span></div>
                             <input type="submit" class="site-btn" name="thanhtoan" value="Thanh toán"><br>
                             <?php
                                if (isset($thongbao) && ($thongbao != "")) {
                                    echo $thongbao;
                                }
                                ?>
                         </div>
                     </div>

                 </div>
             </form>
         </div>
     </div>
 </section>
 <!-- Checkout Section End -->