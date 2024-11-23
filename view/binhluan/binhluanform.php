<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
$iduser = $_SESSION['user']['id'];
$idpro = $_REQUEST['idpro'];
$dsbl = loadAll_binhluan($idpro);
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
        <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Nội dung</th>
                            <th>ID Người dùng</th>
                            <th>Ngày bình luận</th>
                        </tr>
                    </thead>
                <?php
                
                foreach($dsbl as $binhLuan){
                    ?>
                    <tr>
                        <td><?= $binhLuan['noidung'] ?></td>
                        <td><?= $binhLuan['iduser'] ?></td>
                        <td><?= $binhLuan['ngaybinhluan'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        
        <div class="boxfooter1 binhluanform mt-4">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="hidden" name="idpro" value="<?= $idpro ?>">
                <div class="mb-3">
                        <input type="text" name="noidung" class="form-control" placeholder="Nhập bình luận của bạn" required>
                    </div>
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
                echo "<div class='alert alert-danger mt-3'>Lỗi: " . $e->getMessage() . "</div>";
            }
        }
        ?>
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    
    