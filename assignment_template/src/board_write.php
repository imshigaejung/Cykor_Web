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
        <?php
            require "functions.php";
            is_login();
            if (isset($_SESSION['error'])) {
                echo "<p>" . $_SESSION['error'] . "</p>";
                unset($_SESSION['error']);
            }
            ob_end_flush();
        ?>
        <div>
            <form action="process_write.php" method="post">
                <input type="text" id="title" name="title" placeholder="제목" style="width:450px"><br/><br/>

                <textarea id="body" name="body" placeholder="본문"style="height:300px; width:500px; font-size:15px; resize:none;"></textarea><br/>
                
                <input type="submit" value="확인">
                <a href="board_main.php">return</a>
            </form>
        </div>
    </body>
