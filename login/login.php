<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>로그인</title>
        <link rel="stylesheet" href="../styles.css"> 
    </head>

    <body>
        <?php include '../common/header.php'; ?>
        <div class="logintoindex"><a href="../index.php"><img src="../images/book_icon.png"></a></div>
        <div class="login">
            <h2 class="logo">로그인</h2>
            <div class="container">
                <input type="text" placeholder="ID" id="id" class="account">
                <input type="password" placeholder="Password" id="password" class="account">
                <button id="login" class="account">login</button>
            </div>
        </div>
        <div class="login_etc">
            <a href="findpw.php">비밀번호 찾기</a>
            <p>|</p>
            <a href="verify_id.php">아이디 찾기</a>
            <p>|</p>
            <a href="signup.php">회원가입</a>
        </div>
        <?php include '../common/footer.php'; ?>
    </body>
</html>
