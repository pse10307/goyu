    <header class="header">
        <a href="../index.php"><p id="web_logo">고유한 학습터</p></a>
        <div class="right-align">
            <p>구매권넣기</p>
            <p>2025 초등 임용고시 <b id="result"></b></p>
            <p>|</p><div class="login_href"><a href="../login/login.php">로그인</a></div><p>|</p>
            <a href="https://www.youtube.com/channel/UCcTMxmc54eARIeodg0JhGaQ" target="_blank"><img src="../images/youtube_icon.png" alt="youtube icon" class="absol_3"></a>
            <a href="https://blog.naver.com/goyoussam" target="_blank"><img src="../images/blog.png" alt="blog icon" class="absol_1"></a>
        </div>
    </header>
    <hr>

    <script language="JavaScript">
        var setDate=new Date(2024,10,9);
        var now=new Date();
        var gap=setDate.getTime()-now.getTime();
        var result=Math.ceil(gap/(1000*60*60*24));
        var resultElement = document.getElementById('result');
        resultElement.textContent = 'D -'+result;
    </script>