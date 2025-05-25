 <?php
    echo "test1";
    session_start();
    unset($_SESSION['user_id']);
    unset($_SESSION['user_name']);
    session_destroy();
    header("Location: board_login.php");
    exit;
?>                               