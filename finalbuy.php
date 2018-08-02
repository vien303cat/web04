<?php

$sql = "select * from a_consumer where a_consumer_acc = '".$_SESSION["consumer"]."' ";
$c1 = mysqli_query($link,$sql);
$c2 = mysqli_fetch_assoc($c1);
?>
<form method="post" action="buyapi.php">
<table class="all" width="100%" border="0" align="center" cellpadding="2" cellspacing="2" style="overflow:auto;">
  <tr>
    <td colspan="5" align="center" valign="middle"><span style="font-size:36px">填寫資料</span></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle" bgcolor="#FF9900">登入帳號</td>
    <td colspan="3" align="left" valign="middle" bgcolor="#FFCC66"><?=$c2["a_consumer_acc"]?></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle" bgcolor="#FF9900">姓名</td>
    <td colspan="3" align="left" valign="middle" bgcolor="#FFCC66"><?=$c2["a_consumer_name"]?></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle" bgcolor="#FF9900">電子信箱</td>
    <td colspan="3" align="left" valign="middle" bgcolor="#FFCC66"><?=$c2["a_consumer_mail"]?></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle" bgcolor="#FF9900">聯絡地址</td>
    <td colspan="3" align="left" valign="middle" bgcolor="#FFCC66"><?=$c2["a_consumer_where"]?></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle" bgcolor="#FF9900">聯絡電話</td>
    <td colspan="3" align="left" valign="middle" bgcolor="#FFCC66"><?=$c2["a_consumer_phone"]?></td>
  </tr>
  <tr>
    <td width="40%" align="center" valign="middle" bgcolor="#FF9900">商品名稱</td>
    <td width="10%" align="center" valign="middle" bgcolor="#FF9900">編號</td>
    <td width="10%" align="center" valign="middle" bgcolor="#FF9900">數量</td>
    <td width="20%" align="center" valign="middle" bgcolor="#FF9900">單價</td>
    <td width="20%" align="center" valign="middle" bgcolor="#FF9900">小計</td>
  </tr>
  <?php 
    
    $sql = "select * from buycar,item_3 where buycar_acc = '".$_SESSION["consumer"]."' and buycar_i3seq = item_3_seq ";
    $c1 = mysqli_query($link,$sql);
    $c2 = mysqli_fetch_assoc($c1);
    $row = mysqli_num_rows($c1);
    $tot = 0 ; 
    do{ 
    $x= $c2["item_3_price"] * $c2["buycar_howmuch"]; 
    $tot += $x ;
    ?>
  <tr>
    <td width="40%" align="center" valign="middle" bgcolor="#FFCC66"><?=$c2["item_3_name"]?></td>
    <td width="10%" align="center" valign="middle" bgcolor="#FFCC66"><?=$c2["buycar_i3seq"]?></td>
    <td width="10%" align="center" valign="middle" bgcolor="#FFCC66"><?=$c2["buycar_howmuch"]?></td>
    <td width="20%" align="center" valign="middle" bgcolor="#FFCC66"><?=$c2["item_3_price"]?></td>
    <td width="20%" align="center" valign="middle" bgcolor="#FFCC66"><?=$x?></td>
  </tr>
  <?php  }while($c2 = mysqli_fetch_assoc($c1)) ?>
  <tr>
    <td colspan="5" align="center" valign="middle" bgcolor="#FF9900">總計：<?=$tot?>$</td>
  </tr>
  <tr>
    <td colspan="5" align="center" valign="middle">
    <input type="submit" value="確定送出" >
    <input type="button" value="返回修改訂單" onclick="document.location.href='index.php?do=comebuy'">
</td>
  </tr>
</table>
    </form>