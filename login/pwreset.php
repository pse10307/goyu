<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>비밀번호 재설정</title>
        <link rel="stylesheet" href="../styles.css"> 
    </head>
    <style>

    </style>

    <body>
        <?php include '../common/header.php'; ?>  
        <table class="signup-table">
            <caption><h2>비밀번호 재설정</h2></caption>
            <tr>
                <th>새로운 비밀번호</th>
                <td>
                    <input type="password" id="user_pw">
                    <p>비밀번호 조건</p>
                </td>
            </tr>
            <tr>
                <th>새로운 비밀번호 확인</th>
                <td><input type="password" id="user_pw"></td>
            </tr>
        <table>
        <div class="end_findpw">
            <a href="login.php"><input class="end_findpw_but" type="button" value="확인"></a>
        </div>
        <?php include '../common/footer.php'; ?>
    </body>
</html>
