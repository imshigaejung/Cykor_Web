<?php
    session_start();
    require_once "db.php";
    $sql = mysqli_prepare($database,"INSERT INTO board(title, body, user_id, created) VALUES(?, ?, ?, NOW())");
    mysqli_stmt_bind_param($sql,"sss",$_POST['title'], $_POST['body'], $_SESSION['user_id']);
    if(!mysqli_stmt_execute($sql)){
        $_SESSION['error'] = mysqli_error($database);
        //이전 페이지로 복귀
        header("Location: ".$_SERVER['HTTP_REFERER']);
        exit;    
    }
    header("Location: board_main.php");
    exit; 
?>