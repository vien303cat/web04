<?php
session_start();
$link= mysqli_connect("localhost","root","","db04");
mysqli_query($link,"SET NAMES UTF8");
include_once("admin_list.php");

$tt = strtotime("+6hour");
$now_day = date("Y-m-d",$tt);
$now_time = date("Y-m-d H:i:s",$tt);
$now_no =  date("YmdHis",$tt);
?>