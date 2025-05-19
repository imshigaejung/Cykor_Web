<!DOCTYPE html>

<html>
    <head>
        <h1>LOGIN</h1>
        <meta charset="utf-8">
    </head>
    <body>    
        <?php
            if(isset($_GET['error'])){
                echo "<p>".$_GET['error']."</p>";
            }  
        
        ?>   
        <form action="process_login.php" method="post">
            <div>
                <label for="id">아이디 </label>
                <input type="text" id="id" name="id"><br/>

                <label for="pw">비밀번호</label>
                <input type="password" id="pw" name="pw"><br/>
            </div>
            <input type="submit" value="로그인">
        </form>
    </body>

