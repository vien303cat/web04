<?php
include_once("head.php");
 
$conseq = $_SESSION["consumerseq"];

$sql = "select * from buycar,item_3 where buycar_acc = '".$_SESSION["consumer"]."' and buycar_i3seq = item_3_seq ";
$c1 = mysqli_query($link,$sql);
$c2 = mysqli_fetch_assoc($c1);
do{ 
$x= $c2["item_3_price"] * $c2["buycar_howmuch"]; 

$sqll = " insert into buylog value(NULL,'$now_no','".$c2["item_3_seq"]."','".$c2["buycar_howmuch"]."','".$c2["item_3_price"]."','$x','$conseq','$now_time')" ;
mysqli_query($link,$sqll);

$sqll = " DELETE FROM buycar where buycar_seq = '".$c2["buycar_seq"]."';";
mysqli_query($link,$sqll) ;

}while($c2 = mysqli_fetch_assoc($c1))

?>

<script>document.location.href='index.php'</script>