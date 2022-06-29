<?php
require "top.php";
$mysqli = mysqli_connect("localhost", "kjwook0523","Kimmark4167*","kjwook0523");
$num = $_GET['num'];
$query = "SELECT * FROM edm_b where bid = '$num'";
$result = mysqli_query($mysqli, $query);
while($row = mysqli_fetch_array($result)){
    ?>
    <div class="pv">
        <div class="pv-1"><h1><?php echo $row['btitle']; ?></h1></div>
        <div class="pv-5"><h5><?php echo $row['gtitle']; ?>갤러리</h5></div>
        <div class="pv-2"><h3><?php echo $row['bcontents']; ?></h3></div>
        <div class="pv-3"><h6>작성자 : <?php echo $row['bwriter']; ?></h6></div>
        <div class="pv-4"><h6>작성일 : <?php echo $row['bdate']; ?></h6></div>
        <div class="pv-6"><h6>조회수 : <?php echo $row['view']; ?></h6></div>
    </div>
    <?php
}
?>
