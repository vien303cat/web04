<?php
session_start();
$link= mysqli_connect("localhost","root","","db04");
mysqli_query($link,"SET NAMES UTF8");

$iseq = $_POST["iseq"];
$itable = $_POST["itable"];
$itxt = $_POST["itxt"];

$sql = "update ".$itable." set ".$itable."_txt = '".$itxt."' where ".$itable."_seq = ".$iseq ;
mysqli_query($link,$sql);
echo "<script>document.location.href='admin.php?do=admin&redo=th'</script>";
?>

