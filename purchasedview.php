<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
$k=$obj->purchasedview();
$smartyObj->assign("data",$k);
$smartyObj->display('subheader.tpl');
$smartyObj->display('purchasedview.tpl');
$smartyObj->display('footer.tpl');
?>