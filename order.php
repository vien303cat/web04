<?php
$sql = "select sum(buylog_total) as am , buylog_no,buylog_time,a_consumer_acc,a_consumer_name 
        from buylog,a_consumer 
        where buylog_accseq = a_consumer_seq 
        group by buylog_no" ;
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);
?>

<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td colspan="6" align="center" valign="middle">訂單管理</td>
  </tr>
  <tr>
    <td align="center" valign="middle" width="15%">訂單編號</td>
    <td align="center" valign="middle" width="15%">金額</td>
    <td align="center" valign="middle" width="15%">會員帳號</td>
    <td align="center" valign="middle" width="15%">姓名</td>
    <td align="center" valign="middle" width="15%">下單時間</td>
    <td align="center" valign="middle" width="15%">操作</td>
  </tr>
  <?php do{ ?>
  <tr>
    <td align="center" valign="middle" width="15%"><a href="admin.php?do=admin&redo=orderdata&seq=<?=$c2['buylog_no']?>"><?=$c2["buylog_no"]?></a></td>
    <td align="center" valign="middle" width="15%"><?=$c2["am"]?></td>
    <td align="center" valign="middle" width="15%"><?=$c2["a_consumer_acc"]?></td>
    <td align="center" valign="middle" width="15%"><?=$c2["a_consumer_name"]?></td>
    <td align="center" valign="middle" width="15%"><?=$c2["buylog_time"]?></td>
    <td align="center" valign="middle" width="15%"><input type ="button" value="刪除" onclick="document.location.href='order_delapi.php?accseq=<?=$c2['buylog_no']?>'"></td>
  </tr>
  <?php }while($c2  = mysqli_fetch_assoc($c1)) ?>
</table>