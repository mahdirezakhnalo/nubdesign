<?php include 'config.php';?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ticket</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="fontawesome/fontawesome-free-5.14.0-web/css/all.css">
</head>
<body>
<a href="upload.php" class="advert-link">ثبت آگهی رایگان</a>
<? include 'header.php';?>
<!--     End-header-->
<? include 'sidebar.php';?>
<!--     End-Sidebar-->
<div class="main_page">
    <div class="container">
        <div class="ticket">
            <form action="">
                <input type="text" placeholder="نام . . .">
                <input type="tel" placeholder="شماره همراه . . .">
                <input type="email" placeholder="ایمیل خود را وارد کنید . . .">
                <input type="text" placeholder="عنوان تیکت . . .">
                <textarea name="" id="" placeholder="پیام . . ." style="border-bottom: 1px solid #eeeeee"></textarea>
                <input type="submit" value="ارسال تیکت">
            </form>
        </div>
    </div>
    <br><br><br>
</div>
<script type="text/javascript" src="app.js"></script>
</body>
</html>