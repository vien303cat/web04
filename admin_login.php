<?php

if(!empty($_POST["acc"]) && !empty($_POST["pw"])){
    if($_POST["ber"] == $_SESSION["a3"]){
        $sql = "select * from a_member where a_member_acc = '".$_POST["acc"]."' and a_member_pw = '".$_POST["pw"]."' ;";
        $c1 = mysqli_query($link,$sql);
        $row = mysqli_num_rows($c1);
        if($row == 1){
            $_SESSION["user"] = $_POST["acc"];
            echo "<script>document.location.href='admin.php?do=admin'</script>";
        }else{
            echo "<script>alert('帳號密碼有誤');</script>";
        }
    }else{
        echo "<script>alert('對不起，您輸入的驗證碼有誤，請您重新登入');</script>";
    }
}
$n1 = rand(1,99);
$n2 = rand(1,99);
$a3 = $n1 + $n2 ;
$_SESSION["a3"] = $a3 ;
?>

<form method="POST">
<table class="all" width="80%" border="0" align="center" cellpadding="2" cellspacing="0">
<tr>
    <td width="50%" align="center" valign="middle">帳號</td>
    <td width="50%" align="left" valign="middle"><input type="text" name="acc"/></td>
  </tr>
  <tr>
    <td width="50%" align="center" valign="middle">密碼</td>
    <td width="50%" align="left" valign="middle"><input type="password" name="pw"/></td>
  </tr>
  <tr>
    <td width="50%" align="center" valign="middle">驗證碼</td>
    <td width="50%" align="left" valign="middle"><span id="ya2">
    <?=$n1?>+<?=$n2?>= <input type="text" name="ber" id="ber" onchange="math()"/>
    </span></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle">
    <span id="ya"><input type="button" value="返回" onclick="document.location.href='index.php'" /><input type="submit" value="確認"></span>
    </td>
  </tr>
</table>
</form>

<script>
/* // 老師用的JS方法控制<SPAN>
document.getElementById("ya").style= "display:none";
function math(){
    var ans = document.getElementById("ber").value;
    if(ans == <?=$a3?>){
        document.getElementById("ya2").style="display:none";
        document.getElementById("ya").style= "display:block";
    }else{
        alert("錯啦87");}
}
*/
</script>