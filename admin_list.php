<?php 

    $admin_list["admin"] = "a_admin.php";
    $admin_list["admin_add"] = "a_admin_add.php";
    $admin_list["admin_fix"] = "a_admin_fix.php";


    if(empty($_GET["redo"])){
	$_GET["redo"] = "admin" ;
    }
    $redo = $_GET["redo"];
?>