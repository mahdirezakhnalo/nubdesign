<?php include 'config.php';?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>account</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="fontawesome/fontawesome-free-5.14.0-web/css/all.css">
</head>
<body>
<? include 'header.php';?>
<!--     End-header-->
<div class="title_page">
    <div class="container">
        <p>آگهی ها <i class="fa fa-angle-left"></i> آگهی من</p>
    </div>
</div>
<div class="main-account">
    <div class="container">
        <p>برای مشاهده و مدیریت آگهی ها ، وارد حساب کاربری شوید.</p>
        <br>
        <a href="auth.php">ورود به حساب کاربری</a>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="my_advertising">
                    <div class="my_text">
                        <h6>عنوان آگهی من</h6>
                        <p>توضیحات</p>
                        <a href="#">مدیریت آگهی</a>
                        <p style="color: red;">منتقضی شده</p>
                    </div>
                    <div class="my_image">
                        <img src="images/Mahdirezakhanlo.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="my_advertising">
                    <div class="my_text">
                        <h6>عنوان آگهی من</h6>
                        <p>توضیحات</p>
                        <a href="#">مدیریت آگهی</a>
                        <p style="color: orange;">در حال بررسی . . .</p>
                    </div>
                    <div class="my_image">
                        <img src="images/Mahdirezakhanlo.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="my_advertising">
                    <div class="my_text">
                        <h6>عنوان آگهی من</h6>
                        <p>توضیحات</p>
                        <a href="#">مدیریت آگهی</a>
                        <p style="color: green;">منتشر شده</p>
                    </div>
                    <div class="my_image">
                        <img src="images/Mohsenkhosravi.png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript" src="app.js"></script>
</body>
</html>