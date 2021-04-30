<?php include 'config.php';?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAQ</title>
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
        <button class="accordion">سوال اول</button>
        <div class="panel-faq">
            <p>سلام</p>
        </div>
<!--        next-->
        <button class="accordion">سوال اول</button>
        <div class="panel-faq">
            <p>سلام Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque consequatur distinctio exercitationem impedit, laboriosam magni pariatur qui quo repudiandae rerum, totam velit voluptates. Cum enim ipsa nostrum possimus voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur doloremque officiis tenetur! Adipisci amet error exercitationem iste laborum maxime, mollitia natus nulla, odio odit perspiciatis quasi qui voluptatum! Distinctio, quisquam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dolores, eligendi exercitationem perferendis provident qui quibusdam repellat tempora tenetur vero. Earum eum eveniet illum iure odit officiis omnis, ratione ullam?</p>
        </div>
        <button class="accordion">سوال اول</button>
        <div class="panel-faq">
            <p>سلام Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque consequatur distinctio exercitationem impedit, laboriosam magni pariatur qui quo repudiandae rerum, totam velit voluptates. Cum enim ipsa nostrum possimus voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur doloremque officiis tenetur! Adipisci amet error exercitationem iste laborum maxime, mollitia natus nulla, odio odit perspiciatis quasi qui voluptatum! Distinctio, quisquam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dolores, eligendi exercitationem perferendis provident qui quibusdam repellat tempora tenetur vero. Earum eum eveniet illum iure odit officiis omnis, ratione ullam?</p>
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
</body>
</html>