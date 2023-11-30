<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>마이페이지</title>
        <link rel="stylesheet" href="../styles.css"> 
    </head>
    <style>

    </style>

    <body>
        <?php include '../common/header.php'; ?>
        <?php include '../common/nav.php'; ?>
        <table class="member_info">
            <h3>닉네임[버전]<h3>
            <tbody>
                <tr>
                    <th class="col1">구독</th>
                    <th class="col2">회원 관리</th>   
                </tr>
                <tr>
                    <td class="col1">구독 기한:2023-11-28일 까지</td>
                    <td class="col2">개인정보수정</td>
                </tr>
                <tr>
                    <td class="col1">구독 관리</td>
                    <td class="col2">탈퇴</td>
                </tr>
            </tbody>
        </table>
        <?php include '../common/footer.php'; ?>
    </body>
</html>
