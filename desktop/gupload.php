<?php
session_start();
?>
<meta charset="utf-8">
<?php
$mysqli=mysqli_connect("localhost", "kjwook0523","Kimmark4167*","kjwook0523");

$title = $_POST['title'];
$contents = $_POST['contents'];
$writer = $_SESSION['master1'];
$writed = date("Y-m-d H:i:sa");
$gallery = $_GET['name'];
$stats = "y";
$query = "insert into edm_b (btitle, bcontents, bwriter, bdate,gtitle,bstats, bfile) values ('$title', '$contents', '$writer', '$writed','$gallery', '$stats', '$file')";
$result = mysqli_query($mysqli, $query);
if($result) {
    ?><script>
        alert("업로드에 성공하였습니다.");
        location.href="galleryview.php?name=<?php echo $_GET['name']; ?>";
    </script><?php
} else {
    ?><script>
        alert("업로드에 실패하였습니다.");
        history.back();
</script><?php
}