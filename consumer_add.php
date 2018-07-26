<?php

$now = strtotime("+6hour");
$time = date("Y/m/d",$now);
$n1 = rand(1,99);
$n2 = rand(1,99);
$n3 = $n1 + $n2 ;  

if(!empty($_POST["math"]) && $_POST["math"] == $_POST["n3"]){
    if($_POST["acc"] != "admin" ){
        $sql = "select * from a_consumer where a_consumer_acc = '".$_POST["acc"]."'";
        $c1 = mysqli_query($link,$sql);
        $row = mysqli_num_rows($c1);
        if($row == 1){
            echo "<script>alert('此帳號已被使用!!');</script>"; 
        }else{
            $sql = "insert into a_consumer value(NULL,'".$_POST["name"]."','".$_POST["acc"]."','".$_POST["pw"]."','".$_POST["phone"]."','".$_POST["where"]."','".$_POST["mail"]."','$time') ;";
            mysqli_query($link,$sql);
            echo "<script>document.location.href='index.php?do=consumer'</script>";
        }
    }else{
        echo "<script>alert('帳號不能使用admin，請您重新輸入');</script>"; 
    }
}elseif(!empty($_POST["math"]) && $_POST["math"] != $_POST["n3"]) {
    echo "<script>alert('對不起，您輸入的驗證碼有誤，請您重新輸入');</script>";
}
?>

<script src="jquery-1.8.3.min.js"></script>
<script>
    function check_acc(){
        var myid = document.getElementById("acc").value;
        if(myid != "admin"){
        $.post("checkid_api.php",{myid},function(oo){ 
            if(oo == 1 ){
                alert("此帳號已被使用");
            }else{ alert("此帳號可以使用"); }
         });
        }else{
            alert("不得使用ADMIN作為帳號註冊");
        }
    }
</script>

<form method="POST">
<table class="" width="80%" border="1" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td colspan="2" align="center" valign="middle">會員註冊</td>
  </tr>
  <tr>
    <td width="40%" align="center" valign="middle">姓名</td>
    <td width="60%" align="left" valign="middle"><input type="text" name="name"/></td>
  </tr>
  <tr>
    <td width="40%" align="center" valign="middle">帳號</td>
    <td width="60%" align="left" valign="middle"><input type="text" name="acc" id="acc"/> <input type="button" value="檢測帳號" onclick="check_acc()"></td>
  </tr>
  <tr>
    <td width="40%" align="center" valign="middle">密碼</td>
    <td width="60%" align="left" valign="middle"><input type="text" name="pw"/></td>
  </tr>
  <tr>
    <td width="40%" align="center" valign="middle">電話</td>
    <td width="60%" align="left" valign="middle"><input type="text" name="phone"/></td>
  </tr>
  <tr>
    <td width="40%" align="center" valign="middle">住址</td>
    <td width="60%" align="left" valign="middle"><input type="text" name="where"/></td>
  </tr>
  <tr>
    <td width="40%" align="center" valign="middle">電子信箱</td>
    <td width="60%" align="left" valign="middle"><input type="text" name="mail"/></td>
  </tr>
  <tr>
    <td width="40%" align="center" valign="middle">驗證碼</td>
    <td width="60%" align="left" valign="middle"><?=$n1?>+<?=$n2?>=<input type="text" name="math"/></td>
    <input type ="hidden" name="n3" value="<?=$n3?>"/>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><input type="submit" value="註冊"><input type="reset" value="重置"></td>
  </tr>
</table>
</form>