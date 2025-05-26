<?php
    session_start();
    require_once "db.php";
    if(empty($_POST['title'])){
        $_SESSION['error'] = "제목을 입력해주세요";
        header("Location: board_edit.php?id=".$_GET['id']);
        exit;
    }
    $sql = mysqli_prepare($database,"UPDATE board SET title = ?, body = ? WHERE id = ?");
    mysqli_stmt_bind_param($sql,"ssi",$_POST['title'],$_POST['body'], $_GET['id']);
    if(!mysqli_stmt_execute($sql)){
        $_SESSION['error'] = mysqli_error($database);
        //이전 페이지로 복귀
        header("Location: ".$_SERVER['HTTP_REFERER']);
        exit;    
    }
    header("Location: board_main.php");
    exit; 
?>