<?php
require "top.php";
?>
<div class="myinfo1">
    <h1 class="myinfo1-1-title">
        내 프로필<br>
    </h1>
    <h3 class="myinfo1-2">
        프로필 사진
    </h3>

    <img class="myinfo1-3" src="profileimage/<?php echo $_SESSION['master2']; ?>/user.png" width="100" height="100">
</div>
