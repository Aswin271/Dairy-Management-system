<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
$k=$obj->farmviewproduct();
$smartyObj->assign("data",$k);
$smartyObj->display('subheader.tpl');
$smartyObj->display('farmviewproduct.tpl');
$smartyObj->display('footer.tpl');
?>