<?php

ob_start();
session_start();

$db = mysqli_connect('localhost','root','','nubdesign');
    mysqli_query($db, "SET NAME utf8"); mysqli_set_charset($db, 'utf8');

if (!$db){
        echo 'not ok' . mysqli_connect_error($db);
    }
?>