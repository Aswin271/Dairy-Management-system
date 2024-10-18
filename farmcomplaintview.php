<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
$k=$obj->farmcomplaintview();
$smartyObj->assign("data",$k);
$smartyObj->display('farmsubheader.tpl');
$smartyObj->display('farmcomplaintview.tpl');
$smartyObj->display('footer.tpl');
?> 