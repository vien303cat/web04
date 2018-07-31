<?php 

    //後台頁面

    $admin_list["admin"] = "a_admin.php";
    $admin_list["admin_add"] = "a_admin_add.php";
    $admin_list["admin_fix"] = "a_admin_fix.php";
    $admin_list["consumer"] = "a_consumer.php";
    $admin_list["consumer_fix"] = "a_consumer_fix.php";
    $admin_list["bot"] = "bot.php";
    $admin_list["th"] = "th.php";
    $admin_list["th_item"] = "th_item.php";
    $admin_list["add_item"] = "add_item.php";
    $admin_list["update_item"] = "update_item.php";

    // 前台頁面

    $web_list["admin"]="admin_login.php";
    $web_list["consumer"]="consumer_login.php";
    $web_list["consumer_add"]="consumer_add.php";
    $web_list["news"]="news.php";
    $web_list["news1"]="news1.php";
    $web_list["news2"]="news2.php";
    $web_list["look"]="look.php";
    ////////
    if(empty($_GET["redo"])){
	$_GET["redo"] = "admin" ;
    }
    $redo = $_GET["redo"];

    if(empty($_GET["do"])){
        $_GET["do"] = "consumer" ;
        }
    $do = $_GET["do"];
?>