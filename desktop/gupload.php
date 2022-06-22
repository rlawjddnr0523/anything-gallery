<?php
$mysqli=mysqli_connect("localhost", "kjwook0523","Kimmark4167*","kjwook0523");

$title = $_POST['title'];
$contents = $_POST['contents'];
$writer = $_SESSION['master1'];
$writed = date("Y-m-d H:i:sa");
$gallery = $_GET['name'];
$stats = "y";
if(isset($_POST['file']) == true){

}