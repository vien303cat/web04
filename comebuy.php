<?php
include_once("head.php") ;

if(empty($_SESSION["consumer"])){
    echo "<script>document.location.href='index.php?do=consumer';</script>" ;
}else{
    if(!empty($_POST["howmuch"])){
        $sql = "insert into buycar value(NULL,'".$_SESSION["consumer"]."','".$_POST["seq"]."','".$_POST["howmuch"]."')";
        mysqli_query($link,$sql);
    }

    $sql = "select * from buycar,item_3 where buycar_acc = '".$_SESSION["consumer"]."' and buycar_i3seq = item_3_seq ";
    $c1 = mysqli_query($link,$sql);
    $c2 = mysqli_fetch_assoc($c1);
    $row = mysqli_num_rows($c1);
}

?>
    <?php
    if($row == 0){
        echo "目前購物車是空的";
    }else{
    ?>
    <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td colspan="7" align="center" valign="middle"><span style="font-size:24px;"><?=$_SESSION["consumer"]?>的購物車</span></td>
  </tr>
  
  <tr>
    <td align="center" valign="middle" bgcolor="#FF9900">編號</td>
    <td align="center" valign="middle" bgcolor="#FF9900">商品名稱</td>
    <td align="center" valign="middle" bgcolor="#FF9900">數量</td>
    <td align="center" valign="middle" bgcolor="#FF9900">庫存量</td>
    <td align="center" valign="middle" bgcolor="#FF9900">單價</td>
    <td align="center" valign="middle" bgcolor="#FF9900">小計</td>
    <td align="center" valign="middle" bgcolor="#FF9900">刪除</td>
  </tr>
<?php do{ 
    $x= $c2["item_3_price"] * $c2["buycar_howmuch"] ?>
  <tr>
    <td align="center" valign="middle" bgcolor="#FFCC66"><?=$c2["buycar_i3seq"]?></td>
    <td align="center" valign="middle" bgcolor="#FFCC66"><?=$c2["item_3_name"]?></td>
    <td align="center" valign="middle" bgcolor="#FFCC66"><?=$c2["buycar_howmuch"]?></td>
    <td align="center" valign="middle" bgcolor="#FFCC66"><?=$c2["item_3_howmuch"]?></td>
    <td align="center" valign="middle" bgcolor="#FFCC66"><?=$c2["item_3_price"]?></td>
    <td align="center" valign="middle" bgcolor="#FFCC66"><?=$x?></td>
    <td align="center" valign="middle" bgcolor="#FFCC66"><a href='buycar_del_api.php?seq=<?=$c2["buycar_seq"]?>'>刪除</a></td>
  </tr>
  <?php }while($c2 = mysqli_fetch_assoc($c1)) ?>
  <tr>
    <td colspan="7" align="center" valign="middle">
        <a href='index.php?do=all'><img src="img/0411.jpg"></a>
        <a href='index.php?do=finalbuy'><img src="img/0412.jpg"></a>
    </td>
  </tr>
  <?php  } ?>
</table>