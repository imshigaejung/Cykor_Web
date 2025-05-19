<?php
    $database = new mysqli("localhost","imshigaejung","ImShi@12gj34","tutorials");
    if ($database->connect_error) {
    die("DB 연결 실패: " . $database->connect_error);
}
?>