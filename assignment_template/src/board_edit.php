<?php
    ob_start();
    session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>writing</h2>
        <div>
            <?php
                require "functions.php";
                is_login();
                if (isset($_SESSION['error'])) {
                    echo "<p>" . $_SESSION['error'] . "</p>";
                    unset($_SESSION['error']);
                }
                include "process_read.php";
                echo '<form action="process_edit.php?id='.$_GET['id'].'" method="post">';
                echo '<input type="text" id="title" name="title" placeholder="제목" style="width:450px" value="'.$title.'"><br/><br/>';
                echo '<textarea id="body" name="body" placeholder="본문"style="height:300px; width:500px; font-size:15px; resize:none;">'.$body.'</textarea><br/>';
                ob_end_flush();
            ?>
            <input type="submit" value="수정">
            <a href="board_main.php">return</a>
            </form>
        </div>
    </body>