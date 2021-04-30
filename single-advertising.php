<?php include 'config.php';?>
<?php
    $id = $_GET['id'];
    $new_query = mysqli_query($db, "SELECT * FROM posts WHERE post_id = '$id'");
    $new_row = mysqli_fetch_assoc($new_query);
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

<main class="main-single">
    <div class="title-ads">
        <div class="container">
            <p><b>همه آگهی ها <i class="fa fa-angle-left"></i> املاک <i class="fa fa-angle-left"></i> ساختمان ۱۵۰ متری دوبلکس</b></p>
        </div>
    </div>
    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-12 col-md-6 for-order2">
                <div class="Single-text">
                    <h4><? echo $new_row['post_title']?></h4>
                    <p><i class="fa fa-clock"></i>۶ دقیقه قبل </p>
                    <br>
                    <p><b>توضیحات : </b></p>
                    <p><? echo $new_row['post_content']?></p>
                </div>
            </div>
            <div class="col-12 col-md-6 for-order1">
                <div class="Single-image">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="images/<? echo $new_row['post_image']?>" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="images/<? echo $new_row['post_image2']?>" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="images/<? echo $new_row['post_image3']?>" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="images/<? echo $new_row['post_image4']?>" alt="">
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </div>
        </div>
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