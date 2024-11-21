<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
$iduser = $_SESSION['user']['id'];
$idpro = $_REQUEST['idpro'];
$dsbl = loadAll_binhluan($idpro);
if (isset($_POST['idpro'])) {
    echo "idpro: " . $_POST['idpro'];
} else {
    echo "idpro không được truyền!";
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
        <div class="row boxcontent">
            <table>
                <?php
                echo "Nội dung bình luận ở đây: ".$idpro;
                echo '$idpro';
                foreach($dsbl as $binhLuan){
                    ?>
                    <tr>
                        <td><?= $binhLuan['noidung'] ?></td>
                        <td><?= $binhLuan['iduser'] ?></td>
                        <td><?= $binhLuan['ngaybinhluan'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        
        <div class="boxfooter binhluanform">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="hidden" name="idpro" value="<?= $idpro ?>">
                <input type="text" name="noidung" placeholder="Nhập bình luận của bạn">
                <input type="submit" name="guibinhluan" value="Gửi bình luận">
            </form>
        </div>
        </div>

        <?php
        if(isset($_POST['guibinhluan']) && !empty($_POST['noidung']) && isset($_SESSION['user'])){
            $noiDung = $_POST['noidung'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['user']['id'];
            $ngayBinhLuan = date("h:i:s d/m/Y");
            try {
                insert_binhluan($noiDung, $iduser, $idpro, $ngayBinhLuan);
                header("Location: ".$_SERVER['HTTP_REFERER']);
            } catch (Exception $e) {
                echo "Lỗi: " . $e->getMessage();
            }
        } else {
            echo 'Bạn cần phải đăng nhập để gửi bình luận';
        }
        ?>
    </div>
</body>
</html>
