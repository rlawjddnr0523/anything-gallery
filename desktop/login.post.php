<meta charset="utf-8">
<?php
$id = $_POST['id'];
$pwd = $_POST['pwd'];

$mysqli = mysqli_connect("localhost", "kjwook0523", "Kimmark4167*", "kjwook0523");
$query = "SELECT * FROM edm_acc WHERE id = '$id'";
$result = mysqli_query($mysqli, $query);
$row = mysqli_fetch_array($result);
$password = $row['pwd'];

$passwordresult = ($pwd == $password);
if($passwordresult === true) {
    session_start();
    $_SESSION['master1'] = $row['id'];
    $_SESSION['master2'] = $row['ownid'];
    ?><script>alert("로그인에 성공하였습니다.");location.href="index.php";</script><?php
} else {
    ?><script>alert("로그인에 실패하였습니다. 비밀번호나 아이디를 체크해 주세요.");history.back();</script><?php
}
