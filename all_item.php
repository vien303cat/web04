<?php
$sql = "select * from item_3 where item_3_display = '1'" ;
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);

?>

<table width="100%" border="0" align="center" cellpadding="5" cellspacing="2">
<div style="overflow:auto;" >
<?php do{ ?>
  <tr>
    <td rowspan="4" align="center" valign="middle" bgcolor="#FFCC66"><a href="index.php?do=data&item3=<?=$c2["item_3_seq"]?> "><img src="img/<?=$c2["item_3_photo"]?>" width="250"></a></td>
    <td align="center" valign="middle" bgcolor="#FF9900"><?=$c2["item_3_name"]?></td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#FFCC66">價錢:<?=$c2["item_3_price"]?><a href="index.php?do=data&item3=<?=$c2["item_3_seq"]?>"><img src="img/0402.jpg"></a></td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#FFCC66">規格:<?=$c2["item_3_type"]?></td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#FFCC66">簡介:<?=$c2["item_3_introduce"]?></td>
  </tr>
  </div>
  <?php }while($c2  = mysqli_fetch_assoc($c1)) ?>
</table>