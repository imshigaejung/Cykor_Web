<?php
    session_start();
    if(!isset($_SESSION['user_id'])){
        header("Location: board_login.php");
        exit;
    }
    else{
        header("Location: board_login.php");
        exit;
    }
?>
