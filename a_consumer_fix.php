<?php
 $sql = "select * from a_consumer where a_consumer_seq ='".$_GET["seq"]."';";
 $c1  = mysqli_query($link,$sql);
 $c2  = mysqli_fetch_assoc($c1);

 $star = "";
 $pwstar = strlen( $c2["a_consumer_pw"] );
 for($i=0;$i< $pwstar ; $i++){
     $star .= "* ";
 }

 if(!empty($_POST["name"])){
  $name = $_POST["name"];
  $mail  = $_POST["mail"];
  $where  = $_POST["where"];
  $phone  = $_POST["phone"];
   $sql ="update a_consumer set a_consumer_name = '$name' , a_consumer_mail = '$mail' , a_consumer_where = '$where' , a_consumer_phone = '$phone' where a_consumer_seq = '".$_GET["seq"]."';";
   mysqli_query($link,$sql);
   echo "<script>document.location.href='admin.php?do=admin&redo=consumer'</script>";

 }
 
?>


<form method="post" action="">
<table class="all" width="80%" border="1" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td colspan="2" align="center" valign="middle"><span style="font-size:36px;">編輯會員資料</span><br><br></td>
  </tr>
  <tr>
    <td width="40%" align="center" valign="middle">帳號</td>
    <td width="60%" align="left" valign="middle"><?=$c2["a_consumer_acc"]?></td>
  </tr>
  <tr>
    <td width="40%" align="center" valign="middle">密碼</td>
    <td width="60%" align="left" valign="middle"><?=$star?></td>
  </tr>
  <tr>
    <td width="40%" align="center" valign="middle">累積交易金額</td>
    <td width="60%" align="left" valign="middle">5億</td>
  </tr>
  <tr>
    <td width="40%" align="center" valign="middle">姓名</td>
    <td width="60%" align="left" valign="middle"><input type="text" name="name" value="<?=$c2["a_consumer_name"]?>" /></td>
  </tr>
  <tr>
    <td width="40%" align="center" valign="middle">電子信箱</td>
    <td width="60%" align="left" valign="middle"><input type="text" name="mail" value="<?=$c2["a_consumer_mail"]?>" /></td>
  </tr>
  <tr>
    <td width="40%" align="center" valign="middle">地址</td>
    <td width="60%" align="left" valign="middle"><input type="text" name="where" value="<?=$c2["a_consumer_where"]?>" /></td>
  </tr>
  <tr>
    <td width="40%" align="center" valign="middle">電話</td>
    <td width="60%" align="left" valign="middle"><input type="text" name="phone" value="<?=$c2["a_consumer_phone"]?>" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><input type="submit" value="編輯"/><input type="reset" value="重置"/><input type="button" value="取消" onclick="alert('毫無反應 就只是個取消')" /></td>
  </tr>
</table>
</form>