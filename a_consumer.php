<?php
$sql="select * from a_consumer ";
$c1 = mysqli_query($link,$sql);
$c2 = mysqli_fetch_assoc($c1);

?>

<table width="80%" border="1" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td colspan="4" align="center" valign="middle">會員管理</td>
  </tr>
  <tr>
    <td width="25%" align="center" valign="middle">姓名</td>
    <td width="25%" align="center" valign="middle">會員帳號</td>
    <td width="25%" align="center" valign="middle">註冊日期</td>
    <td width="25%" align="center" valign="middle">操作</td>
  </tr>
  <?php do{  ?>
  <tr>
    <td width="25%" align="center" valign="middle"><?=$c2["a_consumer_name"]?></td>
    <td width="25%" align="center" valign="middle"><?=$c2["a_consumer_acc"]?></td>
    <td width="25%" align="center" valign="middle"><?=$c2["a_consumer_time"]?></td>
    <td width="25%" align="center" valign="middle">
    <a href="?do=admin&redo=consumer_fix&seq=<?=$c2["a_consumer_seq"]?>">修改</a>
    <a href="del_api.php?del=a_consumer&seq=<?=$c2["a_consumer_seq"]?>">刪除</a>
    </td>
  </tr>
  <?php }while($c2 = mysqli_fetch_assoc($c1)) ?>
</table>