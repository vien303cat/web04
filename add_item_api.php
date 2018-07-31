<?php
    include_once("head.php");
    $sql = "select * from item_2 where item_2_i1 = '".$_POST["tt"]."';" ;
    $c1  = mysqli_query($link,$sql);
    $c2  = mysqli_fetch_assoc($c1);


?>
    <select name="select2"  >
        <option >請先選擇大類</option>
        <?php do{ ?>
        <option value="<?=$c2['item_2_seq']?>"><?=$c2["item_2_txt"]?></option>
    <?php }while($c2 = mysqli_fetch_assoc($c1)); ?>
    </select>
