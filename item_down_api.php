<?php
session_start();
$link= mysqli_connect("localhost","root","","db04");
mysqli_query($link,"SET NAMES UTF8");

$sql = "update item_3 set item_3_display = '0' ";
mysqli_query($link,$sql);

echo "<script>document.location.href='admin.php?do=admin&redo=th_item'</script>";
?>