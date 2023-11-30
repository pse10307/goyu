<footer class="footer">
    <div class="bottommenu">
        <div class="company-info">
            <h4>회사 소개</h4>
            <!-- Your company introduction content goes here -->
        </div>
        <div class="contact-info">
            <h4>제휴 문의</h4>
            <ul>
                <li>이메일: your.email@example.com</li>
                <li>사업자 번호: 123-456-7890</li>
                <li>통신판매업 신고번호: 987654321</li>
            </ul>
        </div>
    </div>
</footer>

<!-- Add your CSS styles here -->
<style>
    body {
        margin: 0;
        padding: 0;
        min-height: 100%; /* Ensure body takes at least the full height of the viewport */
        position: relative; /* Change from fixed to relative */
    }

    .footer {
        width: 100%;
        background-color: #f0f0f0;
        padding: 20px;
        text-align: center;
        position: relative; /* Change from fixed to relative */
    }

    .bottommenu {
        display: flex;
        justify-content: space-around;
    }

    .company-info,
    .contact-info {
        flex: 1;
        margin: 0 10px;
    }

    .contact-info ul {
        list-style: none;
        padding: 0;
    }

    .contact-info ul li {
        margin-bottom: 5px;
    }
</style>
