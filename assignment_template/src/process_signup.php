<?php
    session_start();
    require_once "db.php";
    require_once "functions.php";

    if (empty($_POST['id'])) {
        $_SESSION['error'] = "아이디를 입력해주세요.";
        header("Location: board_login.php");
        exit;
    }

    if (empty($_POST['pw'])) {
        $_SESSION['error'] = "비밀번호를 입력해주세요.";
        header("Location: board_login.php");
        exit;
    }

    $verify = get_userinfo($database);
    if($verify){
        $_SESSION['error'] = "사용할 수 없는 아이디입니다. 다른 아이디를 입력해 주세요."; 
        header("Location: board_signup.php");
        exit;    
    }
    else{
        $sql = mysqli_prepare($database,"INSERT INTO userinfo(username, userpw) VALUES(?, ?)");
        $hashed_pw = password_hash($_POST['pw'],PASSWORD_BCRYPT);
        mysqli_stmt_bind_param($sql,"ss",$_POST['id'],$hashed_pw);
        if(!mysqli_stmt_execute($sql)){
            $_SESSION['error'] = mysqli_error($database);
            //이전 페이지로 복귀
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit;
        }
        header("Location: board_login.php");
        exit;    
    }
?>