<!DOCTYPE html>

<html>
    <head>
        <h2>writing</h2>
        <meta charset="utf-8">
    </head>
    <body>
        <div>
            <form action="process_edit.php" method="post">
                <?php
                include "process_read";
                echo '<input type="text" id="title" name="title" placeholder="제목" style="width:450px" value="'.$title.'"><br/><br/>';
                echo '<textarea id="body" name="body" placeholder="본문"style="height:300px; width:500px; font-size:15px;" value="'.$body.'"></textarea><br/>'
                ?>
                <input type="submit" value="확인">
            </form>
        </div>
    </body>