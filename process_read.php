<?php
    require_once "db.php";

    $sql = mysqli_prepare($database,"SELECT * FROM board WHERE id = ?");
    mysqli_stmt_bind_param($sql,"s",$_GET['id']);
    if(!mysqli_stmt_execute($sql)){
        $_SESSION['error'] = mysqli_error($database);
        //이전 페이지로 복귀
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit;    
    }
    $result = mysqli_stmt_get_result($sql);
    $row = mysqli_fetch_array($result);
    $title = $row['title'];
    $body = $row['body'];
    $user_id = $row['user_id'];
?>