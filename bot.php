<?php
$sql = "select * from a_bot";
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);

if(!empty($_POST["txt"])){
    $sql = "update a_bot set a_bot_con = '".$_POST["txt"]."'";
    mysqli_query($link,$sql);
    echo "<script>document.location.href='admin.php?do=admin&redo=bot'</script>";
}
?>

<form method="POST">
<table class="all" width="80%" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td colspan="2" align="center" valign="middle">編輯頁尾版權區</td>
  </tr>
  <tr>
    <td width="50%" align="center" valign="middle">頁尾宣告內容</td>
    <td width="50%" align="left" valign="middle"><input type="text" name="txt" value="<?=$c2["a_bot_con"]?>" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><input type="submit" value="編輯"/><input type="reset" value="重設"/></td>
  </tr>
</table>
</form>