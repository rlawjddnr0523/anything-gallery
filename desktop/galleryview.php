<?php
require "top.php";
?>
<div class="gv-1">
    <h1 class="gv-1-1"><?php echo $_GET['name']; ?>갤러리 입니다.</h1><button class="gv-1-2" onclick="redirect()">글쓰기</button>
</div>
<div class="gv-2">
    <table border="1">
        <tr>
            <td>
                번호
            </td>
            <td>
                제목
            </td>
            <td>
                글쓴이
            </td>
            <td>
                작성일
            </td>
            <td>
                조회수
            </td>
        </tr>
            <?php
                $gname=$_GET['name'];
                $mysqli=mysqli_connect("localhost","kjwook0523","Kimmark4167*","kjwook0523");
                $query="SELECT * FROM edm_b where gtitle = '$gname'";
                $result=mysqli_query($mysqli, $query);
                if($result == null) {
                    ?><tr><td><div class="gv-2-1">내용이 존재하지 않습니다.</div></td></tr><?php
                } else {
                    while($row = mysqli_fetch_array($result)){
                        ?><tr>
                        <td>
                            <?php echo $row['bid']; ?>
                        </td>
                        <td>
                            <a href="gpostview.php?num=<?php echo $row['bid']; ?>"><?php echo $row['btitle']; ?></a>
                        </td>
                        <td>
                            <?php echo $row['bwriter']; ?>
                        </td>
                        <td>
                            <?php echo $row['bdate']; ?>
                        </td>
                        <td>
                            <?php echo $row['view']; ?>
                        </td>
        </tr><?php
                    }
                }
            ?>
        </tr>
    </table>
</div>
<script>
    function redirect() {
        location.href="galleryupload.php?name=<?php echo $_GET['name']; ?>";
    }
</script>