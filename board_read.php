<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        session_start();
        include "process_read.php";
        echo "<h2>".$title."</h2>";
        echo $body.'<br/>';
        if($user_id == $_SESSION['user_id']){
            echo "<a href='process_edit.php' class='button'>write</a><br/>";  
        }
        ?>
        <a href="board_main.php" class="button">return</a>  
    </body>