<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>회원가입</title>
        <link rel="stylesheet" href="../styles.css"> 
    </head>
    <style>

    </style>

    <body>
        <?php include '../common/header.php'; ?>  
        <table class="signup-table">
            <caption><h2>회원가입</h2></caption>
            <tr>
                <th>이름</th>
                <td><input type="text" id="user_name"></td>
            </tr>
            <tr>
                <th>아이디</th>
                <td>
                    <input type="text" id="user_id">
                    <input class="but1" type="button" value="중복 확인" onclik=""> 
                </td>
            </tr>
            <tr>
                <th>비밀번호</th>
                <td>
                    <input type="password" id="user_pw">
                    <p>비밀번호 조건</p>
                </td>
            </tr>
            <tr>
                <th>비밀번호 확인</th>
                <td><input type="password" id="user_pw"></td>
            </tr>
            <tr>
                <th>이메일</th>
                <td>
                <input type="text" id="mailid">
                <span class="a">@</span>
                <input type="text" id="email">
                <select name="mailslc">
                    <option value="self" selected>직접입력</option>
                    <option value="naver">naver.com</option>
                    <option value="gm">gmail.com</option>
                    <option value="da">daum.com</option>
                    <option value="yah">yahoo.com</option>
                </select>
                    <input class="but2" type="button" value="중복 확인" onclik=""> 
                </td>
            </tr>
        <table>
        <div class="create">
            <input class="but3" type="button" value="회원가입" onclik="">
        </div>
        <?php include '../common/footer.php'; ?>
    </body>
</html>
