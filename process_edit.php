<?php
    session_start();
    require_once "db.php";
    $sql = mysqli_prepare($database,"UPDATE board SET title = ?, description = ? WHERE id = ?");
        mysqli_stmt_bind_param($sql,"ss",$_POST['id']);
?>