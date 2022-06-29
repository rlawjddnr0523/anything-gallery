<meta charset="utf-8">
<?php
    session_start();
    $mysqli = mysqli_connect("localhost", "kjwook0523", "Kimmark4167*", "kjwook0523");
    $title = $_POST['gt'];
    $created = date("Y-m-d H:i:sa");
    $id = $_SESSION['master1'];
    $gc = "y";
    $sss = "1";

    $query2 = "SELECT * FROM edm_acc WHERE id = '$id'";
    $result2 = mysqli_query($mysqli, $query2);
    $fetch1 = mysqli_fetch_array($result2);
    if($fetch1['gcc'] == "3"){
        ?><script>alert("당신은 이미 3번의 갤러리 생성 권한을 사용하셨습니다.");history.back()</script><?php
        exit();
    } else {
        $gcc = $fetch1['gcc'] + 1;
        echo "펫치1 = $fetch1[gcc]";
        echo "gcc 값 = $gcc";
        $query3 = "UPDATE edm_acc SET gcc = '$gcc' WHERE id = '$id'";
        echo "쿼리 값 = $query3";
        $result3 = mysqli_query($mysqli, $query3);
        if($result3) {
            ?>
                <script>
                    alert("정상 처리 되었습니다.");
                </script>
            <?php
        }
    }

    $query1 = "SELECT * FROM edm_g WHERE gtitle = '$title'";
    $result1 = mysqli_query($mysqli ,$query1);
    $fetch = mysqli_fetch_array($result1);
    if($fetch) {
        ?><script>alert("이미 있는 갤러리 입니다."); history.back();</script><?php
        exit();
    }
    $query = "INSERT into edm_g (gtitle, gcn, gc, gcd) values('".$title."', '".$id."' , '".$gc."', '".$created."')";
    $result = mysqli_query($mysqli , $query);
    if($result) {
        ?><script>alert("갤러리 생성에 성공하였습니다."); location.href="gallery.php";</script><?php
    } else {
        ?><script>alert("갤러리 생성에 실패하였습니다."); history.back();</script><?php
    }