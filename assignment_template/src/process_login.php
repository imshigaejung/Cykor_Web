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

    
    $result = get_userinfo($database);

    if(!$result || mysqli_num_rows($result) === 0){
        //로그인 실패 - ID를 조회하지 못 한 경우
        $_SESSION['error'] = "아이디 또는 비밀번호가 잘못되었습니다.";
        header("Location: board_login.php");
        exit;
    }
    else{
        //로그인 성공
        $row = mysqli_fetch_array($result);
        if($row && password_verify($_POST['pw'], $row['userpw'])){
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['username'];
            header("Location: board_main.php");
            exit;
        }
        //로그인 실패 - 비밀번호를 조회하지 못 한 경우
        else{
            $_SESSION['error'] = "아이디 또는 비밀번호가 잘못되었습니다.";
            header("Location: board_login.php");
            exit;
        }
    }
?>