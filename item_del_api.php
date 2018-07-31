<?php
session_start();
$link= mysqli_connect("localhost","root","","db04");
mysqli_query($link,"SET NAMES UTF8");

$sql = "DELETE from item_3 where item_3_seq = '".$_GET["seq"]."'";
mysqli_query($link,$sql);

echo "<script>document.location.href='admin.php?do=admin&redo=th_item'</script>";
?>