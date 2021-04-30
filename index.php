<?php include 'config.php';?>
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
</head>
<body>

<!--Start_header-->
<? include 'header.php';?>
<?php //isset($_SESSION['login']) ? null : header("Location: auth.php"); ?>

<!--     End-header-->

<!--Start_sidebar-->
<? include 'sidebar.php';?>
<!--     End-Sidebar-->
     <main>
<!--         Start-Searching-->
       <? include 'searching.php';?>
<!--         End-Searching-->

<!--         Start-Advertising-->
         <? include 'advertisign.php';?>

         <br><br><br>
<!--         End-Advertising-->

<!--        Start_support-->
         <? include 'support.php';?>
<!--        End_support-->
     </main>
     <script type="text/javascript" src="app.js"></script>
</body>
</html>