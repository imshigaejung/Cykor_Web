<!DOCTYPE html>

<html>
    <head>
        <h1>SIGN UP</h1>
        <meta charset="utf-8">
    </head>
    <body>    
        <?php
            session_start();
            
            if (isset($_SESSION['error'])) {
                echo "<p>" . $_SESSION['error'] . "</p>";
                unset($_SESSION['error']);
            } 
        
        ?>   
        <form action="process_signup.php" method="post">
            <div>
                <label for="id">아이디&nbsp;&nbsp;&nbsp;</label>
                <input type="text" id="id" name="id"><br/>

                <label for="pw">비밀번호</label>
                <input type="password" id="pw" name="pw"><br/><br/>
            </div>
            <input type="submit" value="회원가입"><br/><br/>
        </form>
        <p>&nbsp;<a href="board_login.php">로그인</a></p>
    </body>
