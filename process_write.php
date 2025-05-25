<?php
    session_start();
    require_once "db.php";
    if(empty($_POST['title'])){
        //로그인 실패 - ID를 조회하지 못 한 경우
        $_SESSION['error'] = "제목을 입력해주세요";
        header("Location: board_write.php");
        exit;
    }
    $sql = mysqli_prepare($database,"INSERT INTO board(title, body, user_id, created) VALUES(?, ?, ?, NOW())");
    mysqli_stmt_bind_param($sql,"ssi",$_POST['title'], $_POST['body'], $_SESSION['user_id']);
    if(!mysqli_stmt_execute($sql)){
        $_SESSION['error'] = mysqli_error($database);
        //이전 페이지로 복귀
        header("Location: ".$_SERVER['HTTP_REFERER']);
        exit;    
    }
    header("Location: board_main.php");
    exit; 
?>