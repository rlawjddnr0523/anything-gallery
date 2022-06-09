<meta charset="utf-8">
<?php
function GenerateString($length)
{
    $characters  = "0123456789";
    $characters .= "abcdefghijklmnopqrstuvwxyz";
    $characters .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $characters .= "_";

    $string_generated = "";

    $nmr_loops = $length;
    while ($nmr_loops--)
    {
        $string_generated .= $characters[mt_rand(0, strlen($characters) - 1)];
    }

    return $string_generated;
}

$id = $_POST['id'];
$pwd = $_POST['pwd2'];
$name = $_POST['name'];
$biry = $_POST['birthyear'];
$birm = $_POST['birthmonth'];
$bird = $_POST['birthdate'];
$created = date("Y-m-d H:i:s");
$ownnum = GenerateString(20);

$mysqli = mysqli_connect("localhost", "kjwook0523", "Kimmark4167*", "kjwook0523");

$query1 = "SELECT * FROM edm_acc WHERE id = {'$id'}";

$result1 = mysqli_query($mysqli , $query1);

if(isset($result1) === true) {
    ?><script>alert("존재하는 아이디 입니다."); location.href="register1.php";</script><?php
    exit();
}

$query = "INSERT INTO edm_acc (id,pwd,name,yy,mm,dd,created,ownid) values('$id','$pwd','$name','$biry','$birm','$bird','$created','$ownnum')";

$result = mysqli_query($mysqli, $query);
if($result) {
    ?><script>alert("회원가입에 성공하였습니다."); location.href="login.php";</script><?php
} else {
    ?><script>alert("회원가입에 실패하였습니다."); history.back();</script><?php
}