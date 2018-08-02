<?php
session_start();
$link= mysqli_connect("localhost","root","","db04");
mysqli_query($link,"SET NAMES UTF8");

$sql = "DELETE from buycar where buycar_seq = '".$_GET["seq"]."'";
mysqli_query($link,$sql);

echo "<script>document.location.href='index.php?do=comebuy'</script>";
?>