<?php
$sql="select * from a_member ";
$c1 = mysqli_query($link,$sql);
$c2 = mysqli_fetch_assoc($c1);

?>


<table class="all" width="80%" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td colspan="3" align="center" valign="middle"><input type="button" value="新增管理員" onclick="document.location.href='?do=admin&redo=admin_add'"><input type="button" value="返回" onclick="document.location.href='index.php'" /></td>
  </tr>
  <tr>
    <td width="33%" align="center" valign="middle">帳號</td>
    <td width="33%" align="center" valign="middle">密碼</td>
    <td width="33%" align="center" valign="middle">管理</td>
  </tr>
  <?php do{ 
      $star = "";
      $pwstar = strlen( $c2["a_member_pw"] );
      for($i=0;$i< $pwstar ; $i++){
          $star .= "* ";
      }
      ?>
  <tr>
    <td width="33%" align="center" valign="middle"><?=$c2["a_member_acc"]?></td>
    <td width="33%" align="center" valign="middle"><?=$star?></td>
    <td width="33%" align="center" valign="middle">
        <?php if($c2["a_member_acc"] == "admin"){
            echo "此帳號為最高權限";
        }else{ ?>
        <a href="?do=admin&redo=admin_fix&seq=<?=$c2["a_member_seq"]?>">修改</a>
        <a href="del_api.php?del=a_member&seq=<?=$c2["a_member_seq"]?>">刪除</a>
    </td>
  </tr>
  <?php } }while($c2 = mysqli_fetch_assoc($c1)); ?>
</table>