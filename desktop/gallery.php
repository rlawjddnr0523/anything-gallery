<?php
    require "top.php";
?>
<div class="mainitems">
    <div class="gall">
        <div class="gall-1">
            갤러리
        </div>
        <div class="gall-1-1">
            <a href="createg.php">
                갤러리 만들기
            </a>
        </div>
    </div>
    <?php
        $mysqli = mysqli_connect("localhost", "kjwook0523", "Kimmark4167*", "kjwook0523");
        $query = "SELECT * FROM edm_g where gc = 'y'";
        $result = mysqli_query($mysqli, $query);
        while($row = mysqli_fetch_array($result)) {
            ?>
                <a class="gall-2" href="galleryview.php?name=<?php echo $row['gtitle']; ?>"><?php echo $row['gtitle']; ?></a>
        <?php
        }
    ?>


</div>
</div>
</body>
<?php
    require "footer.php";
?>
</html>
