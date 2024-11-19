<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";

// Kiểm tra nếu người dùng đã đăng nhập
if (!isset($_SESSION['user'])) {
    header("Location: login.php"); // Chuyển hướng đến trang đăng nhập nếu chưa đăng nhập
    exit();
}

$iduser = $_SESSION['user']['id'];
$idpro = isset($_REQUEST['idpro']) ? $_REQUEST['idpro'] : 0; // Kiểm tra xem idpro có được truyền không

// Load danh sách bình luận
$dsbl = loadAll_binhluan($idpro);

// Xử lý khi người dùng gửi bình luận
if (isset($_POST['guibinhluan']) && $_POST['guibinhluan']) {
    $noiDung = trim($_POST['noidung']);
    if (empty($noiDung)) {
        echo "<script>alert('Vui lòng nhập nội dung bình luận.');</script>";
    } else {
        $ngayBinhLuan = date("h:i:s d/m/Y");
        try {
            insert_binhluan($noiDung, $iduser, $idpro, $ngayBinhLuan);
            header("Location: ".$_SERVER['PHP_SELF']."?idpro=".$idpro); // Reload trang sau khi gửi bình luận
            exit();
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bình luận</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="row mb">
        <div class="boxtitle">Bình luận</div>

        <?php if(isset($_SESSION['user'])) { ?>
            <div class="row boxcontent">
                <table>
                    <tr>
                        <th>Nội dung bình luận</th>
                        <th>Người dùng</th>
                        <th>Ngày giờ</th>
                    </tr>
                    <?php
                    foreach($dsbl as $binhLuan) {
                        ?>
                        <tr>
                            <td><?= htmlspecialchars($binhLuan['noidung']) ?></td>
                            <td><?= htmlspecialchars($binhLuan['iduser']) ?></td>
                            <td><?= htmlspecialchars($binhLuan['ngaybinhluan']) ?></td>
                        </tr>
                    <?php } ?>
                </table>

                <div class="boxfooter binhluanform">
                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                        <input type="hidden" name="idpro" value="<?= htmlspecialchars($idpro) ?>">
                        <input type="text" name="noidung" placeholder="Nhập bình luận của bạn" required>
                        <input type="submit" name="guibinhluan" value="Gửi bình luận">
                    </form>
                </div>
            </div>
        <?php } ?>
    </div>
</body>
</html>
