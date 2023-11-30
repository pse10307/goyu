<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>로그인</title>
        <link rel="stylesheet" href="../styles.css"> 
    </head>
    <style>
    </style>

    <body>
        <?php include '../common/header.php'; ?>
        <div class="findpwtoindex">
            <a href="../index.php"><img src="../images/book_icon.png"></a>
            <h3>비밀번호를 찾고자하는 아이디를 입력하세요.</h3>
        </div>
        <div class="findpw">
            <input type="text" placeholder="ID" id="input_id" class="findpw_account">
            <a href="verify.php"><button id="findpw_next" class="find_account">다음</button></a>
        </div>
        <div class="findpw_etc">
            <p style="font-size: 15px">아이디가 기억나지 않는다면?</p>
            <a href="verify_id.php">아이디 찾기</a>
        </div>
        <?php include '../common/footer.php'; ?>
    </body>
</html>
