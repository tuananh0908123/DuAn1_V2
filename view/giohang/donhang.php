<div>
    <h2>Sản phẩm trong giỏ hàng của bạn:</h2>
    <?php if (empty($gioHang)): ?>
        <p>Giỏ hàng của bạn đang trống.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($gioHang as $item): ?>
                <li>Sản phẩm ID: <?php echo htmlspecialchars($item['sanpham_id']); ?>, Số lượng: <?php echo htmlspecialchars($item['soluong']); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>