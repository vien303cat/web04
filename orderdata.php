<?php

$sql = "select * from a_consumer,buylog,item_3 
        where buylog_no = '".$_GET["seq"]."' and buylog_accseq = a_consumer_seq and buylog_item = item_3_seq ";
$c1 = mysqli_query($link,$sql);
$c2 = mysqli_fetch_assoc($c1);
?>
<form method="post" action="buyapi.php">
<table class="all" width="100%" border="0" align="center" cellpadding="2" cellspacing="2" style="overflow:auto;">
  <tr>
    <td colspan="5" align="center" valign="middle"><span style="font-size:24px;">訂單編號<span style="color:#F00;"><?=$_GET["seq"]?></span>的詳細資料</span></td>
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
    $all = 0 ;
    do{ 
        $all += $c2["buylog_total"] ;
    ?>
  <tr>
    <td width="40%" align="center" valign="middle" bgcolor="#FFCC66"><?=$c2["item_3_name"]?></td>
    <td width="10%" align="center" valign="middle" bgcolor="#FFCC66"><?=$c2["buylog_item"]?></td>
    <td width="10%" align="center" valign="middle" bgcolor="#FFCC66"><?=$c2["buylog_cnt"]?></td>
    <td width="20%" align="center" valign="middle" bgcolor="#FFCC66"><?=$c2["buylog_money"]?></td>
    <td width="20%" align="center" valign="middle" bgcolor="#FFCC66"><?=$c2["buylog_total"]?></td>
  </tr>
  <?php  }while($c2 = mysqli_fetch_assoc($c1)) ?>
  <tr>
    <td colspan="5" align="center" valign="middle" bgcolor="#FF9900">總價：<?=$all?>$</td>
  </tr>
  <tr>
    <td colspan="5" align="center" valign="middle">
    <input type="button" value="返回" onclick="document.location.href='admin.php?do=admin&redo=order'">
</td>
  </tr>
</table>
    </form>