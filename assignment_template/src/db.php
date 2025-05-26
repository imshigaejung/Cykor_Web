<?php
    $database = mysqli_connect("db","exampleuser","examplepass","exampledb");
    if (!$database) {
    die("DB 연결 실패: " . mysqli_connect_error());
    }
?>