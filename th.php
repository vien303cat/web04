<?php
if(!empty($_POST["my_i1"])){
    $sql = "insert into item_1 value(null,'".$_POST["my_i1"]."')";
    mysqli_query($link,$sql);
    echo "<script>document.location.href='admin.php?do=admin&redo=th'</script>";
}

if(!empty($_POST["my_i2"])){
    $sql = "insert into item_2 value(null,'".$_POST["my_i2"]."','".$_POST["select"]."')";
    mysqli_query($link,$sql);
    echo "<script>document.location.href='admin.php?do=admin&redo=th'</script>";
}
$sql = "select * from item_1";
$c1 = mysqli_query($link,$sql);
$c2 = mysqli_fetch_assoc($c1);
?>

<table width="80%" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td colspan="2" align="center" valign="middle">商品分類 <a href ='admin.php?do=admin&redo=th_item'>商品管理</a></td>

  </tr>

<form method="post">
  <tr>
    <td colspan="2" align="center" valign="middle">新增大類<input type="text" name="my_i1"><input type="submit" value="新增"></td>
  </tr>
</form>

<form method="post">
  <tr>
    <td colspan="2" align="center" valign="middle">新增中類
    <select name="select" >
    <?php do{ ?>
        <option value="<?=$c2['item_1_seq']?>"><?=$c2["item_1_txt"]?></option>
    <?php }while($c2 = mysqli_fetch_assoc($c1)); ?>
    </select>
    <input type="text" name="my_i2"><input type="submit" value="新增"></td>
  </tr>
</form>

<?php 
$sql = "select * from item_1" ;
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);
do{ ?>
  <tr>
    <td align="left" valign="middle" bgcolor="#F00"><?=$c2["item_1_txt"]?></td>
    <td align="center" valign="middle" bgcolor="#F00"><input type="submit" value="修改"
    onclick="update_item('<?=$c2["item_1_seq"]?>','1','<?=$c2["item_1_txt"]?>')" >
    <input type="button" value="刪除"  onclick="document.location.href='del_api.php?del=item_1&seq=<?=$c2["item_1_seq"]?>'" ></td>
  </tr>
      <?php 
    $sqll = "select * from item_2 where item_2_i1 = '".$c2["item_1_seq"]."';" ;
    $cc1  = mysqli_query($link,$sqll);
    $cc2  = mysqli_fetch_assoc($cc1);
    do{ ?>
  <tr>
    <td align="center" valign="middle" bgcolor="#FF0"><?=$cc2["item_2_txt"]?></td>
    <td align="center" valign="middle" bgcolor="#FF0"><input type="submit" value="修改" onclick="update_item('<?=$cc2["item_2_seq"]?>','2','<?=$cc2["item_2_txt"]?>')">
    <input type="button" value="刪除" onclick="document.location.href='del_api.php?del=item_2&seq=<?=$cc2["item_2_seq"]?>'" ></td>
  </tr>
    <?php }while($cc2  = mysqli_fetch_assoc($cc1)); ?>
    <?php    }while($c2   = mysqli_fetch_assoc($c1)); ?>

</table>


<script>
    function update_item(iseq,itable,itxt){
        if(itable == 1 ){
            itable = "item_1"; tw ="修改大類內容";
        }else if(itable == 2){
            itable = "item_2"; tw ="修改中類內容";
        }
        
        if(itxt = prompt(tw,itxt)){
            $.post("update_item_api.php",{iseq,itable,itxt},function(){document.location.href='admin.php?do=admin&redo=th'})
        }
    }
</script>
