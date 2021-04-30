<?php
    require_once 'config.php';
    if (isset($_SESSION['login'])){
        $_SESSION['login'] = '';
        unset($_SESSION['login']);
        session_destroy();
        header("Location: auth.php");
    }
?>