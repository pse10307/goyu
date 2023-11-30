<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>인증</title>
        <link rel="stylesheet" href="../styles.css"> 
    </head>
    <style>
        body{
            padding: 0px;
            margin: 0px;
        }
    </style>

    <body>
        <?php include '../common/header.php'; ?>
        <table class="verify-table">
            <caption><h2>이메일 인증</h2></caption>
            <tr>
                <th>이름</th>
                <td><input type="text" id="fp_user_name"></td>
            </tr>
            <tr>
                <th>이메일</th>
                <td>
                    <input type="text" id="fp_mailid">
                    <span class="a">@</span>
                    <input type="text" id="fp_email">
                    <select name="mailslc">
                        <option value="self" selected>직접입력</option>
                        <option value="naver">naver.com</option>
                        <option value="gm">gmail.com</option>
                        <option value="da">daum.com</option>
                        <option value="yah">yahoo.com</option>
                    </select>
                    <input class="send" type="button" value="인증번호 전송" onclik=""> 
                </td>
            </tr>
            <tr>
                <th>인증번호 입력</th>
                <td><input type="text" id="verify_num"></td>
            </tr>   
        <table>
        <div class="verify_next">
            <a href="pwreset.php"><input class="verify_next_but" type="button" value="다음"></a>
        </div>
        <?php include '../common/footer.php'; ?>
    </body>
</html>
