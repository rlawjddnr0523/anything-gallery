<?php
    require "top.php";
    if(isset($_SESSION['master1']) === true) {
        ?><script>location.href = "index.php"; </script><?php
    }
?>
<div class="form2">
    <form method="post" action="regist.post.php">
        <ul>
            <li>
                <label><h3>아이디</h3></label>
            </li>
            <li>
                <input type="text" id="id" name="id" minlength="4" maxlength="15" placeholder="아이디를 입력해 주세요" required/>
            </li>
            <li><h6>아이디는 4자 이상 숫자가 포함 되어있어야 합니다.</h6></li>
            <li>
                <br>
                <label><h3>비밀번호</h3></label>
            </li>
            <li>
                <input type="password" id="pwd1" name="pwd1" placeholder="비밀번호를 입력하세요" minlength="10" maxlength="30" required>
            </li>
            <li><h6>비밀번호는 10자 이상 30자 이하 특수문자 숫자 영어 대문자가 조합되어있어야합니다.</h6></li>
            <li>
                <br>
                <label><h3>비밀번호 확인</h3></label>
            </li>
            <li>
                <input type="password" id="pwd2" name="pwd2" placeholder="비밀번호를 다시 입력하세요" minlength="10" maxlength="30" required>
            </li>
            <li>
                <font id="chkpwd" size="2"></font>
            </li>
            <li>
                 <br>
                <label><h3>이름</h3></label>
            </li>
            <li>
                <input type="text" id="name" name="name" minlength="1" maxlength="3" placeholder="이름을 입력해주세요" required/>
            </li>
            <li>
                <br>
                <label><h3>생년월일</h3></label>
            </li>
            <li>
                <input type="number" id="birthyear" name="birthyear" placeholder="YYYY" required min="1900" max="2022"><input type="number" id="birthmonth" name="birthmonth" placeholder="MM" required min="1" max="12"><input type="number" id="birthdate" name="birthdate" placeholder="DD" min="1" max="31" required>
            </li>
            <li>
                <br>
                <br>
                <input type="submit" value="회원가입 완료하기" required>
            </li>
        </ul>
    </form>
</div>
<script>
    $('#pwd2').keyup(function (){
       var pwd1 = $('#pwd1').val();
       var pwd2 = $('#pwd2').val();

       if(pwd1 != pwd2){
            $('#chkpwd').html('비밀번호가 일치하지 않습니다.');
            $('#chkpwd').attr('color', '#ff0000');
       }
       if(pwd1 == pwd2){
           $('#chkpwd').html('비밀번호가 일치합니다.');
           $('#chkpwd').attr('color', '#1E90FF');
       }
    });
</script>

