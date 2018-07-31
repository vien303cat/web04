<?php
$sql = "select * from item_3";
$c1 = mysqli_query($link,$sql);
$c2 = mysqli_fetch_assoc($c1);
?>

<table width="80%" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td colspan="5" align="center" valign="middle">商品管理</td>
  </tr>
  <tr>
    <td colspan="5" align="center" valign="middle"><input type="button" value="新增商品" onclick="document.location.href='admin.php?do=admin&redo=add_item'"></td>
  </tr>
  <tr>
    <td width="20%" align="center" valign="middle">編號</td>
    <td width="30%" align="center" valign="middle">商品名稱</td>
    <td width="10%" align="center" valign="middle">庫存量</td>
    <td width="20%" align="center" valign="middle">狀態</td>
    <td width="20%" align="center" valign="middle">操作</td>
  </tr>
  <?php do{ 
     if($c2["item_3_display"] == 1){
         $display = "販售中";
     }else{  $display = "已下架" ; }
      ?>
  <tr>
    <td width="20%" align="center" valign="middle"><?=$c2["item_3_seq"]?></td>
    <td width="30%" align="center" valign="middle"><?=$c2["item_3_name"]?></td>
    <td width="10%" align="center" valign="middle"><?=$c2["item_3_howmuch"]?></td>
    <td width="10%" align="center" valign="middle"><?=$display?></td>
    <td width="30%" align="center" valign="middle">
    <input type="button" value="修改" onclick="document.location.href='admin.php?do=admin&redo=update_item&seq=<?=$c2["item_3_seq"]?>'"><input type="button" onclick="document.location.href='item_del_api.php?seq=<?=$c2["item_3_seq"]?>'" value="刪除">
    <input type="button" onclick="document.location.href='item_up_api.php?seq=<?=$c2["item_3_seq"]?>'" value="上架"><input type="button" onclick="document.location.href='item_down_api.php?seq=<?=$c2["item_3_seq"]?>'" value="下架">
    </td>
  </tr>
  <?php }while($c2 = mysqli_fetch_assoc($c1)) ?>
</table>