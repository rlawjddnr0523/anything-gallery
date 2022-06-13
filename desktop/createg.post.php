<meta charset="utf-8">
<?php
    session_start();
    $mysqli = mysqli_connect("localhost", "kjwook0523", "Kimmark4167*", "kjwook0523");
    $title = $_POST['gt'];
    $created = date("Y-m-d H:i:sa");
    $id = $_SESSION['master1'];
    $gc = "y";

    $query1 = "SELECT * FROM edm_g WHERE gtitle = {'$title'}";
    $mysqliq = mysqli_query($mysqli ,$query1);
    if(isset($mysqliq) === true) {
        ?><script>alert("이미 있는 갤러리 입니다."); history.back();</script><?php
        exit();
    }
    $query2 = "CREATE TABLE {'$title'} (
    title varchar(100),
    contents varchar(1000),
    
    )";
    $query = "INSERT into edm_g (gtitle, gcn, gc, gcd) values('".$title."', '".$id."' , '".$gc."', '".$created."')";
    $result = mysqli_query($mysqli , $query);
    if($result) {
        ?><script>alert("갤러리 생성에 성공하였습니다."); location.href="gallery.php";</script><?php
    } else {
        ?><script>alert("갤러리 생성에 실패하였습니다."); history.back();</script><?php
    }