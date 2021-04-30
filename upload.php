<?php
require_once 'config.php';
if (!isset($_SESSION['login'])){
    header('Location: auth.php?page=upload.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nub Design</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="fontawesome/fontawesome-free-5.14.0-web/css/all.css">
    <link rel="stylesheet" href="swipper/swiper-bundle.css">
    <link rel="stylesheet" href="swipper/swiper-bundle.min.css">
</head>
<body>
<? include 'header.php';?>
<!--     End-header-->
<?php isset($_SESSION['login']) ? null : header("Location: auth.php"); ?>
<main class="main-single">
    <div class="title-ads">
        <div class="container">
            <p>آپلود آگهی</p>
        </div>
    </div>
    <div class="container" style="margin-top: 10px;">
        <form action="action.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12 col-md-6 for-order2">
                    <div class="Single-text">
                        <input name="title" type="text" placeholder="عنوان آگهی را وارد کنید . . .">
                        <input name="mobile" style="border-top: 0" type="tel" placeholder="شماره تلفن همراه را وارد کنید . . .">
                        <input name="phone" style="border-top: 0" type="tel" placeholder="شماره تلفن ثابت را وارد کنید . . .">
                        <p><i class="fa fa-clock"></i>۶ دقیقه قبل </p>
                        <br>
                        <p><b>توضیحات : </b></p>
                        <textarea name="content" id="" cols="30" rows="10" placeholder="توضیحات . . ."></textarea>
                        <textarea name="address" id="" cols="30" rows="10" placeholder="آدرس را وارد کنید . . ."></textarea>
                        <input type="submit" value="ارسال" name="submit">
                        <br><br>
                    </div>
                </div>
                <div class="col-12 col-md-6 for-order1">
                    <div class="Single-image">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <label for="pic1">
                                        <i class="fa fa-images"></i>
                                    </label>
                                    <input type="file" name="pic1" id="pic1">
                                </div>
                                <div class="swiper-slide">
                                    <label for="pic2">
                                        <i class="fa fa-images"></i>
                                    </label>
                                    <input type="file" name="pic2" id="pic2">
                                </div>
                                <div class="swiper-slide">
                                    <label for="pic3">
                                        <i class="fa fa-images"></i>
                                    </label>
                                    <input type="file" name="pic3" id="pic3">
                                </div>
                                <div class="swiper-slide">
                                    <label for="pic4">
                                        <i class="fa fa-images"></i>
                                    </label>
                                    <input type="file" name="pic4" id="pic4">
                                </div>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>



    <!-- Swiper -->

    <!-- Swiper JS -->
    <script src="swipper/swiper-bundle.js"></script>
    <script src="swipper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script type="text/javascript" src="app.js"></script>
    <script type="text/javascript">
        var swiper = new Swiper('.swiper-container', {
            effect: 'cube',
            grabCursor: true,
            cubeEffect: {
                shadow: true,
                slideShadows: true,
                shadowOffset: 20,
                shadowScale: 0.94,
            },
            pagination: {
                el: '.swiper-pagination',
            },
        });
    </script>
</main>
</body>
</html>