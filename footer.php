<?php
$sql = "select * from a_bot";
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);

echo $c2["a_bot_con"];
?>