<?php
session_start();
$link= mysqli_connect("localhost","root","","db04");
mysqli_query($link,"SET NAMES UTF8");
include_once("admin_list.php");
?>