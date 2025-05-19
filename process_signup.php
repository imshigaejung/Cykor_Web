<?php

    if (empty($_POST['id'])) {
        header("Location: board_signup.php?error=아이디를 입력해주세요");
        exit();
    }

    if (empty($_POST['pw'])) {
        header("Location: board_signup.php?error=비밀번호를 입력해주세요");
        exit();
    }

    include "db.php";
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