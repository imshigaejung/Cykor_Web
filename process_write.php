<?php
    include "db.php";

    $result = $database->query("SELECT * FROM topic");
    echo $result;
    if ($database->connect_error) {
    die("DB 연결 실패: " . $database->connect_error);
}

?>