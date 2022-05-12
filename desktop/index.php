<!DOCTYPE html>
<head>
    <title>EDMASTER Gallery</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        var mobile = (/iphone|ipad|ipod|android|blackberry|mini|windowssce|palm/i.test(navigator.userAgent.toLowerCase()));
        if (mobile) {
            window.location.href = "http://accountmall.pe.kr/edmastermobile/index.php";
        }
    </script>
</head>
<body>
<div class="toplogoitems">
    <a href="index.php" class="toplogo"><img src="eddmaster.png" alt="dfsdf"/></a>
</div>
    <?php
        require "menu.php";
    ?>
    <?php
    session_start();
    if(isset($_SESSION['id']) === false) { ?>
        <div class="redirectbuttns">
            <ul>
                <li>
                    <a href="register.php">회원가입</a>
                </li>
                <li>
                    <a href="login.php">로그인</a>
                </li>
            </ul>
        </div><?php
    }
    ?>
</body>
<footer>

</footer>