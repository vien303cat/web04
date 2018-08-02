<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039) -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<?php include_once("head.php"); ?>

<title>┌精品電子商務網站」</title>
<link href="./home_files/css.css" rel="stylesheet" type="text/css">
<script src="./home_files/js.js"></script>
</head>

<body>
<iframe name="back" style="display:none;"></iframe>
	<div id="main">
    	<div id="top">
                    <div style="width:580px;float:left;">
        	<a href="?">
            	<img src="./home_files/0416.jpg"  width="590">
            </a>
        </div>
        <div style="padding:10px;width:413px;float:right">
                <a href="?">回首頁</a> |
                <a href="?do=news">最新消息</a> |
                <a href="?do=look">購物流程</a> |
                <a href="?do=comebuy">購物車</a> |
<?php if(!empty($_SESSION["consumer"])){  echo "歡迎光臨，".$_SESSION["consumer"]; }else{?><a href="?do=consumer">會員登入</a> <?php } ?> |
                <a href="?do=admin">管理登入</a>
           </div>
        </div>
           <div style="width:100%;">
                <marquee>    &nbsp;</marquee></div>

        <div id="left" class="ct" style="overflow:auto;">
        	<div style="min-height:400px;">
                <?php include_once("indexleft.php"); ?>
        	            </div>
                        <span>
            	<div>進站總人數</div>
                <div style="color:#f00; font-size:28px;">
                	00495                </div>
            </span>
                    </div>
        <div id="right">
        <div style="width:100%;">
                <marquee>情人節特惠活動 &nbsp; 年終特賣會開跑了~</marquee></div>
        <?php include_once($web_list[$do]) ; ?>
        	        </div>
        <div id="bottom" style="line-height:70px;background:url(icon/bot.png); color:#FFF;" class="ct">
        <?php include_once("footer.php"); ?>       </div>
    </div>

</body></html>