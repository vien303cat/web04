<?php
session_start();
$link= mysqli_connect("localhost","root","","db04");
mysqli_query($link,"SET NAMES UTF8");

if($_GET["del"] != "item_1" && $_GET["del"] != "item_2" && $_GET["del"] != "item_3" ){
$sql = "delete from ".$_GET["del"]." where ".$_GET["del"]."_seq"." = '".$_GET["seq"]."';";
mysqli_query($link,$sql);
echo "<script>document.location.href='admin.php?do=admin&redo=admin'</script>";
}else{ 
    $sql = "delete from ".$_GET["del"]." where ".$_GET["del"]."_seq"." = '".$_GET["seq"]."';";
    mysqli_query($link,$sql);
    echo "<script>document.location.href='admin.php?do=admin&redo=th'</script>";
    
 }
?>