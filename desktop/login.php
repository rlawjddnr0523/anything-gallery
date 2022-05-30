<?php
require "top.php";
?>
<div class="form3">
    <form method="post" action="login.post.php">
        <ul>
            <li>
                <label><h3>아이디</h3></label>
            </li>
            <li>
                <input type="text" placeholder="아이디를 입력하세요" id="id" name="id" required>
            </li>
            <li>
                <br>
                <label><h3>비밀번호</h3></label>
            </li>
            <li>
                <input type="password" placeholder="비밀번호를 입력하세요" id="pwd" name="pwd" required>
            </li>
            <li>
                <br>
                <br>
                <input type="submit" value="로그인하기" required>
            </li>
        </ul>
    </form>
</div>