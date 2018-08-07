<?php
session_start();
$link= mysqli_connect("localhost","root","","db04");
mysqli_query($link,"SET NAMES UTF8");

$sql = "DELETE from buylog where buylog_no = '".$_GET["accseq"]."'";
mysqli_query($link,$sql);

echo "<script>document.location.href='admin.php?do=admin&redo=order'</script>";
?>