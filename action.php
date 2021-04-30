<?php
    include 'config.php';
    if (isset($_POST['submit'])){
        $title = isset($_POST['title'])?$_POST['title']:null;
        $link = isset($_POST['link'])?$_POST['link']:null;
        $mobile = isset($_POST['mobile'])?$_POST['mobile']:null;
        $phone = isset($_POST['phone'])?$_POST['phone']:null;
        $content = isset($_POST['content'])?$_POST['content']:null;
        $address = isset($_POST['address'])?$_POST['address']:null;
        $image = $_FILES['pic1']['name'];
        $image_tmp = $_FILES['pic1']['tmp_name'];

        $image2 = $_FILES['pic2']['name'];
        $image_tmp2 = $_FILES['pic2']['tmp_name'];

        $image3 = $_FILES['pic3']['name'];
        $image_tmp3 = $_FILES['pic3']['tmp_name'];

        $image4 = $_FILES['pic4']['name'];
        $image_tmp4 = $_FILES['pic4']['tmp_name'];

        move_uploaded_file($image_tmp , "images/{$image}");
        move_uploaded_file($image_tmp2 , "images/{$image2}");
        move_uploaded_file($image_tmp3 , "images/{$image3}");
        move_uploaded_file($image_tmp4 , "images/{$image4}");

        $sql_insert = "INSERT INTO `posts`(`post_id`, `post_image`, `post_image2`, `post_image3`, `post_image4`, `post_title`, `post_content`, `post_address`, `post_mobile`, `post_phone`) VALUES (null,'$image','$image2','$image3','$image4','$title','$content','$address','$mobile','$phone')";
        if ($db->query($sql_insert)===TRUE){
            echo 'ok';
            header('location:index.php');
        }else{
            echo 'not ok'.mysqli_error($db);
        }
    }



//delelte_post_action
    if (isset($_GET['delete_post'])){
        $delete = $_GET['delete_post'];
        $sql_delete = "DELETE FROM posts WHERE post_id = '$delete'";
        if ($db->query($sql_delete)===TRUE){
            echo 'ok';
            header('location:index.php');
        }else{
            echo 'not ok' . mysqli_error($db);
        }
    }
//End_delete


//add_user
//    $username = isset($_POST['username'])?$_POST['username']:null;
//    $family = isset($_POST['family'])?$_POST['family']:null;
//    $email = isset($_POST['email'])?$_POST['email']:null;
//    $password = isset($_POST['password'])?$_POST['password']:null;
//    $repeat_password = isset($_POST['repeat_password'])?$_POST['repeat_password']:null;
//    if ($password !== $repeat_password){
//        die('مغایرت در تکرار رمز');
//    }
//    $sql_inser_user = "INSERT INTO `signup`(`user_id`, `username`, `user_family`, `email`, `password`) VALUES (null,'{$username}','{$family}','$email','$password')";
//    if ($db->query($sql_inser_user)===TRUE){
//        echo 'ok';
//        header('location:index.php');
//    }else{
//        echo 'not ok' .mysqli_error($db);
//    }

//end_user

//start_login
//    $user2 = isset($_POST['user2'])?$_POST['user2']:null;
//    $password2 = isset($_POST['password2'])?$_POST['password2']:null;
//    $query_login = mysqli_query($db , "SELECT * FROM signup WHERE username ='$user2' && password = '$password2'");
//    $num = mysqli_num_rows($query_login);
//    if ($num == 1){
//        header('Location: upload.php');
//    }else{
////        header('location:auth.php');
//    }


//End_login
?>