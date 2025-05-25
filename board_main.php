<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>board</h2>
        <div>
            <?php
            session_start();
            require "functions.php";
            is_login();
            echo "welcome, ".$_SESSION['user_name']."<br/>";
            ?>
            <a href="board_write.php" class="button">write</a>
            <ul>
                <?php
                    require_once "db.php";
                    $sql = mysqli_prepare($database,"SELECT * FROM board");
                    if(!mysqli_stmt_execute($sql)){
                        $_SESSION['error'] = mysqli_error($database);
                        //이전 페이지로 복귀
                        header("Location: " . $_SERVER['HTTP_REFERER']);
                        exit;
                    }
                    $result = mysqli_stmt_get_result($sql);
                    while($row = mysqli_fetch_array($result)){
                        echo "<li><a href='board_read.php?id=".$row['id']."'>".$row['title']."</a></li>";
                    }
                ?>
            </ul>
            <a href='process_logout.php' class="button">logout</a>
        </div>
    </body>