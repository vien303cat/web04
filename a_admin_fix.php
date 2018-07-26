<?php
 $sql = "select * from a_member where a_member_seq ='".$_GET["seq"]."';";
 $c1  = mysqli_query($link,$sql);
 $c2  = mysqli_fetch_assoc($c1);

 if(!empty($_POST["acc"])){
  $acc = $_POST["acc"];
  $pw  = $_POST["pw"];
  $lv1 = 0 ;
  if(!empty($_POST["lv1"])){ $lv1 = 1 ;}
  $lv2 = 0 ;
  if(!empty($_POST["lv2"])){ $lv2 = 1 ;}
  $lv3 = 0 ;
  if(!empty($_POST["lv3"])){ $lv3 = 1 ;}
  $lv4 = 0 ;
  if(!empty($_POST["lv4"])){ $lv4 = 1 ;}
  $lv5 = 0 ;
  if(!empty($_POST["lv5"])){ $lv5 = 1 ;}
   $sql ="update a_member set a_member_acc = '$acc' , a_member_pw = '$pw' , a_member_1 = '$lv1' , a_member_2 = '$lv2' , a_member_3 = '$lv3' , a_member_4 = '$lv4' , a_member_5 = '$lv5' where a_member_seq = '".$_GET["seq"]."';";
   mysqli_query($link,$sql);
   echo "<script>document.location.href='admin.php?do=admin&redo=admin'</script>";
 }
?>


<form method="post" action="">
<table class="all" width="80%" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td colspan="2" align="center" valign="middle"><span style="font-size:36px;">修改管理員權限</span><br><br></td>
  </tr>
  <tr>
    <td width="40%" align="center" valign="middle">帳號</td>
    <td width="60%" align="left" valign="middle"><input type="text" name="acc" value="<?=$c2["a_member_acc"]?>" /></td>
  </tr>
  <tr>
    <td width="40%" align="center" valign="middle">密碼</td>
    <td width="60%" align="left" valign="middle"><input type="text" name="pw" value="<?=$c2["a_member_pw"]?>"/></td>
  </tr>
  <tr>
    <td width="40%" align="center" valign="middle">權限</td>
    <td width="60%" align="left" valign="middle">
        <input type="checkbox" name="lv1" value="1" <?php if($c2["a_member_1"]=="1"){ ?> checked <?php } ?> />商品分類與管理<br>
        <input type="checkbox" name="lv2" value="1" <?php if($c2["a_member_2"]=="1"){ ?> checked <?php } ?>/>訂單管理<br>
        <input type="checkbox" name="lv3" value="1" <?php if($c2["a_member_3"]=="1"){ ?> checked <?php } ?>/>會員管理<br>
        <input type="checkbox" name="lv4" value="1" <?php if($c2["a_member_4"]=="1"){ ?> checked <?php } ?>/>頁尾版權區管理<br>
        <input type="checkbox" name="lv5" value="1" <?php if($c2["a_member_5"]=="1"){ ?> checked <?php } ?>/>最新消息管理<br>
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><input type="submit" value="修改"/><input type="reset" value="重置"/><input type="button" value="返回" onclick="document.location.href='index.php'" /></td>
  </tr>
</table>
</form>