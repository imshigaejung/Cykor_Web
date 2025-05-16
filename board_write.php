<!DOCTYPE html>

<html>
    <head>
        <h2>writing</h2>
        <meta charset="utf-8">
    </head>
    <body>
        <div>
            <form action="board_read.php" method="post">
                <label for="title">제목 </label> 
                <input type="text" id="title" name="title" width="500"><br/>

                <label for="body">본문</label><br/>
                <textarea id="body" name="body" style="height:300px; width:500px; font-size:20px;"></textarea><br/>
                
                <input type="submit" value="확인">
            </form>
            <?php
            ?>
        </div>
