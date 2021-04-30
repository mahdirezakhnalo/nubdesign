<?
include 'config.php';
if (isset($_GET['page']) && $_GET['page'] == 'upload')
    $redirect = $_GET['page'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>auth</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="fontawesome/fontawesome-free-5.14.0-web/css/all.css">
</head>
<body>
<? include 'header.php'?>
    <!--     End-header-->
    <div class="authentication"style="margin-top: 130px;">
        <div class="auth">
            <img src="images/logon.png" onclick="window.open('index.html')" style="cursor:pointer;" alt="">
        </div>
    </div>
    <div class="all-main-auth">
        <div class="main-auth">
            <div class="both-div">
                <div class="_header title-header">
                    <h5>ثبت نام</h5>
                </div>
                <div class="s-login">
                    <form method="post" action=<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>>
                        <div class="_position">
                            <label for="name">
                                <i class="fa fa-user"></i>
                            </label>
                            <input type="text" id="name" name="username" required placeholder="نام کاربری خود را وارد کنید . . ">
                        </div>
                        <div class="_position">
                            <label for="family">
                                <i class="fa fa-user"></i>
                            </label>
                            <input type="text" id="family" name="family" required placeholder="نام خانوادگی خود را وارد کنید . . .">
                        </div>
                        <div class="_position">
                            <label for="email">
                                <i class="fa fa-envelope-open"></i>
                            </label>
                            <input type="email" id="email" name="email" required placeholder="ایمیل خود را وارد کنید . . .">
                        </div>
                        <div class="_position">
                            <label for="n-pssword">
                                <i class="fa fa-lock"></i>
                            </label>
                            <input type="password" id="n-pssword" name="password" required placeholder="پسورد خود را وارد کنید . . .">
                        </div>
                        <div class="_position">
                            <label for="password">
                                <i class="fa fa-user-lock"></i>
                            </label>
                            <input type="password" id="password" name="repeat_password" required placeholder="تکرار پسورد . . .">
                        </div>
                        <?php
                        if (isset($_POST['register_submit'])){
                            $username = isset($_POST['username'])?$_POST['username']:null;
                            $family = isset($_POST['family'])?$_POST['family']:null;
                            $email = isset($_POST['email'])?$_POST['email']:null;
                            $password = isset($_POST['password'])?$_POST['password']:null;
                            $repeat_password = isset($_POST['repeat_password'])?$_POST['repeat_password']:null;
                            if ($password !== $repeat_password){
                                echo('<b>'.'مغایرت در تکرار رمز'.'</b>');
                            }else {
                                $sql_inser_user = "INSERT INTO `signup`(`user_id`, `username`, `user_family`, `email`, `password`) VALUES (null,'{$username}','{$family}','$email','$password')";
                                if ($db->query($sql_inser_user) === TRUE) {
                                    echo 'ok';
                                    $_SESSION['login'] = true;
                                    if (isset($redirect))
                                         header("Location: ". $redirect);
                                    else
                                         header('Location: index.php');
                                } else {
                                    echo 'not ok' . mysqli_error($db);
                                }
                            }
                        }
                        ?>
                        <input type="submit" name="register_submit" value="ارسال">
                    </form>

                </div>
            </div>

        </div>
        <div class="main-auth">

            <div class="both-div">
                <div class="_header title-header">
                    <h5>ورود</h5>
                </div>
                <div class="s-login">
                    <form method="post" action=<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>>
                        <div class="_position">
                            <label for="name2">
                                <i class="fa fa-user"></i>
                            </label>
                            <input type="text" id="name2" name="login_username" required placeholder="نام کاربری خود را وارد کنید . . ">
                        </div>
                        <div class="_position">
                            <label for="n-pssword2">
                                <i class="fa fa-lock"></i>
                            </label>
                            <input type="password" id="n-pssword2" name="login_password" required placeholder="پسورد خود را وارد کنید . . .">
                        </div>
                        <?php
                        if(isset($_POST['login_submit'])){
                            if(isset($_POST['login_username']) && !empty($_POST['login_username']) && isset($_POST['login_password']) && !empty($_POST['login_password'])){
                                $query_login = mysqli_query($db , "SELECT * FROM signup WHERE username ='{$_POST['login_username']}' AND password = '{$_POST['login_password']}' ");
                                $num = mysqli_num_rows($query_login);
                                $_SESSION['login'] = true;
                                if ($num == 1) header('Location: index.php');
                                else echo "نام کاربری یا کلمه عبور اشتباه است!";
                            }else echo "برخی از فیلد ها خالی است!";
                        }

                        ?>
                        <input type="submit" name="login_submit" value="ارسال">
                    </form>
                </div>
            </div>

        </div>
    </div>
    <script type="text/javascript" src="app.js"></script>
</body>
</html>