<?php
$sql = "select * from item_3,item_2,item_1 where item_3_seq = '".$_GET["item3"]."' and item_3_i2 = item_2_seq and item_3_i1 = item_1_seq" ;
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);

?>

<form method="POST" action="index.php?do=comebuy" >   
<table width="100%" border="0" align="center" cellpadding="5" cellspacing="2">
  <tr>
    <td colspan="2" align="center" valign="middle"><span style="font-size:36px;"><?=$c2["item_3_name"]?></span></td>
    <input type="hidden"  value="<?=$c2["item_3_seq"]?>" name="seq"  >
    <input type="hidden"  value="<?=$c2["item_3_name"]?>" name="name"  >
  </tr>
  <tr>
    <td rowspan="5" align="center" valign="middle" bgcolor="#FFCC66"><img src="img/<?=$c2["item_3_photo"]?>" width="350" ></td>
    <td align="left" valign="middle" bgcolor="#FFCC66">分類：<?=$c2["item_1_txt"]?> > <?=$c2["item_2_txt"]?> </td>
  </tr>
  <tr>
    <td align="left" valign="middle" bgcolor="#FFCC66">編號：<?=$c2["item_3_seq"]?></td>
  </tr>
  <tr>
    <td align="left" valign="middle" bgcolor="#FFCC66">價格： <?=$c2["item_3_price"]?></td>
    <input type="hidden"  value="<?=$c2["item_3_price"]?>" name="price"  >
  </tr>
  <tr>
    <td align="left" valign="middle" bgcolor="#FFCC66">詳細說明： <?=$c2["item_3_introduce"]?></td>
  </tr>
  <tr>
    <td align="left" valign="middle" bgcolor="#FFCC66">庫存量： <?=$c2["item_3_howmuch"]?></td>
    <input type="hidden"  value="<?=$c2["item_3_howmuch"]?>" name="howmuch"  >
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle" bgcolor="#FF9900">購買數量:<input type="text" value="1" name="howmuch" style="width:50px"/><input type="submit" value="" 
    style="width:57px;height:18px;background-image:url(img/0402.jpg);border-style:none;">
</td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><input type="button" value="返回" onclick="document.location.href='index.php'"></td>
  </tr>
</table>

</form>