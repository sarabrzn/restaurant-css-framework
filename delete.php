<?php
include("credentials.php");



$id=$_GET['id'];
$sql="delete from users where id=$id";
$conn->query($sql);
$conn->close();
header("location:read.php");

?>

