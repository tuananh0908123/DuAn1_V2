<!DOCTYPE HTML>
<html lang="vi">
<head>
    <title>Đăng Nhập</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="view/css/font-awesome.css">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="view/css/stylelogin.css" type="text/css" media="all"/>
</head>
<body>

<div class="center-container">
    <div class="header-w3l">
        <h1>Form đăng nhập</h1>
    </div>

    <div class="main-content-agile">
        <div class="sub-main-w3">	
            <div class="wthree-pro">
                <h2>Đăng nhập</h2>
            </div>
            <div>
                    <form action="index.php?act=dangnhap" method="post">
                        <div class="pom-agile mb-3">
                            <input placeholder="Tên đăng nhập" name="user" class="user" type="text" required>
                            <span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                        <div class="pom-agile mb-3">
                            <input placeholder="Mật khẩu" name="pass" class="pass" type="password" required>
                            <span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                        </div>
                        <div class="sub-w3l mb-3">
                            <h6><a href="index.php?act=quenmk">Quên mật khẩu?</a></h6>
                            <div class="right-w3l">
                                <input width="300px" type="submit" value="Đăng nhập" name="dangnhap">
                            </div>
                        </div>
                    </form>
                    <div class="sub-w3l mb-3">
                        <a style="color: blue;" href="index.php?act=dangki">Đăng kí thành viên</a>
                    </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>