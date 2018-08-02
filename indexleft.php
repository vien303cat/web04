<?php
    $sql = "select * from item_1";
    $c1  = mysqli_query($link,$sql);
    $c2  = mysqli_fetch_assoc($c1);

?>
<style>
 .aa:hover .bb{
    display:block;
}
.bb{
    display:none;
}

</style>

<table width="100%" border="0" align="center" cellpadding="2" cellspacing="0">
<tr>
    <td align="center" bgcolor=""><a href="/?do=all">全部商品</a></td>
  </tr>
  <?php do{ 
      $sqll = "select * from item_2 where item_2_i1 = '".$c2["item_1_seq"]."'";
      $cc1  = mysqli_query($link,$sqll);
      $cc2  = mysqli_fetch_assoc($cc1);
      $row  = mysqli_num_rows($cc1);
      ?>
  <tr>
    <td align="center" class="aa" ><a href="index.php?do=item&item1=<?=$c2["item_1_seq"]?>"> <?=$c2["item_1_txt"]?> (<?=$row?>) </a>

    <?php do{ ?>

    <div class="bb"><a href="index.php?do=item&item2=<?=$cc2["item_2_seq"]?>"> <?=$cc2["item_2_txt"]?> </a> </div>

    <?php }while($cc2  = mysqli_fetch_assoc($cc1)) ?>
    </td>
  </tr>
  <?php }while($c2  = mysqli_fetch_assoc($c1)) ?>

</table>
