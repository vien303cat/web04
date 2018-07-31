<?php
$sql = "select * from item_1";
$c1 = mysqli_query($link,$sql);
$c2 = mysqli_fetch_assoc($c1);

if(!empty($_POST["name"])){
    $ee = explode(".",$_FILES["itempho"]["name"])[1];
    $time = strtotime("+6hour");

    $select1 = $_POST["select1"];
    $select2 = $_POST["select2"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $type = $_POST["type"];
    $photo = $time.".".$ee;
    $howmuch = $_POST["howmuch"];
    $introduce = $_POST["introduce"];

    $sql = "insert into item_3 value(NULL,'$name','$price','$type','$howmuch','$photo','$introduce','$select1','$select2','1');";
    echo $sql ;
    mysqli_query($link,$sql);
    copy($_FILES["itempho"]["tmp_name"],"img/".$photo);
    echo "<script>document.location.href='admin.php?do=admin&redo=th_item'</script>" ;
}


?>

<form method="post" action="" enctype="multipart/form-data">
<table width="80%" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td colspan="2" align="center" valign="middle"><span style="font-size:36px;">新增商品</span></td>
  </tr>
  <tr>
    <td width="30%" align="center" valign="middle" bgcolor="#FF9900">所屬大類</td>
    <td width="70%" align="left" valign="middle" bgcolor="#FFCC00">
    <select name="select1" id="select1" onchange="read_big_type()" >
        <option >請選擇一項</option>
        <?php do{ ?>
        <option value="<?=$c2['item_1_seq']?>"><?=$c2["item_1_txt"]?></option>
    <?php }while($c2 = mysqli_fetch_assoc($c1)); ?>
    </select>
    </td>
  </tr>
  <tr>
    <td width="30%" align="center" valign="middle" bgcolor="#FF9900">所屬中類</td>
    <td width="70%" align="left" valign="middle" bgcolor="#FFCC00">
<div id = "select2"></div>
    </td>
  </tr>
  <tr>
    <td width="30%" align="center" valign="middle" bgcolor="#FF9900">商品編號</td>
    <td width="70%" align="left" valign="middle" bgcolor="#FFCC00">完成後自動分配</td>
  </tr>
  <tr>
    <td width="30%" align="center" valign="middle" bgcolor="#FF9900">商品名稱</td>
    <td width="70%" align="left" valign="middle" bgcolor="#FFCC00"><input type="text" name="name"/></td>
  </tr>
  <tr>
    <td width="30%" align="center" valign="middle" bgcolor="#FF9900">商品價格</td>
    <td width="70%" align="left" valign="middle" bgcolor="#FFCC00"><input type="text" name="price"/></td>
  </tr>
  <tr>
    <td width="30%" align="center" valign="middle" bgcolor="#FF9900">規格</td>
    <td width="70%" align="left" valign="middle" bgcolor="#FFCC00"><input type="text" name="type"/></td>
  </tr>
  <tr>
    <td width="30%" align="center" valign="middle" bgcolor="#FF9900">庫存量</td>
    <td width="70%" align="left" valign="middle" bgcolor="#FFCC00"><input type="text" name="howmuch"/></td>
  </tr>
  <tr>
    <td width="30%" align="center" valign="middle" bgcolor="#FF9900">商品圖片</td>
    <td width="70%" align="left" valign="middle" bgcolor="#FFCC00"><input type="file" name="itempho"/></td>
  </tr>
  <tr>
    <td width="30%" align="center" valign="middle" bgcolor="#FF9900">商品介紹</td>
    <td width="70%" align="left" valign="middle" bgcolor="#FFCC00"><textarea name="introduce"  cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><input type="submit" value="新增">|<input type="reset" value="重置">|<input type="button" value="返回"></td>
  </tr>
</table>
</form>

<script>
function read_big_type(){
    var tt = document.getElementById("select1").value;
    $.post("add_item_api.php",{tt},function(mid){
        document.getElementById("select2").innerHTML = mid ;
    });

}

</script>