<!DOCTYPE html>

<html>
    <head>
        <h2>writing</h2>
        <meta charset="utf-8">
    </head>
    <body>
        <div>
            <?php
                include "process_read.php";
                echo '<form action="process_edit.php?id='.$_GET['id'].'" method="post">';
                echo '<input type="text" id="title" name="title" placeholder="제목" style="width:450px" value="'.$title.'"><br/><br/>';
                echo '<textarea id="body" name="body" placeholder="본문"style="height:300px; width:500px; font-size:15px; resize:none;">'.$body.'</textarea><br/>';
            ?>
            <input type="submit" value="수정">
            </form>
        </div>
    </body>