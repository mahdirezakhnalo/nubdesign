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
<? include 'header.php';?>
<!--     End-header-->
<? include 'sidebar.php';?>
<!--     End-Sidebar-->
<div class="main_page">
    <div class="container">
        <button class="accordion">عنوان تیکت</button>
        <div class="panel-faq">
            <p>پیام تیکت</p>
        </div>
        <!--        next-->
        <button class="accordion">عنوان تیکت ۲</button>
        <div class="panel-faq">
            <p>پیام تیکت ۲</p>
        </div>
    </div>
</div>

<script type="text/javascript" src="app.js"></script>
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>
<script type="text/javascript" src="app.js"></script>
</body>
</html>