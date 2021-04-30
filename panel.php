<?php include 'config.php';?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>panel</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="fontawesome/fontawesome-free-5.14.0-web/css/all.css">
</head>
<body>
<div class="title">
    <h3>𝓷𝓾𝓫𝓭𝓮𝓼𝓲𝓰𝓷</h3>
</div>
<div class="_header_p">
    <div class="container">
        <div class="row">
            <div class="header-panel">
                <div class="logo-panel">
                    <button type="button">
                        <i class="fa fa-bars"></i>
                    </button>
                    <img src="images/logon.png" onclick="window.open('index.php')" alt="">
                </div>
                <div class="search-panel">
                    <form action="">
                        <input type="text" placeholder="جستجو . . .">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="profile-panel">
                    <label for="profile">
                        <i class="fa fa-user"></i>
                    </label>
                    <input type="file" id="profile" style="display: none">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="Searching Search-panel">
    <div class="top_box" style="padding-bottom: 10px;">
        <form action="" class="Search-box">
            <input type="text" placeholder="جستجو در همه آگهی ها">
            <button type="submit">
                <i class="fa fa-search" style="margin-top: 5px;"></i>
            </button>
        </form>
    </div>
</div>
<div class="Sidebar-panel">
    <div class="header-panel-title">
        <h5>𝓷𝓾𝓫𝓭𝓮𝓼𝓲𝓰𝓷</h5>
    </div>
    <div class="dashboards">
        <nav>
            <ul>
                <li class="d-flex justify-content-between">
                    <a href="#">داشبورد</a>
                    <button type="button" class="times">
                        <i class="fa fa-times"></i>
                    </button>
                </li>
                <li><a href="#">فروشگاه</a>
                    <div>
                        <a href="#">محصولات</a>
                        <a href="#">اضافه کردن محصول</a>
                        <a href="#">کد تخفیف</a>
                        <a href="#">سفارشات</a>
                    </div>
                </li>
                <li><a href="panel.php?advertising">آگهی ها</a></li>
                <li><a href="panel.php?admin_user">کاربران ادمین</a></li>
                <li><a href="panel.php?customer_user">کاربران مشتری</a></li>
                <li><a href="panel.php?signup_admin_panel">افزودن ادمین</a></li>
                <li><a href="panel.php?FAQ_panel">سوالات</a>
                <li><a href="panel.php?add_faq_panel">افزودن سوال</a>
                <li><a href="#">خروج</a></li>
                <br><br><br><br><br><br>
            </ul>
        </nav>
    </div>
</div>
<div class="title-dashboard">
    <div class="container">
        <p>خوش آمدید آقا / خانم مهدی رضاخانلو </p>
    </div>
</div>

<div class="main-dashboards">

    <!--    Amar-->
    <div class="container">
        <div class="all-Statistics">
            <div class="Statistics">
                <p>کل فاکتورها</p>
                <p>۹۵۰۱</p>
            </div>
            <div class="Statistics">
                <p>کل بازدید ها</p>
                <p>۹۵۰۱</p>
            </div>
            <div class="Statistics">
                <p>کل فروش ها</p>
                <p>۹۵۰۱</p>
            </div>
            <div class="Statistics">
                <p>کل سفارشات</p>
                <p>۹۵۰۱</p>
            </div>
        </div>
    </div>
    <!-- END   Amar-->
    <div class="container">
        <div class="all-advertising-panel">
            <?
            if (isset($_GET['advertising'])){
                include 'advertising_panel.php';
            }
            ?>
            <br>
            <?
            if (isset($_GET['admin_user'])){
                include 'admin_user.php';
            }
            ?>
            <br>
            <?
            if (isset($_GET['customer_user'])){
                include 'customer_user.php';
            }
            if (isset($_GET['signup_admin_panel'])){
                include 'signup_admin_panel.php';
            }
            ?>
            <br>
            <?
            if (isset($_GET['FAQ_panel'])){
                include 'FAQ_panel.php';
            }
            if (isset($_GET['add_faq_panel'])){
                include 'add_faq_panel.php';
            }
            ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('.logo-panel button').click(function (){
        $('.main-dashboards').css('width','80%');
        $('.title-dashboard').css('width','80%');
        $('.Sidebar-panel').css('right','0');
        $(this).css('display','none');
    })
    $('.times').click(function (){
        $('.Sidebar-panel').css('right','-100%');
        $('.main-dashboards').css('width','100%');
        $('.title-dashboard').css('width','100%');
        $('.logo-panel button').css('display','inline-block')
    })
</script>
<script type="text/javascript" src="app.js"></script>

</body>
</html>