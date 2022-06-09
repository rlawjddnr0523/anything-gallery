<?php
require "top.php";
?>
<div class="mainitems">
    <div class="gall">
        <div class="gall-1">
            갤러리
        </div>
    </div>
    <div class="gall-2-1">
        <form method="post" action="createg.post.php">
            <input type="text" id="gt" name="gt" placeholder="갤러리 제목" maxlength="15" required>
            <input type="submit" value="갤러리 만들기">
        </form>
        <label>
            갤러리 이름은 한번 생성하면 변경 할 수 없사오니 갤러리를 생성할때는 신중하게 생성하여주시기 바랍니다.
            <br>(1인당 최대 3개 생성 가능)
        </label>
    </div>
</div>
</div>
</body>
<?php
require "footer.php";
?>
</html>