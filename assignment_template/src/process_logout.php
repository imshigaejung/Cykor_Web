<?php
    if(headers_sent($file, $line)){
        die("Headers already sent in $file on line $line");
    }
    session_start();
    unset($_SESSION['user_id']);
    unset($_SESSION['user_name']);
    session_destroy();
    header("Location: board_login.php");
    exit;