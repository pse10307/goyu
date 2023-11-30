<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>임용고시 학습도구</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <div id='wrap'>
        <?php include 'common/header.php'; ?>
        <?php include 'common/nav.php'; ?>
        <div class="main-container">
            <div class="main">
                <h3>최신 글</h3>
                <input type="radio" id="tab-1" name="show1" checked/>
                <input type="radio" id="tab-2" name="show1" />
                <input type="radio" id="tab-3" name="show1" />
                <div class="tab">
                    <label for="tab-1">공지사항</label>
                    <label for="tab-2">문의사항</label>
                    <label for="tab-3">후기</label>
                </div>
                <div class="post_taps">
                    <div class="post_tap">
                        <?php include 'index/post_table.php'; ?>
                    </div>
                    <div class="post_tap">
                        <?php include 'index/post_table.php'; ?>
                    </div>
                    <div class="post_tap">
                        <?php include 'index/post_table.php'; ?>
                    </div>
                </div>
            </div>

            <div class="main">
                <h3>인기 글</h3>
                <input type="radio" id="tab-5" name="show2" checked/>
                <input type="radio" id="tab-6" name="show2" />
                <input type="radio" id="tab-7" name="show2" />
                <div class="tab">
                    <label for="tab-5">공지사항</label>
                    <label for="tab-6">문의사항</label>
                    <label for="tab-7">후기</label>
                </div>
                <div class="post_taps">
                    <div class="post_tap">
                        <?php include 'index/post_table.php'; ?>
                    </div>
                    <div class="post_tap">
                        <?php include 'index/post_table.php'; ?>
                    </div>
                    <div class="post_tap">
                        <?php include 'index/post_table.php'; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="mid-container">
            <div class="sitemethod">
                <p>//사이트 이용 방법//</p>
                <p>위에 표 안 바뀌는 것 같지만 전환하고 있어..</p>
                <p>마음대로 배치했는데 변경 사항있으면 적어놓고 같이 고치자!</p>
                <p>class명이나 값 변경하면 나 울어... </p>
            </div>
            <div class="slide">
                <?php include 'index/slide.php'; ?>
            </div>
        </div>
        <div class="bot-container">
            <div class="helpsite">
                <p>//도움 사이트//</p>
                <p>여기는 공간 많이 필요할 것 같아서 넉넉하게 했는데 이미지 양에 따라서 height 조절해서 사용하기</p>
                <p>css파일에서 .helpsite검색해서 나오는 height변경</p>
                <p>css파일에 주석으로 각 파일이름을 적었는데 그 주석 아래는 파일에 해당하는 css코드 header.php랑 nav.php는 구분이 명확하지 않을 수 있어</p>
            </div>
        </div>

        <?php include 'common/footer.php'; ?>
    </div>
</body>

</html>
