<?php
include_once("head.php");
$id = $_POST["myid"];
$sql = "select * from a_consumer where a_consumer_acc = '$id'";
$c1 = mysqli_query($link,$sql);
$row = mysqli_num_rows($c1);
echo $row;
?>