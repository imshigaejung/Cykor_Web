<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        session_start();
        require "process_read.php";
        require "functions.php";
        is_login();
        echo "<h2>".$title."</h2>";
        if($user_id == $_SESSION['user_id']){
            $i = 0;
            while($i >10){
                echo "&nbsp";
                $i += 1;
            }
            echo "<h3><a href='board_edit.php?id=".$_GET['id']."' class='button' style='margin-right:10px;'>edit</a><a href='process_delete.php?id=".$_GET['id']."' class='button'>delete</a></h3><br/>";
        }
        echo $body.'<br/><br/>';
        
        ?>
        <a href="board_main.php" class="button">return</a>  
    </body>