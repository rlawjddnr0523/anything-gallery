<meta charset="utf-8">
<?php
$id = $_POST['id'];
$pwd = $_POST['pwd'];

$mysqli = mysqli_connect("localhost", "kjwook0523", "Kimmark4167*", "kjwook0523");
$query = "SELECT FROM edm_acc WHERE id = {'$id'}";
$result = mysqli_query($mysqli, $query);
$row = mysqli_fetch_array($result);
$password = $row['pwd'];

