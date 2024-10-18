<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
$k=$obj->adminfarmview();
$smartyObj->assign("data",$k);
$smartyObj->display('adminfarmview.tpl');
?>