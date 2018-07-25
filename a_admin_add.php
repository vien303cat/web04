<?php
    if(!empty($_POST["acc"])){
      if($_POST["acc"] != "admin"){
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
      $sql = "insert into a_member value(NULL,'$acc','$pw','$lv1','$lv2','$lv3','$lv4','$lv5')";
      mysqli_query($link,$sql);
      echo "<script>document.location.href='admin.php?do=admin&redo=admin'</script>";
      }else{ echo "<script>alert('媽的不準用admin');</script>"; }
  }
?>


<form method="post" action="">
<table class="all" width="80%" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td colspan="2" align="center" valign="middle"><span style="font-size:36px;">新增管理帳號</span><br><br></td>
  </tr>
  <tr>
    <td width="40%" align="center" valign="middle">帳號</td>
    <td width="60%" align="left" valign="middle"><input type="text" name="acc"/></td>
  </tr>
  <tr>
    <td width="40%" align="center" valign="middle">密碼</td>
    <td width="60%" align="left" valign="middle"><input type="password" name="pw"/></td>
  </tr>
  <tr>
    <td width="40%" align="center" valign="middle">權限</td>
    <td width="60%" align="left" valign="middle">
        <input type="checkbox" name="lv1" value="1"/>商品分類與管理<br>
        <input type="checkbox" name="lv2" value="1"/>訂單管理<br>
        <input type="checkbox" name="lv3" value="1"/>會員管理<br>
        <input type="checkbox" name="lv4" value="1"/>頁尾版權區管理<br>
        <input type="checkbox" name="lv5" value="1"/>最新消息管理<br>
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><input type="submit" value="新增"/><input type="reset" value="重置"/></td>
  </tr>
</table>
</form>