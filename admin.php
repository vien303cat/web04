<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0057)?do=admin -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<?php 
include_once("head.php"); 
if(!empty($_SESSION["user"])){
	$id = $_SESSION["user"] ;
	$sql = "select * from a_member where a_member_acc = '$id';";
	$c1  = mysqli_query($link,$sql);
	$c2  = mysqli_fetch_assoc($c1);


}else{?><script>document.location.href='index.php';</script><?php }
?>

<title>┌精品電子商務網站」</title>
<link href="./Manage Page_files/css.css" rel="stylesheet" type="text/css">
<script src="./Manage Page_files/js.js"></script>
<script src="./js/jquery-1.8.3.min.js"></script>
</head>

<body>
<iframe name="back" style="display:none;"></iframe>
	<div id="main">
    	<div id="top">
        	<a href="?">
            	<img src="./Manage Page_files/0416.jpg">
            </a>
                            <img src="./Manage Page_files/0417.jpg">
                   </div>
        <div id="left" class="ct">
        	<div style="min-height:400px;">
        	            		<?php if($id == "admin"){ ?> <a href="?do=admin&redo=admin">管理權限設置</a> <?php } ?>  
            	            	<?php if($c2["a_member_1"] == 1){ ?><a href="?do=admin&redo=th">商品分類與管理</a> <?php } ?>  
            	            	<?php if($c2["a_member_2"] == 1){ ?><a href="?do=admin&redo=order">訂單管理</a> <?php } ?>  
            	            	<?php if($c2["a_member_3"] == 1){ ?><a href="?do=admin&redo=consumer">會員管理</a> <?php } ?>  
            	            	<?php if($c2["a_member_4"] == 1){ ?><a href="?do=admin&redo=bot">頁尾版權區</a> <?php } ?>  
            	            	<?php if($c2["a_member_5"] == 1){ ?><a href="#">最新消息管理</a> <?php } ?>  
            	        		<a href="?do=admin&redo=logout" style="color:#f00;" >登出</a>
                    </div>
                    </div>
        <div id="right">
			<?php include_once($admin_list[$redo]); ?>
        	        </div>
        <div id="bottom" style="line-height:70px; color:#FFF; background:url(icon/bot.png);" class="ct">
        <?php include_once("footer.php"); ?> </div>
    </div>

</body></html>