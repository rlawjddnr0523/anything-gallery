<?php
require "top.php";
?>
<div class="gv-1">
    <h1><?php echo $_GET['name']; ?>갤러리</h1>
</div>
<div class="gv-2">
    <h3><?php echo $_GET['name'];  ?>갤러리의 오늘의 게시물</h3>
</div>
<div class="gv-3">
    <?php
        $mysqli = mysqli_connect("localhost", "kjwook0523", "Kimmark4167*", "kjwook0523");
        $query = "SELECT * FROM edm_gc"
    ?>
</div>
