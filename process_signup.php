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

    if(!empty($verify)){
        $_SESSION['error'] = "사용할 수 없는 아이디입니다. 다른 아이디를 입력해 주세요." 
        header("Location: board_signup.php");
        exit;    
    }
    
    $sql = "
        INSERT INTO userinfo(
            username,
            userpw
        ) VALUES(
            '{$_POST['id']}',
            '{$_POST['pw']}'
        )";
    $result = mysqli_query($database,$sql);
    if($result == false){
        echo mysqli_error($database);
    }
?>