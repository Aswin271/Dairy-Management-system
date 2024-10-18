<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
$k=$obj->jobvacancyfarmview();
$smartyObj->assign("data",$k);
$smartyObj->display('farmsubheader.tpl');
$smartyObj->display('jobfarmview.tpl');
$smartyObj->display('footer.tpl');
?>