<?php


    function get_userinfo($database){
        $sql = mysqli_prepare($database,"SELECT * FROM userinfo WHERE username = ?");
        mysqli_stmt_bind_param($sql,"s",$_POST['id']);

        if(!mysqli_stmt_execute($sql)){
            $_SESSION['error'] = mysqli_error($database);
            //이전 페이지로 복귀
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit;

        }

        $result = mysqli_stmt_get_result($sql);
        return $result;
    }

    function is_login(){
        if(!isset($_SESSION['user_id'])){
        $_SESSION['error'] = "로그인을 먼저 진행해주세요.";
        header("Location: board_login.php");
        exit;
    }
    }

?>

