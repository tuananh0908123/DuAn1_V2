<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án 1 2024</title>
    <link rel="stylesheet" href="view/css/style.css">
    <script>
        function showSearchInput() {
            document.getElementById("searchInput").style.display = "block";
        }

        function hideSearchInput() {
            document.getElementById("searchInput").style.display = "none";
        }
    </script>

</head>

<body>
    <div class="boxcenter">
        <div class="row mb menu">
            <ul>
                <li>
                    <div style="width: 50px; height:50px">
                        <img src="view/images/logo1.jpg">
                    </div>
                </li>
                <li style="margin-left:320px"><a href="index.php">Home</a></li>
                <li><a href="index.php?act=">Shop</a></li>
                <li><a href="index.php?act=gioithieu">About</a></li>
                <li><a href="index.php?act=lienhe">Contact</a></li>
                <li style="margin-left:auto"><a href="index.php?act=hoidap">❓</a></li>
                <li><a href="">🛒</a></li>
                <li style="position: relative;"
                    onmouseover="showSearchInput()"
                    onmouseout="hideSearchInput()">
                    <a href="javascript:void(0);" style="text-decoration: none;">🔍</a>
                    <div id="searchInput" style="display: none; position: absolute;top: 45px; right: 0; background-color: #fff; border: 1px solid #ccc; padding: 5px;">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyw" placeholder="Nhập sản phẩm cần tìm" style="padding: 5px; width: 180px;">
                            <input type="submit" name="timkiem" value="Tìm kiếm" style="margin-top:5px;">
                        </form>
                    </div>
                </li>

            </ul>
        </div>