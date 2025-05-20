<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>   
        <h1>LOGIN</h1> 
        <?php
            session_start();

            if (isset($_SESSION['error'])) {
                echo "<p>" . $_SESSION['error'] . "</p>";
                unset($_SESSION['error']);
            }
        ?>
        <form action="process_login.php" method="post">
            <div>
                <label for="id">아이디&nbsp;&nbsp;&nbsp;</label>
                <input type="text" id="id" name="id"><br/>
              
                <label for="pw">비밀번호</label>
                <input type="password" id="pw" name="pw"><br/><br/>
            </div>
            <input type="submit" value="로그인"><br/><br/>
        </form>
        <p>&nbsp;<a href="board_signup.php">회원가입</a></p>
    </body>

